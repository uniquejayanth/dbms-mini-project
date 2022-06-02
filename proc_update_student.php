<?php
include("conn.php");
if($conn){
   // echo "connection OK";
}
else{
    echo "Connection Failed..".mysqli_connect_error();
}
session_start();
$stuid=$_GET['stuid'];
$query1=mysqli_query($conn, "select * from studentslist where StudentID='$stuid'");
$run=mysqli_fetch_array($query1);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Proctor Dashboard | StudentView</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="./css/all.css">
	    <script src="https://kit.fontawesome.com/62a0857bae.js" crossorigin="anonymous"></script>
        <style>
            @font-face {
                font-family: DM Sans;
                src: url('./fonts/DMSans-Regular.ttf')format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            html{
                background-image: linear-gradient(to right,#f9d976,#f39f86);
            }
            .proctor-head{
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 35px;
                font-weight: bold;
                color: rgba(255,255,255,0.7);
            }
            body{
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

            }
            .container{
	height: 100%;
	width: 250px;
	position: absolute;
	background: transparent;
	z-index: 1;
	transition: 0.5s ease;
	transform: translateX(-250px);
}
.container .head{
	color: white;
	font-size: 30px;
	font-weight: bold;
	padding: 30px;
	text-transform: uppercase;
	text-align: center;
	background-color:transparent;
    
}
ol{
	width: 100%;
	list-style: none;
}
ol li{
	display: block;
	width: 100%;
}
ol li a{
	color: whitesmoke;
	padding: 15px 10px 15px 5px;
	text-decoration: none;
	display: block;
	font-size: 20px;
	letter-spacing: 1px;
	position: relative;
	transition: 0.3s;
	overflow: hidden;
	text-transform: capitalize;
}
ol li a i{
	width: 70px;
	font-size: 25px;
	text-align: center;
	padding-left: 30px;

}
ol li:hover a{
	background:rgba(255,255,255,0.1);
	border-radius: 0.3rem;
	color: rgba(0,0,0,0.7);
	letter-spacing: 3px;
}
ol li.active a{
	color: white;
}
.selection{
	-webkit-appearance: none;
	visibility: hidden;
	display: none;
    
}
span{
	position: absolute;
	right: -40px;
	top: 15px;
	height: 50px;
	font-size: 30px;
	border-radius: 2px;
	color: #fff;
	padding: 7px 8px;
	cursor: pointer;
	background:transparent;
    
}
#bars{
	background:transparent;
    
}
#check:checked ~ .container{
	transform: translateX(0);
}
#check:checked ~ .container #bars{
	display: none;
}
#check:checked ~ .table{
	margin-left: 290px;
} 
.table{
	padding-top: 60px;
	padding-left: 200px;
    align:center;
	transition: all .5s;
	background: rgb(255,255,255,0.1);
	padding: 2.5rem 2.5rem;
	border-radius: 2rem;
	margin-top: auto;
	margin-left: -20px;
	font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
tbody tr:nth-child(even) {
	background-color: rgba(255,255,255,0.4);
	}
.table div .selectsem{
	font-size: 15px;
	padding: 5px 5px 5px 5px;
	border-radius: 1rem;
	border-color: transparent;
	background-color:rgba(255,255,255,0.6);
	margin-left: 25px;
	font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;


}

.table table tr th{
	padding-left: 30px;
	padding-right: 30px;
	padding-top: 10px;
	padding-bottom: 10px;
	background-color: transparent;
	border: transparent;
	border-collapse: collapse;
	border-style:hidden;
	font-size:18px;
	text-align: center;
}
.table table tr td{
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 10px;
	padding-bottom: 10px;
	border: transparent;
	border-style: hidden;
	font-size:20px;
	text-align: center;
	font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.table .scroll{
	overflow: auto;
}
#myInput{
                position: absolute;
                background-image: url('./images/search.png');
                background-position: 10px 8px; 
                background-repeat: no-repeat;
                background-size: 8%;
                margin-top: -100px;
                margin-left: 100px;
                padding: 10px 55px 10px 55px;
                border-radius: 1.4rem;
                background-color: rgba(255,255,255,0.4);
                border-color: transparent;
            }
            #myInput:hover{
                transform: scale(1.2);
                transition: transform .7s ease;
            }
        </style>
    </head>
    <body> 
        <a href="./index.php">
        <img style="width:500px;margin-top:15px;margin-left:485px;" src="./images/sjbicon2.png" alt="SJB icon" />
        </a>
        <p class="proctor-head" align="center"> Welcome back 
            <?php 
                $staffid=$_SESSION['Staff_ID'];
                $query=mysqli_query($conn,"select StaffName from staff where StaffID='$staffid'");
				$run=mysqli_fetch_array($query);
				echo $run['StaffName'];
            ?> 
        
        </p>  
        
        <input type="checkbox" name="" id="check" class="selection">
        <div class="container">
            <label for="check">
                <span class="fas fa-arrow-alt-circle-left" id="times"></span>
                <span class="fas fa-arrow-alt-circle-right" id="bars" style=""></span>
            </label>

        <div class="head">Menu</div>
		<ol>
			<!-- <li><a href="#">Search</a></li>
			<li><a href="./report_entry.php">Remarks</a></li> -->
			<li><a href="./marks_sheet.php">Marks Entry</a></li>
		</ol>
	</div>
    
    <section class="table"><br><br><br>
        <div><h1 align="center" style="font-size:35px;padding-bottom: 30px;padding-left: 30px;color:rgb(255,255,255,0.7);margin-left: 50px;"></h1>
        <input type="text" id="myInput"  onkeyup="myFunction()" placeholder="Search for USN.."></div>
        <div>
            <datalist id="departments" >
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
                <option value="5"></option>
                <option value="6"></option>
                <option value="7"></option>
                <option value="8"></option>
            </datalist>
        </div> 
        <br><br>
        <div class="scroll">
            <?php
                $query="select s.StudentID,s.StudentName,b.BranchName,s.StudentYear,s.DOB,s.StudentAge,s.StudentGender,s.StudentPhoneNumber,s.StudentResidence,f.DueAmount,f.FeesStatus from studentslist s,branch b,fees f where s.StudentID=f.StudentID and s.DeptID=b.BranchID and s.ProcID='$staffid'";
                $run=mysqli_query($conn,$query) or die(mysqli_error($conn));;
                $total=mysqli_num_rows($run);
            ?>
        <table border="1" id="myTable" style="border-collapse: collapse; padding-top: 50px;">
            <tr>
                <th></th>
                <th>USN</th>
                <th style="padding-right: 100px;padding-left: 100px;">Name</th>
                <th>Branch</th>
                <th>Year</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Gender</th>
                <th style="padding-right:40px;padding-left:40px;">Student PhNo</th>
                <th>Residence</th>
                <th>Fees Due</th>
                <th>Fee Status</th>
            </tr>
            <?php
                if($total!=0){
                   // echo'<table border=0 width=100%>';
                    while($result=mysqli_fetch_assoc($run)){
                        echo"
                        <tr>
                        <td><a href='proc_studentmarksview.php ? stid=$result[StudentID]'><i class='fas fa-eye' style='color:black;'></i></a></td>
                            <td>&nbsp;&nbsp;&nbsp;".$result['StudentID']."</td>
                            <td>".$result['StudentName']."</td>
                            <td>".$result['BranchName']."</td>
                            <td>".$result['StudentYear']."</td>
                            <td>".$result['DOB']."</td>
                            <td>".$result['StudentAge']."</td>
                            <td>".$result['StudentGender']."</td>
                            <td>".$result['StudentPhoneNumber']."</td>
                            <td>".$result['StudentResidence']."</td>
                            <td>".$result['DueAmount']."</td>
                            <td>".$result['FeesStatus']."</td>
                            </tr>
                            ";
                    }
                }
                else{
                    echo"No record found";
                }

?>
            
        </table>
    </div>
    </section>
    <script type="text/javascript">
			function myFunction(){
				let filter=document.getElementById('myInput').value.toUpperCase();
				let myTable=document.getElementById('myTable');
				let tr=myTable.getElementsByTagName('tr');

				for(var i=0; i<tr.length; i++)
				{
				
					let td=tr[i].getElementsByTagName('td')[0];

					if(td)
					{
						let textvalue=td.textContent || td.innerHTML;
						if(textvalue.toUpperCase().indexOf(filter) > -1)
						{
							tr[i].style.display="";
						}
						else
						{
							tr[i].style.display="none";
						}
					}
				}
			}
</script>


    </body>

</html>

