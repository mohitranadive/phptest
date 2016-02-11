<html>
<?php
$sno1=$_POST["sno"];
$state=$_POST["state"];
$uniname=$_POST["uniname"];
$applied=$_POST["applied"];
$applink=$_POST["applink"];
$deadline=$_POST["deadline"];
/*$state=$_POST["state"];
$uniname=$_POST["uniname"];
$applied=$_POST["applied"];
$applink=$_POST["applink"];
$deadline=$_POST["deadline"];*/
include("db_const.php");
$conn = mysql_connect($servername, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$q = "UPDATE Application SET State ='$state', Uni_name ='$uniname', Status ='$applied',Application_link ='$applink', deadline ='$deadline' WHERE S_No='$sno1'";
//State, Uni_name, Status, Application_link, deadline

mysql_select_db('testphp');
$r = mysql_query( $q, $conn );
if(! $r )
{
  die('Could not get data why: ' . mysql_error());
}
echo"connected";
$URL="table.php";
header ("Location: $URL");

?>

/<html>
