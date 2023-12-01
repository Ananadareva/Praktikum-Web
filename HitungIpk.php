<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Document</title>
</head>

<body>
    <h1>Form Input Nilai Matakuliah</h1>
    <form action="HitungIpk.php" method="post">

        <label for="nilai_matkul1">Mata Kuliah 1:</label>
        <input type="number" name="nilai_matkul[]" required min="0" max="100"/>
        <br>
        
        <!-- Kolom input dinamis-->
        <div id="kolom_input"> </div>
        <button type="button" id="tambah_input">
            Tambah Matakuliah
        </button>
        <button type="button" id="hapus_input">
            Hapus Input
        </button>
        <br>
        <input type="submit" value="Nilai IPK">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Masukka nilai ke array
        $nilai_matkul = $_POST['nilai_matkul'];

        // echo
        $total_nilai = 0;
        // pake asosiatif array
        foreach ($nilai_matkul as $key => $value) {
            echo "Nilai Mata Kuliah" . ($key + 1) . ": " . htmlspecialchars($value) . "<br>";
            $total_nilai += $value;
        }

        // Hitung ipk

        $jumlah_matkul = count($nilai_matkul);
        //$total_nilai = array_sum($nilai_matkul);
        $rata_rata = $total_nilai / $jumlah_matkul;
        $ipk = $rata_rata / 25;

        echo "<br>Nilai IPK: " . $ipk;
        if ($ipk < 1){
            echo "<br>Anda Tidak Lulus";
        } else {
            echo "<br>Anda Lulus";
        }

        // Redirect kembali ke halaman form
        header("HitungIpk.php");
    }
    ?>

    <script>
        var counter = 2;
        document.getElementById('tambah_input').addEventListener('click', function() {
            var div = document.createElement('div');
            div.innerHTML = '<label for="nilai_matkul' + counter + '">Mata Kuliah ' + counter + ':</label>' +
                '<input type="number" name="nilai_matkul[]" required min="0" max="100"/>';
            document.getElementById('kolom_input').appendChild(div);
            counter++;
            console.log(counter);

            if (counter == 9) {
                document.getElementById('tambah_input').style.display = 'none';
            }
        })
    </script>

</body>

</html>