<?php
	require_once('header.php');
?>
<html> 
<head>
	<h1>
		Login Form
	</h1>
</head> 
<body> 
<form action=login.php method="post"> 
<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</form>
</body>
</html>

<br>
<?php
	require_once('footer.php');
?>
