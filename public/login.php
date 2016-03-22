<?php
  session_start();
  
  var_dump($_POST);

  $username = 'gabe-campbell';
  $password = 'pass1234';

  if(isset($_SESSION['logged_in_user'])){ //if login in session is set
      header("Location: /authenticate.php");
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
    header('Location: /authenticate.php');
    die();
  } else if($attemptedUsername != '' || $attemptedPassword != '') {
    echo "Username or Password incorrect";
  }

?>

<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <form method="POST">
        <label for="username">Username</label>
        <input id="username" type="text" name="username"><br>
    <!--name value is key to forms, without the name the form is non functional-->
        <label for="password">Password&nbsp</label>
        <input id="password" type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>