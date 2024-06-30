<?php

 session_start();
unset($_SESSION["AdminLoginId"]);
header("Location: index.html");

?>