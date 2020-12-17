<?php
class Question{
    private $title, $body, $skills,$questionId;

    public function __construct($title, $body, $skills,$questionId){
        $this->title=$title;
        $this->body=$body;
        $this->skills=$skills;
        $this->$questionId=$questionId;
    }

    public function gettitle(){
        return$this->title;
    }
    public function settitle($value){
        $this->title=$value;
    }

    public function getbody(){
        return$this->body;
    }
    public function setbody($value){
        $this->id=$value;
    }
    public function getskills(){
        return$this->skills;
    }
    public function setskills($value){
        $this->id=$value;
    }
    public function getquestionId(){
        return$this->questionId;
    }
    public function setquestionId($value){
        $this->id=$value;
    }
}
?>





// nov 24: pass user id 
// updated questions list dec 1 
//sessions 

//portfolio backend developer & full stack engineer 

//project manajer 
// gira trelo

