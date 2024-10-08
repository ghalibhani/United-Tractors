<?php
require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form
  $tanggal = htmlspecialchars($_POST['tanggal']);
  $sales = htmlspecialchars($_POST['sales']);
  $leadname = htmlspecialchars($_POST['leadname']);
  $produk = htmlspecialchars($_POST['produk']);
  $whatsapp = htmlspecialchars($_POST['whatsapp']);
  $kota = htmlspecialchars($_POST['kota']);

  // Simpan data ke database
  $sql = "INSERT INTO leads (tanggal, id_sales, nama_lead, id_produk, no_wa, kota) VALUES ('$tanggal', '$sales', '$leadname', '$produk', '$whatsapp', '$kota')";
  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
