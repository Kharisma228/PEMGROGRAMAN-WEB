<?php
session_start();

$admin1_username = "admin1";
$admin1_password = "admin1";

$admin2_username = "admin2";
$admin2_password = "admin2";

if(isset($_POST['admin']) && isset($_POST['input_password'])) {
    $input_admin = $_POST['admin'];
    $input_password = $_POST['input_password'];

    if(($input_admin == $admin1_username && $input_password == $admin1_password) || ($input_admin == $admin2_username && $input_password == $admin2_password)) {
        $_SESSION['admin'] = $input_admin;
        $_SESSION['input_password'] = $input_password;
    }
}
?>