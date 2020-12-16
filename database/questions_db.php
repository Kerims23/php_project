<?php

function get_user_questions($userId){
    $db=Database::getDB();
    $query='SELECT * From questions WHERE ownerID= :userID';
    $statement=db->prepare($query);
    $statement->bindValue(':userID',$userID);
    $statement->execute();

    $questions_forum=$statement->fetch_all();
    $statement->close_cursor();

    return $questions_forum;
}

function create_question ($title,$body,$skills,$ownerID){
    $db=Database::getDB();

    $query = 'INSERT INTO questions
            (title,body,skills,ownerID)
        VALUES
            (:title,:body,:skills,:ownerID)';

    $statement=$db->prepare($query);
    $statement->bindValue(':ownerID',$ownerID);
    $statement->bindValue(':title',$title);
    $statement->bindValue(':body',$body);
    $statement->bindValue(':skills',$skills);

    $statement->execute();
    $statement->close_cursor();

    return $user;
     

}


?>