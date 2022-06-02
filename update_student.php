<?php
include("conn.php");
if($conn){
    //echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}


$stid=$_GET['stid'];
$query=mysqli_query($conn, "select * from studentslist where StudentID='$stid'");
$run=mysqli_fetch_array($query);

if(isset($_POST['submit'])){
    $stname=$_POST['studentname'];
    $stdob=$_POST['studentdob'];
    $stgender=$_POST['studentgender'];
     $stphno=$_POST['studentphonenumber'];
     $stdeptid=$_POST['studentcourse'];
     $styear=$_POST['studentcourseyear'];
     $stage=(date("Y") - date("Y",strtotime($_POST['studentdob'])));
     $stresidence=$_POST['studentresidence'];
     $stcomedkORcet=$_POST['studentcetorcomedkRank'];
     $stSSLCscore=$_POST['student10thscore'];
     $stSSLCpercent=(($_POST['student10thscore']/625)*100);
     $stPUCscore=$_POST['studentPUCscore'];
     $stPUCpercent=($_POST['studentPUCscore']/600)*100;
     $proctoredby=$_POST['studentproctor'];

    $update=mysqli_query($conn, "update studentslist set StudentName='$stname',DOB='$stdob',StudentGender='$stgender',StudentPhoneNumber='$stphno',DeptID='$stdeptid',
    StudentYear='$styear',StudentAge='$stage',StudentResidence='$stresidence',
    CETorCOMEDKrank='$stcomedkORcet',SSLCmarks='$stSSLCscore',
    SSLCpercentage='$stSSLCpercent',PUCmarks='$stPUCscore',
    PUCpercentage='$stPUCpercent',ProcID ='$proctoredby' where StudentID='$stid'");

    if(!$update){
        echo mysqli_error(); 
    }
    else{
        header("location:admin_stuedit.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            Admin | Student Update Form
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
        
            <h1 style="margin-top:250px;margin-left: 580px;opacity: 0.8;opacity: 0.8;"> Student Updating Form </h1>

            <form action="" method="post">

            <label for="Student Name" id="name-label"><b>Name</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="studentname" value="<?php echo $run['StudentName'] ?>" required>  
            <br><br><br>

            <label for="Student USN" id="usn-label"><b> Student USN</b> <br><br> </label> 
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="studentusn" value="<?php echo $run['StudentID'] ?>"  required>
            <br><br><br>

        
            <label for="Student DOB" id="dob-label"><b>Date of Birth</b> <br><br> </label>
            <input 
            style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 3rem;"type="date" 
            name="studentdob" placeholder="Your DOB" value="<?php echo $run['DOB'] ?>" required>
            <br><br><br>
            
            <label for="student-gender" id="student-gender"> <b>Please specify your gender</b> <br></label>
            <input id="gender-select" type="radio" id="male" name="studentgender" value="Male" value="<?php  $run['StudentGender'] ?>"
                <?php if($run['StudentGender']=="Male"){
                 echo 'checked';   
                }?>>
            <label for="gender-select"> <b> Male </b> <br>
            <input id="gender-select" type="radio" id="female" name="studentgender" value="Female" value="<?php  $run['StudentGender'] ?>"
                <?php if($run['StudentGender']=="Female"){
                 echo 'checked';   
                }?>>
            <label for="gender-select"> <b> Female </b> <br>
            <input id="gender-select" type="radio" id="others" name="studentgender" value="Others" value="<?php  $run['StudentGender'] ?>"
                <?php if($run['StudentGender']=="Others"){
                 echo 'checked';   
                }?>>
            <label for="gender-select"> <b> Others </b> 
            <br><br><br>

            <label for="Student Ph No" id="phno-label"><b>Student Phone Number</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentphonenumber"  value="<?php echo $run['StudentPhoneNumber'] ?>" required>
            <br><br><br>


            <h3>Course Enrolled</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" 
            name="studentcourse" id="course" value="<?php $run['DeptID'] ?>" required>
            <option value="Not selected"
                <?php  if( $run['DeptID']=='Not selected'){
                    echo 'selected';
                }
                ?>>choose a course</option>
            <option value="1" 
                <?php  if( $run['DeptID']=='1'){
                    echo 'selected';
                }
                ?>>CSE</option>
            <option value="2"
                <?php  if($run['DeptID']=='2'){
                    echo'selected';
                }?>>ISE</option>
            <option value="3"
                <?php  if($run['DeptID']=='3'){
                echo'selected';
            }?>>ECE</option>
            <option value="4"
                <?php  if($run['DeptID']=='4'){
                echo'selected';
            }?>>EEE</option>
            <option value="5"
                <?php  if($run['DeptID']=='5'){
                echo'selected';
            }?>>Mech</option>
            <option value="6"
                <?php  if($run['DeptID']=='6'){
                echo'selected';
            }?>>Civil</option>
            </select>
            <br><br><br>


            <h3>Enrollment Year</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" 
            name="studentcourseyear" id="course" value="<?php echo $run['StudentYear'] ?>" required>
            <option value="Not selected"
                <?php  if( $run['StudentYear']=='Not selected'){
                    echo 'selected';
                }
                ?>>select year</option>
            <option value="first"
                <?php  if( $run['StudentYear']=='first'){
                    echo 'selected';
                }
                ?>>First Year</option>
            <option value="second"
                <?php  if( $run['StudentYear']=='second'){
                    echo 'selected';
                }
                ?>>Second or Lateral Entry</option>
            <option value="third"
                <?php  if( $run['StudentYear']=='third'){
                    echo 'selected';
                }
                ?>>Third Year</option>
            <option value="fourth"
                <?php  if( $run['StudentYear']=='fourth'){
                    echo 'selected';
                }
                ?>>Fourth Year</option>
            </select>
            <br><br><br>

            <h3>Student Residence</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem"
            name="studentresidence" id="course" value="<?php echo $run['StudentResidence'] ?>" required>
            <option value="Not selected"
            <?php  if( $run['StudentResidence']=='Not selected'){
                    echo 'selected';
                }
                ?>>select residence</option>
            <option value="day-scholar"
            <?php  if( $run['StudentResidence']=='day-scholar'){
                    echo 'selected';
                }
                ?>>Day Scholar</option>
            <option value="hostler"
            <?php  if( $run['StudentResidence']=='hostler'){
                    echo 'selected';
                }
                ?>>Hostel</option>
            </select>
            <br><br><br>


            <label for="Student cet/comedk rank" id="phno-label"><b>CET / COMEDK Rank</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentcetorcomedkRank" value="<?php echo $run['CETorCOMEDKrank'] ?>" placeholder="Enter CET/COMEDK Rank" required>
            <br><br><br>

            <label for="Student sslc score" id="phno-label"><b>SSLC Score</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="student10thscore" value="<?php echo $run['SSLCmarks'] ?>" placeholder="Enter SSLC score" required>
            <br><br><br>
            
            <label for="Student puc score" id="phno-label"><b>PUC Score</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentPUCscore" value="<?php echo $run['PUCmarks'] ?>" placeholder="Enter PUC score" required>
            <br><br><br>

            <label for="Student procotor" id="phno-label"><b>Proctored By</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentproctor" value="<?php echo $run['ProcID'] ?>" placeholder="Staff ID" required>
            <br><br><br>
        
            <!-- <label for="Student fees" id="fees-label"><b> Fees to be paid</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="feesToBePaid" value="<?php echo $run['FeesToBePaid'] ?>" required>  
            <br><br>

            <label for="Student-fees" id="fees-paid"><b> Amount paid</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="feespaid" value="<?php echo $run['FeesPaid'] ?>" required>  
            <br><br> -->

            <input id="submit" type="submit" value="Update" class="submit-button" name="submit">
            
        </form>
        </body>
</html> 
