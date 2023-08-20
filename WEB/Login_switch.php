<!DOCTYPE html>
<!-- Login_switch.php -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TEC Hiring Database</title>
  </head>
  <body>
  <script>
   	
function toCandidate() {
  location.replace("/WEB/Final_Candidate.html")
}
function toStaff() {
  location.replace("/WEB/Final_Company.html")
}
   </script>
   
   <form class="modal-content animate" action="/WEB/Login_switch.php" method="post">
   </form>
  
    <?php
   

    echo "</h2>";
    //Note in the above code that within the double quoted string
    //there are no single quotes surrounding value1 or value2, but
    //outside double quotes value1 and value2 are surrounded by
    //single quotes. There are other ways to structure this code
    //while achieving the same output, but this is probably the
    //simplest and least likely to cause hard-to-find bugs.

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
$USER_NAME = "$_POST[uname]";
$PASSWORD = "$_POST[psw]";

$ADMINPW = 1234;

$CAN_LOGIN = "SELECT * FROM CANDIDATES WHERE CAN_NUM LIKE '$USER_NAME'";
//$CAN_PW = "SELECT * FROM CANDIDATES WHERE CAN_NUM LIKE '$USER_NAME'";

$STAFF_LOGIN = "SELECT * FROM CANDIDATES WHERE CAN_NUM LIKE '$USER_NAME'";
//$STAFF_PW = "SELECT * FROM CANDIDATES WHERE CAN_NUM LIKE '$USER_NAME'";

if($USER_NAME == 'admin')
{
	if($PASSWORD == $ADMINPW)
	{
		echo "Admin Login Sucess";
		echo '<script>toAdmin();</script>';
	}
	else
	{
		echo "Login Failed";
	}
}

elseif($USER_NAME = '$CAN_LOGIN')
{
	if($PASSWORD == $ADMINPW)
	{
		echo "User Login Sucess";
		echo '<script>toCandidate();</script>';
	}
	else
	{
		echo "Login Failed";
	}
}

/*elseif($USER_NAME == $STAFF_LOGIN)
{
	if($PASSWORD == $ADMINPW)
	{
		echo "Staff Login Sucess";
	}
	else
	{
		echo "Login Failed";
	}
}*/
else
{
	echo "Login Failed";
}

/*
$Squery = "SELECT * FROM CANDIDATES WHERE CAN_NUM LIKE '$USER_NAME'";
$Search = mysqli_query($con,$Squery);

switch($SQL_TABLE){

     case "QUALIFICATIONS":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Qualification Description: " . $row["Q_DESC"] . "<br>";
	}
     break;
     
     case "COURSE":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Qualification Code: " . $row["Q_CODE"] . "<br>";
	echo "Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Course Fee: " . $row["CRS_FEE"] . "<br>";
	}
     break;
     	
     case "CANDIDATES":
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
     
     case "QUALIFIED_CANIDATES":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Qualification Code: " . $row["Q_CODE"] . "<br>";
	}
     break;
     	
     case "COURSE_ENROLEMENT":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Course Code: " . $row["CRS_CODE"] . "<br>";
	}
     break;	
     
     case "FILLED_OPENINGS":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Opening Code: " . $row["OPEN_CODE"] . "<br>";
	}
     break;
     
     case "SESSION_ENROLEMENT":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Candidate Number: " . $row["CAN_NUM"] . "<br>";
	echo "Traning Session Code: " . $row["TS_CODE"] . "<br>";
	}
     break;
     
     case "COMPANY_OPENINGS":
	while($row = mysqli_fetch_assoc($Search)) { 
	echo "<br>  Opening Code: " . $row["OPEN_CODE"] . "<br>";
	echo "Company Code: " . $row["CMP_CODE"] . "<br>";
	}
     break;
     	
}
$conn->close();
*/

    ?>
  </body>
</html>
