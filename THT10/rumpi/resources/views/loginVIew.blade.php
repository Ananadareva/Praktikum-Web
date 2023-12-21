<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Rumpi!</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <header>
        <h1>Forum Rumpi!</h1>
        <nav class="nav">

        </nav>
        <button type="button" class="modal-button" onclick="openModal('modal1')"> <i class="fa-solid fa-gear"></i>
        </button>
    </header>


    <main>





        <!-- Modal Setting -->
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

        <div class="login-box">
            <h2>Login</h2>
            <form method="post" action="login.php">
                <label>Email</label><br>

                <label>Username</label><br>
                <input type="text" name="username" placeholder="Masukkan Username" required><br>

                <label>Password</label><br>
                <input type="password" name="password" placeholder="Masukkan Password" required><br>

                <input type="submit" name="submit" value="Login">
            </form>


            <?php

            session_start();
            // Mengecek apakah data dari form telah dikirim
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // isset cek isi
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];



                    if ($username == "admin" && $password == "admin123") {
                        $_SESSION['username'] = $username;

                        header("Location: home.php");
                    } else {
                        print "Username atau password salah. <br>";
                        print "Username: admin, password: admin123.";
                    }
                } else {
                    print "Usernmae dan password harus diisi.";
                }
            }


            ?>

        </div>


    </main>

    <footer>
        <p>&copy; 2023 Forum Rumpi! </p>
    </footer>
</body>

</html>