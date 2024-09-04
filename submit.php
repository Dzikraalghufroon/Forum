<?php
include "service/connect.php";
session_start();

if (isset($_SESSION['is_login'])) {
    if (isset($_POST['kirim'])) {
        $pesan = $_POST['pesan'];
        $nama = $_SESSION['user'];

        if (!empty($pesan)) {
            echo " halo";
            $sql = "INSERT INTO diskusi (userName, content) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ss", $nama, $pesan);
                if ($stmt->execute()) {
                    
                    header("location: succes.php");
                    exit();
                }
                else {
                    echo "kesalahan" .$stmt->error;
                }
            }
            else {
                echo "gagal";
            }
        }
        else {
            $pesan = "pesan harus diisi";
        }
    }
}
else {
    echo "Silahkan login terlebih dahulu";
}
?>
<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: indek.php");
    exit();
}


$destination = 'submit2.php';

$delay = 2;
$waktu = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p>pesan harus diisi <a href="submit">link to <?php echo $destination; ?></a>.</p>
    </div>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #333;
}

.container {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
    width: 100%;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    margin-bottom: 10px;
}

a {
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

#countdown {
    font-weight: bold;
}

</style>

