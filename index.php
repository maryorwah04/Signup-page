<?php 
    if (!isset($name)) {
        $name = '';
    }
    if (!isset($email)) {
        $email = '';
    }
    if (!isset($pin)) {
        $pin = '';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
    <main>
        <form action="handler.php" method="post">
            <h4> WELCOME</h4>

            <label for="Name">Name
                <input type="text" name="user_name" id="user_name"> <br>
                <?php 
                    if (isset($name_error)) {
                        echo $name_error;
                    }
                 ?>
            </label>

            <label for="Email">Email
                <input type="email" name="user_email" id="user_email"><br>
                <?php 
                    if (isset($email_error)) {
                        echo $email_error;
                    }
                ?>
            </label>

            <label for="Password">Password
                <input type="password" name="user_pin" id="user_pin"><br>
                <?php 
                    if (isset($pin_error)) {
                        echo $pin_error;
                    }
                ?>
            </label>

            <input type="submit" value="Register" class="submit">

            <?php 
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($name_error) && empty($email_error) && empty($pin_error)) {
                    require ('success.php');
                }                
            ?>
        </form>

        <?php
             
        ?>
    </main>
</body>
</html>
