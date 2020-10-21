<?php
//registration form
$first_name = filter_input(INPUT_POST,'first_name');
$last_name = filter_input(INPUT_POST,'last_name');
$birthday = filter_input(INPUT_POST,'birthday');
$email_for_reg = filter_input(INPUT_POST,'email');
$password_for_reg = filter_input(INPUT_POST,'password');

if($first_name = Null){
    echo ' enter a first name';
    echo"<br>";
}

if($last_name == Null){
    echo ' enter a last name';
    echo"<br>";
}

if($birthday == Null){
    echo ' enter a birthday';
    echo"<br>";
}

if($email_for_reg == NULL){
    echo ' enter a email address';
    echo"<br>";
}

if($password_for_reg <8){
    echo ' enter a password with at least 8 characters';
    echo"<br>";
}


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
        Birthday: <?php echo $birthday; ?>
    </div>
    <div>
        Email Address: <?php echo $email_for_reg; ?>
    </div>
    <div>
        Password: <?php echo $password_for_reg; ?>
    </div>
    
</body>
</html>