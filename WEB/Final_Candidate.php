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
   <form action="/WEB/Final_Candidate.php">
	<label for="JH_START_DATE">Job History Start Date:</label>
	<input type="text" id="JH_START_DATE" name="JH_START_DATE"><br><br>
	<label for="JH_END_DATE">Job History End Date:</label>
	<input type="text" id="JH_END_DATE" name="JH_END_DATE"><br><br>
	<label for="JH_HOURLY_PAY">Hourly Pay:</label>
	<input type="text" id="JH_HOURLY_PAY" name="JH_HOURLY_PAY"><br><br>
	<input type='hidden' name='x' value='1'>
	  <input type="submit" value="Search">  
    </form>	
    
    <form action="/WEB/Final_Candidate.php">
    	<input type='hidden' name='x' value='1i'>
	  <input type="submit" value="Add">
    </form>


    <h2>Openings Search</h2> 

	<label for="OP_Code">Opening Code:</label>
	<input type="text" id="search" name="OP_Code"><br><br>
	<form action="/WEB/Final_Candidate.php">
  <label for="OP_Code">Opening Code:</label>
  <select name="Q_CODE" id="Q_CODE">
  <option value="">Select a Qualification</option>
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
  <input type='hidden' name='x' value='2'>
  <input type="submit" value="Submit"  value="2">
</form>
	
<form id=1 action="/WEB/Final_Candidate.php">	
    <h2>Course Search</h2>

	<label for="Q_CODE">Qualification Code:</label>
        <select name="Q_CODE" id="Q_CODE">
    <option value="">Select a Qualification</option>
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
    <input type='hidden' name='x' value='3'>
	<input type="submit" value="Submit">
    
</form>      

  <form action="/WEB/Final_Candidate.php">
  
	<br><br>
	   <label for="CRS_CODE">Course Code:</label>
        <select name="CRS_CODE" id="CRS_CODE">
    <option value="">Select a Course</option>
    <option value="2001">2001</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    	</select><br><br>
	 <input type='hidden' name='x' value='4'>
	<input type="submit" value="Submit">

</form>






    <h2>Training Session Enroll</h2>
<form action="/WEB/Final_Candidate.php">
	<label for="TS_Code_Enroll">Session Code to Enroll:</label>
	<input type="text" id="TS_Code_Enroll" name="TS_Code_Enroll"><br><br>
	<input type='hidden' name='x' value='5'>
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

echo "<h2>switch: $_GET[x] <br>";



switch("$_GET[x]")
{

case "1":

$Squery = "SELECT * FROM JOB_HISTORY WHERE CAN_NUM = '1001'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";


while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Job History Code: " . $row["JH_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Candidate Last Name: " . $row["CMP_CODE"] . "<br>";
	echo "Job Start Date: " . $row["JH_START_DATE"] . "<br>";
	echo "Job End Date: " . $row["JH_END_DATE"] . "<br>";
	echo "Job Hourly Pay: " . $row["JH_HOURLY_PAY"] . "<br>";
}
break;


case "1i":

$Squery = "INSERT INTO JOB_HISTORY(CAN_NUM, JH_START_DATE, JH_END_DATE, JH_HOURLY_PAY) VALUES('1001', '$_GET[JH_START_DATE]', '$_GET[JH_END_DATE]', '$_GET[JH_HOURLY_PAY]')";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";


while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Job History Code: " . $row["JH_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Candidate Last Name: " . $row["CMP_CODE"] . "<br>";
	echo "Job Start Date: " . $row["JH_START_DATE"] . "<br>";
	echo "Job End Date: " . $row["JH_END_DATE"] . "<br>";
	echo "Job Hourly Pay: " . $row["JH_HOURLY_PAY"] . "<br>";
}
break;


case "2":

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
break;

case "3":

$Squery = "SELECT * FROM COURSE WHERE Q_CODE = '$SQL_Search_Q_CODE'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Course Code: " . $row["CRS_CODE"] . "<br>";
	echo "Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_CODE"] . "<br>";
	echo "Course Fee: $ " . $row["CRS_FEE"] . "<br>";
	echo "Required Qualification: " . $row["CRS_Q_REQ"] . "<br>";
}
break;

case "4":

$Squery = "SELECT * FROM COURSE WHERE CRS_CODE = '$SQL_Search_CRS_CODE'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Course Code: " . $row["CRS_CODE"] . "<br>";
	echo "Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_CODE"] . "<br>";
	echo "Course Fee: $ " . $row["CRS_FEE"] . "<br>";
	echo "Required Qualification: " . $row["CRS_Q_REQ"] . "<br>";
}
break;


case "5":

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


break;
}

$conn->close();

    ?>

</html>
