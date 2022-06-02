<?php
include("conn.php");
if($conn){
   // echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}
session_start();

$stid=$_GET['stid'];
$subid=$_GET['subid'];
$query=mysqli_query($conn, "select * from study where StudentID='$stid' and SubjectID='$subid'");
$run=mysqli_fetch_array($query);


if(isset($_POST['Submit'])){
    $subcode=$_POST['subcode'];
    $classesheld=$_POST['classesheld'];
    $classesattended=$_POST['Classesattended'];
     $ia1=$_POST['internal1'];
     $ia2=$_POST['internal2'];
     $ia3=$_POST['internal3'];
     $mcq=$_POST['mcq'];
     $external=$_POST['external'];
     $remarks=$_POST['remarks'];

    $update=mysqli_query($conn, "update study set SubjectID='$subcode',ClassesHeld='$classesheld',
    ClassesAttended='$classesattended',InternalTest1='$ia1',InternalTest2='$ia2',
    InternalTest3='$ia3',MCQ='$mcq',ExternalObtained='$external',
    Remarks='$remarks' where StudentID='$stid' and SubjectID='$subid'");

    if(!$update){
        echo mysqli_error($conn); 
    }
    else{
        header("location:proc_studentmarksview.php");
    }
}

?>
 
 <!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            Proctor | Update marks
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
                background-image: linear-gradient(to right,#f6ebe6,#aee1f9);
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            form{
                background: rgb(255,255,255,0.4);
                padding: 2.5rem 2.5rem;
                border-radius: 2rem;
                width: 500px;
                margin-top: 50px;
                margin-left: 465px;
            }
            .submit-button{
                border-radius: 2rem;
                background:rgba(255,255,255,0.8);
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
                background:rgba(255,255,255,1);
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
            hr{
                background-color: rgba(0,0,0,0.3);
                border-color: transparent;
            }
            
        </style>
    </head>
        
          
    <body>
        
        <img class="top-img" src="./images/sjbicon2.png" alt="SJB logo">
        
            <h1 align="center" style="margin-top:250px;opacity: 0.8;opacity: 0.8;"> Update marks and attendance below </h1>
            <form action=" " method="POST">

                <label for="Student USN" id="usn-label"><b> Enter Student USN</b> <br><br> </label> 
                <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.7);padding:1rem 10rem;" 
                type="text" name="studentusn" value="<?php echo $stid ?>"><br>
                <br> 

                <label for="Subject Code" id="usn-label"><b> Enter Subject Code</b> <br><br> </label> 
                <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.7);padding:1rem 10rem;" 
                type="text" name="subcode" value="<?php echo $subid ?>"><br>
                <br> 

                <h3>Attendance Details :-</h3>
                <label for="Classes Held" id="S1IA-1"><b>Number of Classes Held &nbsp;&nbsp;&nbsp;</b></label>
                <input style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.7); padding:0.4rem 2rem" 
                type="number" name="classesheld"  min="0" max="80" ><br><br>

                <label for="Classes Attended" id="S1IA-1"><b>Number of Classes Attended &nbsp;&nbsp;&nbsp;</b></label>
                <input style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.7); padding:0.4rem 2rem" 
                type="number" name="Classesattended"  min="0" max="80" ><br><br>

                <label for="S1IA-1" id="S1IA-1"><b>1<sup>st </sup>IA &nbsp;&nbsp;&nbsp;</b></label>
                <input style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.7); padding:0.4rem 2rem" 
                type="number" name="internal1"  min="0" max="50" ><br><br>

                <label for="S1IA-2" id="S1IA-2"><b>2<sup>nd</sup> IA &nbsp;</b> </label>
                <input style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.7); padding:0.4rem 2rem" 
                type="number" name="internal2"  min="0" max="50">
                <br><br>

                <label for="S1IA-3" id="S1IA-3"><b>3<sup>rd</sup> IA &nbsp;</b> </label>
                <input style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.7); padding:0.4rem 2rem" 
                type="number" name="internal3"  min="0" max="50" >
                <br><br>

                <label for="S1IA-3" id="S1IA-3"><b>MCQ</b> </label>
                <input style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.7); padding:0.4rem 2rem" 
                type="number" name="mcq"  min="0" max="10" >
                <br><br>

                <label for="S1external" id="S1external"><b>External Marks</b><br><br> </label>
                <input style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.7); padding:0.4rem 2rem" 
                type="number" name="external"  min="0" max="100" >
                <br><br>

                <label for="remarks" id="remarks"><b> Remarks</b> <br> </label><br>
                <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
                type="remarks" name="remarks" >  
                <br><br><br>

                <input id="submit" type="submit" name="Submit" value="Submit" class="submit-button">
            
            </form>
        </body>
    
    </html>
    



    <?php
    // if(isset($_POST['Submit'])){
    //     $stuusn=$_POST['studentusn'];
    //     $subid=$_POST['subcode'];
    //     $classesheld=$_POST['classesheld'];
    //     $classesattended=$_POST['Classesattended'];
    //     $attendancepercent=($_POST['Classesattended']/$_POST['classesheld'])*100;
    //     $ia1=$_POST['internal1'];
    //     $ia2=$_POST['internal2'];
    //     $ia3=$_POST['internal3'];
    //     $iamax=50;
    //     $mcq=$_POST['mcq'];
    //         $iaaggregate=(($_POST['internal1']+$_POST['internal2']+$_POST['internal3'])/150)*30;
    //         $externals=($_POST['external']/100)*60;
    //         $total=$iaaggregate+$mcq+$externals;
    //         if($total>=35){
    //             $status="PASS";
    //         }
    //         else{
    //             $status="FAIL";
    //         }
    //     $ramarks=$_POST['remarks'];

    //     $query="insert into study(StudentID,SubjectID,ClassesHeld,ClassesAttended,AttendancePercentage,InternalTest1,InternalTest2,InternalTest3,InternalMaxMarks,MCQ,InternalAggregate,ExternalObtained,TotalMarks,Status,Remarks)
    //     values('$stuusn','$subid','$classesheld','$classesattended',
    //     '$attendancepercent','$ia1','$ia2','$ia3','$iamax','$mcq','$iaaggregate',
    //     '$externals','$total','$status','$ramarks')";

    //     $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
        
    //     if($run){
    //         echo '<script type="text/javascript">alert("Form Submitted")</script>';
    //     }
    //     else{
    //         echo '<script type="text/javascript">alert("Form Not Submitted")</script>';
    //     }
    
    
    
    // }
    
    
    ?>

               
               