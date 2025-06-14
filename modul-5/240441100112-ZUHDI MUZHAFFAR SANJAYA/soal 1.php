<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Interaktif Mahasiswa</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; text-align: center; }
    table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px;  }
    table { margin: 20px auto; }
      .button-group {
      text-align: center;
      margin-top: 30px;
    }

    .button-group a {
      text-decoration: none;
      background-color: #2196F3;
      color: white;
      padding: 10px 20px;
      margin: 5px;
      border-radius: 4px;
      display: inline-block;
    }

    .form-section {
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 30px;
    }

    .form-section label {margin-right: 5px; }
    .form-section input[type="checkbox"],
    .form-section input[type="radio"] {
      display: inline-block;
      vertical-align: middle;
      margin-left: 5px;
      margin-right: 5px; 
    }

    .button-group a:hover {
      background-color: #0b7dda;
    }
  </style>
</head>
<body>

<h1>Profil Interaktif Mahasiswa</h1>

<!-- Tabel Data Diri -->
<table>
  <tr><th>Nama</th><td>Zuhdi Muzhaffar Sanjaya</td></tr>
  <tr><th>NIM</th><td>240441100112</td></tr>
  <tr><th>Tempat, Tanggal Lahir</th><td>Surabaya, 18 januari 2006</td></tr>
  <tr><th>Email</th><td>dafasanjaya7727@gmail.com</td></tr>
  <tr><th>Nomor HP</th><td>085856422838</td></tr>
</table>

<!-- Form Isian Dinamis -->
<div class="form-section">
  <form method="post" >
    <label>Bahasa Pemrograman yang Dikuasai:</label><br><br>
    <input type="text" name="bahasa[]" required><br>
    <input type="text" name="bahasa[]" required><br>
    <input type="text" name="bahasa[]" required><br><br>

    <label>Pengalaman Membuat Proyek Pribadi:</label><br><br>
    <textarea name="pengalaman" rows="4" cols="50" required></textarea><br><br>

    <label>Software yang Sering Digunakan:</label><br>
    <input type="checkbox" name="software[]" value="VS Code"> vscode<br>
    <input type="checkbox" name="software[]" value="XAMPP"> xampp<br>
    <input type="checkbox" name="software[]" value="Adobe"> Adobe<br>
    <input type="checkbox" name="software[]" value="Figma"> Figma<br><br>

    <label>Sistem Operasi yang Digunakan:</label><br>
    <input type="radio" name="os" value="Windows"> Windows<br>
    <input type="radio" name="os" value="Mac OS"> Mac OS<br>
    <input type="radio" name="os" value="Linux"> Linux <br><br>

    <label>Tingkat Penguasaan PHP:</label><br><br>
    <select name="tingkat">
      <option value="" disable selected>--Pilih--</option>
      <option value="Pemula">Pemula</option>
      <option value="Menengah">Menengah</option>
      <option value="Mahir">Mahir</option>
    </select><br><br>

    <input type="submit" name="submit" value="Kirim">
  </form>
</div>

<div class="button-group">
  <a href="soal 2.php">Lihat Timeline Kuliah</a>
  <a href="soal 3.php">Baca Blog Reflektif</a>
</div>

<?php
if (isset($_POST['submit'])) {
  $bahasa = array_filter($_POST['bahasa']); 
  $pengalaman = trim($_POST['pengalaman']);
  $software = $_POST['software'] ?? [];
  $os = $_POST['os'] ?? '';
  $tingkat = $_POST['tingkat'];

  // Validasi: Semua input wajib diisi
  if (count($bahasa) == 0 || $pengalaman == "" || empty($software) || $os == "" || $tingkat == "") {
    echo "<p style='color:red;'>Semua input wajib diisi!</p>";
  } else {
    echo "<h2>Hasil Input Anda</h2>";
    echo "<table>
      <tr><th>Bahasa Pemrograman</th><td>" . implode(", ", $bahasa) . "</td></tr>
      <tr><th>Software yang Digunakan</th><td>" . implode(", ", $software) . "</td></tr>
      <tr><th>Sistem Operasi</th><td>$os</td></tr>
      <tr><th>Tingkat PHP</th><td>$tingkat</td></tr>
    </table>";

    echo "<p><strong>Pengalaman:</strong> " . htmlspecialchars($pengalaman) . "</p>";

    // Tambahan jika bahasa pemrograman lebih dari 2
    if (count($bahasa) > 2) {
      echo "<p style='color:green;'>Anda cukup berpengalaman dalam pemrograman!</p>";
    }
  }
}
?>

</body>
</html>