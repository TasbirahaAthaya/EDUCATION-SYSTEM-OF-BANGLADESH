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
 	
$SQL = oci_parse($conn,"SELECT INS_NAME,INS_CITY,INS_STREET,INS_SEAT,INS_CONTACT,
BOARD_RESULT,
 MIN_RESULT_SSC,
 MIN_RESULT_HSC
FROM INSTITUTION NATURAL JOIN COLLEGE 
WHERE COLLEGE_CATEGORY='Technical'");
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
		   //echo "sdvdg";
            echo "<tr>\n";
            foreach($row as $index=>$value)
            {
				//$link_address = 'accor.php?id='.$value.'';
				//echo "<td><a href='".$link_address."'>$value</a><td>";
                //echo "<td><a href="school.php">$value</a></td>\n";
				 echo "<td>$value</td>\n";
				
            }
			//echo  '<td><a href="hs_info.php?ins_name='.$row["INS_NAME"].'" class="btn btn-primary btn-lg border-radius">DEPT</a></td>'; 
			echo "</tr>\n";
			
       }
	   
	  
        oci_close($conn);
        } else {
            echo "<tr> The search you enter is not in the database.";
        }
?>  