<?php
	include "dbLogin.php";
  $myUser_id = $_POST['myUser_id'];
  $building = $_POST['building'];
  $location = $_POST['location'];
  $locker_number = $_POST['locker_number'];

  $sql = "UPDATE locker SET status = 'ready', user_id='$myUser_id'
    WHERE building = '$building' AND location = '$location' AND locker_number = '$locker_number'";
  $mysqli->query($sql);

  header('Location: ./user_locker_request_page.php?myUser_id='.$myUser_id);
 ?>
