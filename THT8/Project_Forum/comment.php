<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/comment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <h1>Forum Rumpi!</h1>
        <nav class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php">Profil</a></li>



            </ul>
        </nav>
        <button type="button" class="modal-button" onclick="openModal('modal1')"> <i class="fa-solid fa-gear"></i>
        </button>
    </header>
    <!-- nanti isi comment nha dinamis dari db-->
    <main>

        <div id="modal1" class="modal">
            <div class="modal-content">
                <button type="button" class="close-button" onclick="closeModal('modal1')">˂</button>
                <br>
                <center>
                    <h3>Pengaturan</h3>
                    <button onclick="darkMode()">Mode Gelap</button>
                </center>
            </div>
        </div>

        <script src="js/modal.js"></script>
        <script>
            applyDarkModePreference();
        </script>

        <script src="js/darkmode.js"></script>

        <section class="comments-section">
            <h2>Komentar</h2>
            <div class="comment">
                <div class="comment-header">
                    <img id="imageProfile" src="images/profile_images/cthProfil.jpeg">
                    <div class="comment-info">
                        <div class="user-info">
                            <h3>Username 1</h3>

                        </div>
                    </div>
                </div>
                <div class="comment-content">
                    <p>Waktu 1</p>
                    <p>Komentar pengguna 1...</p>
                </div>
            </div>


            <div class="comment">
                <div class="comment-header">
                    <img id="imageProfile" src="images/profile_images/cthProfil.jpeg">
                    <div class="comment-info">
                        <div class="user-info">
                            <h3>Username 2</h3>

                        </div>
                    </div>
                </div>

                <div class="comment-content">
                    <p>Waktu 2</p>
                    <p>Komentar pengguna 2... Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum corrupti
                        ullam, est veritatis quis beatae veniam repellat sapiente, odio eum quasi sint, quisquam
                        repudiandae nulla sequi. Accusantium quod temporibus mollitia.</p>
                </div>
            </div>



            <div class="comment">
                <div class="comment-header">
                    <img id="imageProfile" src="images/profile_images/cthProfil.jpeg">
                    <div class="comment-info">
                        <div class="user-info">
                            <?php
                            session_start();
                            if (isset($_SESSION['username'])) {
                                $username = $_SESSION['username'];
                                echo "<h3><strong>$username</strong></h3>";
                            } else {

                                $username = "Guest";
                                echo "<h3>$username</h3>";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="comment-content">
                <p><?php echo date("d-m-Y"); ?><br><?php echo date("i:H"); ?></p>

                    <?php


                    // Mengecek apakah data dari form telah dikirim
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // isset cek isi
                        if (isset($_POST['comment_content'])) {
                            $comment_content = $_POST['comment_content'];
                            echo "<p>$comment_content</p>";
                        }

                        $comment_content = $_POST['comment_content'];
                        // printf($comment_content);
                    }


                    ?>
                </div>

            </div>













            <h2>Tambahkan Komentar</h2>
            <div class="comment-form">
                <form action="comment.php" method="post" id="comment-form">
                    <label for="comment-content">Komentar Anda:</label> <br>
                    <textarea id="comment-content" name="comment_content" rows="5" required></textarea><br>
                    <button type="submit">Kirim Komentar</button>
                </form>
            </div>






        </section>

        <div>
            <a> Kembali ke postingan</a>
        </div>

    </main>

    <footer>
        <p>&copy; 2023 Forum Rumpi!</p>
    </footer>

</body>

</html>