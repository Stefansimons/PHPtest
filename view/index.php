<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body style="text-align: center;">
<h1> HELO  </h1>


<a href="login.php" style="color: red">LOGIN</a><br><br>
<a href="register.php"style="color: green">REGISTER</a>

<h3>Search</h3>
<form action="router.php" method="get">

<input type="text" name="ssearch"><br><br>

<input type="submit" name="action" value="search">
</form>
<h2><?php if(isset($errmsg)) echo $errmsg;?></h2>
</body>
</html>