<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<?php 
require_once "config/DAO.php";
$dao=new DAO();

/* $dao->insertUser("Ivan", "ivan", "ivan@gmail.com");

echo "inserted "; */

//$user=$dao->selectUserByEmail("pera.p@gmail.com");
$user=$dao->selectUsertByEmailPass("pera.p@gmail.com", "peric");
var_dump($user);
   echo $user["email"]."".$user["password"];
?>
</body>
</html>