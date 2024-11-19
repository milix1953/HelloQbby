<?php
session_start();
$login = "";
$password = "";

if (isset($_POST["login"])) {
    $login = $_POST["login"];
}
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}

$_SESSION["msg"] = "帳號 $login 密碼 $password ";




if ($login == "root" && $password == "root") {
    header("Location: index.html");
    // echo '<script>alert("Hello!")</script>';
} else {
    
    header("Location: login.php");
    // echo '<script>alert("Fail!")</script>';
}

?>