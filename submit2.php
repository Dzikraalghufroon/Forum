<?php
include "service/connect.php";
session_start();

?>
<link rel="stylesheet" href="style/bootstrap_submit.css">
<img src="layout/a.png" alt="">
<?php include "layout/headers.php";?>
<h1>SELALU IKUTI PEDOMAN DALAM MEMBERI PESAN</h1>
<H2>JAGA ADAB</H2>
<h2>DILARANG BERBICARA KASAR</h2>
<div class="form-container">
    <form action="submit.php" method="post">
        <input type="text" class="input-message" placeholder="Message" name="pesan">
        <button type="submit" class="submit-button" name="kirim">Kirim</button>
    </form>
</div>
<?php
// if (isset($_SESSION['is_login'])) {
//     if (isset($_POST['kirim'])) {
//         $pesan = $_POST['pesan'];
//         $nama = $_SESSION['user'];

//         echo $nama . " " . $pesan;
//         echo " test";

//         if (!empty($pesan)) {
//             echo " halo";
//             $sql = "INSERT INTO diskusi (userName, content) VALUES (?, ?)";
//             $stmt = $conn->prepare($sql);

//             if ($stmt) {
//                 $stmt->bind_param("ss", $nama, $pesan);
//                 if ($stmt->execute()) {
                    
//                     header("location: succes.php");
//                     exit();
//                 }
//                 else {
//                     echo "kesalahan" .$stmt->error;
//                 }
//             }
//             else {
//                 echo "gagal";
//             }
//         }
//         else {
//             echo "pesan harus diisi";
//         }
//     }
// }
// else {
//     echo "Silahkan login terlebih dahulu";
// }
// ?>