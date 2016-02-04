<html>
<body>

<?php
include("db_const.php");
$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

  //$retval=mysql_query($sql,$conn); 
  echo "Connected successfully";
  $sql = "SELECT * FROM Application";
  //$sql="INSERT INTO Application VALUES ( VIRGINIA, OLD DOMINION University, No, 'http://blue.odu.edu/admission/apply/', '2016-03-15')";
  mysql_select_db('testphp');
  //echo "updated";
  $retval= mysql_query($sql,$conn);
?>
  
<a href= "add.php">Add</a>

<table border="2" margin=0>
  <thead><tr>
    <th>Sr.No</th>
    <th>State</th>
    <th>University Name</th>
    
    <th> Applied</th>
    <th>Application link</th>
    <th>Deadline</th>
    <th>Edit</th>
    </tr>
   </thead>
  <?php
  while($row= mysql_fetch_assoc($retval, MYSQL_ASSOC)){
  ?>
   <tr>
   <td><?php echo $row['S_No']?></td>
   <td><?php echo $row['State']?></td>
   <td><?php echo $row['Uni_Name']?></td>
   <td><?php echo $row['Status']?></td>
    <td><a href="<?php echo $row['Application_link']?>"><?php echo $row['Application_link']?></a></td>
    <td><?php echo $row['Deadline']?></td>
    <td><a href="edit.php?S_No=<?php echo $row['S_No']?> ">edit</td>
    </tr>
    <?php } 
    mysql_close($conn);
    ?>


</table>
</body>
</html>