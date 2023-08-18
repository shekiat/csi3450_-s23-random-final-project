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

$server = "localhost";
$userName = "root";
$pass = "";
$db = "TEC_COMPANY";

//-------------Connecting to TEC Company DB-----------------------------
//create connection
$con=mysqli_connect($server,$userName,$pass,$db);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "CREATE DATABASE IF NOT EXISTS TEC_COMPANY";
mysqli_query($con, $query);

//-------------Creating Tables-----------------------------
$query = "CREATE TABLE IF NOT EXISTS QUALIFICATIONS(
Q_CODE VARCHAR(30) PRIMARY KEY,
Q_DESC VARCHAR(256)
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS COURSE(
CRS_CODE INT PRIMARY KEY AUTO_INCREMENT,
Q_CODE VARCHAR(30),
FOREIGN KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE),
CAN_NUM INT,
-- FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
CRS_FEE INT
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS CANDIDATES(
CAN_NUM INT PRIMARY KEY AUTO_INCREMENT,
CAN_FNAME VARCHAR(256),
CAN_MNAME VARCHAR(256),
CAN_LNAME VARCHAR(256),
Q_CODE VARCHAR(30),
FOREIGN KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE),
JH_CODE INT,
-- FOREIGN KEY (JH_CODE) REFERENCES JOB_HISTORY (JH_CODE),
OPEN_CODE INT
-- FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE)
);";
mysqli_query($con, $query);

//can_lname wont let me make it a FK for some reason
$query = "CREATE TABLE IF NOT EXISTS JOB_HISTORY(
JH_CODE INT PRIMARY KEY AUTO_INCREMENT,
CAN_NUM INT,
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
CAN_LNAME VARCHAR(256),
-- FOREIGN KEY (CAN_LNAME) REFERENCES CANDIDATES (CAN_LNAME),
JH_START_DATE DATE,
JH_END_DATE DATE,
JH_HOURLY_PAY INT,
OPEN_CODE INT
-- FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE)
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS TRAINING_SESSIONS(
TS_CODE INT PRIMARY KEY AUTO_INCREMENT,
CRS_CODE INT,
FOREIGN KEY (CRS_CODE) REFERENCES COURSE (CRS_CODE),
CAN_NUM INT,
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM)
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS QUALIFIED_CANIDATES(
CAN_NUM INT,
Q_CODE VARCHAR(30),
PRIMARY KEY (CAN_NUM, Q_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE)
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS COURSE_ENROLEMENT(
CAN_NUM INT,
CRS_CODE INT,
PRIMARY KEY (CAN_NUM, CRS_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (CRS_CODE) REFERENCES COURSE (CRS_CODE)
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS SESSION_ENROLEMENT(
CAN_NUM INT,
TS_CODE INT,
PRIMARY KEY (CAN_NUM, TS_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (TS_CODE) REFERENCES TRAINING_SESSIONS (TS_CODE)
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS FILLED_OPENINGS(
CAN_NUM INT,
OPEN_CODE INT,
PRIMARY KEY (CAN_NUM, OPEN_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE)
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS OPENINGS(
OPEN_CODE INT AUTO_INCREMENT,
Q_CODE VARCHAR(30) ,
FOREIGN KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE),
CMP_CODE INT,
-- FOREIGN KEY (CMP_CODE) REFERENCES COMPANIES (CMP_CODE),
OPEN_START_DATE DATE,
OPEN_EST_END_DATE DATE,
OPEN_HOURLY_PAY INT,
PRIMARY KEY (OPEN_CODE, Q_CODE) 
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS COMPANIES(
CMP_CODE INT PRIMARY KEY AUTO_INCREMENT,
CMP_NAME VARCHAR(256),
OPEN_CODE INT,
FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE)
);";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS COMPANY_OPENINGS(
OPEN_CODE INT,
CMP_CODE INT,
PRIMARY KEY (OPEN_CODE, CMP_CODE),
FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE),
FOREIGN KEY (CMP_CODE) REFERENCES COMPANIES (CMP_CODE)
);";
mysqli_query($con, $query);

//-------------Fixing FK Constraints-----------------------------

$query = "ALTER TABLE CANDIDATES
ADD FOREIGN KEY (JH_CODE) REFERENCES JOB_HISTORY (JH_CODE)";
mysqli_query($con, $query);

$query = "ALTER TABLE CANDIDATES
ADD FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE)";
mysqli_query($con, $query);

//can_lname wont let me make it a FK for some reason

//$query = "ALTER TABLE JOB_HISTORY
//ADD FOREIGN KEY (CAN_LNAME) REFERENCES CANDIDATES (CAN_LNAME)";
//mysqli_query($con, $query);

$query = "ALTER TABLE JOB_HISTORY
ADD FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE)";
mysqli_query($con, $query);

$query = "ALTER TABLE OPENINGS
ADD FOREIGN KEY (CMP_CODE) REFERENCES COMPANIES (CMP_CODE)";
mysqli_query($con, $query);
/*
$query = "ALTER TABLE 
ADD ";
mysqli_query($con, $query);
*/

//-------------Filling Qualifications Data-----------------------------
$Tquery = "SELECT * FROM QUALIFICATIONS";
$data_check = mysqli_query($con, $Tquery);
$data_check_val = mysqli_num_rows($data_check);
//echo "$data_check_val";

//dosent enter values if not empty
if($data_check_val == 0) 
{
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('SEC-45', 'Secretarial work; candidate must type at least 45 words per minute');");	
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('SEC-60', 'Secretarial work; candidate must type at least 60 words per minute');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('CLERK', 'General clerkin work');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('PRG-PY', 'Programmer, Python');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('PRG-C+++', 'Programmer, C++');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('DBA-ORA', 'Database Administrator, Oracle');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('DBA-DB2', 'Database Administrator, IBM DB2');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('DBA-SQLSERV', 'Database Administrator, MS SQL Server');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('SYS-1', 'Systems Analyst, Level 1');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('SYS-2', 'Systems Analyst, Level 2');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('NW-CIS', 'Network Administrator, Cisco experience');");
  mysqli_query($con,"INSERT INTO QUALIFICATIONS VALUES ('WD-CF', 'Web Developer, ColdFusion');");
}

//-------------Search Functions-----------------------------

$SQL_Search = "$_GET[value1]";
$SQL_TABLE = "$_GET[value2]";
$SQL_ATTRIBUTE = "$_GET[value3]";

echo "<h2>You've Searched For $SQL_Search. <br>";
echo "<h2>From Catergory $_GET[value2]. <br>";
echo "<h2>With Coulmns $SQL_ATTRIBUTE <br>";

$Squery = "SELECT * FROM $SQL_TABLE CA08_TABLE WHERE $SQL_ATTRIBUTE LIKE '%$_GET[value1]%'";
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

    ?>
  </body>
</html>
