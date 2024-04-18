<!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Nota Pesanan</title>
            <link href="output_page.css" rel="stylesheet">
        </head>

        <body>
            <div class="nota">
                <h2>Nota Pesanan Warung Si Mbah</h2>
                <div class="logo">
                    <img src="img/logo_WarungSiMbah.jpg"><br>
                </div>
                <div class="alamat">
                    <p>MALANG<br>
                    Jl. Remujung No. 54<br>
                    ======================================<br></p>
                </div>
                <?php
                    $tanggal_pesanan = $_POST['var0'];
                    $nama_pemesanan = $_POST['var1'];
                    $nomor_meja = $_POST['var2'];
                    $daftar_menu = $_POST['var3'];
                    $jumlah_pesanan = $_POST['var4'];


                    echo "<p>Tanggal Pesanan     : $tanggal_pesanan</p><hr>"; 
                    echo "<p>Nama Pemesanan      : $nama_pemesanan</p><hr>";
                    echo "<p>Nomor Meja Pesanan  : $nomor_meja</p><hr>";
                    echo "<p>Menu Yang Dipesanan : $daftar_menu</p><hr>";
                    echo "<p>Jumlah Pesanan      : $jumlah_pesanan</p><hr>";
                ?>

                <div class="cookies">
                    <?php
                    echo $_COOKIE['output'];
                    echo "<br>";
                    echo $_COOKIE['nama_warung'];
                    ?>
                </div>
            </div>

            <div class="Logout">
                <input type="button" value="Keluar" onclick="location.href='login_page.html'">
            </div>
        </body>
    </html>