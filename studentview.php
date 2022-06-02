<?php
include("conn.php");
if($conn){
   // echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./CSS/studatabase.css">
	<link rel="stylesheet" type="text/css" href="./css/all.css">
	<script src="https://kit.fontawesome.com/62a0857bae.js" crossorigin="anonymous"></script>
	<style>
		 @font-face {
                font-family: DM Sans;
                src: url('./fonts/DMSans-Regular.ttf')format('truetype');
                font-weight: normal;
                font-style: normal;
            }

	</style>
</head>
<body>
	<div>
        <nav>
            <div style="display: inline-block;" class="image">
            <a href="./index.html">
			<img src="./images/sjbicon1.png" style="width: 90px;"> </a>
            </div>
            <ul class="list">
                <li><a href="./index.php" class="active5"><i class="fas fa-home"style="color: white;opacity:0.8;font-size:27px;"></i> <b style="font-size:27px;">Home</b></a></li>
                <li><a href="./studentlogin.php" class="active6"><i class="fas fa-users" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Student</b></a></li>
                <!-- <li><a href="./proctorlogin.php" class="active6"><i class="fas fa-address-book" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Proctor</b></a></li>-->
				<li><a href="./studentlogin.php" class="active6"><i class="fas fa-sign-out-alt" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Logout</b></a></li>
			</ul>
			<?php
				$studid=$_SESSION['Student_ID'];
				$query=mysqli_query($conn,"select StudentName from studentslist where StudentID='$studid'");
				$run=mysqli_fetch_array($query) or die(mysqli_error($conn));
				echo $run['StudentName'];echo ' ('.$studid.')';
			?>
        </nav>
    </div>
	<input type="checkbox" name="" id="check" class="selection">
	<div class="container">
		<label for="check">
			<span class="fas fa-arrow-alt-circle-left" id="times"></span>
			<span class="fas fa-arrow-alt-circle-right" id="bars"></span>
		</label>
		<div class="head">Menu</div>
		<ol>
			<li><a href="studentview_attendance.php"><i class="fa fa-hand-paper-o"></i>Attendance</a></li>
			<li><a href="studentview_exammarks.php"><i class="fa fa-check-square-o" style="padding-right:10px;"></i>Exam Marks</a></li>
			<li><a href="studentview_fees.php"><i class="fa fa-money" style="padding-right:10px;"></i>Fees</a></li>
			 <li><a href="#"><i class="fa fa-quote-left" style="padding-right:10px"></i>Assignment</a></li>
			   <li><a href="syllabus.php"><i class="fa fa-share-alt" style="padding-right: 10px;"></i>Syllabus</a></li>
			   <li><a href="studenttochangepass.php"><i class="fa fa-lock" style="padding-right: 10px;"></i>Password</a></li>
		</ol>
	</div>

	

</body>
</html>