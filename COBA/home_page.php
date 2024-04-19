<?php

// Definisikan array untuk menyimpan data menu
$menu = array(
    "makanan" => array(
        array("nama" => "Ayam Bakar", "harga" => 8000),
        array("nama" => "Nila Bakar", "harga" => 9600),
        array("nama" => "Capel", "harga" => 5640),
        array("nama" => "Nasi Goreng", "harga" => 7000),
    ),
    "minuman" => array(
        array("nama" => "Es Teh", "harga" => 3000),
        array("nama" => "Jus Alpukat", "harga" => 12000),
        array("nama" => "Es Jeruk", "harga" => 4000),
        array("nama" => "Es Tawar", "harga" => 2000),
    ),
);

// Inisialisasi variabel untuk total pesanan
$totalPesanan = 0;

// Proses formulir pemesanan
if (isset($_POST["submit"])) {
    // Dapatkan data dari formulir
    $nama_pemesan = $_POST["nama_pemesan"];
    $nomor_meja = $_POST["nomor_meja"];
    $tanggal_pesanan = $_POST["tanggal_pesanan"];
    $nama_menu = $_POST["nama_menu"];
    $jumlah_pesanan = $_POST["jumlah_pesanan"];
    $harga_menu = 0;

    // Temukan harga menu berdasarkan nama
    foreach ($menu as $kategori => $daftarItem) {
        foreach ($daftarItem as $item) {
            if ($item["nama"] == $nama_menu) {
                $harga_menu = $item["harga"];
                break;
            }
        }
    }

    // Hitung total pesanan untuk item tersebut
    $totalPesananItem = $jumlah_pesanan * $harga_menu;

    // Perbarui total pesanan keseluruhan
    $totalPesanan += $totalPesananItem;

    // Tampilkan data nama pemesan, nomor meja, dan tanggal pesanan
    echo "<h3>Informasi Pemesan</h3>";
    echo "Nama Pemesan: $nama_pemesan<br>";
    echo "Nomor Meja: $nomor_meja<br>";
    echo "Tanggal Pesanan: $tanggal_pesanan<br>";
}

?>

<!DOCTYPE html>
<html>
<<head>
    <link href="style_home_page.css" rel="stylesheet">
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Kasir Warung Si Mbah</title>
    <script>
        $(function(){
            $("#date_ex").datepicker();
        });
    </script>
</head>
<body>
    <h1>Daftar Menu Warung Si Mbah</h1>

    <h2>Formulir Pemesanan</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form_pesanan">
        <label for="nama_pemesan">Nama Pemesan :</label>
        <input type="text" id="nama_pemesan" name="nama_pemesan" required><br><br>

        <label for="nomor_meja">Nomor Meja:</label>
        <input type="number" id="nomor_meja" name="nomor_meja" required><br><br>

        <label for="tanggal_pesanan">Tanggal Pesanan:</label>
        <input name="var0" type="text" size="30"  id="date_ex" placeholder="Masukkan tanggal pembuatan kartu"><br><br> 

        <label for="nama_menu">Pilih Menu:</label>
        <select id="nama_menu" name="nama_menu" required>
            <option value="">Pilih Menu</option>
            <?php foreach ($menu as $kategori => $daftarItem) : ?>
            <optgroup label="<?php echo ucwords($kategori); ?>">
                <?php foreach ($daftarItem as $item) : ?>
                <option value="<?php echo $item["nama"]; ?>"><?php echo $item["nama"]; ?></option>
                <?php endforeach; ?>
            </optgroup>
            <?php endforeach; ?>
        </select><br><br>

        <label for="jumlah_pesanan">Jumlah Pesanan:</label>
        <input type="number" id="jumlah_pesanan" name="jumlah_pesanan" min="1" value="1" required><br><br>

        <input type="submit" name="submit" value="Pesan">
    </form>

    <h2>Daftar Menu</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($menu["makanan"] as $item) : ?>
        <tr>
            <td><?php echo $item["nama"]; ?></td>
            <td><?php echo $item["harga"]; ?></td>
        </tr>
        <?php endforeach; ?>

        <?php foreach ($menu["minuman"] as $item) : ?>
        <tr>
            <td><?php echo $item["nama"]; ?></td>
            <td><?php echo $item["harga"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <?php if ($totalPesanan > 0) : ?>
    <h2>Total Pesanan: <?php echo $totalPesanan; ?></h2>
    <?php endif; ?>
</body>
</html>
