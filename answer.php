<?php
session_start();
include "service/connect.php";
include "layout/headers.php";
?>
<link rel="stylesheet" href="style/bootstrap_answer2.css">
<div class="form-container">
    <a href="proses.php?id=<?= htmlspecialchars($_GET['id']); ?>" >KEMBALI</a>
</div>
<?php

if (isset($_SESSION['is_login'])) {
    if (isset($_POST['kirim'])) {
        $pesan = $_POST['pesan'];
        $nama = $_SESSION['user'];
        $judul = $_GET['id'];
        echo $judul;
    
        if (!empty($pesan)) {
            $sql = "INSERT INTO answer (id_answer, userName, answer) VALUES ('$judul', '$nama', '$pesan')";
            if ($conn->query($sql)) {
                echo "succes";
            }else {
                echo "gagal";
            }
        } 
    }
} else {
    echo "<h2>SILAHKAN LOGIN DAHULU</h2>";
}
$destination = "proses.php?id=" . htmlspecialchars($_GET['id']);

$delay = 0.5;
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


