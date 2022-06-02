<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student | Exam Marks</title>
    <link rel="stylesheet" type="text/css" href="CSS/studatabase.css">
    <link rel="stylesheet" type="text/css" href="./css/all.css">
    <script src="https://kit.fontawesome.com/62a0857bae.js" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <nav>
            <div style="display: inline-block;" class="image">
            <img src="./images/sjbicon1.png" style="width: 90px;">
            </div>
            <ul class="list">
                <li><a href="./index.php" class="active5"><i class="fas fa-home"style="color: white;opacity:0.8;font-size:27px;"></i> <b style="font-size:27px;">Home</b></a></li>
                <li><a href="./student_login.php" class="active6"><i class="fas fa-users" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Student</b></a></li>
                <li><a href="./proctor_login.php" class="active6"><i class="fas fa-address-book" style="color:white;opacity:0.8;font-size: 27px;"></i> <b style="font-size:27px;">Proctor</b></a></li>
            </ul>
        </nav>
    </div>
    <input type="checkbox" name="" id="check" class="selection">
    <div class="container">
        <label for="check">
            <span class="fas fa-arrow-alt-circle-left" id="times"></span>
            <span class="fas fa-arrow-alt-circle-right" id="bars"></span>
        </label>
        <div class="head">Menu</div>
        <ol>
            <li><a href="attendance.php"><i class="fa fa-hand-paper-o"></i>Attendance</a></li>
            <li class="active"><a href="exammarks.php"><i class="fa fa-check-square-o" style="padding-right:10px;"></i>Exam Marks</a></li>
            <li><a href="fees.php"><i class="fa fa-money" style="padding-right:10px;"></i>Fees</a></li>
             <li><a href="#"><i class="fa fa-quote-left" style="padding-right:10px"></i>Assignment</a></li>
               <li><a href="syllabus.php"><i class="fa fa-share-alt" style="padding-right: 10px;"></i>Syllabus</a></li>
        </ol>
    </div>

    <section class="table">
        <div><h1 style="padding-bottom: 30px;padding-left: 30px;color:white;">Exam Report</h1></div>
        
        <br><br>
        <div class="scroll">
        <table border="1" style="border-collapse: collapse; padding-top: 50px;">
            <tr>
                <th>    </th>
                <th>    </th>
                <th>    </th>
                <th colspan="2">1 INTERNALS TEST</th>
                <th colspan="2">2 INTERNALS TEST</th>
                <th colspan="2">3 INTERNALS TEST</th>
                <th colspan="6">EXTERNAL MARKS</th>
            </tr>
            <tr>
                <th>No.</th>
                <th style="padding-right: 100px;padding-left: 100px;">Subject</th>
                <th>Subject Code</th>
                <th>Obtained Marks</th>
                <th>Max Mark</th>
                <th>Obtained Marks</th>
                <th>Max Mark</th>
                <th>Obtained Marks</th>
                <th>Max Mark</th>
                <th>Internal Aggregate</th>
                <th>External Obtained</th>
                <th>Total Marks</th>
                <th>Percent Obtained</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Design and analysis of algorithm</td>
                <td>18CS42</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>55</td>
                <td>87</td>
                <td>87.00</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Design and analysis of algorithm</td>
                <td>18CS42</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>55</td>
                <td>87</td>
                <td>87.00</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Design and analysis of algorithm</td>
                <td>18CS42</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>55</td>
                <td>87</td>
                <td>87.00</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Design and analysis of algorithm</td>
                <td>18CS42</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>50</td>
                <td>32</td>
                <td>55</td>
                <td>87</td>
                <td>87.00</td>
                <td>Pass</td>
            </tr>
        </table>
    </div>
    </section>
</body>
</html>