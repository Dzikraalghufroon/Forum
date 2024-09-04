<?php
session_start();
include "service/connect.php";
include "layout/headers.php";
?>
<h3><pre>  </pre></h3>
<form action="diskusi.php" method="post">
    <button type="submit" class="submit-button">Kembali</button>
</form>
<?php
// untuak manampilan jawaban
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM `diskusi` WHERE `id` = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='wiki-content'>";
        echo "<h1 class='judul'>" . htmlspecialchars($row['content']) . "</h1>";
        echo "<div class='metadata'>";
        echo "<span class='regdate'>Tanggal: " . htmlspecialchars($row['regdate']) . "</span>";
        echo "</div>";
        echo "<div class='content'>" . htmlspecialchars($row['userName']) . "</div>";
        echo "</div>";
    } else {
        echo "Data tidak ditemukan.";
    }
    $stmt->close();
} else {
    echo "Permintaan tidak valid. Parameter 'id' tidak ada.";
}

// Display jawaban
if (isset($_GET['id'])) {
    $judul = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM `answer` WHERE `id_answer` = ?");
    $stmt->bind_param("s", $judul);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<div class='answers'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='answer-item'>";
            echo "<h2 class='username'>" .  htmlspecialchars($row['answer']). "</h2>";
            echo "<div class='metadata'>";
            echo "<span class='regdate'>Tanggal: " . htmlspecialchars($row['reg_date']) . "</span>";
            echo "</div>";
            echo "<div class='content'><h5>oleh: </h5>" . htmlspecialchars($row['userName']) . "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "Belum ada jawaban.";
    }
    $stmt->close();
}

// utnk menghasndel kiriman
if (isset($_POST['kirim'])) {
    $pesan = $_POST['pesan'];
    $nama = $_SESSION['user'];
    $judul = $_GET['id'];

    if (!empty($pesan)) {
        $sql = "INSERT INTO answer (id_answer, userName, answer) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sss", $judul, $nama, $pesan);
            if ($stmt->execute()) {
                $message = "succes";
            } else {
                echo "Kesalahan: " . $stmt->error;
            }
        } else {
            echo "Gagal menyiapkan statement.";
        }
    }
}

$conn->close();
?>

<div class="form-container">
    <form action="answer.php?id=<?= htmlspecialchars($_GET['id']); ?>" method="post">
        <input type="text" class="input-message" placeholder="Message" name="pesan" required>
        <button type="submit" class="submit-button" name="kirim">Kirim</button>
    </form>
</div>

<link rel="stylesheet" href="style/bootstrap_answer2.css">