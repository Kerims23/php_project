<?php

require('pdo.php')


//login form
$email_address = filter_input(INPUT_POST,'email_address');
$password = filter_input(INPUT_POST,'password');

if ($email_address == NULL){
    echo ' you must type in a email';
    echo"<br>";
}

if ($password == NULL){
    echo ' you must type in password';
    echo"<br>";
}


//sql query
$query='SELECT INTO accounts
            (email_address, password)
        VALUES
            (:email_address, :password)';

//PDO statement
$statement = $db->prepare($query);
//binding vales to sql
$statement->bind_value(':email_address',$email_address);
$statement->bind_value(':password',$password);

//execute sql query
$statement->execute();

//close database
$statement->close_cursor();



?>





<html>

<head><title>Display Login Info</title> <></head>


<body>
    <div>
        Email Address: <?php echo $email_address; ?>
    </div>
    <div>
        Password: <?php echo $password; ?>
    </div>

</body>
</html>