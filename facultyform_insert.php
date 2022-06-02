<?php
$server="localhost";
$username="root";
$password="#madhukumar123";
$dbname="mydb";

$conn=mysqli_connect($server , $username , $password , $dbname);


if(isset($_POST['Submit'])){
    $StaffID=$_POST['StaffID'];
    $Name=$_POST['StaffName'];
    $GeneratePassword=$_POST['StaffPassword'];
    $StaffGender=$_POST['gender'];
    $StaffDOB=$_POST['StaffDOB'];
    $StaffAge=(date("Y") - date("Y",strtotime($_POST['StaffDOB'])));
    $StaffPhoneNumber=$_POST['StaffContact'];
    $DeptID=$_POST['dept'];
    $StaffQualification=$_POST['StaffQualification'];
    $StaffDesignation=$_POST['StaffDesignation'];
    $StaffExpertisedIn=$_POST['StaffExpertise'];
    $StaffJoiningDate=$_POST['StaffJoiningDate'];

    $query1="insert into staff(StaffID,StaffName,ProctorPassword,StaffGender,DOB,StaffPhoneNumber,DeptID,StaffAge,Qualification,Designation,ExpertisedIn,JoiningDate) values('$StaffID','$Name','$GeneratePassword','$StaffGender','$StaffDOB','$StaffPhoneNumber','$DeptID','$StaffAge','$StaffQualification','$StaffDesignation','$StaffExpertisedIn','$StaffJoiningDate')";

    $run=mysqli_query($conn,$query1) or die(mysqli_error($conn));

    if($run){
        echo '<script type="text/javascript">alert("Form Submitted")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Form Not Submitted")</script>';
    }
}
?> 