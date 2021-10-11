<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
<?php
    require('config.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email_id'])) {
        $email_id = stripslashes($_REQUEST['email_id']);    // removes backslashes
        $email_id = mysqli_real_escape_string($con, $email_id);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admin` WHERE email_id='$email_id'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email_id'] = $email_id;
            // Redirect to user dashboard page
            header("Location: admin_welcome.php");
        }
         else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password. login again</h3><br/>
                                    </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="email_id" placeholder="email_id" autofocus="true"/><br>
        <input type="password" class="login-input" name="password" placeholder="Password"/><br>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        
        
  </form>
<?php
    }
?>
</body>
</html>