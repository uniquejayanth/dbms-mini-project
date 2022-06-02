<?php
include("conn.php");
if($conn){
    //echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}


$staffid=$_GET['staffid'];
$query=mysqli_query($conn, "select * from staff where StaffID='$staffid'");
$run=mysqli_fetch_array($query);


if(isset($_POST['Submit'])){
    $StaffID=$_POST['StaffID'];
    $Name=$_POST['StaffName'];
    $StaffGender=$_POST['gender'];
    $StaffDOB=$_POST['StaffDOB'];
    $StaffAge=(date("Y") - date("Y",strtotime($_POST['StaffDOB'])));
    $StaffPhoneNumber=$_POST['StaffContact'];
    $DeptID=$_POST['dept'];
    $StaffQualification=$_POST['StaffQualification'];
    $StaffDesignation=$_POST['StaffDesignation'];
    $StaffExpertisedIn=$_POST['StaffExpertise'];
    $StaffJoiningDate=$_POST['StaffJoiningDate'];

    $update=mysqli_query($conn, "update staff set StaffName='$Name',DOB='$StaffDOB',
    StaffGender='$StaffGender',StaffPhoneNumber='$StaffPhoneNumber',DeptID='$DeptID',
    StaffAge='$StaffAge',Qualification='$StaffQualification',
    Designation='$StaffDesignation',
    ExpertisedIn='$StaffExpertisedIn',JoiningDate='$StaffJoiningDate'
    where StaffID='$staffid'");

    if(!$update){
        echo mysqli_error(); 
    }
    else{
        header("location:admin_procedit.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            Admin | Faculty Update
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
                background-image: linear-gradient(to right,#d99ec9,#f6f0c4);
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
        
            <h1 style="margin-top:250px;margin-left: 560px;opacity: 0.8;opacity: 0.8;"> Faculty Registration Form </h1>
           
            <form action=" " method="post">

            <label for="staffid" id="ssn-label"><b> Staff ID</b> <br><br> </label> 
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="StaffID"  value="<?php echo $run['StaffID'] ?>" required>
            <br><br><br> 

            <label for="staffname" id="staff-label"><b> Name</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="StaffName" value="<?php echo $run['StaffName'] ?>" required>  
            <br><br><br>

            <label for="staffDOB" id="dob-label"><b>Date of Birth</b> <br><br> </label>
            <input 
            style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 3rem;"type="date" 
            value="<?php echo $run['DOB'] ?>" name="StaffDOB" placeholder="Your DOB" required>
            <br><br><br>
            
            <label for="staff-gender" id="staff-gender"> <b>Please specify your gender</b> <br></label>
            <input id="gender-select" type="radio" id="male" name="gender" value="Male" value="<?php echo $run['StaffGender'] ?>"
                <?php
                    if($run['StaffGender']=='Male'){
                        echo 'checked';
                    }

                ?>
            >
            <label for="gender-select"> <b> Male </b> <br>
            <input id="gender-select" type="radio" id="female" name="gender" value="Female" value="<?php echo $run['StaffGender'] ?>"
                <?php
                    if($run['StaffGender']=='Female'){
                        echo 'checked';
                    }

                ?>>
            <label for="gender-select"> <b> Female </b> <br>
            <input id="gender-select" type="radio" id="others" name="gender" value="Others" value="<?php echo $run['StaffGender'] ?>"
                <?php
                    if($run['StaffGender']=='Others'){
                        echo 'checked';
                    }

                ?>>
            <label for="gender-select"> <b> Others </b> <br>
            <br><br><br>


            <label for="staff Ph No" id="phno-label"><b>Staff Contact Number</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="StaffContact" value="<?php echo $run['StaffPhoneNumber'] ?>" required>
            <br><br> <br> 

            <h3>Department</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="dept" 
            value="<?php echo $run['DeptID'] ?>" id="course" required>
            
            <option value="Not selected"
                <?php  if( $run['DeptID']=='Not selected'){
                    echo 'selected';
                }
                ?>>choose a dept</option>
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

            <h3>Qualification</h3>
            <b>
                <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="StaffQualification" 
                value="<?php echo $run['Qualification'] ?>" id="course" required>
                <option >Choose a qualification</option>    
                <option value="BE.,M.Tech"
                    <?php
                        if($run['Qualification']=='BE.,M.Tech'){
                            echo 'selected';
                        }
                    ?>>BE.,M.Tech</option>
                    <option value="BE.,M.Tech,Ph.D"
                    <?php
                        if($run['Qualification']=='BE.,M.Tech,Ph.D'){
                            echo 'selected';
                        }
                    ?>>BE.,M.Tech,Ph.D</option>
                </select>
                <br> <br> <br> 


            <h3>Designation</h3>
                <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="StaffDesignation" 
                value="<?php echo $run['Designation'] ?>" id="course" required>
                <option >Choose a designation</option>   
                <option value="Assistant Professor"
                    <?php
                        if($run['Designation']=='Assistant Professor'){
                            echo 'selected';
                        }
                    ?>
                >Assistant Professor</option>
                    <option value="Associate Professor"
                    <?php
                        if($run['Designation']=='Associate Professor'){
                            echo 'selected';
                        }
                    ?>>Associate Professor</option>
                    <option value="Professor"
                    <?php
                        if($run['Designation']=='Professor'){
                            echo 'selected';
                        }
                    ?>>Professor</option>
                    <option value="Professor & HOD"
                    <?php
                        if($run['Designation']=='Professor & HOD'){
                            echo 'selected';
                        }
                    ?>>Professor & HOD</option>
                </select>
                <br><br><br>

                <h3>Expertise</h3>
                <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="StaffExpertise"
                value="<?php echo $run['ExpertisedIn'] ?>"  id="course" required>
                <option >Choose a field</option>
                <option value="Computer Science"
                <?php
                    if($run['ExpertisedIn']=='Computer Science'){
                        echo 'selected';

                    }
                ?>>Computer Science</option>
                <option value="Image Processing"
                <?php
                    if($run['ExpertisedIn']=='Image Processing'){
                        echo 'selected';
                    }
                ?>>Image Processing</option>
                <option value="Digital Image Processing"
                <?php
                    if($run['ExpertisedIn']=='Digital Image Processing'){
                        echo 'selected';
                    }
                ?>>Digital Image Processing</option>
                <option value="Networking"
                <?php
                    if($run['ExpertisedIn']=='Networking'){
                        echo 'selected';
                    }
                ?>>Networking</option>
                <option value="Software Engineering"
                <?php
                    if($run['ExpertisedIn']=='Software Engineering'){
                        echo 'selected';
                    }
                ?>>Software Engineering</option>
                <option value="Electronics & Communication"
                <?php
                    if($run['ExpertisedIn']=='Electronics & Communication'){
                        echo 'selected';
                    }
                ?>>Electronics & Communication</option>
                <option value="Electrical Engineering"
                <?php
                    if($run['ExpertisedIn']=='Electrical Engineering'){
                        echo 'selected';
                    }
                ?>>Electrical Engineering</option>
                <option value="Web Technology"
                <?php
                    if($run['ExpertisedIn']=='Web Technology'){
                        echo 'selected';
                    }
                ?>>Web Technology</option>
                <option value="Industry Training"
                <?php
                    if($run['ExpertisedIn']=='Industry Training'){
                        echo 'selected';
                    }
                ?>>Industry Training</option>
                <option value="others"
                <?php
                    if($run['ExpertisedIn']=='others'){
                        echo 'selected';
                    }
                ?>>Others</option>
                </select>
                <br><br><br>

                <h3>Joining Date</h3>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 3rem;"type="date" 
            value="<?php echo $run['JoiningDate'] ?>" name="StaffJoiningDate" placeholder="Your DOB" required>
            <br><br><br>

            <input id="submit" type="submit" value="Submit" name="Submit" class="submit-button">
            
        </form>
    </body>

</html>