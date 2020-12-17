<?php
class QuestionDB{


    public static function get_user_questions($userId){
        $db=Database::getDB();
        $query='SELECT * From questions WHERE ownerid= :userId';
        $statement=$db->prepare($query);
        $statement->bindValue(':userId',$userId);
        $statement->execute();

        $questions_form=$statement->fetch_all();
        $statement->close_cursor();

        if(count($questions_form)>0){
            $questions_form=new Question($questions_form['title'],($questions_form['body'],($questions_form['skills']);
            return $questions_form;
        }else{
            return false;
        }
    }

    public static function get_questions($questionId){
        $db=Database::getDB();

        $query='SELECT * From questions WHERE id=:questionId';
        $statement=$db->prepare($query);
        $statement->bindValue(':questionId', $questionId);
        $statement->execute();
        $question = $statement->fetch();
        $statement->closeCursor();
        return $question

      

    }

    public static function get_all_questions(){
        $db=Database::getDB();

        $query='SELECT * From questions';
        $statement=$db->prepare($query);
        $statement->execute();

        $questions=$statement->fetchAll();

    }

    public static function create_question ($title,$body,$skills,$ownerid){
        $db=Database::getDB();

        $query = 'INSERT INTO questions
                (title,body,skills,ownerid)
            VALUES
                (:title,:body,:skills,:ownerid)';

        $statement=$db->prepare($query);
        $statement->bindValue(':ownerid',$ownerid);
        $statement->bindValue(':title',$title);
        $statement->bindValue(':body',$body);
        $statement->bindValue(':skills',$skills);

        $statement->execute();
        $statement->close_cursor();

    }

    public static function delete_questions($questionsId){
        $db=Database::getDB();

        $query='SELECT * From questions WHERE id= :questionId';
        $statement=$db->prepare($query);
        $statement->bindValue(' :questionId', $questionId);
        $statement->execute();
        $statement-> closeCursor();


    }
}
?>