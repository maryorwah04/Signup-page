<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = filter_input(INPUT_POST, 'user_name');

        $email = filter_input(INPUT_POST, 'user_email');

        $pin = filter_input(INPUT_POST, 'user_pin');

        $pin2 = filter_input(INPUT_POST, 'user_pin2');

        //errors
        if (empty($name)) {
            $name_error = 'Input your name';
        } elseif (strlen($name) < 6) {
            $name_error = 'Username must be at least 6 characters';
        }

        if (empty($email)) {
            $email_error = 'Input your email';
        } elseif (strpos($email, ".") == false) {
            $email_error = 'Invalid email address, there must be a .';
        }

        if (empty($pin)) {
            $pin_error = 'Input your password';
        } elseif (strlen($pin) < 6) {
            $pin_error = 'Your password must has at least 6 characters';
        }

        if (empty($pin2)) {
            $pin2_error = 'Confirm your password';
        }

        if ($pin !== $pin2) {
            $error = 'Password must match';
        }
    }

    require ('index.php');
?>










