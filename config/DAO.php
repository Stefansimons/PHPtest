<?php
require_once 'db.php';

class DAO {
    private $db;
    
    // osoba
    private $INSERTUSER = "INSERT INTO User( name, password, email) VALUES (?,?,?)";
    private $SELECTUSERBYEMAIL = "SELECT * FROM User WHERE email=?";
    private $USEREXISTBYEMAILANDPASS = "SELECT * FROM User WHERE email=? AND password=?";
    //private $SELECTKLIJENTBYUSERNAMEANDPASSWORD = "SELECT * FROM klijent WHERE user = ? AND pass = ?";
    
    //artikal
    /* private $SELECTARTIKLI = "SELECT * FROM artikal";
    private $SELECTARTIKALBYID = "SELECT * FROM artikal WHERE id = ?"; */
    
    public function __construct()
    {
        $this->db = DB::createInstance();
    }
    
    public function insertUser($name, $password, $email)
    {
        $statement = $this->db->prepare($this->INSERTUSER);
        $statement->bindValue(1, $name);
        $statement->bindValue(2, $password);
        $statement->bindValue(3, $email);
        
        $statement->execute();
    }
    
     public function selectUserByEmail($email)
    {
        $statement = $this->db->prepare($this->SELECTUSERBYEMAIL);
        $statement->bindValue(1, $email);
        
        $statement->execute();
        
        $result = $statement->fetch();
        return $result;
    }
    
    
    public function selectUsertByEmailPass($email,$pass)
    {
        $statement = $this->db->prepare($this->USEREXISTBYEMAILANDPASS);
        $statement->bindValue(1, $email);
        $statement->bindValue(2, $pass);
        $statement->execute();
        
        $result = $statement->fetch();
        return $result;
    }
    /*
    public function selectKlijentByUsernameAndPassword($user, $pass)
    {
        $statement = $this->db->prepare($this->SELECTKLIJENTBYUSERNAMEANDPASSWORD);
        $statement->bindValue(1, $user);
        $statement->bindValue(2, $pass);
        
        $statement->execute();
        
        $result = $statement->fetch();
        return $result;
    }
    
    // artikli
    public function selectArtikli()
    {
        $statement = $this->db->prepare($this->SELECTARTIKLI);
        
        $statement->execute();
        
        $result = $statement->fetchAll();	// ako ne postoji vraca prazan niz array{}
        return $result;
    }
    
    public function selectArtikalByID($idart)
    {
        $statement = $this->db->prepare($this->SELECTARTIKALBYID);
        $statement->bindValue(1, $idart);
        $statement->execute();
        
        $result = $statement->fetch(); 	// ako ne postoji vraca bool(false)
        return $result;
    } */
}
?>
