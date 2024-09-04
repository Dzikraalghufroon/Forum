<div class="diskusi">
    <section class="section" id="discussion">
        <h2 class="section-title">Discussion</h2>
        <div class="discussion-content">
            <p class="section-text">Join our discussion forum where you can interact with other users and
                share
                your thoughts.</p>
            <?php

            include "connect.php";
            $sql = "SELECT id, userName, content, regdate FROM diskusi ORDER BY RAND() LIMIT 10";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    echo "<ul class='discussion-item'>";
                    echo "<li class='username'>" . $row["userName"] . "</li>";
                    echo "<li class='content'>" . $row["content"] . "</li>";
                    echo "<li class='regdate'>" . $row["regdate"] . "</li>";
                    echo "<li><a href='somepage.php?id=$id'>terbang</a></li>";
                    echo "</ul>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            <a href="diskusi.php">Lainnya</a>


        </div>
    </section>
    <section class="section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-text">If you have any questions, feel free to <a class="contact-link"
                href="mailto:info@example.com">email us</a>.</p>
    </section>

    </main>
</div>
<style>
    .container{
        /* position: fixed; */
    }
    .discussion-item {
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

</style><div class="diskusi">
    <section class="section" id="discussion">
        <h2 class="section-title">Discussion</h2>
        <div class="discussion-content">
            <p class="section-text">Join our discussion forum where you can interact with other users and
                share
                your thoughts.</p>
            <?php

            include "connect.php";
            $sql = "SELECT id, userName, content, regdate FROM diskusi ORDER BY RAND() LIMIT 10";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    echo "<ul class='discussion-item'>";
                    echo "<li class='username'>" . $row["userName"] . "</li>";
                    echo "<li class='content'>" . $row["content"] . "</li>";
                    echo "<li class='regdate'>" . $row["regdate"] . "</li>";
                    echo "<li><a href='somepage.php?id=$id'>terbang</a></li>";
                    echo "</ul>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            <a href="diskusi.php">Lainnya</a>


        </div>
    </section>
    <section class="section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-text">If you have any questions, feel free to <a class="contact-link"
                href="mailto:info@example.com">email us</a>.</p>
    </section>

    </main>
</div>
<style>
    .container{
        /* position: fixed; */
    }
    .discussion-item {
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

</style><div class="diskusi">
    <section class="section" id="discussion">
        <h2 class="section-title">Discussion</h2>
        <div class="discussion-content">
            <p class="section-text">Join our discussion forum where you can interact with other users and
                share
                your thoughts.</p>
            <?php

            include "connect.php";
            $sql = "SELECT id, userName, content, regdate FROM diskusi ORDER BY RAND() LIMIT 10";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    echo "<ul class='discussion-item'>";
                    echo "<li class='username'>" . $row["userName"] . "</li>";
                    echo "<li class='content'>" . $row["content"] . "</li>";
                    echo "<li class='regdate'>" . $row["regdate"] . "</li>";
                    echo "<li><a href='somepage.php?id=$id'>terbang</a></li>";
                    echo "</ul>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            <a href="diskusi.php">Lainnya</a>


        </div>
    </section>
    <section class="section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-text">If you have any questions, feel free to <a class="contact-link"
                href="mailto:info@example.com">email us</a>.</p>
    </section>

    </main>
</div>
<style>
    .container{
        /* position: fixed; */
    }
    .discussion-item {
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

</style><div class="diskusi">
    <section class="section" id="discussion">
        <h2 class="section-title">Discussion</h2>
        <div class="discussion-content">
            <p class="section-text">Join our discussion forum where you can interact with other users and
                share
                your thoughts.</p>
            <?php

            include "connect.php";
            $sql = "SELECT id, userName, content, regdate FROM diskusi ORDER BY RAND() LIMIT 10";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    echo "<ul class='discussion-item'>";
                    echo "<li class='username'>" . $row["userName"] . "</li>";
                    echo "<li class='content'>" . $row["content"] . "</li>";
                    echo "<li class='regdate'>" . $row["regdate"] . "</li>";
                    echo "<li><a href='somepage.php?id=$id'>terbang</a></li>";
                    echo "</ul>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            <a href="diskusi.php">Lainnya</a>


        </div>
    </section>
    <section class="section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-text">If you have any questions, feel free to <a class="contact-link"
                href="mailto:info@example.com">email us</a>.</p>
    </section>

    </main>
</div>
<style>
    .container{
        /* position: fixed; */
    }
    .discussion-item {
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

</style><div class="diskusi">
    <section class="section" id="discussion">
        <h2 class="section-title">Discussion</h2>
        <div class="discussion-content">
            <p class="section-text">Join our discussion forum where you can interact with other users and
                share
                your thoughts.</p>
            <?php

            include "connect.php";
            $sql = "SELECT id, userName, content, regdate FROM diskusi ORDER BY RAND() LIMIT 10";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    echo "<ul class='discussion-item'>";
                    echo "<li class='username'>" . $row["userName"] . "</li>";
                    echo "<li class='content'>" . $row["content"] . "</li>";
                    echo "<li class='regdate'>" . $row["regdate"] . "</li>";
                    echo "<li><a href='somepage.php?id=$id'>terbang</a></li>";
                    echo "</ul>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            <a href="diskusi.php">Lainnya</a>


        </div>
    </section>
    <section class="section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-text">If you have any questions, feel free to <a class="contact-link"
                href="mailto:info@example.com">email us</a>.</p>
    </section>

    </main>
</div>
<style>
    .container{
        /* position: fixed; */
    }
    .discussion-item {
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