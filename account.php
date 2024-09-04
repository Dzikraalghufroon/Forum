<?php
include "service/connect.php";
session_start();
?>
<img src="layout/a.png" alt="">
<?php
include "layout/headers.php";
?>

<body>
    <h1>
        <?php
        if (isset($_SESSION['is_login'])) {
            echo "Halo ";
            echo htmlspecialchars($_SESSION['user']);

            echo '<form action="submit.php" method="post" class="logout-form">
                    <button type="submit" name="logout" class="logout-button">Logout</button>
                  </form>';
            echo '<br><h2>tekan dua kali </h2>';
        } else {
            echo "Silahkan login terlebih dahulu";
        }
        ?>
    </h1>
</body>

<?php
if (isset($_SESSION["user"])) {
    $nama = $_SESSION["user"];

    // Use prepared statements for better security
    $stmt = $conn->prepare("SELECT id, userName, content, regdate FROM diskusi WHERE userName = ?");
    $stmt->bind_param("s", $nama);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $get = $row['content'];
            echo "<ul class='discussion-item'>";
            echo "<li class='username'>" . $row["userName"] . "</li>";
            echo "<li class='content'>" . $row["content"] . "</li>";
            echo "<li class='regdate'>" . $row["regdate"] . "</li>";
            echo "<li><a href='proses.php?id=$id' class='link'>Lihat jawaban</a></li><br><br>";
            echo "<li><a href='proses1.php?delete=$get' class='tmbl'>hapus</a></li>";

            echo "</ul>";
        }
        // while ($row = $result->fetch_assoc()) {
        //     echo "<ul class='discussion-item'>";
        //     echo "<li class='username'>" . htmlspecialchars($row["userName"]) . "</li>";
        //     echo "<li class='content'>" . htmlspecialchars($row["content"]) . "</li>";
        //     echo "<li class='regdate'>" . htmlspecialchars($row["regdate"]) . "</li>";
        //     echo "</ul>";
        // }
    } else {
        echo "0 results";
    }

    $stmt->close();
}
if (isset($_POST['delete'])) {

}
?>

<style>
    .logout-form {
        margin-top: 20px;
        text-align: center;
    }

    .logout-button {
        padding: 10px 20px;
        background-color: #FF6347;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .logout-button:hover {
        background-color: #FF4500;
    }

    .discussion-item {
        list-style-type: none;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .username {
        font-weight: bold;
    }

    .content {
        margin: 5px 0;
    }

    .regdate {
        color: #888;
        font-size: 12px;
    }

    .delete {
        padding: 10px 20px;
        background-color: #228B22;
        /* Dark blue background */
        color: white;
        /* White text color */
        font-weight: bold;
        cursor: pointer;
    }

    .delete:hover {
        background-color: #4169E1;
        /* Royal blue background on hover */
    }

    .link{
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        background-color: chocolate;
    }

    .tmbl {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        background-color: #228B22;
    }
</style>

<script>
    function myFunction() {
        alert("Hello! I am an alert box!");
    }
</script>