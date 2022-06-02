<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            SJBIT Student proctor form
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
        
            <h1 style="margin-top:250px;margin-left: 580px;opacity: 0.8;opacity: 0.8;"> Student Proctor Form </h1>


            <form action="./studentstudy_insert.php" method="post">


            <label for="Student USN" id="usn-label"><b> Student USN</b> <br><br> </label> 
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="StudentUSN"  required>
            <br><br><br>


            <label for="Student Password" id="password-label"><b> Subject ID</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="SubjectId"  required>  
            <br><br><br>

            <label for="Student Password" id="password-label"><b> Classes Held</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="password" name="ClassesHeld"  required>  
            <br><br><br>

            <label for="Student Password" id="password-label"><b> Classes Attended</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="password" name="ClassesAttended"  required>  
            <br><br><br>
            

            <label for="Student Ph No" id="phno-label"><b>Inter Test 1</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="InternalTest1" required>
            <br><br><br>

            
            <label for="Student Ph No" id="phno-label"><b>Inter Test 2</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="InternalTest2" required>
            <br><br><br>

            <label for="Student Ph No" id="phno-label"><b>Inter Test 3</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="InternalTest3" required>
            <br><br><br>

            <label for="Student Ph No" id="phno-label"><b>Externals Obtained</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="ExternalMarks" required>
            <br><br><br>

           

            <input id="submit" type="submit" value="Submit" class="submit-button" name="Submit4">
            
        </form>
    </body>

</html>