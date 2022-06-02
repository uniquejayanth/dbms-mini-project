<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Proctor Databases
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
                margin-left: 1100px;
                padding: 10px 55px 10px 55px;
                border-radius: 1.4rem;
                background-color: rgba(255,255,255,0.4);
                border-color: transparent;
            }
            #myInput:hover{
                transform: scale(1.2);
                transition: transform .7s ease;
            }
            #edit-icon{
                position: absolute;
                width: 1.9%;
                opacity: 0.5;
                margin-left: 1420px;
                margin-top: -83px;
            }
            #edit-icon:hover{
                transform: scale(1.5);
                transition: transform .7s ease;
            }
        </style>
    </head>
    <body>
        <a href="./index.php">
            <img style="width:500px;margin-top:15px;margin-left:500px;" src="./images/sjbicon2.png" alt="SJB icon" />
            </a><br><br>
        <h1 align="center" style="font-size:45px;color: rgba(255,255,255,0.9);">SJBIT Proctor Database </h1>
        <input type="text" id="myInput"  onkeyup="myFunction()" placeholder="Search for names..">


        <a href="#"><img id="edit-icon" src="./images/edit.png"></a>
        <a href="#"><img style="margin-top: -87px;margin-left: 1470px;width:2.2%;" id="edit-icon" src="./images/delete.png" onclick="dosomething()"></a>
        <script type="text/javascript">
            function dosomething(){
                document.write("<input type='text' name='text'></input> <button>Del</button>");
            }
        </script>
            
        <section class="table"><br><br><br>
            <br><br>
            <div class="scroll">
        <table  id="myTable" border="1" style="border-collapse: collapse; padding-top: 50px;">
            <tr>
                <th>No.</th>
                <th style="padding-right: 100px;padding-left: 100px;">Name</th>
                <th>Staff ID</th>
                <th>Dept</th>
                <th>Designation</th>
                <th style="padding-right:40px;padding-left:40px;">Staff PhNo</th>
                <th>Age</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Qualification</th>
                <th>Joining Date</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Jayanth Kumar S</td>
                <td>1JB19CS062</td>
                <td>CSE</td>
                <td>Assistant prof.</td>
                <td>9591330723</td>
                <td>35</td>
                <td>1/1/91</td>
                <td>Male</td>
                <td>BE</td>
                <td>1/1/2012</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Madhu kumar.K.R</td>
                <td>1JB19CS062</td>
                <td>CSE</td>
                <td>Assistant prof.</td>
                <td>9591330723</td>
                <td>35</td>
                <td>1/1/91</td>
                <td>Male</td>
                <td>BE</td>
                <td>1/1/2012</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Achyuth</td>
                <td>1JB19CS062</td>
                <td>CSE</td>
                <td>Assistant prof.</td>
                <td>9591330723</td>
                <td>35</td>
                <td>1/1/91</td>
                <td>Male</td>
                <td>BE</td>
                <td>1/1/2012</td>
            </tr>
        </table>

        <script type="text/javascript">
			function myFunction(){
				let filter=document.getElementById('myInput').value.toUpperCase();
				let myTable=document.getElementById('myTable');
				let tr=myTable.getElementsByTagName('tr');

				for(var i=0; i<tr.length; i++)
				{
				
					let td=tr[i].getElementsByTagName('td')[1];

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
