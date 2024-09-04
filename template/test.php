<?php

session_start();
include "service/connect.php";
include "layout/headers.php";
$delete = $_GET['content'];
?>
<link rel="stylesheet" href="style/bootstrap_answer2.css">
<div class="form-container"><a href="somepage.php?delete=<?= htmlspecialchars($_GET['content']); ?>" >KEMBALI</a></div>
<?php
session_start();

if (!isset($_SESSION['is_login'])) {
    echo "<h2>SILAHKAN LOGIN DAHULU</h2>";
}else {
    if (isset($_POST['kirim'])) {
        $pesan = $_POST['pesan'];
        $nama = $_SESSION['user'];
        $delete = $_GET['content'];
        echo $delete;
    
        if (!empty($pesan)) {
            $sql = "DELETE FROM diskusi WHERE `content` = '$delete'";
            if ($conn->query($sql)) {
                echo "succes";?>
                <?php
session_start();

$destination = "somepage.php?delete=" . htmlspecialchars($_GET['content']);

$delay = 2;
$waktu = 5;
?>

    <title>Redirecting...</title>
    <script>
        
        function redirect() {
            var delay = <?php echo $delay; ?> * 1000; 
            var destination = "<?php echo $destination; ?>";
            setTimeout(function() {
                window.location.href = destination;
            }, delay);
        }
    </script>
</head>
<body onload="redirect()">
    <div class="container">
        <h1>Redirecting in <span id="countdown"><?php echo $waktu; ?></span> seconds...</h1>
        <p>If you are not redirected automatically, follow the <a href="<?php echo $destination; ?>">link to <?php echo $destination; ?></a>.</p>
    </div>
</body>

                <?php
            }else {
                echo "gagal";
            }
        } 
    }
    
}

?>
