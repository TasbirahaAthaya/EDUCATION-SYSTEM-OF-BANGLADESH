<?php
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))"; 
 $conn=oci_connect('EducationFinal', '123',$db);
 if(!$conn)
 {
 $e=oci_error();
 trigger_error(htmlentities($e['messege'],ENT_QUOTES), E_USER_ERROR);
 }

 ?> 
  <form action="var_faculty_info.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            <form>



                <?php

if(isset($_POST['search']))
{
    
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
   
    $query = "SELECT INS_NAME FROM INSTITUTION NATURAL JOIN UNIVERSITY 
WHERE UNI_TYPE='Varsity' or UNI_TYPE='Engineering' and INS_NAME like '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    
    $query ="SELECT INS_NAME FROM INSTITUTION NATURAL JOIN UNIVERSITY 
WHERE UNI_TYPE='Varsity' or UNI_TYPE='Engineering'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))"; 
 $conn=oci_connect('EducationFinal', '123',$db);
     
    //$connect = mysqli_connect("localhost", "root", "", "test_db");
    $filter_Result = oci_parse($conn, $query);
    return $filter_Result;
}


/*$SQL = oci_parse($conn,"SELECT INS_NAME FROM INSTITUTION NATURAL JOIN UNIVERSITY 
WHERE INS_PRI_PUB='Public' and UNI_TYPE='Engineering'");*/
oci_execute($search_result);


$results = array();
$numRows = oci_fetch_all($search_result, $results ,null, null, OCI_FETCHSTATEMENT_BY_ROW);

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
				$link_address = 'var_faculty_info1.php?id='.$value.'';
				echo "<td><a href='".$link_address."'>$value</a><td>";
                //echo "<td><a href="school.php">$value</a></td>\n";
				//echo "<td>$value</td>\n";
            }
           // echo  '<td><a href="uni_info.php?ins_name='.$row["INS_NAME"].'" class="btn btn-primary btn-lg border-radius">DEPT</a></td>'; 
            echo "</tr>\n";
       }

        oci_close($conn);
        } else {
            echo "<tr> The search you enter is not in the database.";
        }
?>  