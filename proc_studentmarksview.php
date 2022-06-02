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
    <title>Proctor | Student Exam Marks</title>
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
                <li><a href="./proctor_dashboard.php" class="active5"><i class="fas fa-home"style="color: white;opacity:0.8;font-size:27px;"></i> <b style="font-size:27px;">Home</b></a></li>
                <!-- <li><a href="./proctor_login.php" class="active6"><i class="fas fa-address-book" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Proctor</b></a></li> -->
            </ul>
            <?php
				// $studid=$_SESSION['Student_ID'];
				// $query=mysqli_query($conn,"select StudentName from studentslist where StudentID='$studid'");
				// $run=mysqli_fetch_array($query);
				//echo $run['StudentName'];echo ' ('.$studid.')';
                $stid=$_GET['stid'];  
                      
                $query1="select st.StudentID,st.StudentName,sub.SubDesc,sub.SubID,sd.InternalTest1,sd.InternalMaxMarks,sd.InternalTest2,sd.InternalMaxMarks,sd.InternalTest3,sd.InternalMaxMarks,sd.InternalAggregate,sd.ExternalObtained,sd.TotalMarks,sd.Status,sd.Remarks from studentslist st,subject sub,study sd where st.StudentID=sd.StudentID and sub.SubID=sd.SubjectID and sd.StudentID='$stid'";
                $data1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));
                $total1 = mysqli_num_rows($data1);
			?>
        </nav>
    </div>

    <section class="table">
        <div><h1 style="padding-bottom: 30px;padding-left: 30px;color:white;">Marks View</h1></div>
        
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
            
                <th>Student USN</th>
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
                           
                            <td>".$result['StudentID']."</td>
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


<!-- <td><a href='marksupdate.php ? stid=$result[StudentID] && subid=$result[SubID]'><i class='fas fa-edit' style='color:black;'></i></a></td>
                            <td> </td> -->