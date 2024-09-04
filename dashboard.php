<?php
include "service/connect.php";

session_start();
header("location:indek.php");
if (!isset($_SESSION['is_login'])) {
    header("location: indek.php");
}
?>
<img src="layout/a.png" alt="">
<?php
include "layout/header.html";
?>
<title>Dashboard</title>

<body>
    <h1>halo <?= $_SESSION['user'] ?></h1>
    <form action="dashboard.php" method="post">
        <button type="submit" name="logout">logout</button>
    </form>
</body>
<?php
include "template/footer.html";
?>