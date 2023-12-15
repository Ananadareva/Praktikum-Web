<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function show()
    {
        $daftarProvinsi = [
            'Aceh' => ['Banda Aceh', 'Lhokseumawe', 'Langsa'],
            'Bali' => ['Denpasar', 'Singaraja'],
            'Bangka Belitung' => ['Pangkal Pinang', 'Toboali', 'Muntok'],
            'Banten' => ['Serang', 'Tangerang', 'Cilegon'],
            'Bengkulu' => ['Bengkulu'],
            'Gorontalo' => ['Gorontalo'],
            'Jakarta Raya' => ['Jakarta', 'Bogor', 'Depok', 'Tangerang', 'Bekasi'],
            'Jambi' => ['Jambi', 'Sungai Penuh'],
            'Jawa Barat' => ['Bandung', 'Bekasi', 'Bogor', 'Cimahi', 'Depok', 'Sukabumi', 'Tasikmalaya'],
            'Jawa Tengah' => ['Semarang', 'Salatiga', 'Surakarta'],
            'Jawa Timur' => ['Surabaya', 'Malang', 'Madiun', 'Probolinggo', 'Batu'],
            'Kalimantan Barat' => ['Pontianak', 'Singkawang', 'Sambas'],
            'Kalimantan Selatan' => ['Banjarmasin', 'Palangkaraya', 'Barabai'],
            'Kalimantan Tengah' => ['Palangka Raya', 'Pangkalan Bun', 'Sampit'],
            'Kalimantan Timur' => ['Samarinda', 'Balikpapan', 'Bontang'],
            'Kalimantan Utara' => ['Tanjung Selor', 'Tarakan', 'Malinau'],
            'Kepulauan Riau' => ['Tanjung Pinang', 'Batam', 'Tanjung Balai Karimun'],
            'Lampung' => ['Bandar Lampung', 'Metro'],
            'Maluku' => ['Ambon', 'Tual'],
            'Maluku Utara' => ['Sofifi', 'Ternate', 'Labuha'],
            'Nusa Tenggara Barat' => ['Mataram', 'Bima'],
            'Nusa Tenggara Timur' => ['Kupang', 'Soe', 'Atambua'],
            'Papua' => ['Jayapura', 'Sentani', 'Biak'],
            'Papua Barat' => ['Manokwari', 'Sorong'],
            'Riau' => ['Pekanbaru', 'Dumai'],
            'Sulawesi Barat' => ['Mamuju'],
            'Sulawesi Selatan' => ['Makassar', 'Palopo', 'Parepare'],
            'Sulawesi Tengah' => ['Palu', 'Donggala', 'Poso'],
            'Sulawesi Tenggara' => ['Kendari', 'Bau-Bau'],
            'Sulawesi Utara' => ['Manado', 'Bitung', 'Tomohon'],
            'Sumatera Barat' => ['Padang', 'Bukittinggi', 'Sawahlunto'],
            'Sumatera Selatan' => ['Palembang', 'Prabumulih'],
            'Sumatera Utara' => ['Medan', 'Binjai', 'Pematangsiantar'],
        ];


        //   dd($daftarProvinsi);


        return view('inputData', compact('daftarProvinsi'));
    }

    public function submitData(Request $request)
    {
        $nik = $request->input('nik');
        $name = $request->input('name');
        $province = $request->input('province');
        $city = $request->input('city');
        $tlp = $request->input('tlp');
       // dd($name, $province, $city, $tlp);

        return view('dashboardAdmin', compact('nik', 'name', 'province', 'city', 'tlp'));
    }
}
