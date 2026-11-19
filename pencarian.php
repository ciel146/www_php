<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mesin pencari RPL</title>
</head>
<body>
    <h2>Mesin Pencari RPL</h2>
    <!-- action"" dikosongkan artinya data dikirim ke file pencarian.php ini sendiri -->
    <form action="" method="GET">
        <input type="text" name="kata_kunci" placeholder="cari apa saja...">
        <button type="submit">Cari</button>
    </form>
    <hr>

    <?php
        // Penjelasan fungsi isset():
        // isset() bertugas mengecek: "Apakah sudah ada data 'kata_kunci' yang dikirim?"
        // Kalau belum klik tombol cari, bagian dalam kurung kurawal {} tidak akan dijalankan.
        if ( isset ($_GET['kata_kunci']) ) {
            $cari = $_GET ['kata_kunci'];
            echo "Menampilkan hasil pencarian untuk:<b>$cari</b></p>";
        }
    ?>
</body>
</html>