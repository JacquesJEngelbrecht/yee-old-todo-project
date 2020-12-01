<?php
$error_count = 0;
$input = '';
$email = $password = $confirm_password = $username = '';
$email_error = $email_valid_error = $username_error = $password_error = $confirm_password_error = $password_match_error = '';
//Register
if(isset($_POST['registerBtn'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["email"])) {
            $email_error = 'Please provide Email!';
            $email = $_POST["email"];
            $error_count += 1; 
        } else if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_valid_error = 'Please provide an valid Email!';
            $error_count += 1;
        } else {
            $email = input_to_test($_POST["email"]);
        }

        if(empty($_POST["password"])) {
            $password_error = 'Please provide Password!';
            $error_count += 1;
        } else {
            $password = input_to_test($_POST["password"]);
        }

        if(empty($_POST["confirm-password"])) {
            $confirm_password_error = 'Please confirm Password!';
            $error_count += 1;
        } else {
            $confirm_password = input_to_test($_POST["confirm-password"]);
        }

        if($password !== $confirm_password && !empty($_POST["confirm-password"])) {
            $password_match_error = 'Passwords do not match!';
            $error_count += 1;
        }

        if(empty($_POST["username"])) {
            $username_error = 'Please provide Username!';
            $error_count += 1;
        } else {
            $username = input_to_test($_POST["username"]);
        }
    }

}

function input_to_test($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

//Login
if(isset($_POST['login'])) {

}
