<?php require("login.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
</head>
<body>
    <h1>Enter creditials to log in</h1>
    <form action="#" method="post" name="frmLogin">
    <p>
    <label for="userName">User name: </label>
    <input type="text" maxlength="20" width="40" placeholder="User name" name="userName">
    </p>
    <p>
    <label for="password">Password: </label>
    <input type="password" placeholder="Password" name ="password">
    </p>
    <input type="submit" name="btnLogin" value="Login">
</form>
<?php 
if(isset($_POST["btnLogin"]))
    doLogin();
?>
</body>
</html>