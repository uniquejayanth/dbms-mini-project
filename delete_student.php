<?php
include("conn.php");
if($conn){
    //echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}

$stusn=$_GET['stid'];
$query="delete from studentslist where StudentID='$stusn'";
$run=mysqli_query($conn,$query);

if($run){
    echo '<script type="text/javascript">alert("1 row affected")</script>';
}
else{
    echo '<script type="text/javascript">alert("Failed to delete")</script>';
}
?>