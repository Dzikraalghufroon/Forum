<?php
include "service/connect.php";
?>
<img src="layout/a.png" alt="">
<?php
include "layout/headers.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Display</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="icon" href="logo.png" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin: 15px;
            width: 300px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            text-align: center;
        }
        .card-body {
            padding: 15px;
            text-align: center;
        }
        .card-body a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .card-body a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Daftar Konten</h1>
    </div>

    <div class="content-wrapper">
        <?php

        $sql = "SELECT judul FROM konten ORDER BY RAND() LIMIT 40";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['judul'];
                echo "<div class='card'>";
                echo "<div class='card-header'>" . htmlspecialchars($row["judul"]) . "</div>";
                echo "<div class='card-body'>";
                echo "<a href='somepage.php?judul=" . urlencode($id) . "'>Kunjungi</a>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada hasil yang ditemukan.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
