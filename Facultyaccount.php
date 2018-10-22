<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Academic Education V2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
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
  
 ?>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <h1><a href="index.html">LOGIN</a></h1> 
      
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Educational Institute of Bangladesh</a></h1>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Department</a>
          <ul>
            <li><a href="#">EECE</a></li>
            <li><a href="#">CSE</a></li>
            <li><a href="#">ME</a></li>
            <li><a href="#">Civil</a></li>
            <li><a href="#">NAME</a></li>
            <li><a href="#">BME</a></li>
            <li><a href="#">PME</a></li>
            <li><a href="#">ARCHITECHTURE</a></li>
             <li><a href="#">IPE</a></li>
           
          </ul>

 <li><a class="drop" href="#">School</a>
          <ul>
            <li><a href="#">Primary</a></li>
            <li><a href="#">Secondary</a></li>
           
           
          </ul>


          <li><a class="drop" href="#">College</a>
          <ul>
            <li><a href="#">Higher Secondary College</a></li>
            <li><a href="#">Technical College</a></li>
            <li><a href="#">Medical College</a></li>
           
           
          </ul>



        </li>
        <li><a class="drop" href="#">University</a>
          <ul>
            <li><a class="drop" href="#">Public</a>
             <ul>
                <li><a href="#">Engineering</a></li>
                <li><a href="#">Others</a></li>
              </ul>
            </li>
            <li><a class="drop" href="#">Private</a>
              <ul>
                <li><a href="#">Engineering</a></li>
                <li><a href="#">Others</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Faculty</a></li>
        <li><a href="#">Eligibility Test For University</a></li>
      
       
    
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="sidebar one_third first"> 
        <!-- ################################################################################################ -->
        <h6>My Profile</h6>
        <nav class="sdb_holder">
          <ul>
             <li class="active"><a href="#">Account</a></li>
            <li><a href="#">Course Details</a></li>
            <li><a href="#">Add course</a> </li>
            <li><a href="#">Salary</a></li>
          </ul>
        </nav>
 <!--sidebar ends -->



 <div class="sdb_holder">
          <h6>My Salary</h6>
          <h3>50,000 tk<h3>
        
        </div>

 <form  method="post"  name="oracle"  action="fac_acc_update.php">

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
        <input type="text" class="form-control" name="Username" placeholder="<?php echo htmlspecialchars($username); ?>">
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
      <label class="control-label col-sm-2" >GRAD</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="GRAD" placeholder="GRADUATION">
      </div>
    </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >POSTGRAD</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="POSTGRAD" placeholder="POST GRADUATION">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" >City:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="City" placeholder="City">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" >Street</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="Street" placeholder="Street">
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


     




            <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - </p>
   
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>