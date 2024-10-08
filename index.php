<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  require('connection.php');
  ?>

  <h2>Selamat Datang di Tambah Leads</h2>
  <form action="simpan.php" method="post">

    <!-- Input Tanggal -->
    <label for="tanggal">Tanggal</label><br>
    <input type="date" id="tanggal" name="tanggal" required><br><br>

    <!-- Input Sales -->
    <label for="sales">Sales</label><br>
    <select name="sales" id="sales">
      <option value="">-- Pilih --</option>
      <option value="1">Sales 1</option>
      <option value="2">Sales 2</option>
      <option value="3">Sales 3</option>
    </select><br><br>

    <!-- Input Lead Name -->
    <label for="leadname">Nama Lead</label><br>
    <input type="text" id="leadname" name="leadname" required></input><br><br>

    <!-- Input Produk -->
    <label for="produk">Produk</label><br>
    <select name="produk" id="produk">
      <option value="">-- Pilih --</option>
      <option value="1">Cipta Residence 2</option>
      <option value="2">The Rich</option>
      <option value="3">Namorambe City</option>
      <option value="4">Grand Banten</option>
      <option value="5">Turi Mansion</option>
      <option value="6">Cipta Residence 1</option>
    </select><br><br>

    <!-- Input No. Whatsapp -->
    <label for="whatsapp">No. Whatsapp</label><br>
    <input type="text" id="whatsapp" name="whatsapp" required></input><br><br>

    <!-- Input Kota -->
    <label for="kota">Kota</label><br>
    <input type="text" id="kota" name="kota" required></input><br><br>

    <input type="submit" value="Submit">
  </form>

  <?php
  include('simpan.php');
  ?>
</body>

</html>