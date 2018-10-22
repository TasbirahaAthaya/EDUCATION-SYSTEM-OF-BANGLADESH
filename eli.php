<?php
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))"; 
 $conn=oci_connect('Education', 'oracle123',$db);
 if(!$conn)
 {
 $e=oci_error();
 trigger_error(htmlentities($e['messege'],ENT_QUOTES), E_USER_ERROR);
 }

 ?> 
 <?php
 $dept=$_POST['dept_hsc'];
 $ins_name=$_POST['ins_name'];
 $hsc_gpa=$_POST['hsc_gpa'];
 $ssc_gpa=$_POST['ssc_gpa'];
 
	
$SQL = oci_parse($conn,"SELECT INS_NAME FROM INSTITUTION NATURAL JOIN UNIVERSITY 
WHERE PREREQUISITE_DEPT='$dept' and PREREQUISITE_HSC_GPA='$hsc_gpa'");
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