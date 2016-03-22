<?php
  var_dump($_POST);

  $username = 'gabe-campbell';
  $password = 'D0vahkiin';

  // $attemptedUsername = isset($_POST['username'])? $_POST['username'] : '';
  // ternary version

  if(isset($_POST['username'])) {
    $attemptedUsername = $_POST['username'];
  } else {
    $attemptedUsername = '';
  }

  // $attemptedPassword = isset($_POST['password'])? $_POST['password'] : '';
  // ternary version

    if(isset($_POST['password'])) {
    $attemptedPassword = $_POST['password'];
  } else {
    $attemptedPassword = '';
  }
  

  if($attemptedPassword == $password && $attemptedUsername == $username) {
    echo "You have succesfully logged in";
  } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <form method="POST" action="form-results.php">
        <label for="username">Username</label>
        <input id="username" type="text" name="username"><br>
    <!--name value is key to forms, without name form is non functional-->
        <label for="password">Password&nbsp</label>
        <input id="password" type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>