<?php
  $myAdmin_id = $_GET['myAdmin_id'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="..\css\style_main.css">
  </head>
  <body>
    <header id="admin_header">
      <nav class="menu">
        <ul>
          <li><a href=".\admin_homepage_page.php?myUser_id=<?=$myAdmin_id?>">Homepage</a></li>
  				<li id="admin_clicked_menu"><a href=".\admin_manage_lockers_page.php?myUser_id=<?=$myAdmin_id?>">Manage Lockers</a></li>
  				<li ><a href=".\admin_manage_user_page.php?myUser_id=<?=$myAdmin_id?>">Manage User</a></li>
  				<li ><a href=".\admin_administrator_page.php?myUser_id=<?=$myAdmin_id?>">Administrator Page</a></li>
        </ul>
      </nav>
    </header>
    <nav class="sub_menu">
      <ul>
        <li id="admin_clicked_sub_menu">Summary</li>
      </ul>
    </nav>
    <article>
      <h1>About Locker Manager</h1>
      How to use?
    </article>
  </body>
</html>
