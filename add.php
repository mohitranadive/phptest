<html>
<body>
<?php $state=$uniname=$applied=$applink=$deadline="";?>
<form action="save.php" method= "POST">
State:<input type ="text" name="state" value="<?php echo $state;?>"><br><br>
University Name:<input type="text" name="uniname" value="<?php echo $uniname;?>"><br><br>
Applied:<input type="radio" name="applied" <?php if(isset($applied) && $applied="Yes") echo "checked";?> value="Yes">Yes
<input type="radio" name="applied" <?php if(isset($applied) && $applied="No") echo "checked";?> value="No">No
Application Link:<input type="text" name="applink" value="<?php echo $applink;?>"><br><br>
Deadline:<input type="date" name="deadline" value="<?php echo $deadline;?>"><br><br>
<input type="submit"name="submit" value="Submit">
<button type="reset" value="Reset">Reset</button>



</form>


</body>
</html>
