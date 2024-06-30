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



        .btn:hover {
            background-color: #04046f;
            ;
        }

        h1 {
            position: relative;
            left: 74px;
            /* top: 10px; */
        }


        label {
            font-size: 20px;

        }
    </style>
</head>

<body>
    <div class="container">
        <?php

          require_once("database.php");
          if (isset($_POST["submit"])) {
            $id=$_POST["id"];
            $fullname = $_POST["fullname"];
            $number= $_POST["number"];
            $paid=$_POST["salary1"];
            $due= $_POST["salary2"];

            $sql="INSERT INTO salary (id,fullname,number,salary_paid,salary_due) VALUES (?,?,?,?,?)";

            $stmt = mysqli_stmt_init($conn);

            $preparestmt = mysqli_stmt_prepare($stmt, $sql);
            if($preparestmt){
                mysqli_stmt_bind_param($stmt, "sssss", $id,$fullname,$number, $paid, $due);
                mysqli_stmt_execute($stmt);
                header("Location: salary.php");
            }else {
                die("something went wrong");

            }
          }

        ?>
        <h1>Salary Details</h1>
        <form action="" method="post">
            <div class="form-froup">
                <label for="">ID</label>
                <input type="text" class="form-control" name="id" required placeholder="Enter ID:">
            </div>
            <div class="form-froup">
                <label for="">Fullname</label>
                <input type="text" class="form-control" name="fullname" required placeholder="Enter fullname:">
            </div>
            <div class="form-froup">
                <label for="">Number</label>
                <input type="text" class="form-control" name="number" required placeholder="Enter number:">
            </div>
            <div class="form-froup">
                <label for="">Salary paid</label>
                <input type="text" class="form-control" name="salary1" required placeholder="Enter paid salary:">

            </div>
            <div class="form-froup">
                <label for="">Salary due</label>
                <input type="text" class="form-control" name="salary2" required placeholder="Enter due salary:">

            </div>
            <div class="form-froup">
                <input type="submit" class="btn" value="submit" name="submit">
            </div>
        </form>
    </div>

</body>

</html>