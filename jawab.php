<?php

session_start();
include "service/connect.php";
include "layout/headers.php";
$judul = $_GET['judul'];
?>
<link rel="stylesheet" href="style/bootstrap_answer2.css">
<div class="form-container"><a href="somepage.php?judul=<?= htmlspecialchars($_GET['judul']); ?>" >KEMBALI</a></div>
<?php
session_start();

if (!isset($_SESSION['is_login'])) {
    echo "<h2>SILAHKAN LOGIN DAHULU</h2>";
}else {
    if (isset($_POST['kirim'])) {
        $pesan = $_POST['pesan'];
        $nama = $_SESSION['user'];
        $judul = $_GET['judul'];
        echo $judul;
    
        if (!empty($pesan)) {
            $sql = "INSERT INTO jawab (id_answer, userName, answer) VALUES ('$judul', '$nama', '$pesan')";
            if ($conn->query($sql)) {
                echo "succes";?>
                <?php
session_start();

$destination = "somepage.php?judul=" . htmlspecialchars($_GET['judul']);

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
