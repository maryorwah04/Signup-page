<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
    <main>
        <div class="msg">Congrats, Your account has been created🥳🥳</div><br>
        <h3>Your details are:</h3><br>
        <?php
            echo "Username: " .$name. ".<br>";
            echo "Email: " .$email. ".<br>"; 
            echo "Password: " .$pin. ".<br>"; 
        ?>
    </main>
</body>
</html>