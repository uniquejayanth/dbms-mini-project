<?php
$server="localhost";
$username="root";
$password="#madhukumar123";
$dbname="mydb";

$conn=mysqli_connect($server , $username , $password , $dbname);


if(isset($_POST['Submit4'])){
    $studentID=$_POST['StudentUSN'];
    $subjectID=$_POST['SubjectId'];
    $classesHeld=$_POST['ClassesHeld'];
    $classesAttended=$_POST['ClassesAttended'];
    $attendancePercentage=(($_POST['ClassesAttended'])/($_POST['ClassesHeld']))*100;
    $internalTest1=$_POST['InternalTest1'];
    $internalTest2=$_POST['InternalTest2'];
    $internalTest3=$_POST['InternalTest3'];
    $internalMaxMarks=50;
    $internalAggregate=(($_POST['InternalTest1'])+($_POST['InternalTest2'])+($_POST['InternalTest3']))/3;
    $externalObtained=$_POST['ExternalMarks'];
    $totalMarks=($externalObtained)+($internalAggregate);
    if($totalMarks<=35){
        $status='FAIL';
    }
    else{
        $status='PASS';
    }

    $query="insert into study(StudentID,SubjectID,ClassesHeld,ClassesAttended,AttendancePercentage,InternalTest1,InternalTest2,InternalTest3,InternalMaxMarks,InternalAggregate,ExternalObtained,Status) values('$studentID','$subjectID','$classesHeld','$classesAttended','$attendancePercentage','$internalTest1','$internalTest2','$internalTest3','$internalMaxMarks','$internalAggregate','$externalObtained','$status')";

    $run=mysqli_query($conn,$query) or die(mysqli_error($conn));

    if($run){
        echo '<script type="text/javascript">alert("Form Submitted")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Form Not Submitted")</script>';
    }
}
?>