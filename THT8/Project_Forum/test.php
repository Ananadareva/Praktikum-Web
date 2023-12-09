<?php
$servername = "localhost";
$port = "3306";
$username = "root";
$password = "";
$dbname = "rumpi";


$conn = new mysqli($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT username,  email, password  FROM user WHERE email = 'admin@gmail.com' ";
# WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
$result = $conn->query($sql);

if ($result) {
    // Menggunakan fetch_assoc() untuk mendapatkan hasil baris data
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row['username'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Password: " . $row['password'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Query error: " . $conn->error;
}
#if ($result->num_rows > 0) {
#  echo "Selamat datang", $username;
#} else {
#   echo "Login gagal";
#}

$conn->close();

?>

////////////////////////

<?php
session_start(); // simpan data di session buat passing 
$servername = "localhost";
$port = "3306";
$usernamedb = "root";
$password = "";
$dbname = "rumpi";

$conn = new mysqli($servername, $usernamedb, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengecek apakah data dari form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // isset cek isi
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT username, email, password FROM user WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $username = $row['username'];
                $email = $row['email'];
            }


            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;


            //  print " <p> Selamat datang $username <p>";
            // unset($_SESSION['username']);
            header("Location: home.php");
        } else {
            print "Query error: " . $conn->error;
        }
    } else {
        print "Email dan password harus diisi.";
    }
}

$conn->close();
?>