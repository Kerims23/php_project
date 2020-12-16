<?php

class accounts_db{

    public static function validate_login($email,$password){
        $db=Database::getDB();
        $query='SELECT * FROM accounts WHERE email=:email_address AND password=:password';
        $statement=$db->prepare($query);
        $statement->bindValue(parameter:':email',$email_address);
        $statement->bindValue(parameter:':password',$password);
        $statement->execute();
        $user=$statement->fetch();
        $statement->close_cursor();

        if(count($user)>0){
            $user=new Account($user['id'],($user['email'],($user['fname'],($user['lname'],($user['phoneNumber'],($user['birthday'],($user['password']);
            return $user;
        }else{
            return false;
        }
    }
}




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
            $user=new Account($user['id'],($user['email'],($user['fname'],($user['lname'],($user['phoneNumber'],($user['birthday'],($user['password']);
            return $user['id'];
        }else{
            return false;
        }
    }

?>