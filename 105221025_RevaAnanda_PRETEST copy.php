<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Belajar Form PHP</title>
</head>

<body>
    <form action="coba.php" method="get">
        Nama: <input type="text" name="nama" />
        <br />
        <input type="submit" value="Proses Data">
    </form>

    <?php

    if (isset($_REQUEST['nama'])) {
        echo "Nama: " . htmlspecialchars($_REQUEST['nama']);
    }
    ?>
</body>

</html>
