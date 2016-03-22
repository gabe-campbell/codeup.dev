<?php
  session_start();

  $username = 'gabe-campbell';
  $password = 'pass1234';

  if(isset($_SESSION['logged_in_user'])){ //if login in session is set
      header("Location: /homepage.php");
  }

  if(isset($_POST['username'])) {
    $attemptedUsername = $_POST['username'];
  } else {
    $attemptedUsername = '';
  }

  if(isset($_POST['password'])) {
    $attemptedPassword = $_POST['password'];
  } else {
    $attemptedPassword = '';
  }

  if($attemptedPassword == $password && $username == $attemptedUsername) {
    $sessionId = session_id();
    $_SESSION['logged_in_user'] = $attemptedUsername;
    header('Location: /homepage.php');
    die();
  } else if($attemptedUsername != '' || $attemptedPassword != '') {
    //
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Log In</title>
    <link rel="stylesheet" href="login-splash.css">
  </head>

  <body>
    <div class="container">
      <div class="login">
        <form method="POST">
        <label id="usernameLabel" for="username">Username</label>
        <input id="username" type="text" name="username"><br>
        <label id="passwordLabel" for="password">Password&nbsp</label>
        <input id="password" type="password" name="password"><br>
        <input id="submit" type="submit">
        </form>
      </div>
    </div>
  </body>
</html>