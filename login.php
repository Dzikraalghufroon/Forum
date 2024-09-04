<?php include "service/connect.php";

session_start();

if (isset($_SESSION['is_login'])) {
    header("location: dashboard.php");
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_login = "SELECT * FROM `users` WHERE `userName` = '$username' AND `password` = '$password'";
    $result = $conn->query($sql_login);

    if ($result->num_rows > 0) {
        echo " ada";
        $data = $result->fetch_assoc();
        $_SESSION['user'] = $username;//$data['username'];
        $_SESSION['is_login'] = true;
        if ($username == 'admin_ganteng') {
            header("location: admin.php");
        }
        else {
            header("location: dashboard.php");
        }
    } else {
        echo "data tidak ada";
    }
}

?>
<link rel="stylesheet" href="style/bootstrap_sign.css">
<!-- <img src="layout/a.png" alt=""> -->
<?php //include "layout/header.php" ?>
<title></title>

<body>
<a href="indek.php">kembali</a>
<div class="container">
        <img src="layout/gambar.png" alt="" class="banner">
        <form action="login.php" method="POST">
            <input type="text" placeholder="Username" name="username" class="input-text">
            <br>
            <input type="password" placeholder="Password" name="password" class="input-password">
            <br>
            <button type="submit" name="login" class="submit-button">Login</button>
        </form>
    </div>
    
</body>
<?php
include "template/footer.html"
    ?>
