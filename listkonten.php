<img src="layout/a.png" alt="Logo">
<?php
            include "service/connect.php";
            include "layout/headers.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konten</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">

            <h1>Berita Terbaru</h1>
        </div>
        <div class="content">
            <?php
            $sql = "SELECT judul,foto FROM konten ORDER BY RAND() LIMIT 40";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['judul'];
                    $gambar = $row['foto'];
            ?>
                    <div class="news-item">
                        <img src="<?php echo $row['foto']?>" alt="Thumbnail">
                        <h2><?php echo $row["judul"]; ?></h2>
                        <a href="somepage.php?judul=<?php echo urlencode($id); ?>">Baca Selengkapnya</a>
                    </div>
            <?php
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>
<style>
    /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.header img {
    width: 100px; /* Sesuaikan ukuran logo */
    margin-bottom: 10px;
}

.header h1 {
    font-size: 24px;
    color: #333;
}

.content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Tampilan grid untuk menyesuaikan ukuran layar */
    gap: 20px;
}

.news-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.news-item:hover {
    transform: translateY(-5px);
}

.news-item img {
    width: 100%;
    height: 200px; /* Sesuaikan ukuran gambar */
    object-fit: cover;
}

.news-item h2 {
    padding: 10px;
    font-size: 18px;
    color: #333;
}

.news-item a {
    display: block;
    padding: 10px;
    text-align: center;
    color: #007bff;
    font-weight: bold;
    text-decoration: none;
}

.news-item a:hover {
    background-color: #f0f0f0;
}

</style>