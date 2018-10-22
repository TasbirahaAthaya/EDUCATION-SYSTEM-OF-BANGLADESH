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
 $name=$_POST['Fullname'];
 $rank=$_POST['Rank'];
 $institute=$_POST['Institute_Name'];
 $user = $_POST['n'];
 echo $user;
// $username=$_POST['username'];
 $gender=$_POST['Gender'];
 $contact=$_POST['Contact_no'];
 $email=$_POST['Email'];
 $City=$_POST['City'];
 $street=$_POST['Street'];
  $house=$_POST['house'];
   $hsc=$_POST['hsc'];
    $ssc=$_POST['ssc'];
	 $phd=$_POST['phd'];
 $Pass=$_POST['Password'];
 $grad=$_POST['GRAD'];
 $postgrad=$_POST['POSTGRAD'];
 
 $query1="UPDATE EMPLOYEE e SET EMP_NAME='$name',EMP_RANK='$rank',EMP_PASSWORD='$Pass',EMP_GENDER='$gender',EMP_CONTACT='$contact',
 EMP_EMAIL='$email',INS_NAME='$institute',e.emp_qualification.emp_ssc='$ssc',e.emp_qualification.emp_hsc='$hsc',e.emp_qualification.emp_graduate='$grad'
 ,e.emp_qualification.emp_postgraduate='$postgrad',e.emp_qualification.emp_Phd='$phd',
 e.address.emp_houseno='$house',e.address.emp_streetno='$street',e.address.emp_city='$City'
 WHERE e.EMP_USER_NAME='$user'";

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	
$array = oci_parse($conn, "SELECT e.emp_name as Name,e.emp_rank as Rank ,e.emp_gender as Gender, e.emp_contact as Contact,e.emp_email as Email,
e.ins_name as Institution_Name,e.emp_qualification.emp_ssc as SSC,e.emp_qualification.emp_hsc as HSC,e.emp_qualification.emp_graduate as GRAD,
e.emp_qualification.emp_postgraduate as Postgrad,e.emp_qualification.emp_phd as PhD,e.address.emp_houseno as house,e.address.emp_streetno as street,
e.address.emp_city as city from EMPLOYEE e WHERE e.EMP_USER_NAME='$user'");
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
 