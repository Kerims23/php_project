<?php
class Account{
    private $id,$email,$fname,$lname,$phoneNumber,$birthday,$password;

    public function __construct($id,$email,$fname,$lname,$phoneNumber,$birthday,$password){
        $this->id=$id;
        $this->email=$email;
        $this->fname=$fname;
        $this->lname=$lname;
        $this->phoneNumber=$phoneNumber;
        $this->birthday=$birthday;
        $this->password=$password;
    }

    public function getId(){
        return$this->id;
    }
    public function setId($value){
        $this->id=$value;
    }
    public function getemail(){
        return$this->email;
    }
    public function setemail($value){
        $this->email=$value;
    }
    public function getfname(){
        return$this->fname;
    }
    public function setfname($value){
        $this->fname=$value;
    }
    public function getlname(){
        return$this->lname;
    }
    public function setlname($value){
        $this->lname=$value;
    }
    public function getphoneNumber(){
        return$this->phoneNumber;
    }
    public function setPhoneNumber($value){
        $this->phoneNumber=$value;
    }
    public function getbirthday(){
        return$this->birthday;
    }
    public function setbirthday($value){
        $this->birthday=$value;
    }
    public function getpassword(){
        return$this->password;
    }
    public function setpassword($value){
        $this->password=$value;
    }
}
?>


//geters and setters 
//missing some tags from sql 