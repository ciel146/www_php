<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator web</title>
</head>
<body>
    <h2>kalkulator penjumlahan</h2>
    <!-- Data akan di lempar ke file hitung.php melalui jalur tertutup POST -->

    <form action="hitung.php" method="POST">
        <label>Angka Pertama:</label>
        <!-- Perhatikan! Nama kotak pertama adalah: angka1 -->
         <input type="number" name="angka1" required><br><br>

         <label>Angka Kedua:</label>
         <!-- Perhatikan! Nama kotak kedua adalah: angka2 -->
          <input type="number" name="angka2" required><br><br>
          <button type="submit">Tambahkan</button>
    </form>
</body>
</html>