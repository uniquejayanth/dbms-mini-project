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
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SJBIT Proctor Login</title>
        <meta charset="utf-8" />
        <style>
        .p_username{
                position: absolute;
                display: block;
                background:rgba(255, 255, 255, 0.199);
                
                display: block;
                color: white;
                font-style: italic;
	            font-size: 21px;
                border: transparent;
                opacity: 1;
                border-radius:50px;
                margin-left: 595px;
                padding: 20px 50px;
                box-sizing: border-box;
                margin-bottom: 16px;
            }
            .p_username:hover{
                border:transparent;
                transform: scale(1.1);
                transition: transform .3s ease;
            }
            html{
                background-image: linear-gradient(to right,#d2ccc4,#2f4353);
                background-repeat: linear;
            }
            .submit-button{
                position: relative;
                display: block;
                border-radius: 2rem;
                background: #D64A10;
                border-color: transparent;
                padding: 1rem 1.5rem;
                margin: auto;
                width: 100px;
                cursor: pointer;
                color: white;
                opacity: 0.6;
                font-size: 1rem;
                font-weight: bold;
                margin-left: 710px;
                
            }
            .submit-button:hover{
                background: #D64A10;
                opacity: 0.8;
                transform: scale(1.4);
                transition: transform .3s ease;
            }
            h2{
                font-size:  50px;
                font-weight: bold;
                font-family:'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                position: absolute;
                display: block;
                margin-top:150px;
                margin-left: 549px;
                padding: 12px 20px;
                color: black;
                opacity: 0.8;
                font-weight: 900;
                background-color: transparent;
            }
        </style>
</head>
<body>
<form action="proctorlogin.php" method="POST"> 
            <h2 class="signin-label">PROCTOR LOGIN</h2>
            <input type="text" style="margin-top:250px;" class="p_username" name="proctorname" placeholder="Username" required>
            <br><br> <br> 

            <input type="password" style="margin-top:300px;" class="p_username" name="password" placeholder="Password" required>
            <br><br> <br> 

            <input id="submit" style="margin-top:350px;" type="submit" value="Submit" name="Submit" class="submit-button">
</form>
</body>
    </html>
<?php
if(isset($_POST['Submit'])){
    $un=$_POST['proctorname'];
    $pass=$_POST['password'];

    $query12="select * from staff where StaffID='$un' and ProctorPassword='$pass'"; 

    $run12=mysqli_query($conn,$query12) or die(mysqli_error($conn));

    $row=mysqli_num_rows($run12);

    if($row == 1){
        $_SESSION['Staff_ID']=$un;
        header("location:proctor_dashboard.php");
    }
    else{
        echo "Login Failed (Incorrect Username or Password)";
    }
}
?>
