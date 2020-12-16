<?php
class question{
    private $question, $question_body, $question_skills;

    public function __construct($question, $question_body, $question_skills){
        $this->question=$question;
        $this->question_body=$question_body;
        $this->question_skills=$question_skills;
    }

    public function getAnswers(){
        return$this->question;
    }
    public function newAnswers(){
        $this->question=$question;
    }

}
?>