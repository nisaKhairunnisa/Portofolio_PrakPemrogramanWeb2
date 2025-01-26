<?php
  $name = "Khairunnisa' Almaududy";
  $description = "Saya seorang mahasiswa Sistem Informasi yang tertarik pada bidang Data Analysis, Database, dan Keuangan.";
  $biodata = [
    "Nama Lengkap" => "Khairunnisa' Almaududy",
    "Tanggal Lahir" => "13 November 2004",
    "Tempat Lahir" => "Lubuklinggau",
    "Email" => "khairunnisa@gmail.com",
    "Nomor Telepon" => "089509152566"
  ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio - <?php echo $name; ?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
      color: #333;
    }
    header {
      padding: 20px;
      background-color:#2b2e5d;
      color: white;
      text-align: center;
    }
    .container {
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      padding: 20px;
    }
    .profile-photo {
      border-radius: 20px;
      width: 300px;
      height: 300px;
      object-fit: cover;
      margin-right: 40px;
    }
    .content {
      flex: 1;
    }
    .marquee {
      margin-bottom: 20px;
      height: 50px;
      overflow: hidden;
      position: relative;
      background-color: #eee;
      border: 1px solid #ddd;
      border-radius: 8px;
      color: black;
    }
    .marquee div {
      position: absolute;
      width: 100%;
      height: 100%;
      white-space: nowrap;
      animation: scrollRight 25s linear infinite;
    }
    @keyframes scrollRight {
      0% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(-100%);
      }
    }
    .biodata {
      margin-top: 20px;
    }
    .biodata table {
      width: 100%;
      border-collapse: collapse;
    }
    .biodata th, .biodata td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <header>
    <h1>Portofolio <?php echo $name; ?></h1>
    <div class="marquee">
      <div>
        <p>Selamat datang di portofolio saya!</p>
      </div>
    </div>
  </header>
  <div class="container">
    <img src="DSC07085.jpg" alt="Foto Saya" class="profile-photo">
    <div class="content">
      <p><?php echo $description; ?></p>
      <div class="biodata">
        <h2>Biodata</h2>
        <table>
          <?php foreach ($biodata as $key => $value): ?>
            <tr>
              <th><?php echo $key; ?></th>
              <td><?php echo $value; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
