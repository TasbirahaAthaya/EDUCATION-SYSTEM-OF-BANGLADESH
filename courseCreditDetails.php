<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from trendingtemplates.com/demos/trips/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Apr 2016 19:19:17 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eiob</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Default Styles -->
    <link href="style.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="rs-plugin/css/settings.css" rel="stylesheet">
<style>
table, th, td {
   
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
td{
    border-bottom:1px solid black;
}


body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

.col-sm-10{
  margin-bottom: 20px;
}

</style>
</head>



<body>



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

  $id = $_GET['emp_id'];
 ?>
 
<ul>
  <li><a class="active" href="totalCredit.php">total credit taken</a></li>
  <li><a href="remainingCredt.php">Remaining credit</a></li>
  
</ul>




<section>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h3>Credit details</h3>
  <form action="showCreditDetails.php" method="post">
          
           
            <input type="submit"  name="tc" value="totalCredit"><br><br>
            <input type="submit" name="rc" value="remainingCredit"><br><br>
            <input type="hidden" name="i" value="<?php echo $id; ?>" />
            
   

          </form>



</div>
</section>

</body>
</html>






