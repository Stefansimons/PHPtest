<?php
require_once '../config/DAO.php';

class Controller{
    
    public function login(){
        $email = isset($_POST['email'])?$_POST['email']:'';
        $pass = isset($_POST['password'])?$_POST['password']:'';
      
        
        if(!empty($email) && !empty($pass)){
            $dao = new DAO();
            $user = $dao->selectUsertByEmailPass($email, $pass);
            //var_dump($osoba);
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                if ($user){
                // LogIN OK
                // dodavanje ulogovanog u sesiju
                  session_start();
                   $_SESSION['loggedUser'] = serialize($user);
                   $succmsg="Successful logged in!";
                    include('ResultsScreen.php');
               }else{
                // LogIN ERROR
                   $errmsg = 'Incorrect data - please register ';
                include 'login.php';
              }
            }else{
                $errmsg = "Wrong e-mail format";
                include 'login.php';
            }
        }else{
            $errmsg = 'Fill in both fields';
            include 'login.php';
        }
    }
    
    public function register(){
        $email = isset($_POST['email'])?$_POST['email']:'';
        $name = isset($_POST['name'])?$_POST['name']:'';
        $pass = isset($_POST['password'])?$_POST['password']:'';
        $passR = isset($_POST['passwordR'])?$_POST['passwordR']:'';
        
        if(!empty($email) && !empty($name) && !empty($pass) && !empty($passR)){
            $dao = new DAO();
            $user = $dao->selectUserByEmail($email);
            //var_dump($osoba);
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                if (!$user){
                    if($pass==$passR){
                        
                    $dao->insertUser($name, $pass, $email);
                    // LogIN OK
                    // dodavanje ulogovanog u sesiju
                   $succmsg="Successful registration - Log in";
                    
                    include('login.php');
                    }else{
                        $errmsg="Passwords don't match!";
                        include 'register.php';
                    }
                }else{
                    // LogIN ERROR
                    $errmsg = 'Email already exists';
                    include 'register.php';
                }
            }else{
                $errmsg = "Wrong e-mail format";
                include 'register.php';
            }
        }else{
            $errmsg = 'Fill in all fields';
            include 'register.php';
        }
    }
    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
    public function search(){
        $search = isset($_GET['ssearch'])?$_GET['ssearch']:'';
        if(!empty($search)){
            session_start();
            if(isset( $_SESSION['loggedUser'])){
                $res=$search;
                include 'ResultsScreen.php';
            }else{
            
            $res=$search;
            include 'login.php';
            }
              
               
              
        }else{
            $errmsg = 'Enter a any text';
            include 'index.php';
        }
    }
   
    
    
}