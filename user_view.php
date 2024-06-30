<?php
session_start();
if (!isset ($_SESSION['emailid'])) {
    header('Location: login.php');
    // Add exit to stop further execution
}
?>


<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing
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
            font-weight: 600;
            top: 41px;
            text-decoration: none;
            background-color: #40c9ea;
            margin: 1px 534px;
            border-radius: 13px;
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
        }

        th,
        td {
            padding: 9px;
            text-align: center;

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
            border: 2px solid red;
            border-radius: 5px;
        }

        #sec {
            background-color: #4444f5;
            color: white;
            position: relative;
            left: 0px;
            padding: 3px;
            border: 2px solid #4444f5;
            border-radius: 5px;

        }

        a {
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
        Personal details of Teachers
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>State</th>
            <th>City</th>
            <th>Qualification</th>
            <th>Experience</th>
            <th>Address</th>
           
        </tr>

        <?php
        $sql = "SELECT * FROM create_emp";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                        <td>' . $row["id"] . '</td>
                        <td>' . $row["fullname"] . '</td>
                        <td>' . $row["dob"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["number"] . '</td>
                        <td>' . $row["gender"] . '</td>
                        <td>' . $row["state"] . '</td>
                        <td>' . $row["city"] . '</td>
                        <td>' . $row["qualification"] . '</td>
                        <td>' . $row["experience"] . '</td>
                        <td>' . $row["textarea"] . '</td>
                       
                    </tr>';
            }
        }
        ?>
    </table>


</body>

</html>