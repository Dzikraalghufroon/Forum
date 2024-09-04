<img src="layout/a.png" alt="">
<?php
session_start();
include "layout/headers.php";
include "layout/sidebar.php"; ?>


<link rel="stylesheet" href="style/index.css">
<title>HOME</title>

<body>
    <div class="button-container">
        <button class="toggle-button" onclick="showHome()">Home</button>
        <button class="toggle-button" onclick="showDiscussion()">Diskusi</button>
    </div>
    <div class="container">
    <main class="main-content">
        <div class="rumah">
            <section class="section" id="home">
                <h1>Disarankan pakai dekstop karena situs ini belum responsif (malas)</h1><br>
                <h2 class="section-title">Home</h2>
                <pre><p class="section-text">
Tentu, berikut adalah contoh kata pengantar untuk sebuah blog ensiklopedia:

---
                    
**Kata Pengantar**
      
Selamat datang di [Nama Blog], ensiklopedia daring yang kami persembahkan untuk Anda. Blog ini dirancang sebagai sumber 
pengetahuan yang kaya dan bervariasi, mencakup berbagai topik yang menarik dan relevan bagi pembaca dari segala usia dan 
latar belakang.
                    
Di era digital ini, akses terhadap informasi yang akurat dan terpercaya menjadi semakin penting. Oleh karena itu, kami 
berkomitmen untuk menyediakan konten yang tidak hanya informatif tetapi juga mendalam dan mudah dipahami. Setiap artikel 
yang kami sajikan melalui proses penelitian yang cermat dan penulisan yang teliti, memastikan bahwa Anda mendapatkan 
pengetahuan yang lengkap dan akurat.
                    
Blog ensiklopedia kami mencakup berbagai kategori, mulai dari sejarah, sains, teknologi, seni, budaya, hingga kehidupan 
sehari-hari. Kami percaya bahwa dengan menyediakan informasi yang bermanfaat dan inspiratif, kami dapat berkontribusi 
pada pembentukan masyarakat yang lebih terinformasi dan berpendidikan.
                    
kami juga mendorong partisipasi aktif dari para pembaca. Jika Anda memiliki topik yang ingin dibahas atau memiliki 
informasi tambahan yang dapat memperkaya artikel kami, jangan ragu untuk menghubungi kami. Kolaborasi dan pertukaran 
informasi adalah kunci untuk terus memperkaya dan memperbarui ensiklopedia ini.
                    
Terima kasih telah mengunjungi [Nama Blog]. Kami berharap Anda menikmati perjalanan pengetahuan Anda bersama kami dan 
menemukan banyak hal baru yang menarik dan bermanfaat.
                    
Salam hangat,
                    
[Tanda Tangan Penulis atau Tim Redaksi]
                    
[Nama Penulis atau Tim Redaksi]
                    
---
                    
Anda dapat menyesuaikan kata pengantar ini sesuai dengan gaya dan tema khusus dari blog ensiklopedia Anda.    
                
                    .</p>
                </pre>
            </section>
            <section class="section" id="about">
                <h2 class="section-title">About Us</h2>
                <p class="section-text">We are a company that specializes in providing excellent services to our
                    clients.</p>
            </section>
            <section class="section" id="services">
                <h2 class="section-title">Our Services</h2>
                <ul class="services-list">
                    <li class="service-item">Service 1</li>
                    <li class="service-item">Service 2</li>
                    <li class="service-item">Service 3</li>
                </ul>
            </section>
        </div>
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

</style>
    <?php //include "template/home.php" ?>
    <?Php //include "template/discussion.php" ?>
    </div>
</body>
<script src="script/index.js"></script>
<script>
    function showHome() {
    document.getElementById('home').style.display = 'block';
    document.getElementById('discussion').style.display = 'none';
    // document.getElementById('toggle-button').classList.remove = 'active';
    // document.getElementById('toggle-button').classList.add = 'active';
}

function showDiscussion() {
    document.getElementById('home').style.display = 'none';
    document.getElementById('discussion').style.display = 'block';
    // document.getElementById('toggle-button').classList.remove = 'active';
    // document.getElementById('toggle-button').classList.add = 'active';
}

</script>

<?php include "template/footer.html" ?>