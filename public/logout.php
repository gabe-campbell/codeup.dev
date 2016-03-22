<?php
  session_start();
  function clearSession()
  {
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
  }

// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!
  session_start();

  if (isset($_POST['reset'])) {
    if ($_POST['reset'] == 'counter') {
        unset($_SESSION['view_count']);
    } elseif ($_POST['reset'] == 'session') {
        clearSession();
    }
}

header("Location: /login.php");

?>