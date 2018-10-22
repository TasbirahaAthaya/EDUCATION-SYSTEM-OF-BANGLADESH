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
 $user = $_POST['s'];
 //echo $user;
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
  
 /*$query1 = "INSERT INTO EMPLOYEE(EMP_ID,EMP_NAME,EMP_RANK,EMP_GENDER,EMP_CONTACT,EMP_EMAIL,EMP_GRAD,EMP_POST_GRAD,EMP_CITY,
 EMP_STREET,INS_NAME,EMP_ENROLMENT,EMP_DOB) VALUES
 (emp_sequence.nextval,'$name','$rank','$gender','$contact','$email','$grad','$postgrad','$city','$street','$institute',
 to_date('".$join."', 'dd-mon-yy'),to_date('".$birth."', 'dd-mon-yy')) ";
 EMP_DOB=to_date('".$birth."', 'dd-mon-yy') */

   $insert = oci_parse($conn,$query1);
   
    oci_execute($insert);
	
$array = oci_parse($conn, "SELECT e.emp_name as Name,e.emp_rank as Rank ,e.emp_gender as Gender, e.emp_contact as Contact,e.emp_email as Email,
e.ins_name as Institution_Name,e.emp_qualification.emp_ssc as SSC,e.emp_qualification.emp_hsc as HSC,e.emp_qualification.emp_graduate as GRAD,
e.emp_qualification.emp_postgraduate as Postgrad,e.emp_qualification.emp_phd as PhD,e.address.emp_houseno as house,e.address.emp_streetno as street,
e.address.emp_city as city from EMPLOYEE e WHERE e.EMP_USER_NAME='$user'");
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
 