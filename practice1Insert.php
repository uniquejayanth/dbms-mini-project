<?php
$server="localhost";
$user="root";
$password="#madhukumar123";
$dbname="practice";

$conn= new mysqli($server , $user , $password , $dbname);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];

    $query="insert into practicetable(Fname,Lname)values('$fname','$lname')";
    $run=mysqli_query($conn,$query);

}


?>