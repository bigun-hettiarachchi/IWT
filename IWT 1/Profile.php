<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="register.css" />

    <title>Dashboard</title>
   <style>
        table {
            width: 100%; /* Full width */
            border-collapse: collapse; /* Collapse borders */
            margin: 20px 0; /* Margin around the table */
        }
        th, td {
            padding: 15px; /* Space inside each cell */
            border: 1px solid #ddd; /* Cell border */
            text-align: left; /* Align text to the left */
        }
        th {
            background-color: #f2f2f2; /* Header background color */
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Stripe effect for even rows */
        }
        tr:hover {
            background-color: #f1f1f1; /* Highlight row on hover */
        }
    </style>
  </head>
  
<body style="background-image: url(b1.WEBP); background-size: cover;background-position: center;" >
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
