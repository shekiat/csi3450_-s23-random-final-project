<!DOCTYPE html>
<!-- Final.php -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TEC Hiring Database</title>
  </head>
  <body>
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

$SQL_TABLE = "$_GET[value1]";

echo "<h2>You've Searched For $SQL_Search_FNAME. <br>";
echo "<h2>From Catergory $SQL_Search_LNAME. <br>";
echo "<h2>With Coulmns $SQL_TABLE <br>";

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
  </body>
</html>
