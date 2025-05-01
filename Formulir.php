<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulir Kontak Umum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f6f8;">

  <div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Formulir Kontak</h2>

    <form action="simpan.php" method="POST" class="row g-3 p-4 bg-white shadow rounded">
      
      <div class="col-md-6">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="email" class="form-label">Email Aktif</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="hp" class="form-label">Nomor HP</label>
        <input type="tel" id="hp" name="hp" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label d-block">Jenis Kelamin</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jk" id="laki" value="Laki-laki" required>
          <label class="form-check-label" for="laki">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan">
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>

      <div class="col-12">
        <label for="alamat" class="form-label">Alamat Lengkap</label>
        <textarea id="alamat" name="alamat" rows="3" class="form-control" required></textarea>
      </div>

      <div class="col-12">
        <label for="pesan" class="form-label">Pesan</label>
        <textarea id="pesan" name="pesan" rows="4" class="form-control" required></textarea>
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">Kirim Formulir</button>
      </div>
    </form>
  </div>

</body>
</html>
