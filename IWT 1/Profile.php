<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="register.css" />

    <title>Dashboard</title>
  </head>
  
  <body>
    <h1>User Profile</h1>
	<table>
	<tr>
	  <th>First Name</th>
	  <th>Last Name</th>
	  <th>ID<th><br>
	  <th>Gender</th>
  	  <th>Mobile no</th>
	  <th>Email</th>
	  <th>Date of Birth</th>
	  <th>Role</th>
	  <th>Password</th>
	<tr>
	<?php
	require 'display.php';
	?>
	</table>
	<script src = "profile.js"></script>
  </body>
  </html>