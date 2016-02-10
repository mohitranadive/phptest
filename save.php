<html>
<body>

<?php
$state=$_POST["state"];
$uniname=$_POST["uniname"];
$applied=$_POST["applied"];
$applink=$_POST["applink"];
$deadline=$_POST["deadline"];

include("db_const.php");
$conn = mysql_connect($servername , $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$q = "INSERT INTO Application (State, Uni_name, Status, Application_link, deadline) VALUES ( '$state','$uniname','$applied', '$applink', '$deadline')";

mysql_select_db('testphp');
$r = mysql_query( $q, $conn );
if(! $r )
{
  die('Could not get data why: ' . mysql_error());
}
$URL="table.php";
header ("Location: $URL");

?>
 
 
</body>    

</html>

