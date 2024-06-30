<?php
include ("database.php");
if (isset ($_GET["deleteid"])) {
    $id = $_GET['deleteid'];

    // table (id) is equal to $id that is ($id=$_GET['deleteid'];) 

    $sql = "DELETE FROM create_emp WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: view.php");

    } else {
        die (mysqli_error($conn));
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>

</body>

</html>