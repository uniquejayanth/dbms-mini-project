<!-- 
    <!DOCTYPE html>
    <html lang="en">
        <head><meta charset="utf-8" />
        <title>SJBIT Portal </title>
        <style>
            @font-face {
                    font-family: DM Sans;
                    src: url('./fonts/DMSans-Regular.ttf')format('truetype');
                    font-weight: normal;
                    font-style: normal;
                }
            #footer {
                position: absolute;
                padding:35px 70px 50px 90px;
                color: #E6642E;

            }
            .top-img{
                position: absolute;
                display: block;
                margin-left: 15px;
                margin-top: 15px;
                
            }
            .btm-img{
                position: absolute;
                display: block;
                margin-left: 1020px;
                margin-top: 640px;
                opacity: 0.5;
            }
            .icon-edit{
                position: absolute;
                transform: scale(0.4);
                display: block;
                margin-left: -100px;
                margin-top: 350px; 
                opacity: 0.8;
            }
            .icon-edit:hover{
                opacity: 1;
                transform: scale(0.5);
                transition: transform .5s ease;
                
            }
            .top-img:hover{
                transform: scale(1.1);
                transition: transform .5s ease;
            }
            .btn-primary{
                position: absolute;
                max-width: 100%;
                border-radius: 45px;
                padding:35px 100px 35px 100px;
                color:white;
                opacity: 0.9;
                background-color:transparent;
                margin-left: 600px;
                margin-right: auto;
                margin-bottom: auto;
                display:block;
                border-color: transparent;
                font-size: 65px;
                font-weight: bold;
                font-family:'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                
            }
            .btn-primary:hover{
                hover: auto;
                color: #EC6A38;
                opacity: 1.0;
                transform: scale(1.3);
                transition: transform .5s ease;
                cursor: pointer;
            }
            .about-btn{
                position: absolute;
                display: block;
                margin-left: 15px;
                margin-top: 55px;
                font-size: 35px;
                font-weight: normal;
                font-family:'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-weight: bold;
                border-radius: 45px;
                color:white;
                opacity: 0.8;
                background-color:transparent;
                border-color: transparent;
            }
            .about-btn:hover{
                color: #EC6A38;
                opacity: 1.0;
                transform: scale(1.2);
                transition: transform .3s ease;
                cursor: pointer;
                position: absolute;
        
            }
            .btn-div{
                background: transparent;
            }
            body{
                background-color: #FFFEFE;
            }
            html{
                background-image: url("./images/bg-01.png");
                background-repeat: no-repeat;
            }

        </style>
        </head>
        <body> 
            <div>
                <a href="./index.php">
                <img class="top-img" src="./images/sjbicon2.png" alt="SJB logo" align="center"></a>
            </div>
            <div> 
            <a href="./adminlogin.php" > <input class="btn-primary" style="margin-top: 80px;margin-left:630px" type="button" value="ADMIN LOGIN" /> </a>
            <a href="./studentlogin.php"> <input class="btn-primary" style="margin-top: 280px" type="button"  value="STUDENT LOGIN" /> </a>
            <a href="./proctorlogin.php"> <input class="btn-primary" style="margin-top: 480px" type="button"  value="PROCTOR LOGIN" /> </a>
                
            </div>
            <a href="#">
            <img class="icon-edit" src="./images/icon1.png" alt="SJB logo" align="center">
            <input class="about-btn" style="margin-top: 420px" type="button"  value="PROJECT REPORT" /> </a>
            <footer> 
                <img class="btm-img" src="./images/recog.png" alt="SJB logo">
                
            </footer>
        </body>

    </html> -->


    
    <!DOCTYPE html>
    <html lang="en">
        <head><meta charset="utf-8" />
        <title>SJBIT Portal </title>
        <style>
            @font-face {
                    font-family: DM Sans;
                    src: url('./fonts/DMSans-Regular.ttf')format('truetype');
                    font-weight: normal;
                    font-style: normal;
                }
            #footer {
                position: absolute;
                padding:35px 70px 50px 90px;
                color: #E6642E;

            }
            .top-img{
                position: absolute;
                display: block;
                margin-left: 15px;
                margin-top: 15px;
                
            }
            .btm-img{
                position: absolute;
                display: block;
                margin-left: 1020px;
                margin-top: 640px;
                opacity: 0.5;
            }
            .icon-edit{
                position: absolute;
                transform: scale(0.4);
                display: block;
                margin-left: 1500px;
                margin-top: 450px; 
                opacity: 0.8;
            }
            .icon-edit:hover{
                opacity: 1;
                transform: scale(0.5);
                transition: transform .5s ease;
                
            }
            .top-img:hover{
                transform: scale(1.1);
                transition: transform .5s ease;
            }
            .btn-primary{
                position: absolute;
                max-width: 100%;
                border-radius: 45px;
                padding:35px 100px 35px 100px;
                color:white;
                opacity: 0.9;
                background-color:transparent;
                margin-left: 600px;
                margin-right: auto;
                margin-bottom: auto;
                display:block;
                border-color: transparent;
                font-size: 65px;
                font-weight: bold;
                font-family:'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                
            }
            .btn-primary:hover{
                hover: auto;
                color: #EC6A38;
                opacity: 1.0;
                transform: scale(1.3);
                transition: transform .5s ease;
                cursor: pointer;
            }
            #navbar{
                margin-top:auto;
                margin-right: 10px;
                width:100%;
                background-color: transparent;
                color: white;
                overflow:hidden;
                position:absolute;
                display: block;
            }
            #navbar li{
                font-family: 'DM Sans','Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-weight:bold;
                text-align:center;
                padding:70px 15px;
                text-decoration:none;
                font-size:25px;
                display: block;
                float:right;
                margin-top:5px;
                margin-right: 20px;
                color:white;
                opacity: 0.7;
                cursor:pointer;
                transition:background .3s ease-in-out,color .3s ease-in-out;
            }
            #navbar li a input{
                font-size:22px;
                padding:5px;
                border-radius:10px;
            }

            #navbar li:hover{
                background-color:transparent;
                color:#D64A10;
                opacity: 0.7;
                transform: scale(1.4);
                transition: transform .3s ease;
            }
            #navbar li:active{
                background-color:transparent;
            }
            .about-btn{
                position: absolute;
                display: block;
                margin-left: 1590px;
                margin-top: 100px;
                font-size: 35px;
                font-weight: normal;
                font-family:'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-weight: bold;
                border-radius: 45px;
                color:white;
                opacity: 0.8;
                background-color:transparent;
                border-color: transparent;
            }
            .about-btn:hover{
                color: #EC6A38;
                opacity: 1.0;
                transform: scale(1.2);
                transition: transform .3s ease;
                cursor: pointer;
                position: absolute;
        
            }
            .btn-div{
                background: transparent;
            }
            .top-part{
                border-radius: 50%;
            }
            body{
                background-color: #FFFEFE;
            }
            html{
                background-image: linear-gradient(to right,#d2ccc4,#2f4353);
                background-repeat: linear;
            }
            h1{
                background-color: transparent;
                margin-top:200px;
                margin-left: 110px;
                text-align: center;
                position: absolute;
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 70px;
                color: white;
                
            }
            p{
                position: absolute; 
                margin-top: 290px;
                margin-left: 400px;
                margin-right: 400px;
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 25px;
                color: white;
            }

        </style>
        </head>
        <body> 
        <div class="top-part">
                <a href="./index.php">
                <img class="top-img" src="./images/sjbicon2.png" alt="SJB logo" align="center"></a>
            
            <nav id="navbar">
              <ul>
              <li><a href="./adminlogin.php" > <input class="nav-link" type="button" value="ADMIN LOGIN" /> </a></li>
              <li><a href="./studentlogin.php"> <input class="nav-link"  type="button"  value="STUDENT LOGIN" /> </a></li>
              <li><a href="./proctorlogin.php"> <input class="nav-link"  type="button"  value="PROCTOR LOGIN" /> </a></li>
              <li><a href="#"> <input class="nav-link"  type="button"  value="REPORT" /> </a></li>
              </ul>
            </nav>
        </div>
        
        <div>
            <h1>Student Database Management System</h1>
        </div>
            
            <p> <br>
                This project <i><b>“Student Database Management System” </b></i> provides us a simple interface for maintainance of student information. It can be used by educational
                institutes or colleges to maintain the records of students easily. Achieving this
                objective is difficult using a manual system as the information is scattered, can be
                redundant and collecting relevant information may be very time consuming. All these
                problems are solved using this project.<br><br>
                Throughout the project the focus has been on presenting information in an easy and
                intelligible manner. The project is very useful for those who want to know about
                Student Database Management Systems and want to develop softwares/websites
                based on the same concept.<br><br>
                This project provides facilities like online registration and profile creation of students
                thus reducing paperwork and automating the record genreration process in an
                educational institution.</p>
            
        </body>

    </html>