<!DOCTYPE html>
<html>
<head>
    <title>TEC Candidate Data Form</title>
</head>
<body>



    <form  method="get" action="/WEB/Final_Candidate.php">
<!--    
        <input type="radio" id="CANDIDATES" onclick="myFunction()" name="value1" value="CANDIDATES">Candidates		
	<input type="radio" id="JOB_HISTORY" onclick="myFunction()" name="value1" value="JOB_HISTORY">Job History
	<input type="radio" id="QUALIFICATIONS" onclick="myFunction()" name="value1" value="QUALIFICATIONS">Openings 
	<input type="radio" id="COURSE" onclick="myFunction()" name="value1" value="COURSE">Course		
	<input type="radio" id="TRAINING_SESSIONS" onclick="myFunction()" name="value1" value="TRAINING_SESSIONS">Training Session
	<input type="radio" id="PLACEMENT" onclick="myFunction()" name="value1" value="PLACEMENT">Placement
    
        <h2>TEC Candidate Data Form</h2>
        
        -->
<!--        
        
<p id = can_can style="display:none">
  	<label for="fname">Candidate First Name:</label>
	<input type="text" id="CAN_FNAME" name="CAN_FNAME"><br><br>
	<label for="lname">Candidate Last Name:</label>
	<input type="text" id="CAN_LNAME" name="CAN_LNAME"><br><br>
	<input type="submit" value="Submit"><br><br>
	</p>
	
-->	
    <h2>Job History</h2>
   
	<label for="JH_START_DATE">Job History Start Date:</label>
	<input type="text" id="JH_START_DATE" name="JH_START_DATE"><br><br>
	<label for="JH_END_DATE">Job History End Date:</label>
	<input type="text" id="JH_END_DATE" name="JH_END_DATE"><br><br>
	<label for="JH_HOURLY_PAY">Hourly Pay:</label>
	<input type="text" id="JH_HOURLY_PAY" name="JH_HOURLY_PAY"><br><br>
	



    <h2>Openings Search</h2> 

	<label for="OP_Code">Opening Code:</label>
	<input type="text" id="search" name="OP_Code"><br><br>
	<form action="/WEB/Final_Candidate.php">
  <label for="OP_Code">Opening Code:</label>
  <select name="Q_CODE" id="Q_CODE">
    <option value="SEC-45">SEC-45</option>
    <option value="SEC-60">SEC-60</option>
    <option value="CLERK">CLERK</option>
    <option value="PRG-PY">PRG-PY</option>
    <option value="PRG-C+++">PRG-C+++</option>
    <option value="DBA-ORA">DBA-ORA</option>
    <option value="DBA-DB2">DBA-DB2</option>
    <option value="DBA-SQLSERV">DBA-SQLSERV</option>
    <option value="SYS-1">SYS-1</option>
    <option value="SYS-2">SYS-2</option>
    <option value="NW-CIS">NW-CIS</option>
    <option value="WD-CF">WD-CF</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
	
<form action="/WEB/Final_Candidate.php">	
    <h2>Course Search</h2>

	<label for="CRS_CODE">Course Code:</label>
        <select name="Q_CODE" id="Q_CODE">
    <option value="SEC-45">SEC-45</option>
    <option value="SEC-60">SEC-60</option>
    <option value="CLERK">CLERK</option>
    <option value="PRG-PY">PRG-PY</option>
    <option value="PRG-C+++">PRG-C+++</option>
    <option value="DBA-ORA">DBA-ORA</option>
    <option value="DBA-DB2">DBA-DB2</option>
    <option value="DBA-SQLSERV">DBA-SQLSERV</option>
    <option value="SYS-1">SYS-1</option>
    <option value="SYS-2">SYS-2</option>
    <option value="NW-CIS">NW-CIS</option>
    <option value="WD-CF">WD-CF</option>
  </select><br><br>
	<input type="button" id="CS_Enroll_View" value="View Current Enrolled Courses" name="CS_Enroll_View">
	<input type="submit" value="Submit">
</form>

    <h2>Training Session Enroll</h2>
<form action="/WEB/Final_Candidate.php">
	<label for="TS_Code_Enroll">Session Code to Enroll:</label>
	<input type="text" id="TS_Code_Enroll" name="TS_Code_Enroll"><br><br>
	<input type="submit" value="Submit">
</form>

    <h2>Course Search</h2>
<p id = can_crs style="display:none">
	<label for="CS_CODE">Course Code:</label>
        <input type="text" id="CS_Code" name="CS_Code"><br><br>
	<input type="button" id="CS_Enroll_View" value="View Current Enrolled Courses" name="CS_Enroll_View">
</p>

    <h2>Course Enroll</h2>
<p id = can_enrol style="display:none">
	<label for="CS_Code_Enroll">Course Code to Enroll:</label>
	<input type="text" id="CS_Code_Enroll" name="CS_Code_Enroll"><br><br>   

       
</p>

    </form>
    
     <script src="/WEB/Final_Candidate.js">
     
   	
function toCandidate() {
  location.replace("/WEB/Final_Candidate.html")
}
function toStaff() {
  location.replace("/WEB/Final_Company.html")
}
   
     
   	
   </script>
   
</body>

<?php
   

    echo "</h2>";
    //Note in the above code that within the double quoted string
    //there are no single quotes surrounding value1 or value2, but
    //outside double quotes value1 and value2 are surrounded by
    //single quotes. There are other ways to structure this code
    //while achieving the same output, but this is probably the
    //simplest and least likely to cause hard-to-find bugs.

//-------------Initilizing the Database-----------------------------
$server = "localhost";
$userName = "root";
$pass = "";
$db = "";

$con=mysqli_connect($server,$userName,$pass,$db);
$query = "CREATE DATABASE IF NOT EXISTS TEC_COMPANY";
mysqli_query($con, $query);
mysqli_close($con);

//-------------Connecting to TEC Company DB-----------------------------
$server = "localhost";
$userName = "root";
$pass = "";
$db = "TEC_COMPANY";

//create connection
$con=mysqli_connect($server,$userName,$pass,$db);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//-------------Search Functions-----------------------------

$SQL_Search_FNAME = "$_GET[CAN_FNAME]";
$SQL_Search_LNAME = "$_GET[CAN_LNAME]";

$SQL_Search_FNAME = "$_GET[CAN_FNAME]";
$SQL_Search_LNAME = "$_GET[CAN_LNAME]";

$SQL_Search_Q_CODE = "$_GET[Q_CODE]";
$SQL_Search_CRS_CODE = "$_GET[CRS_CODE]";

$SQL_Search_TS_CODE = "$_GET[TS_Code_Enroll]";


$SQL_TABLE = "$_GET[value1]";

//echo "<h2>You've Searched For $SQL_Search_FNAME. <br>";
//echo "<h2>From Catergory $SQL_Search_LNAME. <br>";
//echo "<h2>With Coulmns $SQL_TABLE <br>";

echo "<h2>Course Code: $SQL_Search_CRS_CODE <br>";

$Squery = "SELECT * FROM JOB_HISTORY WHERE CAN_NUM = '$userName'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Job History Code: " . $row["OPEN_CODE"] . "<br>";
	echo "Candidate Number: " . $row["Q_CODE"] . "<br>";
	echo "Candidate Last Name: " . $row["CMP_CODE"] . "<br>";
	echo "Job Start Date: " . $row["OPEN_START_DATE"] . "<br>";
	echo "Job End Date: " . $row["OPEN_EST_END_DATE"] . "<br>";
	echo "Job Hourly Pay: " . $row["OPEN_HOURLY_PAY"] . "<br>";
}

$Squery = "SELECT * FROM OPENINGS WHERE Q_CODE = '$SQL_Search_Q_CODE'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Opening Code: " . $row["OPEN_CODE"] . "<br>";
	echo "Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Company Code: " . $row["CMP_CODE"] . "<br>";
	echo "Start Date: " . $row["OPEN_START_DATE"] . "<br>";
	echo "Est. End Date: " . $row["OPEN_EST_END_DATE"] . "<br>";
	echo "Hourly Pay: " . $row["OPEN_HOURLY_PAY"] . "<br>";
}


$Squery = "SELECT * FROM COURSE WHERE Q_CODE = '$SQL_Search_Q_CODE'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Course Code: " . $row["CRS_CODE"] . "<br>";
	echo "Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_CODE"] . "<br>";
	echo "Course Fee: " . $row["CRS_FEE"] . "<br>";
	echo "Required Qualification: " . $row["CRS_Q_REQ"] . "<br>";
}


$Squery = "SELECT * FROM TRAINING_SESSIONS WHERE TS_CODE = '$SQL_Search_TS_CODE'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Training Session Code: " . $row["TS_CODE"] . "<br>";
	echo "Course Code: " . $row["CRS_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Start Date: " . $row["TS_START_DATE"] . "<br>";
	echo "End Date: " . $row["TS_END_DATE"] . "<br>";
}




switch("$SQL_TABLE"){

/*     case "QUALIFICATIONS":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Qualification Description: " . $row["Q_DESC"] . "<br>";
	}
     break;
*/     
     case "COURSE":
     	$Squery = "SELECT * FROM $SQL_TABLE WHERE CAN_FNAME LIKE '%$SQL_Search_FNAME%'";
	$Search = mysqli_query($con,$Squery);
     
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Course Fee: " . $row["CRS_FEE"] . "<br>";
	}
     break;
     	
     case "CANDIDATES":
     	$Squery = "SELECT * FROM $SQL_TABLE WHERE CAN_FNAME LIKE '%$SQL_Search_FNAME%'";
	$Search = mysqli_query($con,$Squery);
     	
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Candidate Code: " . $row["CAN_NUM"] . "<br>";
	echo "Candidate First Name: " . $row["CAN_FNAME"] . "<br>";
	echo "Candidate Middle Name: " . $row["CAN_MNAME"] . "<br>";
	echo "Candidate Last Name: " . $row["CAN_LNAME"] . "<br>";
	echo "Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Job History Code: " . $row["JH_CODE"] . "<br>";
	echo "Opening Code: " . $row["OPEN_CODE"] . "<br>";
	}
     break;	
     
     case "JOB_HISTORY":
     	$Squery = "SELECT * FROM $SQL_TABLE WHERE CAN_FNAME LIKE '%$SQL_Search_FNAME%'";
	$Search = mysqli_query($con,$Squery);
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Job History Code: " . $row["JH_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Candidate Last Name: " . $row["CAN_LNAME"] . "<br>";
	echo "Job Start Date: " . $row["JH_START_DATE"] . "<br>";
	echo "Job End Date: " . $row["JH_END_DATE"] . "<br>";
	echo "Job Hourly Pay: " . $row["JH_HOURLY_PAY"] . "<br>";
	echo "Opening Code: " . $row["OPEN_CODE"] . "<br>";
	}
     break;
     	
     case "TRAINING_SESSIONS":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Traning Session Code: " . $row["TS_CODE"] . "<br>";
	echo "Course Code: " . $row["CRS_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	}
     break;	
     
     case "PLACEMENT":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Opening Code: " . $row["Q_CODE"] . "<br>";
	echo "Candidate Number: " . $row["Q_DESC"] . "<br>";
	echo "Job History Code: " . $row["Q_CODE"] . "<br>";
	echo "Placement Total Hours: " . $row["Q_DESC"] . "<br>";
	echo "Company Name: " . $row["Q_DESC"] . "<br>";
	}
     break;
     
     	
}
$conn->close();

    ?>

</html>
