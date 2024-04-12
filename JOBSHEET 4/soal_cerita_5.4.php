<?

// Soal Cerita Nomor 5.4
$Nilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
];

$nama = 'Matematika';
echo "Daftar nilai rata-rata di kelas $nama: <br>";
$total = 0;
foreach ($Nilai[$nama] as $data) {
    $total += $data[1];
}
$rata_rata = $total / count($Nilai[$nama]);
echo "Jadi nilai rata-rata di kelas adalah: {$rata_rata}%";

// Program menghitung rata-rata nilai matematika dari beberapa mahasiswa. 
// Logika iterasi dengan foreach digunakan untuk implementasi setiap nilai mahasiswa. 
// Total nilai diakumulasikan, dan rata-rata dihitung. 
// Hasil rata-rata ditampilkan dalam bentuk pesan.

?>