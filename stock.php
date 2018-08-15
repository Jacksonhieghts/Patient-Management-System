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
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });



   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school management system</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
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
											<li><a href="session_logout.php">Logout</a></li>|
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
					
					

								<h1>Stock Taking</h1>
                              

                        <div class="form-body">
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Stock Taking</h2>
    <form action="" method="POST" enctype="multipart/form-data">
				<div class="left-agileits-w3layouts same">
					
					<div class="gaps">
						<p>Select item</p>	
							<select class="form-control" name="medicine" id="symptom1">
                            <?php                                                
                                                $sql3="SELECT item_name FROM item";
                                                $records3=mysqli_query($db,$sql3);                                              

                                                    while($users3=mysqli_fetch_array($records3,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users3['item_name']."</option>";
                                                        }
                                                ?></select>
					</div>
					<div class="gaps">
						<p>Cost</p>
						<input type="text" name="cost" id="cost" placeholder=""/>
					</div>
                      
					
				</div>
				<div class="right-agileinfo same">
					
					<div class="gaps">
						<p>Quantity</p>
						<input type="text" name="quantity" id="quantity" placeholder=""/>
					</div>
					
						
					<div class="gaps">
						<p>Expiary Date</p>		
						<input  id="datepicker1" name="expiary" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
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
   // mysql_select_db('Visualisations2',mysqli_connect('localhost','root',''))or die(mysql_error());
    if (isset($_POST['register'])){

		$xx=$_POST['medicine'];
        $sql="SELECT * FROM item WHERE item_name='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $item_id = $row['id'];}

         
        $cost=addslashes($_POST['cost']);
        $quantity=addslashes($_POST['quantity']);
        $p_id = isset($_GET['id']) ? $_GET['id'] : '';
        
		$tdtae=date("Y-m-d"); 
		$app1=addslashes($_POST['expiary']);
		$expiary = date("Y-m-d", strtotime($app1));
        $staff= $_SESSION['staff_id'];    

    //<!--**************************************************************>
                        
    
	mysqli_query($db,"INSERT INTO stock (item_id, cost, Quantity,expiary, date_added, staff ) VALUES ( '$item_id', '$cost','$quantity','$expiary','$tdtae', '$staff')") or die(mysqli_error($db));
   
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