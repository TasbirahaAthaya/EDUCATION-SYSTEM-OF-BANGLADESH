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


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
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

 $username=$_POST['username'];
 
 $Pass=$_POST['password'];
  
 ?>
 
<ul>
  <li><a class="active" href="addemployee.html">Add Employee</a></li>
  <li><a href="updateSalary.php">Update Salary of Employee</a></li>
  <li><a href="salaryfac.php?emp_id=<?php echo $username; ?>">Salary</a></li>
  <li><a href="#about">About</a></li>
</ul>




 
<section>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h3>ADMIN PROFILE</h3>



<form  method="post"  name="oracle"  action="oracle.php">

 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Fullname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="Fullname" placeholder="Enter full Name">
      </div>
    </div>



 <div class="form-group">
      <label class="control-label col-sm-2" >Rank</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="Rank" placeholder="Enter Rank">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Institute Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="Institute_Name" placeholder="Enter  Institute Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" placeholder="<?php echo htmlspecialchars($username); ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Gender:</label>
      <div class="col-sm-10">
        <input type="text"class="form-control" name="Gender" placeholder="Enter gender">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Contact no:</label>
      <div class="col-sm-10">
        <input type="text"class="form-control" name="Contact_no" placeholder="Enter contact no">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="Email" placeholder="Enter email">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" >SSC</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="ssc" placeholder="ssc">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" >Hsc</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="hsc" placeholder="hsc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >graduation</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="GRAD" placeholder="graduation">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" >post graduation </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="POSTGRAD" placeholder="post graduation">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" >Phd</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="phd" placeholder="phd">
      </div>
    </div>
 <div class="form-group">
      <label class="control-label col-sm-2" >house</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="house" placeholder="house">
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" >Street</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="Street" placeholder="Street">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" >City:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="City" placeholder="City">
		 <input type="hidden" name="s" value="<?php echo $username; ?>" />
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" >Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="Password" placeholder="<?php echo htmlspecialchars($Pass); ?>">
      </div>
    </div>

 

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">save</button>
      </div>
    </div>



</div>


</form>

</div>
</section>

</body>
</html>