<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h2 class="mb-4">Data siswa</h2>
    <table class="table table-secondary table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nis</th>
          <th>Nama Lengkap</th>
          <th>Kelas</th>
          <th>Jenis kelamin</th>
          <th>Alamat</th>
          <th>Tanggal lahir</th>
          <th>Buku</th>       
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($tb3  as $s): ?>
          <tr>
            <td>
              <?= $no++; ?>
            </td>
            <td>
              <?= $s->nis; ?>
            </td>
            <td>
              <?= $s->nama_siswa; ?>
            </td>
            <td>
              <?= $s->kelas; ?>
            </td>
            <td>
              <?= $s->jenis_kelamin ?>
            </td>
            <td>
              <?= $s->alamat ?>
            </td>
            <td>
              <?= $s->tanggal_lahir ?>
            </td>
            <td>
              <?= $s->nama_buku ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>