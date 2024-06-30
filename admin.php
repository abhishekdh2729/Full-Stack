<?php
require("database.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            padding: 50px;
            background-color: gray;
            /* overflow: hidden; */

        }

        img {
            position: absolute;
            left: 0px;
            width: 100%;
            height: 735px;
            top: 0px;
        }


        .container {
            max-width: 324px;
            position: relative;
            margin: 0 auto;
            padding: 50px;
            background-color: transparent;
            left: 4px;
            top: 125px;
            transition: box-shadow 0.3s;
            border-radius: 17px;
        }

        .container:hover {

            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .form-froup {
            margin-bottom: 23px;

        }

        .form-control {
            font-size: 20px;
            width: 300px;
            padding: 5px;
            align-items: center;
            justify-content: center;
        }

        .btn {
            text-decoration: none;
            padding: 10px;
            color: white;
            background-color: #0085a3;
            font-size: 19px;
            top: 17px;
            position: relative;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 314px;
        }

        input {
            /* border: 2px solid black; */
            border-radius: 30px;
            border: 1px solid white;
            text-align: center;

        }

        #first_input:hover {
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
        }

        textarea {
            border: 2px solid black;
            font-size: 19px;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #025a6e;
            ;
        }

        .txt {
            color: white;
            position: relative;
            left: 74px;
            font-size: 27px;
            /* top: 10px; */
            top: -29px;
            font-weight: 900;
        }

        label {
            font-size: 20px;

        }

        #mail {
            position: absolute;
            left: 60px;
            top: 87px;
            font-size: 25px;
        }
        


        #pass {
            position: absolute;
            left: 61px;
            top: 144px;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <img src="back1.jpg" alt="">
    <div class="container">
        <div class="txt">
            Admin Login
        </div>
        <form action="admin.php" method="post">
            <div class="form-froup">
                <input type="text" placeholder="Enter username" name="adminname" class="form-control" id="first_input">
                <span id="mail" ><i class='bx bxs-user'></i></span>
            </div>
            <div class="form-froup">
                <input type="text" placeholder="Enter password" name="adminpassword" class="form-control"
                    id="first_input">
                <span id="pass"><i class='bx bxs-lock-alt'></i></span>
            </div>
            <div class="form-ftn">
                <input type="submit" value="Login" name="login" class="btn">
            </div>

        </form>
    </div>
    <?php

    if (isset($_POST["login"])) {
        $adminName = $_POST["adminname"];
        $adminPassword = $_POST["adminpassword"];
        // Assuming $conn is your database connection
        $query = "SELECT * FROM `admin` WHERE `name`='$adminName' AND `password`='$adminPassword'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION["AdminLoginId"] = $adminName;
            header("Location: admin_dashboard.php");
        } else {
            echo "<script>alert('Incorrect Password')</script>";
        }
    }


    ?>
</body>

</html>