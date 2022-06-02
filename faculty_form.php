<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            SJBIT Faculty Registration
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
           
            <form action="./facultyform_insert.php" method="post">


            <label for="staffname" id="staff-label"><b> Name</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="StaffName" required>  
            <br><br><br>

            <label for="staffid" id="ssn-label"><b> Staff ID</b> <br><br> </label> 
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="StaffID"  required>
            <br><br><br>  

            <label for="staffpassword" id="password-label"><b> Generate Password (if staff Proctor)</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="password" name="StaffPassword" >  
            <br><br><br> 


            <label for="staffDOB" id="dob-label"><b>Date of Birth</b> <br><br> </label>
            <input 
            style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 3rem;"type="date" name="StaffDOB" placeholder="Your DOB" required>
            <br><br><br>
            
            <label for="staff-gender" id="staff-gender"> <b>Please specify your gender</b> <br></label>
            <input id="gender-select" type="radio" id="male" name="gender" value="Male">
            <label for="gender-select"> <b> Male </b> <br>
            <input id="gender-select" type="radio" id="female" name="gender" value="Female">
            <label for="gender-select"> <b> Female </b> <br>
            <input id="gender-select" type="radio" id="others" name="gender" value="Others">
            <label for="gender-select"> <b> Others </b> <br>
            <br><br><br>


            <label for="staff Ph No" id="phno-label"><b>Staff Contact Number</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="StaffContact" required>
            <br><br> <br> 

            <h3>Department</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="dept" id="course" required>
            
            <option value="Not Selected">choose a dept</option>
            <option value="1">Admin</option>
            <option value="2">CSE</option>
            <option value="3">ISE</option>
            <option value="4">ECE</option>
            <option value="5">EEE</option>
            <option value="6">Mech</option>
            <option value="7">Civil</option>
            </select>
            <br><br><br>

            <h3>Qualification</h3>
            <b>
                <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="StaffQualification" id="course" required>
                <option >Choose a qualification</option>    
                <option value="BE.,M.Tech">BE.,M.Tech</option>
                    <option value="BE.,M.Tech,Ph.D">BE.,M.Tech,Ph.D</option>
                    <option value="BE.,M.Tech,Ph.D">BE.,M.Tech,Ph.D</option>
                </select>
                <br> <br> <br> 


            <h3>Designation</h3>
                <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="StaffDesignation" id="course" required>
                <option >Choose a designation</option>   
                <option value="Assistant Professor">Assistant Professor</option>
                    <option value="Associate Professor">Associate Professor</option>
                    <option value="Professor">Professor</option>
                    <option value="Professor & HOD">Professor & HOD</option>
                </select>
                <br><br><br>

                <h3>Expertise</h3>
                <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="StaffExpertise" id="course" required>
                <option >Choose a field</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Image Processing">Image Processing</option>
                <option value="Digital Image Processing">Digital Image Processing</option>
                <option value="Networking">Networking</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Electronics & Communication">Electronics & Communication</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Web Technology">Web Technology</option>
                <option value="Industry Training">Industry Training</option>
                <option value="others">Others</option>
                </select>
                <br><br><br>

                <h3>Joining Date</h3>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 3rem;"type="date" name="StaffJoiningDate" placeholder="Your DOB" required>
            <br><br><br>

            <input id="submit" type="submit" value="Submit" name="Submit" class="submit-button">
            
        </form>
    </body>

</html>