<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: gray;
        }

        .container {
            position: relative;
            max-width: 900px;
            width: 100%;
            border-radius: 6px;
            padding: 30px;
            margin: 0 15px;
            background-color: white;
        }

        .container header {
            font-size: 30px;
            font-weight: 600;
            color: #164720;
        }

        .container form {
            position: relative;
            margin-top: 16px;
            min-height: 490px;
            background-color: #fff;
        }

        .container form .details {
            margin-top: 30px;
        }

        .container form .title {
            display: block;
            margin-bottom: 8px;
            font-size: 25px;
            font-weight: 600;
            margin: 6px 0;
            color: #164720;

        }

        .container form .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .input_field {
            display: flex;
            width: calc(100% /3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input_field label {
            font-size: 17px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input_field input {
            outline: none;
            font-size: 16px;
            font-weight: 400px;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;

        }

        .input_field #pic {
            text-decoration: none;
            border: none;
        }

        /* #pic:hover{
            background-color: gray;
            color: white;
        } */
        #btn1 {
            width: 88px;
            border: none;
            position: relative;
            top: 100px;
            left: -727px;
        }




        .btn {
            background-color: #45bcb3;
            color: white;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #25968d;
        }

        textarea {
            width: 536px;
            position: relative;
            left: -79px;
            height: 79px;
            padding: 8px;
            font-size: 20px;
        }

        .alert {
            color: green;
            font-size: 20px;
            align-items: center;
            position: relative;
            left: 319px;
        }
        .container{
            border-radius: 10px;
        }
        
    </style>
</head>

<body>
    <div class="container">

        <?php
        $id = $_GET['editid'];





        if (isset($_POST["submit"])) {
            $id = $_POST["id"];
            $fullname = $_POST["fullname"];
            $dob = $_POST["dob"];
            $email = $_POST["email"];
            $number = $_POST["number"];
            $gender = $_POST["gender"];
            $state = $_POST["state"];
            $city = $_POST["city"];
            $qualification = $_POST["qualification"];
            $experience = $_POST["experience"];
            $textarea = $_POST["text"];

            require_once "database.php";

            $sql = "UPDATE create_emp SET id='$id',fullname='$fullname',dob='$dob',email='$email',number='$number',gender='$gender',state='$state',city='$city',qualification='$qualification',experience='$experience',textarea='$textarea'    where id=$id";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: view.php");
                echo "<div class='alert'>Updated successfully......</div>";
            } else {
                die(mysqli_error($conn));
            }



        }



        ?>


        <header>Create Employee</header>
        <form action="" method="post">
            <div class="form_first">

                <span class="title">Personal Details:</span>
                <div class="fields">

                    <div class="input_field">
                        <label>Teacher ID</label>
                        <input type="text" placeholder="Enter ID:" name="id" readonly required value=<?php echo $id; ?>>
                    </div>

                    <div class="input_field">
                        <label>Full name</label>
                        <input type="text" placeholder="Enter your name:" name="fullname" required>
                    </div>

                    <div class="input_field">
                        <label>Date Of Birth</label>
                        <input type="date" placeholder="Enter your DOB:" name="dob" required>
                    </div>

                    <div class="input_field">
                        <label>Email</label>
                        <input type="email" placeholder="Enter your Email:" name="email" required>
                    </div>
                    <div class="input_field">
                        <label>Mobile Number</label>
                        <input type="text" placeholder="Enter mobile number:" name="number" required>
                    </div>

                    <div class="input_field">
                        <label>Gender</label>
                        <input type="text" placeholder="Enter your Gender:" name="gender" required>
                    </div>

                    <div class="input_field">
                        <label>State</label>
                        <input type="text" placeholder="Enter your state:" name="state" required>
                    </div>
                    <div class="input_field">
                        <label>City</label>
                        <input type="text" placeholder="Enter mobile city:" name="city" required>
                    </div>

                    <div class="input_field">
                        <label>Qualification</label>
                        <input type="text" placeholder="Enter your Qualification:" name="qualification" required>
                    </div>

                    <div class="input_field">
                        <label>Experience</label>
                        <input type="text" placeholder="Enter experience:" name="experience" required>
                    </div>

                    <div class="input_field">
                        <label>Adress</label>
                        <textarea name="text" cols="60" rows="3"></textarea>

                    </div>

                    <!-- <div class="input_field" id="pic">
                        <label>Upload photo</label>
                        <input type="submit" value="upload photo" name="file1">
                    </div> -->


                    <div class="input_field" id="btn1">
                        <input type="submit" value="update " name="submit" class="btn">
                    </div>


                </div>
            </div>
        </form>
    </div>
</body>

</html>