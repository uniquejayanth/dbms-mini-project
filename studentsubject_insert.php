<?php
$server="localhost";
$username="root";
$password="#madhukumar123";
$dbname="mydb";

$conn=mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['Submit3'])){
    $sem=$_POST['sem'];
    $subID=$_POST['SubjectID'];
    $subDesc=$_POST['SubjectDesc'];

    $query="insert into subject(Sem,SubID,SubDesc)values('$sem','$subID','$subDesc')";

    $run=mysqli_query($conn,$query) or die(mysqli_error($conn));

    if($run){
        echo '<script type="text/javascript">alert("Form Submitted")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Form Not Submitted")</script>';
    }
}

?>