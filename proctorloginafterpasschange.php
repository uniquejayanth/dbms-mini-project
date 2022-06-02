<?php
include("conn.php");
if($conn){
   // echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}
session_start()
?>

<form action="proctorloginafterpasschange.php" method="POST">
            <label for="un" id="phno-label"><b>User name</b> <br><br> </label>
            <input type="text" name="proctorname" required>
            <br><br> <br> 

            <label for="pass" id="phno-label"><b>Password</b> <br><br> </label>
            <input type="text" name="password" required>
            <br><br> <br> 

    <input id="submit" type="submit" value="Submit" name="Submit" class="submit-button">
</form>

<?php
if(isset($_POST['Submit'])){
    $un=$_POST['proctorname'];
    $pass=$_POST['password'];

    $query12="select * from staff where StaffID='$un' and ProctorPassword='$pass'"; 

    $run12=mysqli_query($conn,$query12) or die(mysqli_error($conn));

    $row=mysqli_num_rows($run12);
    echo $row;

    if($row == 1){
        $_SESSION['Staff_ID']=$un;
        header("location:proctor_dashboard.php");
    }
    else{
        echo "Login Failed";
    }
}
?>
