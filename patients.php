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

<head>
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
									<h5>Farmer Registration Form :</h5>

								</div>
								<div class="form-body">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                       <form action="students.php" method="POST" enctype="multipart/form-data">
                                 <label>Registration number</label>
                                <input type="text" name="sirname" placeholder="Manual assingning of patient id  can be activated on request" id="ssname" class="form-control" readonly="">              
                                <div style="float:left;  position:relative">
                                <h4>Personal Details</h4>
                                                                               
                                <label>First name</label>
                                <input type="text" name="firstname" placeholder="e.g Jack" id="fname" class="form-control">
                         
                                     
                                <label>Last Name</label>
                                <input type="text" name="lastname" placeholder="e.g Msonkho" id="lname" class="form-control">
                             
                                <label>National ID/Licence.</label>
                                 <input type="text" name="idno" class="form-control" placeholder="optional">
                                <label>DOB</label>
                                <input type="date" name="dateofbirth" required class="form-control" max="2010-12-31">
                                <label>Gender</label>
                                <select  name="gender" id="gender"  class="form-control">
                                <?php                                                
                                                $sql3="SELECT gendername FROM genderset";
                                                $records3=mysqli_query($db,$sql3);                                              

                                                    while($users3=mysqli_fetch_array($records3,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users3['gendername']."</option>";
                                                        }
                                                ?></select>
                                
                                <label>Med_Insurance</label>
                                <select name="med_insurance" id="med_insurance" onchange="OnSelectionChange(this)" class="form-control" />
                                                <?php
                                                $sql28="SELECT insurance_name FROM med_insurance";
                                                $records4=mysqli_query($db,$sql28);
                                                   while($users4=mysqli_fetch_array($records4,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users4['insurance_name']."</option>";
                                                        $countyname=$users4['insurance_name'];
                                                        }

                                                ?></select>
                                <label>Allergies</label>
                                <select  name="allergy_id" id="allergy_id" onchange="OnSelectionChange(this)" class="form-control">
                                                <?php
                                                $sql4="SELECT allergy_name FROM allergy";
                                                $records4=mysqli_query($db,$sql4);
                                                   while($users4=mysqli_fetch_array($records4,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users4['allergy_name']."</option>";
                                                        $countyname=$users4['allergy_name'];
                                                        }

                                                ?></select>

                                <label>Allergies</label>
                                <select name="allergy2_id" id="allergy2_id" onchange="onclick(this)" class="form-control">
                                                <?php  

                                                $sql1="SELECT allergy_name FROM allergy";
                                                $records1=mysqli_query($db,$sql1);
                                                    while($row=mysqli_fetch_array($records1,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$row['allergy_name']."</option>";
                                                        }
                                                ?></select>
                                </div>
                                <!--section two-->
                                <div style="float:right; position:relative">
                                <h4>Contact Details</h4>
                                                           
                                <label> Mobile</label>
                                <input type="number" name="mobile" required class="form-control">
                                <label> Email</label>
                                <input type="email" name="email" class="form-control"> 

                                <label> Address</label>
                                <input type="text" name="address" class="form-control">
                               
                                <label> Area</label>
                                <select name="area" id="area" onchange="OnSelectionChange(this)" class="form-control" />
                                                <?php
                                                $sql29="SELECT area_name FROM area";
                                                $records4=mysqli_query($db,$sql29);
                                                   while($users9=mysqli_fetch_array($records4,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users9['area_name']."</option>";
                                                        $countyname=$users4['area_name'];
                                                        }

                                                ?></select>
                                
                                <label> Registration Date</label>
                                <input type="date" name="reg_date" required class="form-control" >
                                
                                <!-- <label>Class. </label> 
                                <select name="course_id" required class="form-control">
                                              // <?php                                                                                                                                                
                                              //  $sql2="SELECT * FROM course";
                                               // $records2=mysqli_query($db,$sql2);
                                              //  $out=mysqli_num_rows($records2); */
                                                //check wheather or not classes are entered
                                                       // if ($out=0)
                                                      ////  {
                                                   //             $out="It seems there are classes added yet";
                                                       // }
                                                    //    else{
                                                      //      $out=mysqli_num_rows($records2). " Classes found";
                                                       // }
                                                //end of check process. the output is stored in variable $out
                                              //  while($users2=mysqli_fetch_array($records2,MYSQL_ASSOC))
                                                        //{
                                                          //  echo "<option>".$users2['coursename']."</option>";
                                                      //  }
                                                
                                                ?></select>
                                               // <?php // echo '<font color="red"><i>'.$out. '</i></font>'?>

                                <label>Assign  Class/Intake</label>
                                <select name="intake_id" required class="form-control">
                                                <?php //                                               
                                               // $sql3="SELECT intakename FROM intake";
                                               // $records3=mysqli_query($db,$sql3);                                              

                                                  //  while($users3=mysqli_fetch_array($records3,MYSQL_ASSOC))
                                                        {
                                                         //   echo "<option>".$users3['intakename']."</option>";
                                                        }
                                                ?></select>
                                </div>                               
                                <!--this is section three-->
                                <div style="float:left;  position:relative; clear:both;">
                             
                                <h4>Patient Guardian Details</h4>
                                             
                                               
                                <label>Firstname Name</label>
                                <input type="text" name="gfirstname" id="fn" class="form-control">
                                 
                                 <label>Last Name</label>
                                <input type="text" name="glastname" class="form-control">
                                
                                <label>Mobile</label> 
                                <input type="number" name="gmobile" class="form-control">
                                
                                <label>Relationship </label>
                                <input type="text" name="grelationship" placeholder="Father" class="form-control"><br>
                               
                               
                               <input type="submit" name="register" value="Save Record" class="btn btn-success"><br><br>
                                </div>                               
                        </form></div>
</div>
</div>
</div>
</div>
</div>

<!--*************************************PHP CODES TO SAVE THE DATA************************************************-->
<?php
  //  mysqli_select_db('pms',mysqli_connect($db,'localhost','root',''))or die(mysqli_error($db));
    if (isset($_POST['register'])){

    $xx=$_POST['med_insurance'];
        $sql="SELECT * FROM med_insurance WHERE insurance_name='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $insurance_id = $row['insurance_id'];}

    $xx=$_POST['allergy_id'];
        $sql="SELECT * FROM allergy WHERE  allergy_name='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $allergy1_id= $row['allergy_id'];}    

        $xx=$_POST['allergy2_id'];
        $sql="SELECT * FROM allergy WHERE  allergy_name='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $allergy2_id= $row['allergy_id'];}  
        
        $xx=$_POST['area'];
        $sql="SELECT * FROM area WHERE  area_name='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $area= $row['area_id'];} 
   //    $xx=$_POST['country_id'];
       // $sql="SELECT * FROM countries WHERE countryname='$xx'";
      //  $user_query=mysqli_query($db,$sql) or die("error getting data");
      //  while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){
      //  $country_id = $row['country_id'];}

       
        $reg_date=addslashes($_POST['reg_date']);
        $firstname=addslashes($_POST['firstname']);
        $lastname=addslashes($_POST['lastname']);
        $idno=addslashes($_POST['idno']);
        $dateofbirth=addslashes($_POST['dateofbirth']);
        $gender=addslashes($_POST['gender']);
        $mobile=addslashes($_POST['mobile']);
        $email=addslashes($_POST['email']);
        $address=addslashes($_POST['address']);
        
        $monthh = strtotime('date()');
        $mon = date('Y-m-d',$monthh);

    //<!--**************************************************************>
                        $gfirstname=addslashes($_POST['gfirstname']);
                        $glastname=addslashes($_POST['glastname']);
                        $gmobile=addslashes($_POST['gmobile']);
                        $grelationship=addslashes($_POST['grelationship']);
    

     //reg patient                   
     mysqli_query($db,"INSERT INTO patients_table(firstname, lastname, idno, dateofbirth, gender, med_insurance, allergy1, allergy2, mobile, email, p_address, area, reg_date) VALUES ('$firstname','$lastname','$idno','$dateofbirth','$gender','$insurance_id','$allergy1_id','$allergy2_id','$mobile','$email','$address','$area','$reg_date')") or die(mysqli_error($db));
    
    
    
//select last patient reg
    $result = mysqli_query($db,"SELECT patient_id FROM `patients_table` order by patient_id desc limit 1");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$p_id = mysqli_fetch_row($result);

$pnumber = (int) implode('', $p_id);

//$p_id2 = implode(" ",$p_id);
//$p_id3 = (int) $p_id2;


mysqli_query($db,"INSERT INTO guardian(patient_id, firstname, lastname, mobile, relationship) VALUES ('$pnumber','$gfirstname','$glastname','$gmobile','$grelationship')") or die(mysqli_error($db));

?>
                        
                        
                        <script>
 
                        alert('Succsessfully Saved');
                       
                        </script>
<?php
 //<!--*******************************try add parent's details******************************************************-->  

}?>
<!--**********************************************************************************************************************-->
             

                </div>
                </p>


            </div>
            
        </div>
    </div>
    
   
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