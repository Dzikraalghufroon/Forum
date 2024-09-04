<!-- <?php
//include "service/connect.php";
?>
<?php
//include "layout/header.html"
?>
<a href="diskusi.php">ok</a> -->
<?php
session_start();

$destination = 'indek.php';

$delay = 0.5;
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
        <p>If you are not redirected automatically, follow the <a href="<?php echo $destination; ?>">link to <?php echo $destination; ?></a>.</p>
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

