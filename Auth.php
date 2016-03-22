<?php

class Auth
{
  public static $username;
  public static $password = '';

  // Attempt compare static::$username to password_verify($password, static::$password)
  //
  // @return boolean if successful 
  public static function attempt($username, $password)
  {
    // if($username =='guest' && password_verify)

    // returns a booleanif the password is verified
    $passwordIsGood = password_verify($password, self::$password);
  }

  //@return boolean whether or not the user is logged in
  public static function check()
  {
    return isset($_SESSION['is_logged_in']);
  }

  // Checks the session to return the username of the currently logged inuser
  public static function user()
  {

  }

  // ends the session and removes all session variables
  public static function logout()
  {

  }

}