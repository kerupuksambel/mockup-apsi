<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Website RDK</title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">RDK ITS</a>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-left">
      <?php 
    $id = $_GET['id']-1;

    $data = [
        'kegiatan' => [
            'Pengajian Bersama',
            'Buka Bersama',
            'Sahur Bersama',
            'Tadarusan'
        ],

        'waktu' => [
            'Selasa, 12 Mei 2020 16:00',
            'Selasa, 12 Mei 2020 17:30',
            'Selasa, 12 Mei 2020 03:30',
            'Selasa, 12 Mei 2020 20:00'
        ],

        'detail' => [
            'Sehabis sholat Ashar',
            'Sebelum adzan Maghrib',
            '1 jam sebelum Subuh',
            'Selepas tarawih'
        ],

        'tempat' => [
            'Masjid Manarul Ilmi',
            'Masjid Manarul Ilmi',
            'Masjid Manarul Ilmi',
            'Masjid Manarul Ilmi'
        ]
    ]
?>
<form>
    <table class="table">
        <tbody>
            <tr>
                <td>Nama Kegiatan</td>
                <td><input class='form-control' value="Kegiatan <?= $id+1 ?>"></td>
            </tr>
            <tr>
                <td>Waktu kegiatan</td>
                <td><input class='form-control' value="<?= $data['waktu'][$id] ?>"></td>
            </tr>
            <tr>
                <td>Tempat kegiatan</td>
                <td><input class='form-control' value="<?= $data['tempat'][$id] ?>"></td>
            </tr>
            <tr>
                <td>Detail</td>
                <td><input class='form-control' value="<?= $data['detail'][$id] ?>"></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Simpan Data" class='btn btn-primary'>
</form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
