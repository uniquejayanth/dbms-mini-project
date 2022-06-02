<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Dashboard</title>
        <meta charset="utf-8"/>
        <style>
            @font-face {
                font-family: DM Sans;
                src: url('./fonts/DMSans-Regular.ttf')format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            .student-png{
                position: absolute;
                display:block;
                margin-top:150px;
                margin-left:-400px;
                opacity:0.3;
                height: 300px;
                width: 300px;
            }

            .teacher-png{
                position:absolute;
                display:block;
                margin-top:120px;
                margin-left:400px;
                opacity:0.3;
                height: 300px;
                width: 300px;
            }
            
            .text-edit{
                position: absolute;
                display:block;
                margin-top:30px;
                margin-left: -140px;
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 40px;
                font-weight: bold;
                color: rgba(0,0,0,0.5);
                
            }
            .logout-btn{
                position: absolute;        
                font-size: 30px;
                font-weight: bold;
                font-family:'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                border-radius: 1rem;
                background-color: white;
                padding: 10px;
                opacity: 0.5;
                border-color: transparent;  
                align-items: center;      
            }
            .logout-btn:hover{
                background-color: white;
                opacity: 0.7;
                border-color: transparent;
                transform: scale(1.5);
                transition: transform .7s ease;
                cursor: pointer
            }

            body{
                background-image: linear-gradient(to right,#fc575e,#f7b42c);
            }
            
            

            .btn-primary{
                position: absolute;        
                margin-left: -300px;
                margin-top:200px;
                font-size: 35px;
                font-weight: bold;
                font-family:'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                border-radius: 1.1rem;
                background-color: white;
                opacity: 0.5;
                border-color: transparent;
                background-color: rgba(255,255,255,0.2);
            }
            .btn-primary:hover{
                background-color: white;
                opacity: 0.7;
                border-color: transparent;
                transform: scale(1.5);
                transition: transform .7s ease;
                cursor: pointer;
            }
            /* GLOBAL STYLES */
            body {
                padding-top: 4em;
                display: flex;
                justify-content: center;
            }

/* DEMO-SPECIFIC STYLES */
            .typewriter h1 {
                color: #fff;
                font-size: 50px;
                font-family: monospace;
                overflow: hidden; /* Ensures the content is not revealed until the animation */
                border-right: .15em solid orange; /* The typwriter cursor */
                white-space: nowrap; /* Keeps the content on a single line */
                margin: 0 auto; /* Gives that scrolling effect as the typing happens */
                letter-spacing: .15em; /* Adjust as needed */
          animation: 
                typing 3.5s steps(30, end),
                blink-caret .5s step-end infinite;
            }

/* The typing effect */
            @keyframes typing {
                from { width: 0 }
                to { width: 100% }
            }

/* The typewriter cursor effect */
            @keyframes blink-caret {
                from, to { border-color: transparent }
                50% { border-color: orange }
            }

        </style>
    </head>
    <body>
        <div class="typewriter">
            <h1>Welcome back, Admin!</h1>
            <a href="./Branch_form.php"> <input class="btn-primary" type="button" style="margin-top: 50px;" value="Add Branch&nbsp;" /> </a>
            <a href="./staffteaches_form.php"> <input class="btn-primary" type="button" style="margin-top: 50px;margin-left:10px;" value="Add StaffTeaching&nbsp;" /> </a>
            <a href="./studentsubject_form.php"> <input class="btn-primary" type="button" style="margin-top: 50px;margin-left:450px;" value="Add Subjects&nbsp;" /> </a>
            <a href="./adminlogin.php"> <input class="btn-primary" type="button" style="margin-top: 50px;margin-left:800px;" value="Logout&nbsp;" /> </a>

            <section style="margin-top:80px;">
                <img class="student-png" style="margin-top:150px" src="./images/graduated.png" alt="student glyph"><br>
                <p class="text-edit" > Student Database</p><br>
                <a href="./admin_stuview.php"> <input class="btn-primary"  style="margin-top: 160px; margin-left:-50px;" type="button" value="View&nbsp;" /> </a>
                <a href="./admin_stuedit.php"> <input class="btn-primary" style="margin-top: 230px; margin-left:-50px;" type="button"  value="Edit &nbsp;" /> </a>
                <a href="./student_form.php"> <input class="btn-primary" style="margin-top: 300px; margin-left:-50px;" type="button"  value="Add&nbsp;&nbsp;" /> </a>
                <a href="./studentfees_form.php"> <input class="btn-primary" style="margin-top: 370px; margin-left:-50px;" type="button"  value="update fees&nbsp;&nbsp;" /> </a>

           </section>
          
          <section>
                <img class="teacher-png" src="./images/teacher.png" alt="teacher glyph"><br>
                <p class="text-edit"style=" margin-top: -6px; margin-left: 730px;">Faculty Database</p><br>
                <a href="./admin_procview.php"> <input class="btn-primary" type="button" style="margin-top: 110px; margin-left:850px;" value="View" /> </a>
                <a href="./admin_procedit.php"> <input class="btn-primary" type="button" style="margin-top: 180px; margin-left:850px;" value="Edit&nbsp;" /> </a>
                <a href="./faculty_form.php"> <input class="btn-primary" type="button" style="margin-top: 250px; margin-left:850px;" value="Add&nbsp;" /> </a>
            </section>

          <button class="logout-btn" style="margin-top:570px; margin-left:300px">Log Out</button>
        </div>            
        
    </body>
</html>