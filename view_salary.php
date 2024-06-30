<?php
session_start();
if (!isset ($_SESSION['emailid'])) {
    header('Location: login.php');
    // Add exit to stop further execution
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            overflow: hidden;
            overflow: hidden;
        }

        h1 {
            margin: 0%;
            padding: 33px;
            left: 50px;
            font-size: 28px;
        }

        header {
            margin: 0%;
            background: #632e89;
            color: white;
        }

        li {
            display: inline-block;
        }

        #navli {
            position: absolute;
            right: 34px;
            top: 0px;
        }

        #navli li a {
            position: relative;
            padding: 11px;
            font-size: 31px;
            text-decoration: none;
            color: white;
            top: 12px;
            right: 30px;
        }

        #navli li a:after {
            content: "";
            position: absolute;
            background-color: rgb(255, 255, 255);
            height: 3px;
            width: 0px;
            left: 0;
            bottom: 9px;
            transition: 0.3s;
        }

        #navli li a:hover:after {
            width: 100%;
        }

        .container {
            position: relative;
            text-align: center;
            font-size: 36px;
            font-weight: 1000;
            top: 41px;
            text-decoration: underline;
        }

        table {
            position: relative;
            left: 50px;
            top: 100px;
            width: 96%;
            text-align: center;
            border-collapse: collapse;
            border-spacing: 0;
        }

        th {
            background-color: #40c9ea;
            font-size: 19px;
        }

        th,
        td {
            padding: 5px;
            text-align: center;
        }

        .btn input {
            text-decoration: none;
            background-color: blue;
            width: 108px;
            position: relative;
            font-size: 26px;
            padding: 10px;
            border-radius: 49px;
            top: 112px;
            left: 63px;
            cursor: pointer;


        }

        .btn input:hover {
            background-color: #0000d4;
            ;
        }

        button {
            text-decoration: none;
            border: none;
            font-size: 16px;
            width: 40px;
        }

        #first {
            background-color: #ff1515;
            position: relative;
            left: -13px;
        }

        #sec {
            background-color: #4444f5;
            color: white;
            position: relative;
            left: 0px;
            padding: 3px;
        }

        button a {
            color: white;
            text-decoration: none;
            padding: 2px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <h1>Teacher Personal Details</h1>
            <ul id="navli">
                <li><a class="home" href="user_dashboard.php">Home</a></li>
                <li><a class="home" href="user_view.php">View</a></li>
                <li><a class="home" href="leave.php">Apply leave</a></li>
                <li><a class="home" href="view_salary.php">Salary</a></li>
                <li><a class="home" href="logout_user.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        Salary details
    </div>

    <table>
        <tr>
            <th>id</th>
            <th>fullname</th>
            <th>number</th>
            <th>salary paid</th>
            <th>salary due</th>


        </tr>

        <?php

        require_once ("database.php");
        $sql = "SELECT * FROM salary";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <tr>

               
                <td>' . $row['id'] . '</td>
                <td>' . $row['fullname'] . '</td>
                <td>' . $row['number'] . '</td>
                <td>' . $row['salary_paid'] . '</td>
                <td>' . $row['salary_due'] . '</td>
                
                
           </tr>
                
                ';
            }
        }
        ?>
    </table>

</body>

</html>