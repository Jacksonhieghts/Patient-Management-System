<?php
error_reporting(0);//turning off error reporting
include("connect.php");
$sql="SELECT patient_id FROM patients where patient_id LIKE '%CCA%'";
$records=mysqli_query($db,$sql);


?>
<?php
SESSION_START();

?>

<!DOCTYPE html>
<html>
<?php 	$p_id = isset($_GET['id']) ? $_GET['id'] : '';?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--*************** Patient ID search text box*************************************************-->
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<!--***************Patient Name search text box*************************************************-->
<script>
function myFunction2() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>


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
                    <li><a href="#">help</a></li>|
											<li><a href="stock.php">Stock</a></li>|
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

        if($_SESSION['position'] == 7 || $_SESSION['position'] == 5)
        { 
        
        }else{
          echo "<script type='text/javascript'>
                    alert( 'You must Log in as a Receptionist or Admin to view this page');
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
					
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h5>Search Patient</h5>

								</div>
								<div class="form-body">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                      <!--*************************************************************************************************************************-->

                
                <!-- Page Heading -->
                <nav>             
                
                        <!-- block -->                      
                        
                                <br>
								
								
                            <div class="block-content collapse in">
                                <div class="span12">
    <p>
	
                            <form method="post">
                                    <div class="table-responsive">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="myTable">
                                    
                                        <thead>
                                          <tr>
                                                <th></th>
                                                <th><center>Ref ID.</center></th>
                                                <th><center>Name</center></th>
                                                <th><center>Pharmacy bill</center></th>
                                                <th><center>Lab bill</center></th>
                                                <th><center>consultation cost</center></th>
                                                <th><center>total bill</center></th>
                                                <th><center>Billing date</center></th>
                                                
                                                <script src="assets/js/jquery.dataTables.min.js"></script>
                                                <script src="assets/js/DT_bootstrap.js"></script>
                                                <th></th>
                                           </tr>
                                        </thead>
                                        <tbody>
                        <?php 
                    $sql ="SELECT p.patient_id, p.firstname, p.lastname, b.pharmacy_cost, b.lab_cost, b.consultation_fee, b.total_bill, b.dob from billing b join patients_table p on p.patient_id = b.patient_id where p.patient_id = $p_id order by b.billing_id desc limit 1";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['patient_id'];                 
                        ?>
                                                <tr>
                                                <td width="30">
                                                </td>
                                                <td><center><?php echo $row['patient_id']; ?></center></td>
                                                <td><center><?php echo $row['firstname']." ".$row['lastname']; ?></center></td>
                                                <td><center><?php echo $row['pharmacy_cost']; ?></center></td>
                                                <td><center><?php echo $row['lab_cost']; ?></center></td>
                                                <td><center><?php echo $row['consultation_fee']; ?></center></td>
                                                <td><center><?php echo $row['total_bill']; ?></center></td>
                                                <td><center><?php echo $row['dob']; ?></center></td>
                                                <td>

                            </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </form>
                                

            </div>
                            </div>
                        </div>
                    </div>
            <!-- /.container-fluid -->

     
  <!--*********************************************************************************-->  

    
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/affix.js"></script>
    <script src="assets/js/alert.js"></script>
    <script src="assets/js/alert1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/button.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/collapse.js"></script>
    <script src="assets/js/color.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/DT_bootstrap.js"></script>
    <script src="assets/js/dynamic.js"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery.dialog.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.jgrowl.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.uniform.min.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/jquery-1.9.1.js"></script>
    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery-1.11.0.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery-ui-1.10.3.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="assets/js/myjquery.js"></script>
    <script src="assets/js/myjquery1.js"></script>
    <script src="assets/js/npm.js"></script>
    <script src="assets/js/popover.js"></script>
    <script src="assets/js/profile.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/sb-admin-2.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/scrollspy.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/tooltip.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/wysihtml5-0.3.0.js"></script>
<!--when everything is fine the loades stops loadeing-->
<script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>

</body>

</html>