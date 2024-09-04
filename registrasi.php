<?php include "service/connect.php";
session_start();
if (isset($_SESSION['is_login'])) {
    header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style/bootstrap_sign.css">

<body>
    <!-- <img src="layout/a.png" alt=""> -->
    <?php //include "layout/header.php" ?>
    <a href="indek.php">kembali</a>
    <div class="container">
        <h2>SIGN UP NOW</h2>

        <img src="layout/gambar.png" alt="" class="banner">
        <form action="registrasi.php" method="POST">
            <input type="text" placeholder="username" name="username" class="input-text"><br>
            <input type="password" placeholder="password" name="password" class="input-password"><br>
            <button type="submit" name="login" class="submit-button">GO</button>
        </form>
    </div>

    <?php include "template/footer.html" ?>
</body>

</html>
<?Php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($password) || !empty($username)) {
        $db = "SELECT * FROM `users` WHERE `userName` = '$username'";
        $hasil = $conn->query($db);
        if ($hasil->num_rows > 0) {
            echo '<h3 class="message">data sudah ada</h3>';
            //daftar($conn,$password,$username);
        } else {

        $sql = "INSERT INTO users (userName, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {

            $hash_pw = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bind_param("ss", $username, $password);//$hash_pw); 
            if ($stmt->execute()) {
                $_SESSION['user'] = $username;//$data['username'];
                $_SESSION['is_login'] = true;
                echo '<h3 class="message">TEKAN SEKALI LAGi</h3>';
                header("location: dashboard.php");
            } else {
                echo '<h3 class="message">Kesalahan: </h3>' . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Kesalahan dalam mempersiapkan pernyataan: " . $conn->error;
            //}

        }
    } //else {
    //     echo '<h3 class"message">jangan kosongkan</h3>';
    // }
}}
?>
<?php

// function daftar($conn, $password, $username)
// {

// }

// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     if (!empty($password) || !empty($username)) {
//         $db = "SELECT * FROM `users` WHERE `userName` = '$username'";
//         $hasil = $conn->query($db);
//         if ($hasil->num_rows > 0) {
//             echo '<h3 class="message">data sudah ada</h3>';
//             //daftar($conn,$password,$username);
//         } else {

//             $sql = "INSERT INTO users (userName, password) VALUES (?, ?)";
//             $stmt = $conn->prepare($sql);

//             if ($stmt) {

//                 $hash_pw = password_hash($password, PASSWORD_BCRYPT);
//                 $stmt->bind_param("ss", $username, $password);//$hash_pw); 
//                 if ($stmt->execute()) {
//                     //"<script>window.location.href = dashboard.php;</script>";
//                     // $_SESSION['user'] = $username;//$data['username'];
//                     // $_SESSION['is_login'] = true;
//                     echo '<h3 class="message">TEKAN SEKALI LAGi</h3>';
//                     header("location: dashboard.php");
//                 } else {
//                     echo '<h3 class="message">Kesalahan: </h3>' . $stmt->error;
//                 }

//                 $stmt->close();
//             } else {
//                 echo "Kesalahan dalam mempersiapkan pernyataan: " . $conn->error;
//             }

//         }
//     } else {
//         echo '<h3 class"message">jangan kosongkan</h3>';
//     }

// }


?>
<style>
    .message {
        margin-left: 52%;
        margin-top: -50px;
    }
</style>