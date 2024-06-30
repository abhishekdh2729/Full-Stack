
<?php
include("database.php");
if(isset($_GET["deleteid"])){
    $id=$_GET['deleteid'];

    // table (id) is equal to $id that is ($id=$_GET['deleteid'];) 

    $sql= "DELETE FROM salary WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: salary.php");

}else{
    die(mysqli_error($conn));
}
}



?>