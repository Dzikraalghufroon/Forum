<?php
session_start();
include "service/connect.php";
include "layout/headers.php";


if (isset($_GET['judul'])) {
    $judul = $_GET['judul'];

    // Fetch the main content
    $stmt = $conn->prepare("SELECT * FROM `konten` WHERE `judul` = ?");
    $stmt->bind_param("s", $judul);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='wiki-content'>";
        echo "<h1 class='judul'>" . htmlspecialchars($row['judul']) . "</h1>";
        echo "<div class='metadata'>";
        echo "<span class='regdate'>Tanggal: " . htmlspecialchars($row['reg_date']) . "</span>";
        echo "</div>";
        echo "<div class='content'>" . $row['isi_konten'] . "</div>";
        echo "</div>";
    } else {
        echo "Data tidak ditemukan.";
    }

    $stmt->close();

    // Fetch the answers
    $stmt = $conn->prepare("SELECT * FROM `jawab` WHERE `id_answer` = ?");
    $stmt->bind_param("s", $judul);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<div class='answers'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='answer-item'>";
            echo "<h5 class='username'><h4>Oleh: </h4>" . htmlspecialchars($row['userName']) . "</h5>";
            echo "<div class='content'><h4>" . htmlspecialchars($row['answer']) . "</h4>"."</div>";
            echo "<div class='metadata'>";
            echo "<span class='regdate'>Tanggal: " . htmlspecialchars($row['reg_date']) . "</span>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "Belum ada jawaban.";
    }
    $stmt->close();
} else {
    echo "Permintaan tidak valid. Parameter 'judul' tidak ada.";
}

// Handle form submission
if (isset($_POST['kirim'])) {
    $pesan = $_POST['pesan'];
    $nama = $_SESSION['user'];
    $judul = $_GET['judul'];

    if (!empty($pesan)) {
        $stmt = $conn->prepare("INSERT INTO jawab (id_answer, userName, answer) VALUES (?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sss", $judul, $nama, $pesan);
            if ($stmt->execute()) {
                $message = "Sukses";
            } else {
                echo "Kesalahan: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Gagal menyiapkan statement.";
        }
    }
}

$conn->close();
?>

<div class="form-container">
    <form action="jawab.php?judul=<?= htmlspecialchars($_GET['judul']); ?>" method="post">
        <input type="text" class="input-message" placeholder="Message" name="pesan" required>
        <button type="submit" class="submit-button" name="kirim">Kirim</button>
    </form>
</div>
<link rel="stylesheet" href="style/some.css">
<?php echo $_SESSION['user'];?>
<style>
    .container{
        /* position: fixed; */
    }
    .answer-item {
        list-style: none;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .username {
        font-weight: bold;
    }

    .regdate {
        color: #888;
    }
    </style>

