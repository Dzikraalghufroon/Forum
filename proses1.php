<?php
session_start();
include "service/connect.php";
include "layout/headers.php";

$delete = isset($_GET['content']) ? $_GET['content'] : '';
?>
<link rel="stylesheet" href="style/bootstrap_answer2.css">
<div class="form-container"><a href="proses1.php?delete=<?= htmlspecialchars($delete); ?>">KEMBALI</a></div>
<!-- <form action="proses1.php" method="get">
    <input type="hidden" name="delete" value="<? htmlspecialchars($delete); ?>">
    <button type="submit" class="delete">Hapus</button>
</form> -->
<?php

if (!isset($_SESSION['is_login'])) {
    echo "<h2>SILAHKAN LOGIN DAHULU</h2>";
} else {
    if (isset($_GET['delete'])) {
        $delete = $_GET['delete'];

        $sql = "DELETE FROM diskusi WHERE `content` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $delete);
        
        if ($stmt->execute()) {
            echo "Success"; 

            $destination = "account.php";
            $delay = 2;
            $waktu = 5;
            ?>

            <title>Redirecting...</title>
            <script>
                function redirect() {
                    var delay = <?php echo $delay; ?> * 1000;
                    var destination = "<?php echo $destination; ?>";
                    setTimeout(function () {
                        window.location.href = destination;
                    }, delay);
                }

                function countdown() {
                    var seconds = <?php echo $waktu; ?>;
                    var countdownElement = document.getElementById('countdown');
                    countdownElement.textContent = seconds;

                    setInterval(function() {
                        seconds--;
                        countdownElement.textContent = seconds;
                        if (seconds <= 0) clearInterval();
                    }, 1000);
                }
            </script>
            </head>
            <body onload="redirect(); countdown();">
                <div class="container">
                    <h1>Redirecting in <span id="countdown"><?php echo $waktu; ?></span> seconds...</h1>
                    <p>If you are not redirected automatically, follow the <a href="<?php echo $destination; ?>">link to <?php echo $destination; ?></a>.</p>
                </div>
            </body>
            <?php
        } else {
            echo "Gagal menghapus data.";
        }
        $stmt->close();
    }
}

$conn->close();
?>
