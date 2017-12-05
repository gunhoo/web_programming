<?php
	include "dbLogin.php";
	$myAdmin_id = $_GET['myAdmin_id'];
	$sql = "SELECT * FROM locker l, user u WHERE l.status = 'ready' AND u.id = l.user_id";
	$requestedLocker = $mysqli->query($sql);
?>

<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="..\css\style_admin_check_locker_info.css">
</head>

<body>
  <header>
    <nav class="menu">
      <ul>
				<li><a href=".\admin_homepage_page.php?myAdmin_id=<?=$myAdmin_id?>">Homepage</a></li>
				<li id="clicked_menu"><a href=".\admin_manage_lockers_page.php?myAdmin_id=<?=$myAdmin_id?>">Manage Lockers</a></li>
				<li ><a href=".\admin_manage_user_page.php?myAdmin_id=<?=$myAdmin_id?>">Manage User</a></li>
				<li ><a href=".\admin_administrator_page.php?myAdmin_id=<?=$myAdmin_id?>">Administrator Page</a></li>
      </ul>
    </nav>
  </header>
  <nav class="sub_menu">
    <ul>
      <li><a href=".\admin_manage_lockers_page.php?myAdmin_id=<?=$myAdmin_id?>">Add New Locker</a></li>
      <li id="clicked_sub_menu"><a href=".\admin_request_list_page.php?myAdmin_id=<?=$myAdmin_id?>">Request List</a></li>
      <li><a href=".\admin_check_locker_info_page.php?myAdmin_id=<?=$myAdmin_id?>">Check Locker Info</a></li>
    </ul>
  </nav>
	<article>
		<h1>Request List</h1>
		<form action="./confirm_locker.php?myAdmin_id=<?=$myAdmin_id?>" method="post">
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>E-mail</th>
					<th>Building</th>
					<th>Location</th>
					<th>Locker Number</th>
					<th>Check</th>
				</tr>
				<?php
				while($requestedLockerList = mysqli_fetch_assoc($requestedLocker)){
				echo'
				<tr>'."\n";
					echo '<td>'.$requestedLockerList['user_id'].'</td>'."\n";
					echo '<td>'.$requestedLockerList['name'].'</td>'."\n";
					echo '<td>'.$requestedLockerList['phone_number'].'</td>'."\n";
					echo '<td>'.$requestedLockerList['email'].'</td>'."\n";
					echo '<td>'.$requestedLockerList['building'].'</td>'."\n";
					echo '<td>'.$requestedLockerList['location'].'</td>'."\n";
					echo '<td>'.$requestedLockerList['locker_number'].'</td>'."\n";
					echo'<td>
						<input value="'.$requestedLockerList['locker_id'].'" type="checkbox" name="check[]"/>
					</td>
				</tr>'."\n";}
				?>
			</table>
			<input class="confirmBtn" name="btn" value="Confirm" type="submit">
			<input class="rejectBtn" name="btn" value="Reject" type="submit">
		</form>
	</article>
</body>