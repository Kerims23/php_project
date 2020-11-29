<?php

require('pdo.php')


//registration form
$first_name = filter_input(INPUT_POST,'first_name');
$last_name = filter_input(INPUT_POST,'last_name');
$date = filter_input(INPUT_POST,'date');
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');

if($first_name == NULL){
    echo ' enter a first name';
    echo"<br>";
}

if($last_name == NULL){
    echo ' enter a last name';
    echo"<br>";
}

if($date == NULL){
    echo ' enter a birthday';
    echo"<br>";
}

if($email == NULL){
    echo ' enter a email address';
    echo"<br>";
}

if(strlen($password) <8){
    echo ' enter a password with at least 8 characters';
    echo"<br>";
}



//sql query
$query='INSERT INTO accounts
            (email, password, first_name, last_name, date)
        VALUES
            (:email_address, :password, :first_name, :last_name, :data)';

//PDO statement
$statement = $db->prepare($query);
//binding vales to sql
$statement->bind_value(':email_address',$email_address);
$statement->bind_value(':password',$password);
$statement->bind_value(':first_name',$first_name);
$statement->bind_value(':last_name',$last_name);
$statement->bind_value(':date',$date);

//execute sql query
$statement->execute();

//close database
$statement->close_cursor();






?>


<html>
<head><title>Display Registration Info</title></head>

<body>
    <div>
        First Name: <?php echo $first_name; ?>
    </div>
    <div>
        Last Name: <?php echo $last_name; ?>
    </div>
    <div>
        Birthday: <?php echo $date; ?>
    </div>
    <div>
        Email Address: <?php echo $email; ?>
    </div>
    <div>
        Password: <?php echo $password; ?>
    </div>
    
</body>
</html>