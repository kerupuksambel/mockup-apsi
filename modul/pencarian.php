

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
                    <?php if(!isset($_GET['q'])){ ?>
                    <form method="GET" action="" class='form-group' style='padding-top: 30px'>
                        <input type="text" class='form-control' name="q">
                        <input type="submit" class='btn btn-primary' style='margin-top: 10px' value='Cari'>
                    <?php }else{?>
                        <table class='table'>
                        <thead>
                            <th>Nama</th>
                            <th>Detail</th>
                        <tbody>
                            <tr>
                                <td>Tadarus</td>
                                <td>Sehabis sholat Tarawih</td>
                            </tr>
                        </tbody>
                    </table>
                    <?php } ?>
                    
                    </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</body>

</html>