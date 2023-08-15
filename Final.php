<!DOCTYPE html>
<!-- Final Project.php -->
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

//create connection
$con=mysqli_connect($server,$userName,$pass,$db);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "CREATE DATABASE IF NOT EXISTS TEC_COMPANY";
mysqli_query($con, $query);

$query = "CREATE TABLE IF NOT EXISTS QUALIFICATIONS(
Q_CODE INT PRIMARY KEY AUTO_INCREMENT,
Q_DESC VARCHAR(30)
);";
mysqli_query($con, $query);

$Tquery = "SELECT * FROM QUALIFICATIONS";
$data_check = mysqli_query($con, $Tquery);
$data_check_val = mysqli_num_rows($data_check);

//dosent enter values if not empty
if($data_check_val == 0) 
{
  INSERT INTO QUALIFICATIONS VALUES ('SEC-45', 'Secretarial work; candidate must type at least 45 words per minute');	
  INSERT INTO QUALIFICATIONS VALUES ('SEC-60', 'Secretarial work; candidate must type at least 60 words per minute');
  INSERT INTO QUALIFICATIONS VALUES ('SEC-45', 'Secretarial work; candidate must type at least 45 words per minute');
  INSERT INTO QUALIFICATIONS VALUES ('CLERK', 'General clerkin work');	
  INSERT INTO QUALIFICATIONS VALUES ('PRG-PY', 'Programmer, Python');
  INSERT INTO QUALIFICATIONS VALUES ('PRG-C+++', 'Programmer, C++');
  INSERT INTO QUALIFICATIONS VALUES ('DBA-ORA', 'Database Administrator, Oracle');
  INSERT INTO QUALIFICATIONS VALUES ('DBA-DB2', 'Database Administrator, IBM DB2');
  INSERT INTO QUALIFICATIONS VALUES ('DBA-SQLSERV', 'Database Administrator, MS SQL Server');
  INSERT INTO QUALIFICATIONS VALUES ('SYS-1', 'Systems Analyst, Level 1');
  INSERT INTO QUALIFICATIONS VALUES ('SYS-2', 'Systems Analyst, Level 2');
  INSERT INTO QUALIFICATIONS VALUES ('NW-CIS', 'Network Administrator, Cisco experience');
  INSERT INTO QUALIFICATIONS VALUES ('WD-CF', 'Web Developer, ColdFusion');
}

$SQL_Search = "$_GET[value1]";
$SQL_SELECT = "$_GET[value2]";

echo "<h2>You've Searched For $SQL_Search. <br>";
echo "<h2>From Catergory $_GET[value2]. <br>";
$Squery = "SELECT * FROM CA08_TABLE WHERE $_GET[value2] LIKE '%$_GET[value1]%'";
$Search = mysqli_query($con,$Squery);


while($row = mysqli_fetch_assoc($Search)) { 
echo "<br>  name: " . $row["name"] . "<br>";
echo "email: " . $row["email"] . "<br>";
echo "age: " . $row["age"]. "<br>";
}


$conn->close();
    ?>
  </body>
</html>
