var makanan;
var jumlah;
var voucher;
var hargaTotalSebelumDiskon;
var hargaTotalSetelahDiskon;

document
  .getElementById("pesananFrom")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    makanan = document.getElementById("makanan").value;
    jumlah = document.getElementById("jumlah").value;
    voucher = document.getElementById("voucher").value;

    console.log("Makanan: " + makanan);
    console.log("Jumlah: " + jumlah);
    console.log("Voucher: " + voucher);

    hitungHargaSebelumDiskon();
    document.getElementById('outputMakanan').textContent = makanan;
    document.getElementById('outputJumlah').textContent = jumlah;
    document.getElementById('outputVoucher').textContent = voucher;


    if (voucher === "ASPRAKLEONGANTENG") {
      hitungHargaSetelahDiskon(0.2);
      document.getElementById("outputHargaSebelumDiskon").textContent = hargaTotalSebelumDiskon;
      document.getElementById("outputHargaSetelahDiskon").textContent = hargaTotalSetelahDiskon;
      document.getElementById('outputDiskon').textContent = "20%";
    } else if (voucher === "ASPRAKROFIGANTENG") {
      hitungHargaSetelahDiskon(0.1);
      document.getElementById("outputHargaSebelumDiskon").textContent = hargaTotalSebelumDiskon;
      document.getElementById("outputHargaSetelahDiskon").textContent = hargaTotalSetelahDiskon;
      document.getElementById('outputDiskon').textContent = "10%";
    } else {
      hitungHargaSetelahDiskon(0);
      document.getElementById("outputHargaSebelumDiskon").textContent = hargaTotalSebelumDiskon;
      document.getElementById("outputHargaSetelahDiskon").textContent = hargaTotalSebelumDiskon;
      document.getElementById('outputDiskon').textContent = "Vocher salah";
    }
    

  });

function hitungHargaSebelumDiskon() {
  hargaTotalSebelumDiskon = makanan * jumlah;
  console.log("Harga Total Sebelum Diskon: " + hargaTotalSebelumDiskon);

}

function hitungHargaSetelahDiskon(diskon) {
  hargaTotalSetelahDiskon = hargaTotalSebelumDiskon - (hargaTotalSebelumDiskon * diskon);
  console.log("Harga Total Setelah Diskon: " + hargaTotalSetelahDiskon);

}
