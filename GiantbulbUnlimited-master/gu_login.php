<!DOCTYPE html>
<!-- 

Original Author: Joshua Novikoff
Date Created: 8/22/2019
Version: 1.0
Date Last Modified: 2/7/20
Modified by: Joshua Novikoff
Modification log: Initial Deployment

				  
-->
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="description" content="Inquire about services from Giantbulb Unlimited">
<meta name="keywords" content="computers, technology, delivery, web design">
<meta name="author" content="Joshua Novikoff">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Giantbulb Unlimited||Contact</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca|Open+Sans+Condensed:300&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="images/gu_favicon.png"

</head>

<body>
<nav>
<a href="gu_index.html"><img src="images/gu_logo.png" alt="logo"></a>
<ul>
	<li><a href="gu_index.html">Home</a></li>
	<li><a href="gu_about.html">About</a></li>
	<li><a href="gu_pricing.html">Pricing</a></li>
	<li><a href="gu_examples.html">Examples</a></li>
	<li><a href="gu_contact.html">Contact</a></li>
        <li><a href="gu_login.php">Admin</a></li>
</ul>
</nav>
<main>
	<h1>Login</h1>
<br>
<fieldset>
    <legend>Please Enter Your Credentials</legend>
<form action="gu_admin.php" method="POST">
		<label for="user">Username:</label> 
		<input type="text" name="name" id="name" required /><br>
		
		<label for="pass">Password:</label>
		<input type="password" name="password" id="password" required /><br>
		<br>		
		<input type="submit" id="submit" value="Submit" class="btn">
     </form>
</fieldset>
</main>

<footer>
Giantbulb Unlimited &#8226; 57814 Loower Moor Dr, New York NY
</footer>

</body>
</html>