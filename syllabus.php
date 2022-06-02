<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Syllabus</title>
	<link rel="stylesheet" type="text/css" href="CSS/studatabase.css">
    <script src="https://kit.fontawesome.com/62a0857bae.js" crossorigin="anonymous"></script>
</head>
<body>
	<div>
        <nav>
            <div style="display: inline-block;" class="image">
            <img src="./images/sjbicon1.png" style="width: 90px;">
            </div>
            <ul class="list">
                <li><a href="./studentview.php" class="active5"><i class="fas fa-home"style="color: white;opacity:0.8;font-size:27px;"></i> <b style="font-size:27px;">Home</b></a></li>
                <li><a href="./studentlogin.php" class="active6"><i class="fas fa-users" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Student</b></a></li>
                <!-- <li><a href="./proctor_login.php" class="active6"><i class="fas fa-address-book" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Proctor</b></a></li> -->
                <li><a href="./studentlogin.php" class="active6"><i class="fas fa-sign-out-alt" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Logout</b></a></li>
            </ul>
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
               <li class="active"><a href="syllabus.php"><i class="fa fa-share-alt" style="padding-right: 10px;"></i>Syllabus</a></li>
        </ol>
    </div>
    <section class="table">
	<div style="padding:20px 50px 0px 50px;">
		<embed src="files/18 scheme syllabus.pdf" type="application/pdf" style="width:100%; height: 700px;border-radius: 1.5rem;"></embed>
	</div>
</section>
</body>
</html>