<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <?php
  require('connection.php');
  // Query untuk mendapatkan semua data dari tabel leads
  $sql = "SELECT * 
        FROM leads
        JOIN sales ON leads.id_sales = sales.id_sales
        JOIN produk ON leads.id_produk = produk.id_produk";

  $result = $conn->query($sql);
  ?>

  <div class="p-5" id="root">
    <h2>Selamat Datang di Tambah Leads</h2>
    <main>
      <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-success">Kembali</button>
        </div>
        <div class="card-body">
          <form action="simpan.php" method="post">
            <!-- Input Tanggal -->
            <div class="row">
              <div class="col">
                <label class="form-label" for="tanggal">Tanggal</label><br>
                <input class="form-control" type="date" id="tanggal" name="tanggal" required><br><br>
              </div>
              <!-- Input Sales -->
              <div class="col">
                <label class="form-label" for="sales">Sales</label><br>
                <select class="form-select" name="sales" id="sales">
                  <option value="">-- Pilih Sales --</option>
                  <option value="1">Sales 1</option>
                  <option value="2">Sales 2</option>
                  <option value="3">Sales 3</option>
                </select><br><br>
              </div>
              <!-- Input Lead Name -->
              <div class="col">
                <label class="form-label" for="leadname">Nama Lead</label><br>
                <input class="form-control" type="text" id="leadname" name="leadname" placeholder="Nama Lead" required></input><br><br>
              </div>
            </div>
            <!-- Input Produk -->
            <div class="row">
              <div class="col">
                <label class="form-label" for="produk">Produk</label><br>
                <select class="form-select" name="produk" id="produk">
                  <option value="">-- Pilih Produk --</option>
                  <option value="1">Cipta Residence 2</option>
                  <option value="2">The Rich</option>
                  <option value="3">Namorambe City</option>
                  <option value="4">Grand Banten</option>
                  <option value="5">Turi Mansion</option>
                  <option value="6">Cipta Residence 1</option>
                </select><br><br>
              </div>
              <!-- Input No. Whatsapp -->
              <div class="col">
                <label class="form-label" for="whatsapp">No. Whatsapp</label><br>
                <input class="form-control" type="text" id="whatsapp" name="whatsapp" placeholder="No. Whatsapp" required></input><br><br>
              </div>
              <!-- Input Kota -->
              <div class="col">
                <label class="form-label" for="kota">Kota</label><br>
                <input class="form-control" type="text" id="kota" name="kota" placeholder="Kota" required></input><br><br>
              </div>
            </div>
            <div class="row justify-content-center">

              <div class="col-2 d-flex m-0">
                <input class="btn btn-primary btn-lg ms-auto" type="submit" value="Simpan">
              </div>
              <div class="col-2 d-flex m-0">
                <input class="btn btn-secondary btn-lg me-auto" type="reset" value="Cancel">
              </div>
            </div>
          </form>
        </div>
      </div>

      <h2>Daftar Leads</h2>

      <table class="table">
        <tr>
          <th>ID</th>
          <th>Tanggal</th>
          <th>Sales</th>
          <th>Nama Lead</th>
          <th>Produk</th>
          <th>No. WhatsApp</th>
          <th>Kota</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
          // Output data setiap baris
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                        <td>" . $row["id_leads"] . "</td>
                        <td>" . $row["tanggal"] . "</td>
                        <td>" . $row["nama_sales"] . "</td>
                        <td>" . $row["nama_lead"] . "</td>
                        <td>" . $row["nama_produk"] . "</td>
                        <td>" . $row["no_wa"] . "</td>
                        <td>" . $row["kota"] . "</td>
                      </tr>";
          }
        } else {
          echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
        }

        // Tutup koneksi
        $conn->close();
        ?>

      </table>

    </main>


  </div>

  <?php
  include('simpan.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>