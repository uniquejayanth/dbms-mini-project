<?php
include("conn.php");
if($conn){
   // echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student | Fees</title>
	<link rel="stylesheet" type="text/css" href="CSS/studatabase.css">
	<link rel="stylesheet" type="text/css" href="./css/all.css">
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
            <?php
				$studid=$_SESSION['Student_ID'];
				$query=mysqli_query($conn,"select StudentName from studentslist where StudentID='$studid'");
				$run=mysqli_fetch_array($query);
				echo $run['StudentName'];echo ' ('.$studid.')';

                $query1="select st.AdmissionType,f.FeeParticulars,f.FeesToBePaid,f.FeesPaid,f.DueAmount from studentslist st,fees f where st.StudentID=f.StudentID and st.StudentID='$studid'";
                $data1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));
                $total1 = mysqli_num_rows($data1);
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
			<li ><a href="studentview_attendance.php"><i class="fa fa-hand-paper-o"></i>Attendance</a></li>
			<li><a href="studentview_exammarks.php"><i class="fa fa-check-square-o" style="padding-right:10px;"></i>Exam Marks</a></li>
			<li class="active"><a href="studentview_fees.php"><i class="fa fa-money" style="padding-right:10px;"></i>Fees</a></li>
			 <li><a href="#"><i class="fa fa-quote-left" style="padding-right:10px"></i>Assignment</a></li>
			   <li><a href="syllabus.php"><i class="fa fa-share-alt" style="padding-right: 10px;"></i>Syllabus</a></li>
		</ol>
	</div>

    <section class="table">
    	<div>
    	<h1 style="padding-bottom: 30px;padding-left: 30px;color:white;">Fees</h1>
    	</div>
    	
		<br><br>
    	<table border="1" style="border-collapse: collapse; padding-top: 50px;">
    		<tr>
    			<th>Admission Type</th>
    			<th>Fees Particulars</th>
    			<th>Payable Amount</th>
    			<th>Paid Amount</th>
    			<th>Balance Amount</th>
    	    </tr>
            <?php
                if($total1!=0){
                    while($result=mysqli_fetch_assoc($data1)){
                        
                        echo"
                        <tr>
                            <td id='data'>&nbsp;&nbsp;&nbsp;".$result['AdmissionType']."</td>
                            <td>".$result['FeeParticulars']."</td>
                            <td>".$result['FeesToBePaid']."</td>
                            <td>".$result['FeesPaid']."</td>
                            <td>".$result['DueAmount']."</td>
                            </tr>
                            ";
                    }
                }
                else{
                    echo"No record found";
                }

?>


    	</table>
    </section>
</body>
</html>