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
 $username=$_POST['username'];
 $password=$_POST['password'];
 $role=$_POST['role'];
 
 if ($role= 'Faculty')
 {
 	echo "Faculty";
 }
 else if($role= 'Admin staff')
 {
 	echo "anhgj";
 }

else if ($role= 'Admission staff')
 {
 	echo "afc";
 }





	
        oci_close($conn);
        } else {
            echo "<tr> The search you enter is not in the database.";
        }
?>  