<?php
    $expiration_time = time() + (60 * 10) ;
    setcookie('output', 'Terima Kasih Atas Pesanan Anda', $expiration_time);
    setcookie('nama_warung', '- Warung SI Mbah -', $expiration_time);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="style_home_page.css" rel="stylesheet">
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Kasir Warung Si Mbah</title>
    <script>
        $(function() {
    $("#date_ex").datepicker({
        dateFormat: "dd/mm/yy", 
        showAnim: "fadeIn",
        showOtherMonths: true,
        selectOtherMonths: true,
        changeMonth: true,
        changeYear: true, 
        yearRange: "-100:+10",
    });
});
    </script>
</head>
<body>

<div class="container1">
    <header><b>KASIR WARUNG SI MBAH</b></header>

    <form method="POST" action="output_page.php">
        <div class="pemesanan">
            <h2>PEMESANAN MENU</h2>
        </div>
                
        <b>Tanggal Pesanan     :</b> 
        <input name="var0" type="text" size="30"  id="date_ex" placeholder="Masukkan Tanggal Pesanan"><br><br> 

        <b>Nama Pemesan        :</b> 
        <input name="var1" type="text" size="30" placeholder="Masukkan Nama Pemesan"><br><br>

        <b>Nomor Meja Pemesan :</b> 
        <input name="var2" type="text" size="30" placeholder="Masukkan Nomor Meja Pemesan"><br><br>
        
        <b>Daftar Menu :</b><br>
        <table>
            <tr>
                <td><input type="checkbox" name="var3" value="Orem - Orem">Orem - Orem</td>
                <td><img src="img/orem_orem.jpg" alt="Orem - Orem" width="100"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="var3" value="Teh Hangat/Panas">Teh Hangat/Panas</td>
                <td><img src="img/teh_hangat.jpg" alt="Teh Hangat/Panas" width="100"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="var3" value="Jeruk Hangat/Panas">Jeruk Hangat/Panas</td>
                <td><img src="img/jeruk_hangat.jpg" alt="Jeruk Hangat/Panas" width="100"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="var3" value="Es Teh">Es Teh</td>
                <td><img src="img/es_teh.jpg" alt="Es Teh" width="100"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="var3" value="Es Jeruk">Es Jeruk</td>
                <td><img src="img/es_jeruk.jpg" alt="Es Jeruk" width="100"></td>
            </tr>
        </table><br>

        
        <b>Jumlah Pemesanan :<b>
        <input name="var4" type="text" size="30" placeholder="Jumlah Pemesanan"><br><br>    
        
        <div class="tombol2">
        <i class='bx bxs-eraser' ></i> <input type="reset" name="var6" value="Bersihkan Inputan"> 
        </div>

        <div class="tombol">
        <i class='bx bxs-data'></i> <input type="submit" name="var5" value="Cetak Pemesanan">
        </div>
        
        <div class="Logout">
        <input type="button" value="Keluar" onclick="location.href='login_page.html'">
    </div>
    </form> 
</div>

</body>
</html>