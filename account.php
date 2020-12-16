<?php
class account{
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
    public function setId($id){
        $this->id=$id;
    }
    public function getEmail(){
        return$this->email;
    }
}
?>