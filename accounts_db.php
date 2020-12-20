<?php

class accounts_db{

    public static function validate_login($email,$password){
        $db=Database::getDB();
        $query='SELECT * FROM accounts WHERE email=:email_address AND password=:password';
        $statement=$db->prepare($query);
        $statement->bindValue(':email',$email_address);
        $statement->bindValue(':password',$password);
        $statement->execute();
        $user=$statement->fetch();
        $statement->close_cursor();

        if(count($user)>0){
            $user=new Account(($user['id']),($user['email']),($user['fname']),($user['lname']),($user['phoneNumber']),($user['birthday']),($user['password']));
            return $user;
        }else{
            return false;
        }
    }





    public static function register_user($first_name,$last_name,$date,$email,$password){
        $db=Database::getDB();
        $query='INSERT INTO accounts
        (email,fname,lname,birthday,password)
        VALUES
        (:email,:fname,:lname,:birthday,:password)';
        $statement=$db->prepare($query);
        $statement->bindValue(':email',$email);
        $statement->bindValue(':password',$password);
        $statement->bindValue(':fname',$first_name);
        $statement->bindValue(':birthday',$date);
        $statement->bindValue(':lname',$last_name);
        $statement->execute();
        $statement->close_cursor();

    }

    public static function get_user($userId){
        $db=Database::getDB();
        $query='SELECT * FROM accounts WHERE id= :userId';
        $statement =$db ->prepare($query);
        $statement->bindValue(':userId',$userId);
        $statement->execute();
        $user=$statement->fetch();
        $statement->close_cursor();
        return $user;

    }

}






?>