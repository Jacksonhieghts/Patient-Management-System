<?php
error_reporting(1);//turning off error reporting
include("connect.php");
$sql="SELECT patient_id FROM patients_table where patient_id LIKE '%CCA%'";
$records=mysqli_query($db,$sql);


?>
<?php
SESSION_START();
?>

<!DOCTYPE html>
<html>
<?php 	$p_id = isset($_GET['id']) ? $_GET['id'] : '';?>
<?php 	$p_id = isset($_GET['id']) ? $_GET['id'] : '';?>


<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Emergency Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/stylem.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css2/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css2/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css2/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css2/icon-font.min.css" type='text/css' />
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   
    <script src="assets/js/jquery-3.2.1.js"></script>
<!--codes to run the script for constituencies and counties-->
          <script type='text/javascript'>
           function OnSelectionChange(county_id) {  
              var selectedOption = county_id.options[county_id.selectedIndex];
              document.getElementById('selectedcounty').value = selectedOption.value;z

           }
        </script>
        



<!--codes to run the script for constituencies and counties-->
<style type="text/css">
    h4{
        color:red;
    }
</style>
<!--styling up the heading of form-->

</head>

<body >
<!--end of heading section--> 
<div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg">
							
								<div class="header_top">
									<div class="top_right">
										<ul>
											<li><a href="contact.html">help</a></li>|
											<li><a href="contact.html">Contact</a></li>|
											<li><a href="session_logout.php">Log out</a></li>|
											<?php
        //Check to see if the user is logged in.if not redirect user to the loging page.
        
        if(isset($_SESSION['fname']))
        { 
        echo   "Logged on: ".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
        }else{
          echo "<script type='text/javascript'>
                    alert( 'You must Log in to use the system');
                    </script>";
                echo "<script>
                    window.location = 'index.php'
                  </script>";
		}
		


		if($_SESSION['position'] == 6 || $_SESSION['position'] == 5)
        { 
        
        }else{
          echo "<script type='text/javascript'>
                    alert( 'You must Log in as a Lab technician or Admin to view this page');
                    </script>";
                echo "<script>
                    window.location = 'homepage.php'
                  </script>";
        }
        ?>
											
										</ul>
									</div>
									<div class="top_left">
										<h2><span></span> Call us : 032 2352 782</h2>
										
									</div>
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				
										<!-- start header_right -->
								
								
								
								
								
							
  
  
<!--************************************************-->



    <!--/sidebar-menu-->
				<div class="sidebar-menu">
				
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
						   <ul id="menu" >
										<li><a href="homepage.php"><i class="fa fa-tachometer"></i> <span>Administration</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Manage Patient</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="patients.php">Register patient</a></li>
											<li id="menu-academico-avaliacoes" ><a href="vitals1.php">Vitals</a></li>
											<li id="menu-academico-boletim" ><a href="visits1.php">Visits</a></li>
											<li id="menu-academico-avaliacoes" ><a href="doctors_list.php">Diagnosis</a></li>
											 </ul>
										</li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Manage Staff</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="staff.php">Register Staff</a></li>
											
											 </ul>
										</li>
									<li><a href="lab1.php"><i class="lnr lnr-pencil"></i> <span>Laboratory</span></a></li>
									<li id="menu-academico" ><a href="pharmacy1.php"><i class="fa fa-file-text-o"></i> <span>Pharmacy</span></a></li>
									<li id="menu-academico" ><a href="billing1.php"><i class="lnr lnr-book"></i> <span>Billing</span></a></li>
									 
									<li><a href="reports.php"><i class="lnr lnr-chart-bars"></i> <span>Reports</span></a>
									<ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="reports.php">Visit Report</a></li>
											<li id="menu-academico-avaliacoes" ><a href="report_morbidity.php">Disease Rate Report</a></li>
											<li id="menu-academico-boletim" ><a href="report_doctors.php">Doctor Patient Report</a></li>
											<li id="menu-academico-avaliacoes" ><a href="report_area.php">Morbidity Per Area</a></li>
											 </ul>
										</li>
									  </ul>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>	
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript">

	

	</script>
<!-- /real-time -->

    </script>
		   <script src="js/menu_jquery.js"></script>
<!--end of heading section-->  
        <div>
        
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--**************************************************************************************************************************-->
                        
<!--**************ths is the success msg on saving the cord-->
                
  <!--*************************************************************************************************************************-->
<div class="grids">
					
					

								<h1> Medical Emergency Form</h1>
                                <?php 
                    

                    $sql ="SELECT  * from patients_table where patient_id = $p_id";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $fname = $row['firstname'];
                    $lname = $row['lastname'];}
                  
                        ?>

                        <div class="form-body">
    <div class="bg-agile">
	<div style ="height:1600px;"class="book-appointment">
	<h2>Lab Test Results</h2>
    <form action="" method="POST" enctype="multipart/form-data">
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>First Name</p>
						<input type="text" name="fname" id="fname" placeholder="<?php echo $fname ?>" readonly />
					</div>	
					<div class="gaps">
						<p>FBC WBC</p>
						<input type="text" name="fbc_wbc" id="hreferral" placeholder=""/>
					</div>
					<div class="gaps">
						<p>FBC Hb</p>
						<input type="text" name="fbc_hb" id="hreferral" placeholder=""/>
					</div>
					<div class="gaps">
						<p>FBC Hct</p>
						<input type="text" name="fbc_hct" id="hreferral" placeholder=""/>
					</div>
					<div class="gaps">
						<p>FBC MCV</p>
						<input type="text" name="fbc_mcv" id="hreferral" placeholder=""/>
					</div>	
					<div class="gaps">
						<p>FBC Plt</p>
						<input type="text" name="fbc_plt" id="hreferral" placeholder=""/>
					</div>
					
                        	
					<div class="gaps">
						<p>MPS</p>	
						<select class="form-control" name="mps" id="status">
							<option>NPS</option>
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
						</select>
					</div>
					<div class="gaps">
						<p>Malaria igM</p>	
						<select class="form-control" name="malaria_igm" id="status">
							<option>Negative</option>
							<option>positive</option>
						</select>
					</div>
					<div class="gaps">
						<p>HIV</p>	
						<select class="form-control" name="hiv" id="status">
							<option>NR</option>
							<option>R</option>
							</select>
					</div>
					<div class="gaps">
						<p>VDRL</p>	
						<select class="form-control" name="vdrl" id="status">
							<option>NR</option>
							<option>R</option>
							</select>
					</div>	
					<div class="gaps">
						<p>Pregnancy</p>	
						<select class="form-control" name="pregnancy" id="status">
							<option>Negative</option>
							<option>Positive</option>
							</select>
					</div>
					<div class="gaps">
						<p>Urinalysis Color</p>	
						<select class="form-control" name="uli_color" id="status">
							<option>yellow</option>
							<option>amber</option>
							<option>clear</option>
							<option>cloudy</option>
							</select>
					</div>
					<div class="gaps">
						<p>Urinalysis Protein</p>	
						<select class="form-control" name="uli_protein" id="status">
							<option>neg</option>
							<option>TR</option>
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
							</select>
					</div>
				</div>
				<div class="right-agileinfo same">
					<div class="gaps">
						<p>Last Name</p>
						<input type="text" name="lName" id="lname" placeholder="<?php echo $lname ?>" readonly />
					</div>
					
					
					<div class="gaps">
						<p>Urinalysis Glucose</p>	
						<select class="form-control" name="uli_glucose" id="status">
							<option>neg</option>
							
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
							</select>
					</div>
					
					
					<div class="gaps">
						<p>Urinalysis Nitrites</p>	
						<select class="form-control" name="uli_nitrites" id="status">
							<option>negative</option>
							<option>Positive</option>
							
							</select>
					</div>
					<div class="gaps">
						<p>Stool Color Consistency</p>
						<input type="text" name="stool_color" id="wbc" placeholder=""/>
					</div>
					<div class="gaps">
						<p>Stool Other</p>
						<input type="text" name="stool_other" id="rbc" placeholder=""/>
					</div>
					<div class="gaps">
						<p>WBC</p>
						<input type="text" name="wbc" id="wbc" placeholder=""/>
					</div>
					<div class="gaps">
						<p>RBC</p>
						<input type="text" name="rbc" id="rbc" placeholder=""/>
					</div>
					<div class="gaps">
						<p>SH</p>	
						<select class="form-control" name="sh" id="status">
							<option>not seen</option>
							
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
							</select>
					</div>
					<div class="gaps">
						<p>Epi</p>	
						<select class="form-control" name="epi" id="status">
						<option></option>
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
							</select>
					</div>
					<div class="gaps">
						<p>PH</p>	
						<select class="form-control" name="ph" id="status">
							
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							</select>
					</div>
					<div class="gaps">
						<p>Leuk</p>	
						<select class="form-control" name="leuk" id="status">
						<option>neg</option>
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
							</select>
					</div>
					<div class="gaps">
						<p>Blood</p>	
						<select class="form-control" name="blood" id="status">
						<option>neg</option>
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
							</select>
					</div>
					<div class="gaps">
						<p>Ketones</p>	
						<select class="form-control" name="ketones" id="status">
						<option>neg</option>
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
							</select>
					</div>
					<div class="gaps">
						<p>Bilirubin</p>	
						<select class="form-control" name="bilirubin2" id="status">
						<option>neg</option>
							<option>+</option>
							<option>++</option>
							<option>+++</option>
							<option>++++</option>
							</select>
					</div>
				</div>
				
				<input type="submit" name="register" value="Save Record" class="btn btn-success">
			</form>
		</div>
   </div>

</div>
</div>
</div>

   <?php
   // mysql_select_db('sms2',mysqli_connect('localhost','root',''))or die(mysql_error());
    if (isset($_POST['register'])){

  
        $fbc_wbc=addslashes($_POST['fbc_wbc']);
        $fbc_hb =addslashes($_POST['fbc_hb']);
        $p_id = isset($_GET['id']) ? $_GET['id'] : '';
        $fbc_hct=addslashes($_POST['fbc_hct']);
        $fbc_mcv=addslashes($_POST['fbc_mcv']);
        $fbc_plt=addslashes($_POST['fbc_plt']);
        $mps=addslashes($_POST['mps']);
		$hiv=addslashes($_POST['hiv']);
		$vdrl=addslashes($_POST['vdrl']);
        $pregnancy =addslashes($_POST['pregnancy']);
        $uli_color=addslashes($_POST['uli_color']);
        $uli_protein=addslashes($_POST['uli_protein']);
        $uli_glucose=addslashes($_POST['uli_glucose']);
        $uli_nitrites=addslashes($_POST['uli_nitrites']);
        $stool_color =addslashes($_POST['stool_color']);
		$stool_other=addslashes($_POST['stool_other']);
		$malaria_igm=addslashes($_POST['malaria_igm']);
		$sh=addslashes($_POST['sh']);
		$epi=addslashes($_POST['epi']);
		$ph=addslashes($_POST['ph']);
		$wbc=addslashes($_POST['wbc']);
        $rbc=addslashes($_POST['rbc']);
        $leuk=addslashes($_POST['leuk']);
        $blood=addslashes($_POST['blood']);
		$ketones=addslashes($_POST['ketones']);
		$bilirubin2=addslashes($_POST['bilirubin2']);
		$tdate=date("Y-m-d"); 
        $doc= $_SESSION['staff_id'];       

    //<!--**************************************************************>
                        
    
     mysqli_query($db,"INSERT INTO lab_test (patient_id, tdate, doc, fbc_wbc, fbc_hb, fbc_hct, fbc_mcv, fbc_plt, mps, hiv, vdrl, pregnancy, uli_color, uli_protein, uli_glucose, uli_nitrites, stool_color, stool_other, malaria_igm, wbc, rbc, sh, epi, ph, leuk, blood, ketones, bilirubin2) VALUES ('$p_id', '$tdate', '$doc', '$fbc_wbc', '$fbc_hb', '$fbc_hct', '$fbc_mcv', '$fbc_plt', '$mps', '$hiv', '$vdrl', '$pregnancy', '$uli_color', '$uli_protein', '$uli_glucose', '$uli_nitrites', '$stool_color', '$stool_other', '$malaria_igm', '$wbc', '$rbc', '$sh', '$epi', '$ph', '$leuk', '$blood', '$ketones', '$bilirubin2')") or die(mysqli_error($db));
   
     ?>
                        
                        
     <script>

     alert('Succsessfully Saved');
    
     </script>
<?php
   
   
   
   
    }
?>

   
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2017. Medical Emergency Form . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
</body>

</html>