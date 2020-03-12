<?php
$connect = mysqli_connect("localhost", "root", "mysql123", "checkinapp");
if(isset($_POST["id"]))
{
 $query = "UPDATE user SET active = 1  WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Checked in Succesfully';
 }

}
?>
