<?php
include("conn.php");
if($conn){
    //echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}

$staffid=$_GET['staffid'];
$query="delete from staff where StaffID='$staffid'";
$run=mysqli_query($conn,$query);

if($run){ 
    echo '<script type="text/javascript">alert("1 row affected")</script>';
    header("location:admin_procedit.php");
}
else{
    echo '<script type="text/javascript">alert("Failed to delete")</script>';
    header("location:admin_procedit.php");
}
?>