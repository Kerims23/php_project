<?php

function validate_login($email,$password){
    $db=Database::getDB();
    $query='SELECT * FROM accounts WHERE email=:email_address AND password=:password';
    $statement=$db->prepare($query);
    $statement->bindValue(parameter:':email',$email_address);
    $statement->bindValue(parameter:':password',$password);
    $statement->execute();
    $user=$statement->fetch();
    $statement->close_cursor();

    if(count($user)>0){
        return $user['id'];
    }else{
        return false;
    }


}

?>