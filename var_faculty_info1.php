<?php
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))"; 
 $conn=oci_connect('EducationFinal', '123',$db);
 if(!$conn)
 {
 $e=oci_error();
 trigger_error(htmlentities($e['messege'],ENT_QUOTES), E_USER_ERROR);
 }

 ?> 
 <?php
     $ins_name = $_GET['id'];
	echo "Faculty of ";
	echo $ins_name;
 	
$SQL = oci_parse($conn,"SELECT EMP_NAME, EMP_RANK, EMP_GENDER, EMP_CONTACT,e.emp_qualification.emp_ssc,
e.emp_qualification.emp_hsc,e.emp_qualification.emp_graduate
 ,e.emp_qualification.emp_postgraduate
  FROM EMPLOYEE e NATURAL JOIN INSTITUTION
WHERE INS_NAME='$ins_name'");
oci_execute($SQL);


$results = array();
$numRows = oci_fetch_all($SQL, $results, null, null, OCI_FETCHSTATEMENT_BY_ROW);

        if($numRows > 0){       
        echo "<p> <table border=1>\n";
            //Print the headings
            echo "<tr>\n";
                foreach($results[0] as $index=>$value)
                    echo "<th>$index</th>\n";
            echo "</tr>\n";
 
            echo "<tr>\n";
            foreach($results as $row)
       {
            echo "<tr>\n";
            foreach($row as $index=>$value)
            {
				
                echo "<td>$value</td>\n";
            }
            echo "</tr>\n";
       }

        oci_close($conn);
        } else {
            echo "<tr> The search you enter is not in the database.";
        }
?>  