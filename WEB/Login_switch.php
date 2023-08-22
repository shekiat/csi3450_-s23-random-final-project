<!DOCTYPE html>
<!-- Login_switch.php -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TEC Hiring Database</title>
  </head>
  <body>
  <script>
function toAdmin() {
  location.replace("/WEB/Final_Admin.html") 
} 
   	
function toCandidate() {
  location.replace("/WEB/Final_Candidate.php")
}
function toStaff() {
  location.replace("/WEB/Final_Company.php")
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

$CAN_LOGIN = "SELECT CAN_NUM FROM CANDIDATES WHERE CAN_NUM = '$USER_NAME'";
//$CAN_PW = "SELECT * FROM CANDIDATES WHERE CAN_NUM = '$USER_NAME'";

$STAFF_LOGIN = "SELECT CMP_NUM FROM COMPANIES WHERE CMP_NUM = '$USER_NAME'";
//$STAFF_PW = "SELECT * FROM COMPANIES WHERE CAN_NUM = '$USER_NAME'";

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

elseif($USER_NAME = '$CAN_LOGIN' && $USER_NAME != '$STAFF_LOGIN')
{
	if($PASSWORD == $ADMINPW)
	{
		echo "User Login Sucess";
		//echo '<script>toCandidate();</script>';
		echo '<script>toStaff();</script>';
		
	}
	else
	{
		echo "Login Failed";
	}
}

elseif($USER_NAME = '$STAFF_LOGIN')
{
	if($PASSWORD == $ADMINPW)
	{
		echo "Staff Login Sucess";
		echo '<script>toStaff();</script>';
	}
	else
	{
		echo "Login Failed";
	}
}
else
{
	echo "Login Failed";
}



    ?>
  </body>
</html>
