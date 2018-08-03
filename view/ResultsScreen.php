<?php 
if(!isset($_SESSION['loggedUser']))
    session_start();
    //var_dump($_SESSION);
    
    $loggedUser = unserialize($_SESSION['loggedUser']);
    //var_dump($ulogovan);
    if($loggedUser){

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body style="text-align: center;">
<h2></h2>
<h2 style="color: red"><?php if(isset($succmsg)) echo $succmsg;?></h2>
<h1 >WELCOME, <?php echo $loggedUser["name"];?></h1>

<h3>Matching results</h3>
<?php if(isset($res)) echo $res;?>

<h2 ><a href="router.php?action=logout">LOGOUT</a></h2>

</body>
</html>
<?php 
	}else{
		header('Location: index.php');
	}
?>