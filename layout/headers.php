<!DOCTYPE html>
<html lang="en">
<?php include_once "../service/connect.php";
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
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

        .navbar {
            width: 100%;
            background-color: #4d545a;
            overflow: hidden;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar__menu {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .navbar__form {
            margin: 0 5px;
        }

        .navbar__button {
            padding: 10px 20px;
            background-color: #4d545a;
            /* Dark blue background */
            color: white;
            /* White text color */
            font-weight: bold;
            cursor: pointer;
            /* padding: 10px 20px;
            background-color: #4d545a;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
            outline: none; */
        }

        .navbar__button:hover {
            background-color: #4169E1;
        }

        .navbar__search {
            display: flex;
            align-items: center;
            margin-left: 12px;
        }

        .navbar__search input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 5px;
            margin-right: 5px;
            font-size: 14px;
        }

        .navbar__search button {
            padding: 8px 15px;
            color: black;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 5px;
        }

        @media (max-width: 768px) {
            .navbar__menu {
                display: none;
                flex-direction: column;
                width: 100%;
                text-align: center;
            }

            .navbar__menu.show {
                display: flex;
            }

            .hamburger {
                display: block;
                position: absolute;
                top: 8px;
                right: 16px;
            }

            .navbar__search button {
                padding: 2px 3px;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar__search">
            <form action="" method="GET">
                <button type="submit" class="searchButton">Search</button>
                <input type="text" name="search" required placeholder="Search data">
            </form>

            <div class="col-md-12">
                <?php

                if (isset($_GET['search'])) {
                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM konten WHERE CONCAT(judul) LIKE '%$filtervalues%'  ";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $items) {
                            ?>

                            <li class="lidaftar">
                                <a href='index.php?search=<?= $items['id_siswa']; ?>' class="daftar">
                                    <span class="span"><?= $items['nama_siswa']; ?></span>
                                </a>
                            </li>

                            <?php
                        }
                    } else {
                        ?>
                        <li class="lidaftar">
                            <p>Data Tidak ada</span>
                        </li>
                        <?php
                    }
                }
                ?>
            </div>
        </div>

        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="navbar__menu">
            <form class="navbar__form" action="indek.php">
                <button class="navbar__button" type="submit">Home</button>
            </form>
            <form class="navbar__form" action="login.php">
                <button class="navbar__button" type="submit">Masuk</button>
            </form>
            <form class="navbar__form" action="registrasi.php">
                <button class="navbar__button" type="submit">Daftar</button>
            </form>
            <form class="navbar__form" action="account.php">
                <button class="navbar__button" type="submit">Akun</button>
            </form>
            <form class="navbar__form" action="submit2.php">
                <button class="navbar__button" type="submit">Buat Pesan</button>
            </form>
            <form class="navbar__form" action="diskusi.php">
                <button class="navbar__button" type="submit">Diskusi</button>
            </form>
            <form class="navbar__form" action="listkonten.php">
                <button class="navbar__button" type="submit">Konten</button>
            </form>
            <form class="navbar__form" action="konten.php">
                <button class="navbar__button" type="submit">Tentang Kami</button>
            </form>
        </div>
    </div>
    <script>
        function toggleMenu() {
            const menu = document.querySelector('.navbar__menu');
            menu.classList.toggle('show');
        }
    </script>
</body>

</html>