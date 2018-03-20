<?php
// Include config file
require_once 'info.php';

// Define variables and initialize with empty values
$user_name = $passwd = $confirm_passwd = $email ="";
$user_name_err = $passwd_err = $confirm_passwd_err = $email_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["user_name"]))){
        $user_name_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE user_name = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_user_name);

            // Set parameters
            $param_user_name = trim($_POST["user_name"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $user_name_err = "This username is already taken.";
                } else{
                    $user_name = trim($_POST["user_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if(empty(trim($_POST['passwd']))){
        $passwd_err = "Please enter a password.";
    } elseif(strlen(trim($_POST['passwd'])) < 6){
        $passwd_err = "Password must have atleast 6 characters.";
    } else{
        $passwd = trim($_POST['passwd']);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_passwd"]))){
        $confirm_passwd_err = 'Please confirm password.';
    } else{
        $confirm_passwd = trim($_POST['confirm_passwd']);
        if($passwd != $confirm_passwd){
            $confirm_passwd_err = 'Password did not match.';
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($passwd_err) && empty($confirm_passwd_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, email, secret_answer) VALUES (?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_user_name = $user_name;
            $param_passwd = password_hash($passwd, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>
