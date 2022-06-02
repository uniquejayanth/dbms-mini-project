<?php
include("conn.php");
if($conn){
    echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}

if(isset($_POST['Submit1'])){
    $username=$_POST['username'];
    $pass=$_POST['pwd'];

    $query12="select * from admin where UserName='$username' and Password='$pass'";

    $run12=mysqli_query($conn,$query12) or die(mysqli_error($conn));
    $row=musqli_fetch_array($rub12);

    if($run){
        echo"OK";
    }
    else{
        echo"No";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SJBIT Admin Login</title>
        <meta charset="utf-8" />
        <style>
            @font-face {
                font-family: DM Sans;
                src: url('./fonts/DMSans-Regular.ttf')format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            
            body{
                 /* background-image: url("./images/bg-02.png"); */
                 background-repeat: no-repeat;
                 background-size: fill;
                 margin-left:10px;
                 overflow: hidden ;
                }
            .sjbicon{
                position: absolute;
                display: block;
                margin-left: 55px;
                margin-top: 55px;
            }
            .sjbicon:hover{
            transform: scale(1.1);
            transition: transform .5s ease;
            cursor: pointer;
            }
            .signin-label{
                font-size:  50px;
                font-weight: bold;
                font-family:'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                position: absolute;
                display: block;
                margin-top:300px;
                margin-left:585px;
                padding: 12px 20px;
                /* color: white; */
                opacity: 0.8;
                font-weight: 900;
                background-color: transparent;
            }
            .s_username{
                position: absolute;
                display: block;
                background:rgba(255, 255, 255, 0.199);
                
                display: block;
                /* color: white; */
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
            .s_username:hover{
                border:transparent;
                transform: scale(1.1);
                transition: transform .3s ease;
            }
            
            /* .submit-button{
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
            } */
            #navbar{
                margin-top:auto;
                margin-right: 10px;
                width:100%;
                background-color: transparent;
                color: white;
                overflow:hidden;
                position:absolute;
                display: block;
            }
            #navbar a{
                font-family: 'DM Sans','Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-weight:bold;
                text-align:center;
                padding:70px 25px;
                text-decoration:none;
                font-size:25px;
                display: block;
                float:right;
                margin-top:5px;
                margin-right: 20px;
                color: white;
                opacity: 0.7;
                transition:background .3s ease-in-out,color .3s ease-in-out;
            }

            #navbar a:hover{
                background-color:transparent;
                color:#D64A10;
                opacity: 0.7;
                transform: scale(1.4);
                transition: transform .3s ease;
            }
            #navbar a:active{
                background-color:transparent;
            }


        </style>
    </head>
    <body>
  
        <div>
            <nav id="navbar">
              <ul>
                <a id="link1" class="nav-link" href="./student_login.php">Student Login</a>
                <a id="link1" class="nav-link" href="./proctor_login.php">Proctor Login</a>
                <a class="nav-link" href = "mailto: principal@sjbit.edu.in">Contact</a>
              </ul>
            </nav>
        </div>
        <div>
            <a href="./index.php">
            <img class='sjbicon' src="./images/sjbicon2.png" alt="SJBIT Logo">
            </a>
        </div> 
        <div>
        <form action=" " method="post"></form>
            <h2 class="signin-label">ADMIN LOGIN</h2>
                <input class='s_username' style="margin-top: 390px;" id='s_username' type = "text" name = "username" placeholder="Admin username" align="center">
                <input class='s_username' style="margin-top: 470px;" id='s_password' type = "password" name = "pwd" placeholder="Your password" align="center"><br><br><br>
                <input  id="submit" style="margin-top: 520px;" type="submit" value="Sign In" class="submit-button" name="Submit">
        </form>
        </div> 
    </body>
</html>

<?php
   


?>