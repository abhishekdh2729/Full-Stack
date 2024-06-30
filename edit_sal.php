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
            left: 30px;
            /* top: 10px; */
        }


        label {
            font-size: 20px;

        }
    </style>
</head>
<body>
    <div class="container">
    <h1> Edit Salary Details</h1>

         <?php
         require_once("database.php");
         $id = $_GET['editidis'];

         if(isset($_POST['submit'])){
            $id=$_POST['id'];
            $fullname = $_POST["fullname"];
            $number= $_POST["number"];
            $paid=$_POST["salary1"];
            $due= $_POST["salary2"];

            $sql="UPDATE salary SET id='$id',fullname='$fullname',number='$number',salary_paid='$paid',salary_due='$due' where id=$id";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: salary.php");
                echo "<div class='alert'>Updated successfully......</div>";
            } else {
                die(mysqli_error($conn));
            }
         }

         ?>

        <form action="" method="post">
            <div class="form-froup">
                <label for="">ID</label>
                <input type="text" class="form-control" name="id" required placeholder="Enter ID:" readonly required value=<?php echo $id; ?>>
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

    </div>
    
</body>
</html>