<?php
include_once("access.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="style.css">    
    <title>Log in</title>
</head>
<body>
    <form action="login1.php" method="post">
        <br><br><br><br><br><br>
        <div class="login">
        <fieldset>
            <label for="text">Username:</label>
            <input type="text" id="uname" name="uname"><br><br><br>
            <label for="pin">Password:</label>
            <input type="pin" id="pin" name="pin"><br><br><br>
            <button type="submit">Login</button>
        </fieldset>
         <?php if(isset($_GET['error'])){?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }?>
    </form>
</div>
</body>
<style>
    p{
        color: red;
    }
</style>
</html>