<?php
include("conn.php");
if($conn){
    //echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            SJBIT Student Enrollment Form
        </title>
        <style>
             @font-face {
                font-family: DM Sans;
                src: url('./fonts/DMSans-Regular.ttf')format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            .top-img{
                position: absolute;
                display: block;
                margin-left: 465px;
                margin-top: -210px;    
            }
            body{
                background-image: linear-gradient(to right,#247ba0,#ffffb5);
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            form{
                background: rgb(255,255,255,0.2);
                padding: 2.5rem 2.5rem;
                border-radius: 2rem;
                width: 500px;
                margin-top: 50px;
                margin-left: 465px;
            }
            .submit-button{
                border-radius: 2rem;
                background:rgba(255,255,255,0.4);
                padding: 5px ;
                margin: auto;
                width: 100px;
                cursor: pointer;
                margin-left: 200px;
                border-color: transparent;
                font-size: 0.85rem;
                font-weight:bold;
            }
            .submit-button:hover{
                background:rgba(255,255,255,0.4);
                transform: scale(1.5);
                transition: transform .7s ease;
                cursor: pointer;
            }
            .input-headings{
                margin: 0 auto 1.25rem auto;
                padding: 0.25rem;
            }
            .form-inputs{
                display: block;
                width: 90%;
                height: 2rem;
                padding: 0.25rem;
                border-radius: 1.25rem;
                
            }
            
        </style>
    </head>
        
          
    <body>
        
        <a href="./index.php">
        <img class="top-img" src="./images/sjbicon2.png" alt="SJB logo"></a>
        
            <h1 style="margin-top:250px;margin-left: 560px;opacity: 0.8;opacity: 0.8;"> Student Registration Form </h1>


            <form action=" " method="post">

            <label for="Student Name" id="name-label"><b>Name</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="studentname" required>  
            <br><br><br>

            <label for="Student USN" id="usn-label"><b> Student USN</b> <br><br> </label> 
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="studentusn"  required>
            <br><br><br>


            <!-- <label for="Student Password" id="password-label"><b> Generate Password</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="password" name="studentpassword"  required>  
            <br><br><br> -->

        
            <label for="Student DOB" id="dob-label"><b>Date of Birth</b> <br><br> </label>
            <input 
            style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 3rem;"type="date" 
            name="studentdob" placeholder="Your DOB" required>
            <br><br><br>
            
            <label for="student-gender" id="student-gender"> <b>Please specify your gender</b> <br></label>
            <input id="gender-select" type="radio" id="male" name="studentgender" value="Male">
            <label for="gender-select"> <b> Male </b> <br>
            <input id="gender-select" type="radio" id="female" name="studentgender" value="Female">
            <label for="gender-select"> <b> Female </b> <br>
            <input id="gender-select" type="radio" id="others" name="studentgender" value="Others">
            <label for="gender-select"> <b> Others </b> 
            <br><br><br>

            <label for="Student Ph No" id="phno-label"><b>Student Phone Number</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentphonenumber" required>
            <br><br><br>


            <h3>Course Enrolled</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" 
            name="studentcourse" id="course" required>
            <option value="Not selected">choose a course</option>
            <option value="2">CSE</option>
            <option value="3">ISE</option>
            <option value="4">ECE</option>
            <option value="5">EEE</option>
            <option value="6">Mech</option>
            <option value="7">Civil</option>
            </select>
            <br><br><br>


            <h3>Enrollment Year</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" 
            name="studentcourseyear" id="course" required>
            <option value="Not selected">select year</option>
            <option value="first">First Year</option>
            <option value="second">Second or Lateral Entry</option>
            <option value="third">Third Year</option>
            <option value="fourth">Fourth Year</option>
            </select>
            <br><br><br>

            <h3>Admissin Type</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" 
            name="studentadmissiontype" id="course" required>
            <option value="Not selected">select admission type</option>
            <option value="CET">CET</option>
            <option value="COMEDK">COMEDK</option>
            <option value="MANAGEMENT">MANAGEMENT</option>
            </select>
            <br><br><br>

            <h3>Student Residence</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem"
            name="studentresidence" id="course" required>
            <option value="Not selected">select residence</option>
            <option value="day-scholar">Day Scholar</option>
            <option value="hosteler">Hostel</option>
            </select>
            <br><br><br>


            <label for="Student cet/comedk rank" id="phno-label"><b>CET / COMEDK Rank</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentcetorcomedkRank" placeholder="Enter CET/COMEDK Rank" required>
            <br><br><br>

            <label for="Student sslc score" id="phno-label"><b>SSLC Score</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="student10thscore" placeholder="Enter SSLC score" required>
            <br><br><br>
            
            <label for="Student puc score" id="phno-label"><b>PUC Score</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentPUCscore" placeholder="Enter PUC score" required>
            <br><br><br>

            <label for="Student procotor" id="phno-label"><b>Proctored By</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentproctor" placeholder="Staff ID" required>
            <br><br><br>
        
            <input id="submit" type="submit" value="Submit" class="submit-button" name="submit1">
            
        </form>
    </body>

</html>

<?php
if(isset($_POST['submit1'])){
    $stname=$_POST['studentname'];
    $stid=$_POST['studentusn'];
    $lenght=6;
    $stpassword=rand(100000,999999);//$_POST['studentpassword'];
    $stdob=$_POST['studentdob'];
    $stgender=$_POST['studentgender'];
    $stphno=$_POST['studentphonenumber'];
    $stdeptid=$_POST['studentcourse'];
    $styear=$_POST['studentcourseyear'];
    $stage=(date("Y") - date("Y",strtotime($_POST['studentdob'])));
    $stadmissiontype=$_POST['studentadmissiontype'];
    $stresidence=$_POST['studentresidence'];
    $stcomedkORcet=$_POST['studentcetorcomedkRank'];
    $stSSLCscore=$_POST['student10thscore'];
    $stSSLCpercent=(($_POST['student10thscore']/625)*100);
    $stPUCscore=$_POST['studentPUCscore'];
    $stPUCpercent=($_POST['studentPUCscore']/600)*100;
    $proctoredby=$_POST['studentproctor'];

    $query1="insert into studentslist(StudentID,StudentName,Password,StudentYear,AdmissionType,StudentPhoneNumber,DeptID,DOB,StudentAge,StudentGender,StudentResidence,CETorCOMEDKrank,SSLCmarks,SSLCpercentage,PUCmarks,PUCpercentage,ProcID) 
    values('$stid','$stname','$stpassword','$styear','$stadmissiontype',
    '$stphno','$stdeptid','$stdob','$stage','$stgender','$stresidence',
    '$stcomedkORcet','$stSSLCscore','$stSSLCpercent','$stPUCscore',
    '$stPUCpercent','$proctoredby')";

    $run=mysqli_query($conn,$query1) or die(mysqli_error($conn));

    if($run){
        echo '<script type="text/javascript">alert("Form Submitted")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Form Not Submitted")</script>';
    }
    
}

?>