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

$Tquery = "SELECT * FROM CA08_TABLE";
$data_check = mysqli_query($con, $Tquery);
$data_check_val = mysqli_num_rows($data_check);

//dosent enter values if not empty
if($data_check_val == 0) 
{
mysqli_query($con,"INSERT INTO CA08_TABLE(name, email, age) VALUES ('Jhon Dimagio','voiceactor@futurama.net','54')");
mysqli_query($con,"INSERT INTO CA08_TABLE(name, email, age) VALUES ('Peter Cullen','theraloptimusprime@gmail.com','80')");
mysqli_query($con,"INSERT INTO CA08_TABLE(name, email, age) VALUES ('Dante Basco','zuko@gmail.com','42')");
mysqli_query($con,"INSERT INTO CA08_TABLE(name, email, age) VALUES ('Arthur Dent','guidetothegalaxy@hitchhikers.net','42')");
mysqli_query($con,"INSERT INTO CA08_TABLE(name, email, age) VALUES ('Tyber Zahn','corruption@syndicate.net','63')");
mysqli_query($con,"INSERT INTO CA08_TABLE(name, email, age) VALUES ('Ted Bundy','bundy@serialkillers.com','69')");
mysqli_query($con,"INSERT INTO CA08_TABLE(name, email, age) VALUES ('Jeffery Dahmer','jeff@serialkillers.com','54')");
mysqli_query($con,"INSERT INTO CA08_TABLE(name, email, age) VALUES ('J.G. Wentworth','themostanoyingcommercial@877cashnow.net','69')");
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
