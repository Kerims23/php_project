<!DOCTYPE html>
<html>


<head>

<title>Project 1</title>
<link rel="stylesheet" type="text/css" href="main.css">

</head>


<body>
    <header>
    <h1>Project 1</h1>
    </header>
    
    <button onclick="window.location.href='.1login.php'">Login:</button>
    <button onclick="window.location.href='.2registration.php'">Register:</button>
    <button onclick="window.location.href='.3question_forum'">Question Forum:</button>
    <br>


    
    <h2>Register Forum</h2>
    <input type="text" name="first_name" placeholder="Type First name" value="">
    <br>
    <input type="text"  name="last_name" placeholder="Type Last name" value="">
    <br>
    <input type="date"  name="date" placeholder="Enter Birthday" value="">
    <br>
    <input type="email"  name="email_address" placeholder="Enter Email Address" value="">
    <br>
    <input type="password" placeholder="Type Password" name="password">
    <br>
    <input type="submit">

    

    <!--not sure if this is right-->    
    <process_data class="php"></process_data>
  




       <!--erros -->
       <?php if(count($errors)>0)?>
    <ul>
        <?php foreach($errors as $error)?>
        <list><?php echo ($error)?></list>

</ul>


    <!--first_name-->
    <?php ?>





    <!--last_name-->





    <!--Birthday-->





    <!--email-->






    <!--submit-->





   




    


</body>

</html>