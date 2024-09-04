<?php
include "service/connect.php";
?>

<div class="sidebar">
    <div class="navbar__search">
        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                    echo $_GET['search'];
                } ?>" placeholder="Search data">
                <button type="submit">Search</button>
            </div>
        </form>
    </div>
    <ul class="search-results">
        <?php
        $con = mysqli_connect("localhost", "root", "", "project");

        if (isset($_GET['search'])) {
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM konten WHERE judul LIKE '%$filtervalues%' ";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $items) {
                    ?>
                    <li class="lidaftar">
                        <a href='konten.php?judul=<?= htmlspecialchars($items['judul']); ?>' class="daftar">
                            <?= htmlspecialchars($items['judul']); ?>
                        </a>
                    </li>
                    <?php
                }
            } else {
                ?>
                <li class="notfound">Not Found</li>
                <?php
            }
        }
        ?>
    </ul>
</div>

<style>
    /* .sidebar {
        width: 250px;
        background-color: #f9f9f9;
        padding: 10px;
        border-right: 1px solid #ccc;
        height: 100vh;
        overflow-y: auto;
        position: fixed;
    }

    .search-results {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .lidaftar {
        margin: 10px 0;
    }

    .daftar {
        display: block;
        padding: 10px;
        background-color: #e2e2e2;
        color: #333;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .daftar:hover {
        background-color: #d1d1d1;
    }

    .notfound {
        color: #ff0000;
        text-align: center;
        margin-top: 20px;
    } */
</style>