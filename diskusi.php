<?php
include "service/connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskusi</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <!--<img src="layout/a.png" alt="">-->
        <?php include "layout/headers.php"; ?>
    </header>

    <main class="container">
        <?php
        $sql = "SELECT id, userName, content, regdate FROM diskusi ORDER BY RAND() LIMIT 20";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                echo "<ul class='discussion-item'>";
                echo "<li class='username'>" . htmlspecialchars($row["userName"]) . "</li>";
                echo "<li class='content'>" . htmlspecialchars($row["content"]) . "</li>";
                echo "<li class='regdate'>" . htmlspecialchars($row["regdate"]) . "</li>";
                echo "<li><a href='proses.php?id=$id' class='btn'>terbang</a></li>";
                echo "</ul>";
            }
        } else {
            echo "<p class='no-results'>0 results</p>";
        }

        $conn->close();
        ?>
        <div class="form-container">
            <form action="diskusi.php" method="post">
                <button type="submit" class="refresh-button">REFRESH</button>
            </form>
        </div>
    </main>

    <script src="script/main.js"></script>
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
    color: #333;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

header img {
    display: block;
    margin: 0 auto;
}

header {
    text-align: center;
    padding: 20px 0;
    background-color: #4d545a;
}

.discussion-item {
    list-style: none;
    margin: 10px 0;
    padding: 15px;
    border: 1px solid #ccc;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.username {
    font-weight: bold;
    color: #0056b3;
}

.content {
    margin: 10px 0;
    line-height: 1.6;
}

.regdate {
    color: #888;
    font-size: 0.9em;
}

.btn {
    display: inline-block;
    padding: 10px 15px;
    background-color: #0056b3;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #004494;
}

.form-container {
    text-align: left; /* Align the form to the left */
    margin-bottom: 20px;
}

.refresh-button {
    background-color: #0056b3;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    width: 150px;
}

.refresh-button:hover {
    background-color: #004494;
}

.no-results {
    text-align: center;
    color: #888;
    font-size: 1.2em;
}

@media (max-width: 600px) {
    .container {
        padding: 10px;
    }

    .discussion-item {
        padding: 10px;
        width:100%;
    }

    .btn,
    .refresh-button {
        width: 150px;
        padding: 10px;
        box-sizing: border-box;
    }
}

</style>