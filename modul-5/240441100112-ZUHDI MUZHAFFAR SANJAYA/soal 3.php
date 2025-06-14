<?php
// Data artikel blog
$artikel = [
  1 => [
    "judul" => "Belajar Mengatur Waktu di Semester Awal",
    "tanggal" => "2023-12-12",
    "refleksi" => "Di semester awal, saya kesulitan membagi waktu antara kuliah dan organisasi. Namun perlahan, saya belajar membuat jadwal dan memprioritaskan tugas.",
    "gambar" => "Cuplikan layar 2025-05-21 213650.png",
    "kutipan" => [
      "Waktu adalah hal yang tidak bisa kembali.",
      "Produktivitas datang dari disiplin harian.",
      "Kebiasaan kecil hari ini menentukan masa depan."
    ],
    "sumber" => "https://skuling.id/cara-mengatur-waktu-belajar/"
  ],
  2 => [
    "judul" => "Pemanfaatan dan Dampak AI dalam Bidang Pendidikan",
    "tanggal" => "2024-28-02",
    "refleksi" => "Penting bagi kita semua untuk meningkatkan kesadaran akan penggunaan AI yang bijaksana, terutama dalam konteks pendidikan. 
    Kita tidak boleh terbuai oleh kenyamanan penggunaan AI sehingga menjadi terlalu bergantung padanya dan melupakan bahwa hal itu dapat mengikis kemampuan sebagai manusia untuk berpikir kritis dan menggunakan akal.",
    "gambar" => "Cuplikan layar 2025-05-21 215408.png",
    "kutipan" => [
     "Teknologi AI masih terus menjadi perbincangan hangat dalam berbagai bidang, 
     perkembangannya yang kini begitu pesat juga mulai merambah ke dunia pendidikan."
    ],
    "sumber" => "https://www.dicoding.com/blog/pemanfaatan-dan-dampak-ai-dalam-bidang-pendidikan/"
  ],
  3 => [
    "judul" =>"Strategi Mahasiswa dalam Mengelola Keuangan Pribadi",
    "tanggal" => "2020-10-02",
    "refleksi" => "Sebagai mahasiswa yang mayoritas sudah bekerja, tentunya perlu mengatur pengeluaran keuangan dengan baik agar dapat bertahan sampai dengan akhir bulan tanpa kurang dan harus cukup.",
    "gambar" => "CCuplikan layar 2025-05-21 215932.png",
    "kutipan" => [
    "Gaya hidup hemat merupakan hal dasar tentang bagaimana cara mengatur keuangan mahasiswa. 
    Penerapan pola keuangan yang sehat juga dapat membuat hidup kita menjadi lebih tenang dan bahagia."
    ],
    "sumber" => "https://stekom.ac.id/berita/mengelola-keuangan-ala-mahasiswa"
  ]
];

// Cek apakah parameter GET ada
$id = $_GET['id'] ?? null;

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Blog Reflektif Mahasiswa</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; background-color: #f9f9f9; }
    h1, h2 { text-align: center; transform: translateX(10px); }
    .artikel-list { margin: 20px auto; max-width: 600px; }
    .artikel-list ul { padding-left: 20px; color: blue; }
    .artikel-list li { margin-bottom: 10px; margin-left: 50px }
    .artikel-list a { text-decoration: none; color:rgb(0, 4, 255); }
    .artikel-list a:hover { text-decoration: underline; color: rgb(3, 70, 255); }

    .konten-artikel {
      max-width: 700px;
      margin: 0 auto;
      background: white;
      padding: 20px;
      border-radius: 8px;
    }

    img { max-width: 100%; height: auto; border-radius: 6px; margin: 15px 0; }

    blockquote {
      font-style: italic;
      color: #555;
      border-left: 5px solid #ccc;
      margin: 10px 0;
      padding-left: 15px;
    }

    .sumber a { color:rgb(8, 54, 181); }

    .navigasi { text-align: center; margin-top: 40px; transform: translateX(4px); }
    .navigasi a {
      text-decoration: none;
      background-color: #2196F3;
      color: white;
      padding: 10px 20px;
      border-radius: 4px;
      margin: 5px;
    }

    .navigasi a:hover {
      background-color: #0a7dd8;
    }
  </style>
</head>
<body>

<h1>Blog Reflektif Mahasiswa</h1>

<?php if ($id && isset($artikel[$id])): 
  $data = $artikel[$id];
  $kutipan = $data['kutipan'][rand(0, count($data['kutipan']) - 1)];
?>
  <div class="konten-artikel">
    <h2><?= htmlspecialchars($data['judul']) ?></h2>
    <p><em>Tanggal posting: <?= htmlspecialchars($data['tanggal']) ?></em></p>
    <img src="<?= htmlspecialchars($data['gambar']) ?>" alt="Ilustrasi">
    <p><?= htmlspecialchars($data['refleksi']) ?></p>
    <blockquote>"<?= $kutipan ?>"</blockquote>
    <?php if ($data['sumber']): ?>
      <p class="sumber">Sumber: <a href="<?= htmlspecialchars($data['sumber']) ?>" target="_blank"><?= htmlspecialchars($data['sumber']) ?></a></p>
    <?php endif; ?>
  </div>

  <div class="navigasi">
    <a href="soal 3.php">Kembali ke Daftar Artikel</a>
    <a href="soal 2.php">Kembali ke Timeline</a>
  </div>

<?php else: ?>
  <div class="artikel-list">
    <h2>Daftar Artikel</h2>
    <ul>
      <?php foreach ($artikel as $key => $data): ?>
        <li>
          <a href="?id=<?= $key ?>"><?= htmlspecialchars($data['judul']) ?> (<?= htmlspecialchars($data['tanggal']) ?>)</a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="navigasi">
    <a href="soal 1.php">Kembali ke Profil</a>
    <a href="soal 2.php">Menuju Timeline</a>
  </div>
<?php endif; ?>

</body>
</html>