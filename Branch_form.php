<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            SJBIT Branches
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
        
            <h1 style="margin-top:250px;margin-left: 560px;opacity: 0.8;opacity: 0.8;"> Adding Branch Form </h1>
           
            <form action="./branchform_insert.php" method="post">

            <h3>Department ID</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="deptID" id="course" required>
            <option>Choose dept ID</option>
            <option value="1">1.Admin</option>
            <option value="2">2.CSE</option>
            <option value="3">3.ISE</option>
            <option value="4">4.ECE</option>
            <option value="5">5.EEE</option>
            <option value="6">6.Mech</option>
            <option value="7">7.Civil</option>
            </select>
            <br><br><br>


            <h3>Department Name</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="deptName" id="course" required>
            <option>Choose dept</option>
            <option value="Admin">Admin</option>
            <option value="CSE">CSE</option>
            <option value="ISE">ISE</option>
            <option value="ECE">ECE</option>
            <option value="EEE">EEE</option>
            <option value="Mech">Mech</option>
            <option value="Civil">Civil</option>
            </select>
            <br><br><br>


            <h3>Duration</h3>
            <select style="font-size: 0.85rem;font-weight:bold;border-radius: 1.25rem;border-color: transparent;background:rgba(255,255,255,0.4); padding:0.4rem 1rem" name="CourceDuration" id="course" required>
            <option>Choose Duration</option>
            <option value="4 Years">4 Years</option>
            <option value="3 Years">3 Years</option>
            </select>
            <br><br><br>

            <input id="submit" type="submit" value="Submit" name="Submit" class="submit-button">
            
        </form>
    </body>

</html>