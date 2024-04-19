<?php
session_start();

$kasir1_username = "kasir1";
$kasir1_password = "kasir1";

$kasir2_username = "kasir2";
$kasir2_password = "kasir2";

if(isset($_POST['kasir']) && isset($_POST['input_password'])) {
    $input_kasir = $_POST['kasir'];
    $input_password = $_POST['input_password'];

    if(($input_kasir == $kasir1_username && $input_password == $kasir1_password) || ($input_kasir == $kasir2_username && $input_password == $kasir2_password)) {
        $_SESSION['kasir'] = $input_kasir;
        $_SESSION['input_password'] = $input_password;
    }
}
?>