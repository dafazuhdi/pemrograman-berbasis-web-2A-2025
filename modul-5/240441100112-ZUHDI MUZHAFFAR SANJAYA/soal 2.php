<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Timeline Pengalaman Kuliah</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
      background: #f4f4f4;
    }

    h1 {
      text-align: center;
      transform: translateX(70px);
    }

    .timeline {
      position: relative;
      max-width: 600px;
      margin: 0 auto;
    }

    .timeline::after {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #2196F3;
      top: 2.5%;
      bottom: 2%;
      left: 60%;
      margin-left: 3px;
    }

    .timeline-entry {
      padding: 10px 40px;
      position: relative;
      width: 50%;
    }

    .timeline-entry.left {
      left: 0;
    }

    .timeline-entry.right {
      left: 60%;
    }

    .timeline-entry::after {
      content: ' ';
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: white;
      border: 4px solid #2196F3;
      top: 15px;
      border-radius: 50%;
      z-index: 1;
      transform: translateX(-10%);
      left: 93%;
    }

    .timeline-entry.right::after {
      left: -6px;
    }

    .timeline-content {
      padding: 10px;
      background-color: white;
      position: relative;
      border-radius: 6px;
    }

    .button-group {
      text-align: center;
      margin-top: 20px;
      transform: translateX(70px);
    }

    .button-group a {
      text-decoration: none;
      background-color: #2196F3;
      color: white;
      padding: 10px 20px;
      border-radius: 4px;
      display: inline-block;
      margin: 10px;
    }

    .button-group a:hover {
      background-color: #0b7dda;
    }
  </style>
</head>
<body>

<h1>Timeline Pengalaman Kuliah</h1>

<div class="timeline">
  <?php
  $timeline = [
    ["tahun" => "2024", "kegiatan" => "Semester 1 & 2 = Masuk kuliah dan mengikuti orientasi mahasiswa baru."],
    ["tahun" => "2025", "kegiatan" => "Semester 3 & 4 = Mulai aktif dalam organisasi kampus dan mengembangkan keterampilan."],
    ["tahun" => "2026", "kegiatan" => "Semester 5 & 6 = Magang di perusahaan IT dan persiapan tugas akhir."],
    ["tahun" => "2027", "kegiatan" => "Semester 7 & 8 = Mengerjakan skripsi dan persiapan untuk wisuda."],
  ];

  $i = 0;
  foreach ($timeline as $entry) {
    $posisi = $i % 2 == 0 ? "left" : "right";
    echo "<div class='timeline-entry $posisi'>
            <div class='timeline-content'>
              <h3>{$entry['tahun']}</h3>
              <p>{$entry['kegiatan']}</p>
            </div>
          </div>";
    $i++;
  }
  ?>
</div>

<!-- Tombol Navigasi -->
<div class="button-group">
  <a href="soal 1.php">Kembali ke Profil</a>
  <a href="soal 3.php">Menuju Blog Reflektif</a>
</div>

</body>
</html>