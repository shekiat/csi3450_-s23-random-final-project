<!DOCTYPE html>
<html>
<head>
    <title>Company Data Form</title>
</head>
<body>
    <h2>Company Data Form</h2>
    <form  method="get" action="Final_Company.php">

    	
  	<label for="fname">Candidate Job History Search:</label>
	<input type="text" id="CAN_FNAME" name="CAN_FNAME"><br><br>
	<label for="lname">Candidate Last Name:</label>
	<input type="text" id="CAN_LNAME" name="CAN_LNAME"><br><br>
	<input type='hidden' name='x' value='1'>
        <input type="submit" value="Submit"><br><br>
</form>

    <form  method="get" action="Final_Company.php">
    <h2>Opening Creation</h2>
	<label for="OPEN_START_DATE">Opening Start Date:</label>
	<input type="text" id="OPEN_START_DATE" name="OPEN_START_DATE"><br><br>
	<label for="OPEN_EST_END_DATE">Opening est. End Date:</label>
	<input type="text" id="OPEN_EST_END_DATE" name="OPEN_EST_END_DATE"><br><br>
	<label for="OPEN_HOURLY_PAY">Opening Hourly Pay:</label>
	<input type="text" id="OPEN_HOURLY_PAY" name="OPEN_HOURLY_PAY"><br><br>
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
	<input type='hidden' name='x' value='2'>
        <input type="submit" value="Submit"><br><br>
</form>
	
	<form  method="get" action="Final_Company.php">
    <h2>Openings Search</h2> 
	<label for="OP_Code">Opening Code:</label>
	<input type="text" id="OP_Code" name="OPEN_CODE"><br><br>
	<input type='hidden' name='x' value='3'>
        <input type="submit" value="Submit"><br><br>
</form>

    <form  method="get" action="Final_Company.php">
    <h2>Opening Removal</h2> 
	<label for="OPEN_CODE">Opening Code:</label>
	<input type="text" id="OPEN_CODE" name="OPEN_CODE"><br><br> 
	<input type='hidden' name='x' value='4'>
        <input type="submit" value="Submit"><br><br>
</form>
    
        <form  method="get" action="Final_Company.php">
    <h2>Placement Search</h2>
	<label for="CAN_NUM">Candidate Number:</label>
        <input type="text" id="CAN_NUM" name="CAN_NUM"><br><br>
        <input type='hidden' name='x' value='5'>
	<input type="submit" value="Submit"><br><br>

    </form>
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

$SQL_Search_TS_CODE = "$_GET[TS_Code]";
$SQL_Search_TS_CODE_ENROLL = "$_GET[TS_Code_Enroll]";

$SQL_TABLE = "$_GET[value1]";

//echo "<h2>You've Searched For $SQL_Search_FNAME. <br>";
//echo "<h2>From Catergory $SQL_Search_LNAME. <br>";
//echo "<h2>With Coulmns $SQL_TABLE <br>";

//echo "switch: $_GET[CAN_NUM] <br>";

echo "<h2>switch: $_GET[x] <br>";


$Squery = "SELECT * FROM OPENINGS WHERE CMP_CODE = '5001'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

echo "<h3>Active Openings:<br>";
while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Opening Code: " . $row["OPEN_CODE"] . "<br>";
	echo "Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Company Code: " . $row["CMP_CODE"] . "<br>";
	echo "Start Date: " . $row["OPEN_START_DATE"] . "<br>";
	echo "Est. End Date: " . $row["OPEN_EST_END_DATE"] . "<br>";
	echo "Hourly Pay: " . $row["OPEN_HOURLY_PAY"] . "<br>";
}

echo "<h2>Search Results: <br>";

switch("$_GET[x]")
{

case "1":

$Squery = "SELECT * FROM JOB_HISTORY WHERE CAN_NUM = (SELECT CAN_NUM FROM CANDIDATES WHERE CAN_FNAME LIKE '%$_GET[CAN_FNAME]%' AND CAN_LNAME LIKE '%$_GET[CAN_LNAME]%')";
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

$Squery = "INSERT INTO OPENINGS(CMP_CODE, Q_CODE ,OPEN_START_DATE, OPEN_EST_END_DATE, OPEN_HOURLY_PAY) VALUES('5001', '$_GET[Q_CODE]', '$_GET[OPEN_START_DATE]', '$_GET[OPEN_EST_END_DATE]', '$_GET[OPEN_HOURLY_PAY]')";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

//echo "switch: $_GET[JH_START_DATE] <br>";
//echo "switch: $_GET[JH_END_DATE] <br>";


while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Job History Code: " . $row["JH_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Candidate Last Name: " . $row["CMP_CODE"] . "<br>";
	echo "Job Start Date: " . $row["JH_START_DATE"] . "<br>";
	echo "Job End Date: " . $row["JH_END_DATE"] . "<br>";
	echo "Job Hourly Pay: " . $row["JH_HOURLY_PAY"] . "<br>";
}
break;


case "8":

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

$Squery = "SELECT * FROM OPENINGS WHERE OPEN_CODE = '$_GET[OPEN_CODE]'";
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

case "4":

$Squery = "DELETE FROM OPENINGS WHERE CMP_CODE = '5001' AND OPEN_CODE = '$_GET[OPEN_CODE]'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

//echo "switch: $_GET[JH_START_DATE] <br>";
//echo "switch: $_GET[JH_END_DATE] <br>";
//echo "switch: $_GET[JH_HOURLY_PAY] <br>";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Job History Code: " . $row["JH_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Candidate Last Name: " . $row["CMP_CODE"] . "<br>";
	echo "Job Start Date: " . $row["JH_START_DATE"] . "<br>";
	echo "Job End Date: " . $row["JH_END_DATE"] . "<br>";
	echo "Job Hourly Pay: " . $row["JH_HOURLY_PAY"] . "<br>";
}
break;


case "5":

$Squery = "SELECT * FROM PLACEMENT WHERE CMP_CODE = '5001' AND CAN_NUM = '$_GET[CAN_NUM]'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Opening Code: " . $row["OPEN_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Placement total hours: " . $row["PL_TOTAL_HOURS"] . "<br>";
	echo "Company Name: " . $row["CMP_NAME"] . "<br>";
}


break;

case "5i":

$Squery = "INSERT INTO SESSION_ENROLEMENT(CAN_NUM, TS_CODE) VALUES ('1001' ,'$SQL_Search_TS_CODE_ENROLL')";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Training Session Code: " . $row["TS_CODE"] . "<br>";
	echo "Candidate Number Code: " . $row["CAN_NUM"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Start Date: " . $row["TS_START_DATE"] . "<br>";
	echo "End Date: " . $row["TS_END_DATE"] . "<br>";
}
break;

case "5d":

$Squery = "DELETE FROM SESSION_ENROLEMENT WHERE CAN_NUM = '1001' AND TS_CODE = '$SQL_Search_TS_CODE_ENROLL'";
$Search = mysqli_query($con,$Squery);
echo "$Squeryl";

while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br> Training Session Code: " . $row["TS_CODE"] . "<br>";
	echo "Candidate Number Code: " . $row["CAN_NUM"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Start Date: " . $row["TS_START_DATE"] . "<br>";
	echo "End Date: " . $row["TS_END_DATE"] . "<br>";
}


break;

}

$conn->close();

    ?>

</html>
