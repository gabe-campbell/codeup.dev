<?php
  session_start();
  $sessionId = session_id();
  var_dump($_SESSION);
  var_dump($sessionId);

  if(!isset($_SESSION['logged_in_user'])){ //if login in session is not set
      header("Location: /login.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to the Homepage!</title>
  </head>

  <body>
    <h1>You have been authorized</h1>
  </body>
</html>