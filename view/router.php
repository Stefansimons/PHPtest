<?php
require_once '../controler/controler.php';
$controler = new Controller();

// POST router
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action'])?$_POST['action']:'';
   // echo "<br>GET $action";
    
    $action = $_POST['action'];
    
    switch ($action){
        case 'login':
            $controler->login();
            break;
        case 'register':
            $controler->register();
            break;
      /*   case 'search':
            $controler->search();
            break; */
        default:
            header("Location: login.php");
            break;
    }
    
}
// GET router
else {
    $action = isset($_GET['action'])?$_GET['action']:'';
    
    
    switch ($action){
        case 'logout':
            $controler->logout();
            break;
        case 'search':
            $controler->search();
            break;
        default:
           
            $controler->logout();
            break;
    }
    
}
?>
