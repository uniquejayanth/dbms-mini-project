
<div class="container home">
		<h3> Update New Student </h3>
		
		<?php
			include 'conn.php'; /** calling of connection.php that has the connection code **/
			
			$ID = $_GET['stid']; /** get the student ID **/
			
			if( isset( $_POST['update'] ) ): /** A trigger that execute after clicking the submit 	button **/
				
				/*** Putting all the data from text into variables **/
				$Stuname=$_POST['studentname'];
        $Stuid=$_POST['studentusn'];
        //$dateOfBirth=$_GET['studentdob'];
        //$gender=$_GET['studentgender'];
        $studentPhoneNumber=$_POST['studentphonenumber'];
       // $deptID=$_GET['studentcourse'];
       // $studentYear=$_GET['studentcourseyear'];
        //$studentResidence=$_GET['studentresidence'];
        $studentComedkORCet=$_POST['studentcetorcomedkRank'];
        $studentSSLCscore=$_POST['student10thscore'];
        $studentPUCscore=$_POST['studentPUCscore'];
        $proctoredBy=$_POST['studentproctor'];
        // $feesToBePaid=$_GET['feesToBePaid'];
        //$feespaid=$_GET['feespaid'];

				// $fname = $_POST['fname']; 
				// $mname = $_POST['mname'];
				// $lname = $_POST['lname'];
				// $addr = $_POST['addr'];
				// $gender = $_POST['gender'];
				// $course = $_POST['course'];
				// $year = $_POST['year'];
				// $section = $_POST['section'];
				
				mysqli_query($conn ,"update studentslist set StudentID ='$Stuid',StudentName='$Stuname',
                StudentPhoneNumber='$studentPhoneNumber',CETorCOMEDKrank='$studentComedkORCet',SSLCmarks='$studentSSLCscore',
                PUCmarks='$studentPUCscore',StaffID='$proctoredBy' where StudentID='$ID'") 
							or die(mysqli_error()); /*** execute the insert sql code **/
							
				echo "<div class='alert alert-info'> Successfully Updated. </div>"; /** success message **/
			
			endif;
			
			
			$result = mysqli_query("SELECT * FROM student_record WHERE ID='$ID'");
			
			$data = mysqli_fetch_object( $result ); 
			
		?>
		
		
		<form action="" method="POST">
        <label for="Student Name" id="name-label"><b>Name</b> <br> </label><br>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="studentname"  required>  
            <br><br><br>

            <label for="Student USN" id="usn-label"><b> Student USN</b> <br><br> </label> 
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;" 
            type="text" name="studentusn"   required>
            <br><br><br>

            <label for="Student Ph No" id="phno-label"><b>Student Phone Number</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentphonenumber"   required>
            <br><br><br>

            <label for="Student cet/comedk rank" id="phno-label"><b>CET / COMEDK Rank</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentcetorcomedkRank"  placeholder="Enter CET/COMEDK Rank" required>
            <br><br><br>

            <label for="Student sslc score" id="phno-label"><b>SSLC Score</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="student10thscore"  placeholder="Enter SSLC score" required>
            <br><br><br>
            
            <label for="Student puc score" id="phno-label"><b>PUC Score</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentPUCscore" placeholder="Enter PUC score" required>
            <br><br><br>

            <label for="Student procotor" id="phno-label"><b>Proctored By</b> <br><br> </label>
            <input style="font-size: 0.85rem;font-weight:bold;border-radius:1.25rem;border-color:transparent;background:rgba(255,255,255,0.4);padding:1rem 10rem;"
            type="text" name="studentproctor"  placeholder="Staff ID" required>
            <br><br><br>

			<input type="submit" name="update" value="Update" class="btn btn-info" />	
			
		</form>		
	</div>	
</div>
</body>
</html>