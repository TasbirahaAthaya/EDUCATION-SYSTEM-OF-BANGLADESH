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
 
 $emp_id = $_POST['p'];
 //echo $emp_id;
 
 $la=$_POST['browser'];
  
 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	
 if($la=="CRS_01")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";
}
 else if ($la=="CRS_02")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";}
	else if ($la=="CRS_03")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";}
	else if ($la=="CRS_04")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";}
	else if ($la=="CRS_05")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";}
	else if ($la=="CRS_06")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";}
	else if ($la=="CRS_07")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";}
	else if ($la=="CRS_08")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";}
	else if ($la=="CRS_09")
 {
	 $query1 = "INSERT INTO TEACHES(EMP_USER_NAME,CRS_ID) VALUES
 ('$emp_id','$la') ";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	echo $la; echo "Is added";}
	
?>  