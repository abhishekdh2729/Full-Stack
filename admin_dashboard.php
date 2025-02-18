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
    <title>Admin dashboard</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background-color: #b7e5e9;
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

        img {
            position: absolute;
            width: 57%;
            height: 89%;
            top: 76px;
            right: 69px;
        }

        .wrapper {
            height: 67vh;
            display: grid;
            place-items: center;
            left: -409px;
            position: relative;
            font-size: 27px;
        }

        .typing-demo {
            width: 17ch;
            animation: typing 2s steps(18), blink .5s step-end infinite alternate;
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid;
            font-family: auto;
            font-size: 2em;
            font-weight: bolder;
            color: #442f8e;
        }
        #lg:hover{
            color: red;
        }

        @keyframes typing {
            from {
                width: 0
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <h1>Teacher personal details</h1>
            <ul id="navli">
                <li><a class="home" href="admin_dashboard.php">Home</a></li>
                <li><a class="home" href="create.php">Create</a></li>
                <li><a class="home" href="view.php">View</a></li>
                <li><a class="home" href="view_leave.php">Leave</a></li>
                <li><a class="home" href="salary.php">Salary</a></li>
                <li><a class="home" id="lg" name="logout" href="admin_logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="wrapper">
        <div class="typing-demo">
            Welcome <?php echo $_SESSION["AdminLoginId"];?>
        </div>

    </div>
    <div class="container">
        <img src="nik.png" alt="">
    </div>

</body>

</html>