<?php
session_start();
if(!isset($_SESSION['emailid']))
{
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
            padding: 50px;
            background-color: gray;
            overflow: hidden;
        }

        .container {
            max-width: 324px;
            position: relative;
            margin: 0 auto;
            padding: 50px;
            background-color: white;
            left: 40px;
            top: -12px;
            box-shadow: white;
            border-radius: 10px;
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
            background-color: #0000a3;
            font-size: 19px;
            top: 17px;
            position: relative;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 314px;
        }

        input {
            border: 2px solid black;
            border-radius: 5px;
        }

        textarea {
            border: 2px solid black;
            font-size: 19px;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #04046f;
            ;
        }

        h1 {
            position: relative;
            left: 74px;
            /* top: 10px; */
        }
        label{
            font-size: 20px;

        }
    </style>
</head>

<body>
    <div class="container">

        <?php
        require_once("database.php");
        if (isset($_POST["submit"])) {
            $fullname = $_POST["fullname"];
            $date1 = $_POST["date1"];
            $date2 = $_POST["date2"];
            $reason = $_POST["reason"];

            $sql = "INSERT INTO apply_leave (fullname,leave_from,leave_to,reason) VALUES (?,?,?,?)";
            // $result = mysqli_query($conn, $sql);
        
            $stmt = mysqli_stmt_init($conn);

            $preparestmt = mysqli_stmt_prepare($stmt, $sql);
            if ($preparestmt) {
                mysqli_stmt_bind_param($stmt, "ssss", $fullname, $date1, $date2, $reason);
                mysqli_stmt_execute($stmt);
                echo "<script>alert('Leave applied....')</script>";
                header("Location: user_dashboard.php");
                
                
            } else {
                die("something went wrong");

            }
        }

        ?>
        <h1>Apply leave</h1>
        <form action="" method="post">
            <div class="form-froup">
                <label for="">Fullname</label>
                <input type="text" class="form-control" name="fullname" required placeholder="full name:">
            </div>
            <div class="form-froup">
                <label for="">From</label>
                <input type="date" class="form-control" name="date1" required placeholder="Enter from date:">
            </div>
            <div class="form-froup">
                <label for="">To</label>
                <input type="date" class="form-control" name="date2" required placeholder="Enter to date:">
            </div>
            <div class="form-froup">
                <textarea name="reason" id="" cols="28" rows="7" placeholder="Enter reason"></textarea>
            </div>
            <div class="form-froup">
                <input type="submit" class="btn" value="Apply" name="submit">
            </div>
        </form>

    </div>

</body>

</html>