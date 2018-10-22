<?php
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))"; 
 $conn=oci_connect('edu', '1234',$db);
 if(!$conn)
 {
 $e=oci_error();
 trigger_error(htmlentities($e['messege'],ENT_QUOTES), E_USER_ERROR);
 }

 ?> 
 <?php

 $username=$_POST['username'];
 $Pass=$_POST['password'];
  
 $query1 = "INSERT INTO EMPLOYEE(EMP_ID,EMP_USER_NAME,EMP_PASSWORD) VALUES
 (emp_sequence.nextval,'$username','$Pass') ";

   $insert = oci_parse($conn,$query1);
    oci_execute($insert);
	
$array = oci_parse($conn, "SELECT *FROM EMPLOYEE");
oci_execute($array);

print "<table border = '1'>\n";

while ($row = oci_fetch_array($array, OCI_ASSOC + OCI_RETURN_NULLS)) {
    print "<tr>\n";
    foreach ($row as $item) {
        print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    print "</tr>\n";
}
print "</table>\n";
 ?>
 