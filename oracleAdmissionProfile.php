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
 $name=$_POST['Fullname'];
 $rank=$_POST['Rank'];
 $institute=$_POST['Institute_Name'];
 $username=$_POST['Username'];
 $gender=$_POST['Gender'];
 $contact=$_POST['Contact_no'];
 $email=$_POST['Email'];
 $city=$_POST['City'];
 $street=$_POST['Street'];
 $Pass=$_POST['Password'];
 $grad=$_POST['GRAD'];
 $postgrad=$_POST['POSTGRAD'];
  
 $query1 = "UPDATE EMPLOYEE SET EMP_NAME='$name',EMP_RANK='$rank',EMP_PASSWORD='$Pass',EMP_GENDER='$gender',EMP_CONTACT='$contact',
 EMP_EMAIL='$email',EMP_GRAD='$grad',EMP_POST_GRAD='$postgrad',EMP_CITY='$city',EMP_STREET='$street',INS_NAME='$institute' WHERE EMP_USER_NAME='$username'";

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
 