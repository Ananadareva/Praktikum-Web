<?php
//inheritance
include_once 'Buku.php';
include_once 'PenyimpananBuku.php';

session_start();

//percabangan buat proses sesuai dg value button submit dari form
//jika value submit button tambah_buku
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tambah_buku"])) {
    // dapetin varibel dari form
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $tahun = $_POST["tahun"];
    $kategori = $_POST["kategori"];
    $penulis = $_POST["penulis"];
    // buat objek buku baru
    $buku = new Buku($id, $nama, $tahun, $kategori, $penulis);
    // buat objek penyimpanan buku
    $penyimpanan = new PenyimpananBuku();
    // cek daftar buku kosong tau tidak
    //jika tidak tampilkann daftar buku
    if (!isset($_SESSION['daftar_buku'])) {
        $_SESSION['daftar_buku'] = [];
    }

    // tambahkan buku ke daftar buku
    $penyimpanan->setDaftarBuku($_SESSION['daftar_buku']);
    $penyimpanan->tambahBuku($buku);
    // simpen daftar buku ke session
    $_SESSION['daftar_buku'] = $penyimpanan->getDaftarBuku();
}

//jika value saumbit button hapus_buku
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hapus_buku"])) {
    // dapetin id varibel dari form
    $idToDelete = $_POST["id_to_delete"];
    // buat objek penyimpanan buku
    $penyimpanan = new PenyimpananBuku();
    // cek daftar buku kosong tau tidak
    $penyimpanan->setDaftarBuku($_SESSION['daftar_buku']);
    // hapus buku dari daftar buku
    $penyimpanan->hapusBuku($idToDelete);
    // simpen daftar buku ke session
    $_SESSION['daftar_buku'] = $penyimpanan->getDaftarBuku();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penyimpanan Buku</title>
</head>

<body>

    <h2>Tambah Buku</h2>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>ID Buku:</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Nama Buku:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tahun Buku:</td>
                <td><input type="number" name="tahun" min="1800" max="2999"></td>
            </tr>
            <tr>
                <td>Kategori Buku:</td>
                <td>
                    <select name="kategori">
                        <option value="Fiksi">Fiksi</option>
                        <option value="Non-Fiksi">Non-Fiksi</option>
                        <option value="Komik">Komik</option>
                        <option value="Novel">Novel</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Penulis Buku:</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah Buku" name="tambah_buku"></td>
            </tr>
        </table>
    </form>

    <h2>Hapus Buku</h2>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>ID Buku:</td>
                <td><input type="text" name="id_to_delete"></td>
                <td><input type="submit" value="Hapus Buku" name="hapus_buku"></td>
            </tr>
        </table>
    </form>


    <h2>Daftar Buku</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Penulis</th>
        </tr>
        <?php
        $penyimpanan = new PenyimpananBuku();
        $penyimpanan->setDaftarBuku($_SESSION['daftar_buku']);
        $daftar_buku = $penyimpanan->getDaftarBuku();

        // tampilkan seluruh isi array buku
        foreach ($daftar_buku as $buku) {
            echo "<tr>";
            echo "<td>" . $buku->getId() . "</td>";
            echo "<td>" . $buku->getNama() . "</td>";
            echo "<td>" . $buku->getTahun() . "</td>";
            echo "<td>" . $buku->getKategori() . "</td>";
            echo "<td>" . $buku->getPenulis() . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>