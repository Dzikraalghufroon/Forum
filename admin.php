<?php
session_start();
include "service/connect.php";
include "layout/headers.php";
?>

<form action="admin.php" method="post">
    <input type="text" name="judul" placeholder="judul">
    <input type="text" name="konten" placeholder="konten">
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <button type="submit" name="kirim">kirim</button>
</form>
<!-- <img src="layout/8.png" alt=""> -->
<?php
if (isset($_SESSION['user']) && $_SESSION['user'] == "adminGanteng") {
    echo "test";
    if (isset($_POST['kirim'])) {
        echo "test";
        $foto = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $judul = $_POST['judul'];
        $Content = $_POST['konten'];
        $sql = "INSERT INTO konten (judul, isi_konten, foto) VALUES ('$judul','$Content','$foto')";
        if ($conn->query($sql)) {
            echo "data masuk";
            header("location:succes.php");
        } else {
            echo "gagal masuk";
        }


    } else {
        header("index.php");
    }
}
?>
