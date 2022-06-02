<?php
$server="localhost";
$username="root";
$password="#madhukumar123";
$dbname="mydb";

$conn=mysqli_connect($server , $username , $password , $dbname);


if(isset($_POST['Submit'])){
    $BranchID=$_POST['deptID'];
    $BranchName=$_POST['deptName'];
    $Duration=$_POST['CourceDuration'];

    $query="insert into branch(BranchID,BranchName,Duration)values('$BranchID','$BranchName','$Duration')";

    $run=mysqli_query($conn,$query) or die(mysqli_error($conn));

    if($run){
        echo '<script type="text/javascript">alert("Form Submitted")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Form Not Submitted")</script>';
    }
}

?>