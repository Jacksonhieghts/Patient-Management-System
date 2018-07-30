<?php
error_reporting(0);//turning off error reporting
include("connect.php");



?>
<?php
SESSION_START();
?>

<!DOCTYPE html>
<html>

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
											<li><a href="contact.html">help</a></li>|
											<li><a href="contact.html">Contact</a></li>|
											<li><a href="checkout.html">Delivery information</a></li>|
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
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Manage Student</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="students.php">New Student</a></li>
											<li id="menu-academico-avaliacoes" ><a href="viewstudentrecord.php">View List</a></li>
											<li id="menu-academico-boletim" ><a href="viewstudentsedit1.php">Edit Student</a></li>
											<li id="menu-academico-avaliacoes" ><a href="csvstudents.php">Import/Export Data</a></li>
											<li id="menu-academico-avaliacoes" ><a href="viewstudentrecord.php">View List</a></li>
											<li id="menu-academico-boletim" ><a href="billingstudent.php">Billing</a></li>
											<li id="menu-academico-boletim" ><a href="studentcreditnotes.php">Credit Notes</a></li>
											
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="staff.php"><i class="fa fa-file-text-o"></i> <span>Staff Member</span></a></li>
									<li><a href="course.php"><i class="lnr lnr-pencil"></i> <span>Courses</span></a></li>
									<li id="menu-academico" ><a href="departments.php"><i class="fa fa-file-text-o"></i> <span>Departments</span></a></li>
									<li id="menu-academico" ><a href="markstep1.php"><i class="lnr lnr-book"></i> <span>Exams</span></a></li>
									 <li><a href="hostel.php"><i class="lnr lnr-envelope"></i> <span>Hostel</span></a></li>
									<li><a href="sms.php"><i class="lnr lnr-chart-bars"></i> <span>SMS</span></a></li>
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="tabs.html">Tabs</a></li>
											<li id="menu-academico-boletim" ><a href="calender.html">Calender</a></li>

										  </ul>
									 </li>
									<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="input.html"> Input</a></li>
										<li><a href="validation.html">Validation</a></li>
									</ul>
									</li>
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

	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
    <script>

		$(function() {

			"use strict";

			$(".gantt").gantt({
				source: [{
					name: "Sprint 0",
					desc: "Analysis",
					values: [{
						from: "/Date(1320192000000)/",
						to: "/Date(1322401600000)/",
						label: "Requirement Gathering", 
						customClass: "ganttRed"
					}]
				},{
					name: " ",
					desc: "Scoping",
					values: [{
						from: "/Date(1322611200000)/",
						to: "/Date(1323302400000)/",
						label: "Scoping", 
						customClass: "ganttRed"
					}]
				},{
					name: "Sprint 1",
					desc: "Development",
					values: [{
						from: "/Date(1323802400000)/",
						to: "/Date(1325685200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1325685200000)/",
						to: "/Date(1325695200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Sprint 2",
					desc: "Development",
					values: [{
						from: "/Date(1326785200000)/",
						to: "/Date(1325785200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1328785200000)/",
						to: "/Date(1328905200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Release Stage",
					desc: "Training",
					values: [{
						from: "/Date(1330011200000)/",
						to: "/Date(1336611200000)/",
						label: "Training", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Deployment",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1338711200000)/",
						label: "Deployment", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Warranty Period",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1349711200000)/",
						label: "Warranty Period", 
						customClass: "ganttOrange"
					}]
				}],
				navigate: "scroll",
				scale: "weeks",
				maxScale: "months",
				minScale: "days",
				itemsPerPage: 10,
				onItemClick: function(data) {
					alert("Item clicked - show some details");
				},
				onAddClick: function(dt, rowId) {
					alert("Empty space clicked - add an item!");
				},
				onRender: function() {
					if (window.console && typeof console.log === "function") {
						console.log("chart rendered");
					}
				}
			});

			$(".gantt").popover({
				selector: ".bar",
				title: "I'm a popover",
				content: "And I'm the content of said popover.",
				trigger: "hover"
			});

			prettyPrint();

		});

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
					
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h5>Pending Patients</h5>

								</div>
								<div class="form-body">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                      <!--*************************************************************************************************************************-->

                
                <!-- Page Heading -->
                <nav>             
                
                        <!-- block -->                      
                        <div id="block_bg" class="block">   
                            <div class="navbar navbar-inner block-header">
                            <table>
                            <tr>
                            
                            
                             </tr>
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
                                                <th><center>First Name</center></th>
                                                <th><center>Last Name</center></th>
                                                <th><center>Age</center></th>
                                                <th><center>Gender</center></th>
                                                <th><center>Payment</center></th>
                                                <th><center>Visit Date</center></th>
                                                <th><center>Patient Management</center></th>
                                                <script src="assets/js/jquery.dataTables.min.js"></script>
                                                <script src="assets/js/DT_bootstrap.js"></script>
                                                <th></th>
                                           </tr>
                                        </thead>
                                        <tbody>
                        <?php 
                    $s_id= $_SESSION['staff_id'];

                    $sql ="SELECT visits.patient_id, firstname, lastname, TIMESTAMPDIFF(YEAR,dateofbirth,CURDATE()) AS Age, Gender, insurance_name, v_date from visits join patients_table on visits.patient_id = patients_table.patient_id join med_insurance on visits.payment_type = med_insurance.insurance_id where v_date >= CURDATE() and staff_assigned = '$s_id' order by visit_id asc;";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['patient_id'];
                  
                        ?>
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                </td>
                                                <td><center><?php echo $row['firstname']; ?></center></td>
												<td><center><?php echo $row['lastname']; ?></center></td>
                                                <td><center><?php echo $row['Age']; ?></center></td>
												<td><center><?php echo $row['Gender']; ?></center></td>
                                                <td><center><?php echo $row['insurance_name']; ?></center></td>
                                                <td><center><?php echo $row['v_date']; ?></center></td>
                                                <td><center><a href="visits.php <?php echo '?id='.$id; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i>Patient Management</a></center></td>
                                            
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