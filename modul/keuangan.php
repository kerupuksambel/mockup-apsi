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
                <table class='table'>
                    <thead>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                    <tbody>
                        <tr>
                            <td><input class='form-control' value="Beli makanan buka puasa"></td>
                            <td><input class='form-control' value="500000" type="number"></td>
                            <td><input class='form-control' value="2020-05-01" type="date">
                        </tr>
                        <tr>
                            <td><input class='form-control' value="Beli perlengkapan"></td>
                            <td><input class='form-control' value="150000" type="number"></td>
                            <td><input class='form-control' value="2020-04-29" type="date">
                        </tr>
                        <tr>
                            <td><input class='form-control' value="Honorarium ustadz"></td>
                            <td><input class='form-control' value="150000" type="number"></td>
                            <td><input class='form-control' value="2020-05-07" type="date">
                        </tr>
                    </tbody>
                </table>
                <input type="submit" style="margin-bottom: 50px" value="Simpan" class="btn btn-primary">
                <ul class='list-group col-md-6'>
                    <li class='list-group-item'><a href="keuangan/harian.php">Keuangan Harian</a></li>
                    <li class='list-group-item'><a href="keuangan/mingguan.php">Keuangan Mingguan</a></li>
                    <li class='list-group-item'><a href="keuangan/bulanan.php">Keuangan Bulanan</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>