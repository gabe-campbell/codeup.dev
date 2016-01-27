<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My First Form</title>
</head>
<body>
    <h2>My first form</h2>
    <form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </p>
    <p>
        <input type="submit" name ="submit" value="Login">
        
    </p>
    <p>
        <label for="username">Username</label>
        <input type="text" name ="username" id="username" placeholder="enter username">
    </p>
    <p>
        <button type="submit" name ="login here" value="login here">Login Here</button>
    </p>

    <p>
        <label for="to">To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="send to" name="receiver" type="text">
        <br>
        <label for="cc/bcc">CC/BCC:</label>
        <input id="cc/bcc" name="cc/bcc" type="text">
        <br>
        <label for="subject">Subject:&nbsp;&nbsp;</label>
        <input id="subject" name="subject" type="text">
        <br>
        <textarea id="email body" name="email body" placeholder="Content Here" rows="5" cols="100"></textarea>
        <br>
        <button type="submit" name="send" value="send">Send</button>

        <input type="checkbox" id="save_message" name="save_message" value="yes">
        <label for="save_message">Would you like to save a copy of this message?</label>
    </p>
    </form>

    <form>
        <p>
            <h2>Multiple Choice Test</h2>
            <h3>Which is your favorite?</h3>
            <label>
                <input type="radio" name="q1" value="cats">
                Cats
            </label>
            <label>
                <input type="radio" name="q1" value="dogs">
                Dogs
            </label>
            <label>
                <input type="radio" name="q1" value="other">
                Other
            </label>
        </p>
    </form>
</body>
</html>