<!DOCTYPE html>
<html lang="en">

<head>
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

        /* Container for the navigation bar */
        .navbar {
            width: 100%;
            background-color: #4d545a;
            /* Dark blue background color */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar__search {
            margin-left: 12px;
        }

        .navbar__search input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            margin-right: 5px;
        }

        .navbar__search button {
            padding: 8px 15px;
            background-color: #4169E1;
            /* Royal blue background color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .navbar__menu {
            display: flex;
            align-items: center;
            margin-right: 25px;
        }

        .navbar__form {
            margin-right: 15px;
        }

        .navbar__button {
            padding: 10px 20px;
            background-color: #4d545a;
            /* Dark blue background */
            color: white;
            /* White text color */
            font-weight: bold;
            cursor: pointer;
        }

        .navbar__button:hover {
            background-color: #4169E1;
            /* Royal blue background on hover */
        }

        /* Dropdown menu styling */
        .navbar__dropdown {
            display: none;
            /* Hidden by default */
            position: absolute;
            background-color: #00008B;
            /* Dark blue background */
            list-style: none;
            padding: 0;
            margin: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 10px;
        }

        .navbar__form:hover .navbar__dropdown {
            display: block;
            /* Show dropdown on hover */
        }

        .navbar__dropdown-item {
            width: 200px;
            /* Fixed width for dropdown items */
        }

        .navbar__dropdown-link {
            display: block;
            padding: 10px;
            color: white;
            /* White text color */
            text-decoration: none;
        }

        .navbar__dropdown-link:hover {
            background-color: #0729ec;
            /* Royal blue background on hover */
        }

        .banner {
            background-image: url(banner.png);
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar__menu">
            <form class="navbar__form" action="index.php">
                <button class="navbar__button" type="submit">Home</button>
            </form>
            <form class="navbar__form" action="login.php">
                <button class="navbar__button" type="submit">Masuk</button>
            </form>
            <form class="navbar__form" action="registrasi.php">
                <button class="navbar__button" type="submit">Daftar</button>
            </form>
            <form class="navbar__form" action="listkonten.php">
                <button class="navbar__button" type="submit">konten</button>
            </form>
            <form class="navbar__form" action="account.php">
                <button class="navbar__button" type="submit">Akun</button>
            </form>
            <form class="navbar__form" action="registrasi.php">
                <button class="navbar__button" type="submit">Kontak</button>
            </form>
            <form class="navbar__form" action="registrasi.php">
                <button class="navbar__button" type="submit">Tentang</button>
            </form>
            <form class="navbar__form" action="submit2.php">
                <button class="navbar__button" type="submit">buat pesan</button>
            </form>
            <form class="navbar__form" action="diskusi.php">
                <button class="navbar__button" type="submit">Diskusi</button>
        </div>
    </div>
    <div class="content">
        <!-- Your main content goes here -->
        <!-- table search -->
    </div>
    <div class="col-md-12">
        <div class="card mt-4">
            <li class="caribar">
                <table class="barborder">
                    <thead>
                        <tr>
                            <!-- <div class="navbar__search">
                                <form action="" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                            echo $_GET['search'];
                                        } ?>" placeholder="Search data">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div> -->
                        </tr>
                        <!-- <tr>
                             <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th> 
                        </tr> -->
                    </thead>
                    <tbody class="listsearch">
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "project");

                        if (isset($_GET['search'])) {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM konten WHERE CONCAT(judul) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $items) {
                                    ?>
                                    <tr>
                        <li class="lidaftar">
                            <a href='konten.php?judul=<?= $items['judul']; ?>' class="daftar">
                                <span class="span"><?= $items['judul']; ?></span>
                            </a>
                        </li>
                        </tr>
                        <?php
                                }
                            } else {
                                ?>
                    <tr>
                        <td class="notfound" colspan="4">Not Found</td>
                    </tr>
                    <?php
                            }
                        }
                        ?>
            </tbody>
            </table>
            </li>
        </div>
    </div>
</body>

</html>
<style>
    .lidaftar {
        list-style: none;
        margin-left: 20px;
    }

    .daftar {
        background-color: #f4f4f4;
        margin-bottom: 2px;
        width: 75px;
        border-radius: 2px;
        padding-left: 50px;
        list-style: none;
    }

    .barborder {
        width: 98px;
        background-color: #000;
    }
</style>