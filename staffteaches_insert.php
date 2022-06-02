<?php
$server="localhost";
$username="root";
$password="#madhukumar123";
$dbname="mydb";

$conn=mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['Submit'])){
    $staffID=$_POST['StaffID'];
    $subID=$_POST['SubjectID'];
    $subDesc=$_POST['SubjectDesc'];

    $query="insert into teaches(StaffID,SubjectID,SubDesc)values('$staffID','$subID','$subDesc')";

    $run=mysqli_query($conn,$query) or die(mysqli_error($conn));

    if($run){
        echo '<script type="text/javascript">alert("Form Submitted")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Form Not Submitted")</script>';
    }
}
?>