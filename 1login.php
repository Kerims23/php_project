
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="test.css">
  <h1>Project 2</h1>
 </head>


  <body>
    <h3>Links</h3>
      <li class="active"><a href="1login.php">Login</a></li>
      <li><a href="2registration.php">Register</a></li>
      <li><a href="3question_form.php">Question</a></li>
      <br>


    <form action="index.php" method="post">
      <input type="hidden" name="action" value="validate_login">
        <div class="text-center">
          <div class="form-group">
            <h2>Login Form</h2>
            <input type="email"  class="form-control" name="email_address" placeholder="Enter Email Address" id="Email">
          </div>
          <br><br>

          <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      

  </body>




</html>
