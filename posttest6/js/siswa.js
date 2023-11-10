let siswa = {
    nama: "Leon",
    umur: 10,
    nilai: [85, 20, 78, 33, 88],
    alamat: {
      jalan: "Jl jalanin aja dulu",
      kota: "Jakarta",
    },
    lulus: function () {
      let totalNilai = 0;
      for (let i = 0; i < this.nilai.length; i++) {
        totalNilai += this.nilai[i];
      }

      let rataRata = totalNilai / this.nilai.length;

      if (rataRata >= 70) {
        return true;
      } else {
        return false;
      }
    },
  };

  // Menampilkan informasi siswa
  document.getElementById("nama").textContent = siswa.nama;
  document.getElementById("umur").textContent = siswa.umur;
  document.getElementById("alamat").textContent =
    siswa.alamat.jalan + ", " + siswa.alamat.kota;

  // Menampilkan nilai siswa dan rata-ratanya
  document.getElementById("nilai").textContent = siswa.nilai.join(", ");
  let totalNilai = 0;
  for (let i = 0; i < siswa.nilai.length; i++) {
    totalNilai += siswa.nilai[i];
  }

  let rataRata = totalNilai / siswa.nilai.length;
  document.getElementById("rata-rata").textContent = rataRata;

  // Memeriksa apakah siswa lulus
  if (siswa.lulus()) {
    document.getElementById("status").textContent = "Siswa telah lulus.";
  } else {
    document.getElementById("status").textContent = "Siswa belum lulus.";
  }