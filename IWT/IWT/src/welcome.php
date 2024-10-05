<?php
    session_start();
?>
<?php
    include_once'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<img class="logo" src="images/cart.png" width="200" height="200" alt="Shopping Cart Image">
<center>
    <h1>Shopping Cart</h1>
    <h3 id="header">The Online Shopping Store</h3>
<hr id="test"/>
</center>


<ul class="menu">
    <li class="menu"><a href="index.html">Home</a></li>
    <li class="menu"><a href="news.html">News</a></li>
    <li class="menu"><a href="register.html">Contact</a></li>
    <li class="menu"><a href="About.php">About Us</a></li>
	
	
	
</ul>
<br>
<center>
<h1>Welcome <?php echo $_SESSION['logged_user']?></h1>
</center>

<hr id="test"/>
<center>


<form action="logout.php" method="post"> 
  <input type="submit" name="logout" value="Logout"> 
</form> 


<h3 style="font-weight: bold; font-style: italic;">Created By :</h3>
    <a href="https://courseweb.sliit.lk/"> Visit this Course </a>
</center>
</body>
</html>


