<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Postingan Baru</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <h1>Forum Rumpi!</h1>
        <nav class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
            </ul>
        </nav>

        <button id="setBtn" type="button" class="modal-button" onclick="openModal('modal1')"> <i
                class="fa-solid fa-gear"></i>
        </button>
    </header>




    <main>



        <!-- Modal RejMsg -->
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

        <br>
        <div id="createPost">
            <a href="createPost.php" style="text-decoration: none;">
                <i class="fas fa-circle fa-lg" style="color: green; display: inline-block; position: relative;">
                    <i class="fas fa-plus"
                        style="color: white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                </i>
                Buat Postingan
            </a>
        </div>
        <section class="profil-section">
            <div class="profil-left">
                <div class="profil-image">
                    <img id="img-profil" src="images/profile_images/cthProfil.jpeg" alt="profile">
                </div>
                <div class="post-info">
                    <h3>#Username</h3>
                    <p id="biography"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non magni odit a
                        neque aperiam? Obcaecati assumenda distinctio amet nulla, omnis deserunt alias ab magni,
                        numquam laboriosam veniam tenetur odio eligendi! </p>
                </div>

            </div>
            <div class="profil-right">

                <div class="proflie-data">
                    <h3>Informasi Pribadi</h3>
                    <ul>
                        <li>
                            <strong>Nama</strong><br>
                            <span>#nama</span>
                            <hr>
                        </li>
                        <li>
                            <strong>Jenis Kelamin</strong><br>
                            <span>#Jenis Kelamin</span>
                            <hr>
                        </li>
                        <li>
                            <strong>Tanggal Lahir</strong><br>
                            <span>#Tanggal</span>
                            <hr>
                        </li>
                        <li>
                            <strong>Negara</strong><br>
                            <span>#Negara</span>
                            <hr>
                        </li>
                    </ul>

                    <div class="button-position">
                        <button class="button-edit-lihatPost" type="button">
                            Edit Profil
                        </button>
                    </div>



                </div>
            </div>
        </section>

        <div class="button-position">
            <button type="button" class="button-edit-lihatPost">
                Lihat Posts
            </button>
        </div>

        <br>
    </main>



    <footer>
        <p>&copy; 2023 Forum Rumpi!</p>
    </footer>
</body>

</html>