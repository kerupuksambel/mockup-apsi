
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
            $id = 0;
        
            $data = [
                'username' => [
                    'Pengajian Bersama',
                    'Buka Bersama',
                    'Sahur Bersama',
                    'Tadarusan'
                ],
        
                'role' => [
                    'SC',
                    'IC',
                    'OC',
                    'OC'
                ],
        
                'password' => [
                    '123456',
                    '123456',
                    '281477',
                    '123456'
                ],
            ]
        ?>
        <form>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Username</td>
                        <td><input disabled value="Akun <?= $id+1 ?>" class='form-control'></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td><input disabled value="<?= $data['role'][$id] ?>" class='form-control'></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input disabled type="password" value="<?= $data['password'][$id] ?>" class='form-control'></td>
                    </tr>
                </tbody>
            </table>
        </form>
                
                    <a class='btn btn-primary' href="akun/update/detail.php?id=1">Update Akun</a>
                    <a class='btn btn-primary' href="akun/daftar/form.php">Tambah Akun</a>
                </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>

