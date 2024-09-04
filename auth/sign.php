<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "template/header.html" ?>
    <h3>SIGN UP NOW</h3>
    <form action="sign.php" method="POST">
        <input type="text" placeholder="username" name="username"><br>
        <input type="password" placeholder="password" name="password"><br>
        <button type="submit" name="login">GO</button>
    </form>
    <?php include "template/footer.html" ?>
</body>

</html>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($password) || !empty($username)) {
        $sql = "INSERT INTO users (userName, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Mengikat nilai asli ke placeholder
            //$hash_pw = password_hash($password,PASSWORD_BCRYPT);
            $stmt->bind_param("ss", $username, $password);//$hash_pw); 
            if ($stmt->execute()) {
                echo "Data berhasil dimasukkan";
                header("location: index.php");
            } else {
                echo "Kesalahan: " . $stmt->error;
            }

            // Menutup pernyataan
            $stmt->close();
        } else {
            echo "Kesalahan dalam mempersiapkan pernyataan: " . $conn->error;
        }
    } else {
        header("location: error.php");
    }

}


?>