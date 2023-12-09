<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Rumpi!</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <header>
        <h1>Forum Rumpi!</h1>
        <nav class="nav">
            <ul>
                <li><a href="profile.php">Profil</a></li>

            </ul>
        </nav>
        <button type="button" class="modal-button" onclick="openModal('modal1')"> <i class="fa-solid fa-gear"></i>
        </button>
    </header>


    <!--IsI kontene dinamis dari db-->

    <main>





        <!-- Modal Setting -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <button type="button" class="close-button" onclick="closeModal('modal1')">˂</button>
                <br>
                <center>




                    <br>
                    <div class="profil-box"> <?php
                                                session_start();
                                                if (isset($_SESSION['username'])) {
                                                    $username = $_SESSION['username'];
                                                    echo "<strong> $username</strong>";
                                                } else {
                                                    // Handle the case when the username is not set in the session
                                                    $username = "Guest";
                                                }



                                                ?></div>

                    <h3>Pengaturan</h3>
                    <button onclick="darkMode()">Mode Gelap</button>

                    <br>

                </center>
            </div>
        </div>


        <script src="js/modal.js"></script>
        <script>
            applyDarkModePreference();
        </script>

        <script src="js/darkmode.js"></script>




        <br>
        <div id="createPost">
            <a href="createPost.php" style="text-decoration: none;">
                <i class="fas fa-circle fa-lg" style="color: green; display: inline-block; position: relative;">
                    <i class="fas fa-plus" style="color: white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                </i>
                Buat Postingan
            </a>


        </div>
        <br>


        <section class="post-section">
            <div class="post">
                <div class="post-header">
                    <div class="user-info">
                        <img id="imageProfile" src="images/profile_images/cthProfil.jpeg">
                        <h3>Username</h3>
                    </div>

                </div>
            </div>

            <div class="post-content">
                <img id="imagePost" src="images/cthPostImage.jpg" alt="post" class="postImage">
                <h3>Caption</h3>
                <p>Waktu</p>
                <p>Isi Postingan</p>
            </div>

            <div class="post-footer">
                <button type="button">
                    <i class="fas fa-thumbs-up fa-lg" style="color: red;"></i> Suka
                </button>
                <a href="comment.php">
                    <i class="fas fa-comment fa-lg" style="color: blue;"></i> Komentar
                </a>
            </div>
        </section>



        <section class="post-section">
            <div class="post">
                <div class="post-header">
                    <div class="user-info">
                        <img id="imageProfile" src="images/profile_images/cthProfil.jpeg">
                        <h3>Username</h3>
                    </div>

                </div>

            </div>

            <div class="post-content">
                <img id="imagePost" src="images/cthPostImage2.jpg" alt="post" class="postImage">
                <h3>Caption</h3>
                <p>Waktu</p>
                <p>Isi Postingan</p>
            </div>

            <div class="post-footer">
                <button type="button">
                    <i class="fas fa-thumbs-up fa-lg" style="color: red;"></i> Suka
                </button>
                <a href="comment.php">
                    <i class="fas fa-comment fa-lg" style="color: blue;"></i> Komentar
                </a>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2023 Forum Rumpi! </p>
    </footer>
</body>

</html>