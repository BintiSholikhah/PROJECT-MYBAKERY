<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleRegister.css">
    <link rel="stylesheet" type="text/css" href="awesome/css/all.min.css">
</head>
<body>
<script src="daftar-script.js"></script>
<div class = "container my-4">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <h3 class="text-judul">Daftar Akun</h3>
            </div>
            <div style="padding-top:30px" class="panel-body" >

            <div class="container">
                <form method="POST" action="prosesregister.php">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-pen"></i></span>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" oninput="validasiNama(this)" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" oninput="validasiEmail(this)" required >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock"></i></span>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="mb-3">
                                <label class="form-label">No Handphone</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="No Handphone" oninput="validasiNomorTelepon(this)" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" oninput="validasiPassword(this)" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="mb-3">
                                <label class="form-label">Ulangi Password</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock"></i></span>
                                    <input type="text" class="form-control" id="ulangi-password" name="ulangi-password" placeholder="Ulangi Password" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row mt-4" >
                                <div class="col-md-6 d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit">Daftar</button>    
                                </div>
                                <div class="col-md-6 d-grid">
                                    <button type="reset" class="btn btn-danger">Hapus Data</button>    
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label>Sudah Punya Akun? <a href="login-backup.php">Login disini</a></label>
                        </div>
                </div>
                </form>
            </div>               
        </div>  
    </div>
</div>
</body>
</html>
