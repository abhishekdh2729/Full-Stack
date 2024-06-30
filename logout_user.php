<?php

 session_start();
unset($_SESSION["emailid"]);
header("Location: index.html");

?>









<!-- $errors = array();

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo"<script>alert('Email is not valid')</script>";
            }
            if (strlen($password) < 8) {
                echo"<script>alert('Password must contain atleast 8')</script>";
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match!");
            }
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } -->