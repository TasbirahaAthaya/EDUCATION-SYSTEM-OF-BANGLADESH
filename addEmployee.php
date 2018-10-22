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

 $username=$_POST['username'];
 $Pass=$_POST['password'];
 $join=$_POST['join'];
 $rank=$_POST['rank'];
  
 $query1 = "INSERT INTO EMPLOYEE(EMP_ID,EMP_USER_NAME,EMP_PASSWORD,JOINING_DATE,emp_rank) VALUES
 (emp_seq.nextval,'$username','$Pass',to_date('".$join."', 'dd-mon-yy'),'$rank') ";

   $insert = oci_parse($conn,$query1);
    oci_execute($insert);
	
$array = oci_parse($conn, "SELECT e.emp_name as Name,e.emp_rank as Rank ,e.emp_password as Password,e.emp_user_name as User_name,e.emp_gender as Gender, e.emp_contact as Contact,e.emp_email as Email,
e.ins_name as Institution_Name,e.emp_qualification.emp_ssc as SSC,e.emp_qualification.emp_hsc as HSC,e.emp_qualification.emp_graduate as GRAD,
e.emp_qualification.emp_postgraduate as Postgrad,e.emp_qualification.emp_phd as PhD,e.address.emp_houseno as house,e.address.emp_streetno as street,
e.address.emp_city as city from EMPLOYEE e");
oci_execute($array);

$results = array();
$numRows = oci_fetch_all($array, $results, null, null, OCI_FETCHSTATEMENT_BY_ROW);

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
				//$link_address = 'uni_info.php?id='.$value.'';
				//echo "<td><a href='".$link_address."'>$value</a><td>";
                echo "<td>$value</td>\n";
            }
            echo "</tr>\n";
       }

        oci_close($conn);
        } else {
            echo "<tr> The search you enter is not in the database.";
        }
 ?>
 