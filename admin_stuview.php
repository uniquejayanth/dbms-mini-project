<?php
include ("conn.php");
$query1 ="select s.StudentID,s.StudentName,s.AdmissionType,s.DOB,s.StudentGender,s.StudentPhoneNumber,b.BranchName,s.StudentYear,s.StudentAge,s.StudentResidence,s.CETorCOMEDKrank,s.SSLCmarks,s.SSLCpercentage,s.PUCmarks,s.PUCpercentage,s.ProcID,f.FeesStatus,f.DueAmount from studentslist s,branch b,fees f,staff st where s.StudentID=f.StudentID and s.DeptID=b.BranchID and st.StaffID=s.ProcID";
$data1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));
$total1 = mysqli_num_rows($data1);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Student Databases
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./css/all.css">
	    <script src="https://kit.fontawesome.com/62a0857bae.js" crossorigin="anonymous"></script>
        <style>
            html{
                background-image: linear-gradient(to right,#d99ec9,#f6f0c4);
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            body{
                font-family: 'DM Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            @font-face {
                font-family: DM Sans;
                src: url('./fonts/DMSans-Regular.ttf')format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            .table{
                    padding-top: 50px;
                    padding-left: 20px;
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
                margin-top: -83px;
                margin-left: 1200px;
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
            <img style="width:500px;margin-top:15px;margin-left:500px;" src="./images/sjbicon2.png" alt="SJB icon" />
            </a><br><br>
        <h1 align="center" style="font-size:45px;color: rgba(255,255,255,0.9);">SJBIT Student Database </h1>
        <input type="text" id="myInput"  onkeyup="myFunction()" placeholder="Search for names..">

            
        <section class="table"><br><br><br>
            <br><br>
            <div class="scroll">
        <table  id="myTable" border="1" style="border-collapse: collapse; padding-top: 50px;">
            <tr>
                <th>USN</th>
                <th style="padding-right: 70px;padding-left: 70px;">Name</th>
                <th style="padding-right: 50px;padding-left: 50px;">Admission Type</th>
                <th style="padding-right: 50px;padding-left: 50px;">DOB</th>
                <th>Gender</th>
                <th style="padding-right:40px;padding-left:40px;">Student PhNo</th>
                <th>Branch</th>
                <th>Student Year</th>
                <th>Age</th>
                <th>Residence</th>
                <th style="padding-right: 50px;padding-left: 50px;">CET or COMEDK Rank</th>
                <th >SSLC Marks</th>
                <th>SSLC Percentage</th>
                <th>PUC Marks</th>
                <th>PUC Percentage</th>
                <th style="padding-right: 50px;padding-left: 50px;">Proctored By</th>
                <th style="padding-right: 50px;padding-left: 50px;">Fee Status</th>
                <th style="padding-right: 50px;padding-left: 50px;">Due Amount</th>
            </tr>
           
        <?php
                if($total1!=0){
                   // echo'<table border=0 width=100%>';
                    while($result=mysqli_fetch_assoc($data1)){
                        echo"
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;".$result['StudentID']."</td>
                            <td>".$result['StudentName']."</td>
                            <td>".$result['AdmissionType']."</td>
                            <td>".$result['DOB']."</td>
                            <td>".$result['StudentGender']."</td>
                            <td>".$result['StudentPhoneNumber']."</td>
                            <td>".$result['BranchName']."</td>
                            <td>".$result['StudentYear']."</td>
                            <td>".$result['StudentAge']."</td>
                            <td>".$result['StudentResidence']."</td>
                            <td>".$result['CETorCOMEDKrank']."</td>
                            <td>".$result['SSLCmarks']."</td>
                            <td>".$result['SSLCpercentage']."</td>
                            <td>".$result['PUCmarks']."</td>
                            <td>".$result['PUCpercentage']."</td>
                            <td>".$result['ProcID']."</td>
                            <td>".$result['FeesStatus']."</td>
                            <td>".$result['DueAmount']."</td>
                        
                            </tr>
                            ";
                    }
                }
                else{
                    echo"No record found";
                }

?>
</table>
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
