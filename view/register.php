<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register</title>
</head>
<body style="text-align: center">
<h1>Welcome</h1>
<form action="router.php" method="post">
<h3>Email</h3>
<input type="text" name="email" placeholder=" name@gmail.com " value="<?php if(isset($email)) echo $email; else echo "";?>">


<h3>Name</h3>
<input type="text" name="name" placeholder="enter name" value="<?php if(isset($name)) echo $name; else echo "";?>">

<h3>Password</h3>
<input type="password" name="password" placeholder="enter password" value="<?php if(isset($password)) echo $password; else echo "";?>"><br><br>
<h3>Repeat password </h3>
<input type="password" name="passwordR" ><br><br>

<input type="submit" name="action" value="register">



</form>
<h2 style="color: red"><?php if(isset($errmsg)) echo $errmsg;?></h2>
</body>
</html>
