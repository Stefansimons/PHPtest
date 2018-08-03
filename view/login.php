<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>login</title>
</head>
<body style="text-align: center">
<h1>Welcome</h1>
<h2 style="color: red"><?php if(isset($succmsg)) echo $succmsg;?></h2>
<h2 style="color: red">Please login</h2>
<form action="router.php" method="post">
<h3>Email</h3>
<input type="text" name="email" placeholder=" name@gmail.com" value="<?php if(isset($email)) echo $email; else echo "";?>">

<h3>Password</h3>
<input type="password" name="password" placeholder="enter password" value="<?php if(isset($password)) echo $password; else echo "";?>"><br><br>

<input type="submit" name="action" value="login">



</form>

<h2 style="color: red"><?php if(isset($errmsg)) echo $errmsg;?></h2>

<a href="register.php">REGISTER</a>
</body>
</html>
