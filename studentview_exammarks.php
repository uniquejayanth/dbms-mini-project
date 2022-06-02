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
    <title>Student | Exam Marks</title>
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

                $query1="select sub.SubDesc,sub.SubID,sd.InternalTest1,sd.InternalMaxMarks,sd.InternalTest2,sd.InternalMaxMarks,sd.InternalTest3,sd.InternalMaxMarks,sd.InternalAggregate,sd.ExternalObtained,sd.TotalMarks,sd.Status,sd.Remarks from subject sub,study sd where sub.SubID=sd.SubjectID and sd.StudentID='$studid'";
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
            <li><a href="studentview_attendance.php"><i class="fa fa-hand-paper-o"></i>Attendance</a></li>
            <li class="active"><a href="studentview_exammarks.php"><i class="fa fa-check-square-o" style="padding-right:10px;"></i>Exam Marks</a></li>
            <li><a href="studentview_fees.php"><i class="fa fa-money" style="padding-right:10px;"></i>Fees</a></li>
             <li><a href="#"><i class="fa fa-quote-left" style="padding-right:10px"></i>Assignment</a></li>
               <li><a href="syllabus.php"><i class="fa fa-share-alt" style="padding-right: 10px;"></i>Syllabus</a></li>
        </ol>

    </div>

    <section class="table">
        <div><h1 style="padding-bottom: 30px;padding-left: 30px;color:white;">Exam Report</h1></div>
        
        <br><br>
        <div class="scroll">
        <table border="1" style="border-collapse: collapse; padding-top: 50px;">
            <tr>
                <th>    </th>
                <th>    </th>
                <th>    </th>
                <th colspan="2">1 INTERNALS TEST</th>
                <th colspan="2">2 INTERNALS TEST</th>
                <th colspan="2">3 INTERNALS TEST</th>
                <th colspan="6">EXTERNAL MARKS</th>
            </tr>
            <tr>
                <th style="padding-right: 100px;padding-left: 100px;">Subject</th>
                <th>Subject Code</th>
                <th>Obtained Marks</th>
                <th>Max Mark</th>
                <th>Obtained Marks</th>
                <th>Max Mark</th>
                <th>Obtained Marks</th>
                <th>Max Mark</th>
                <th>Internal Aggregate</th>
                <th>External Obtained</th>
                <th>Total Marks</th>
                <th>Status</th>
                <th>Remarks</th>
            </tr>
            <?php
                if($total1!=0){
                    while($result=mysqli_fetch_assoc($data1)){
                        
                        echo"
                        <tr>
                            <td id='data'>&nbsp;&nbsp;&nbsp;".$result['SubDesc']."</td>
                            <td>".$result['SubID']."</td>
                            <td>".$result['InternalTest1']."</td>
                            <td>".$result['InternalMaxMarks']."</td>
                            <td>".$result['InternalTest2']."</td>
                            <td>".$result['InternalMaxMarks']."</td>
                            <td>".$result['InternalTest3']."</td>
                            <td>".$result['InternalMaxMarks']."</td>
                            <td>".$result['InternalAggregate']."</td> 
                            <td>".$result['ExternalObtained']."</td>
                            <td>".$result['TotalMarks']."</td>
                            <td>".$result['Status']."</td>
                            <td>".$result['Remarks']."</td>
                            </tr>
                            ";
                    }
                }
                else{
                    echo"No record found";
                }

?>
            
        </table>
    </div>
    </section>
</body>
</html>