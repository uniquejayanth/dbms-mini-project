<?php
include("conn.php");
if($conn){
    //echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            SJBIT Student Fees Form
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
        
            <h1 style="margin-top:250px;margin-left: 600px;opacity: 0.8;opacity: 0.8;"> Student Fees Form </h1>


            <form action=" " method="post">
            
            <label for="Student USN" id="usn-label"><b> Fees ID</b> <br><br> </label> 
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="FeesID"  required>
            <br><br><br>

            <label for="Student USN" id="usn-label"><b> Student USN</b> <br><br> </label> 
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="StudentID"  required>
            <br><br><br>

            <h3>Fee Status</h3>
            <b>
            <input type="checkbox" id="fees1" name="fees[]" value="Tuition Fees">Tuition Fees<br>
        
            <input type="checkbox" id="fees2" name="fees[]" value="College Fees">College Fees<br>
            
            <input type="checkbox" id="fees3" name="fees[]" value="E - Resource Consortium Fee">E - Resource Consortium Fee<br>
            
            <input type="checkbox" id="fees4" name="fees[]" value="Cultural Activities">Cultural Activities<br>
            
            <input type="checkbox" id="fees5" name="fees[]" value="University Fee">University Fee<br>
            
            <br><br>

            <label for="Student fees" id="fees-label"><b> Fees to be paid</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="Studentfees" required>  
            <br><br>

            <label for="Student-fees" id="fees-paid"><b> Amount paid</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="feespaid" required>  
            <br><br>
            
            <input id="submit" type="submit" value="Submit" class="submit-button" name="Submit2">
            
        </form>
    </body>

</html>
<?php

if(isset($_POST['Submit2'])){
    $feesID=$_POST['FeesID'];
    $studentID=$_POST['StudentID'];
    $feesParticulars=$_POST['fees'];
    $feesToBePaid=$_POST['Studentfees'];
    $feespaid=$_POST['feespaid'];
    $dueAmount=$_POST['Studentfees'] - $_POST['feespaid'];
    $checkboxesselected=implode("," ,$feesParticulars);
    if($dueAmount==0){
         $status='PAID';
     }
     else{
         $status='NOT CLEARED';
     }

     $query2="insert into fees(FeesID,StudentID,FeeParticulars,FeesToBePaid,FeesPaid,DueAmount,FeesStatus) values('$feesID','$studentID','$checkboxesselected','$feesToBePaid','$feespaid','$dueAmount','$status')";
    
     $run=mysqli_query($conn,$query2) or die(mysqli_error($conn));

     if($run){
            echo '<script type="text/javascript">alert("Form Submitted")</script>';
     }
     else{
         echo '<script type="text/javascript">alert("Form Not Submitted")</script>';
     }
    }

?>     