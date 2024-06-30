<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
    header('Location: admin.php');
    // Add exit to stop further execution
} 
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
            box-sizing: border-box;
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
            font-size: 19px;
        }

        th,
        td {
            padding: 5px;
            text-align: center;
        }
       
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <h1>Teacher Personal Details</h1>
            <ul id="navli">
                <li><a class="home" href="admin_dashboard.php">Home</a></li>
                <li><a class="home" href="create.php">Create</a></li>
                <li><a class="home" href="view.php">View</a></li>
                <li><a class="home" href="view_leave.php">Leave</a></li>
                <li><a class="home" href="salary.php">Salary</a></li>
                <li><a class="home" href="admin_logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        Leave applied by Teacher
    </div>

    <table>
        <tr>
            <th>fullname</th>
            <th>Date from leave</th>
            <th>Date to leave</th>
            <th>reason</th>

        </tr>

        <?php
        require_once("database.php");
        $sql = "SELECT * FROM apply_leave";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                //    here leave_from is the table name in the database
                echo '
                <tr>

               
                   <td>' . $row['fullname'] . '</td>
                   <td>' . $row['leave_from'] . '</td>
                   <td>' . $row['leave_to'] . '</td>
                   <td>' . $row['reason'] . '</td>
              </tr>';
            }
        }

        ?>



        <!-- <tr>
            <td>Jawalkar Charan</td>
            <td>29-09-2002</td>
            <td>29-09-2002</td>
            <td>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</td>

        </tr> -->
    </table>
    

</body>

</html>