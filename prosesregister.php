<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR AKUN</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="awesome/css/styleRegister.css">
    <link rel="stylesheet" type="text/css" href="awesome/css/all.min.css">
</head>
<body>
<div class = "container my-4">    
    <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <h3 class="text-judul">SELAMAT DATANG DI MY BAKERY</h3>
            </div>
           <div class="panel-body"> 
                <center>
                    <h2 style="margin-top: 10px;">Belanja berbagai roti dan pastry hanya di MyBakery</h2>
                    <p style="margin-top: 20px; font-size: 15px;">Kepuasan Anda adalah HARGA DIRI KAMI</p>
                </center>
           </div>
           <hr>
            <?php
                include 'koneksi.php';
                // Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
                $err        = "";
                if (isset($_POST['submit'])) {
                    $username = $_POST["username"];

                    // Melakukan validasi apakah username sudah digunakan
                    $query = "SELECT * FROM login WHERE username='$username'";
                    $result = $koneksi->query($query);

                    if ($result->num_rows > 0) {
                        // Username sudah digunakan, tampilkan pesan kesalahan
                        $err .= "DATA GAGAL DISIMPAN <li>Username sudah digunakan, gunakan username lain</li>";
                    } else {
                        // Username belum digunakan
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $alamat = $_POST['alamat'];
                        $telepon = $_POST['telepon'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        // Syntax untuk menambahkan data ke table mahasiswa
                        $result = mysqli_query($koneksi, "INSERT INTO login VALUES ('','$nama', '$email', '$alamat', '$telepon', '$username', '$password')");

                        echo "<center><h3> DATA BERHASIL DISIMPAN</h3></center>";
                        echo "<center><h3> <a href='login-backup.php'>Login Sekarang ?</a></h3></center>";
                        exit();

                        }

                    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
                }
            ?>  
            <div style="padding-top:30px" class="panel-body" >
                <?php if($err){ ?>
                    <div id="login-alert" class="alert alert-danger col-sm-12">
                        <ul><?php echo $err ?></ul>
                    </div>
                <?php } ?>                
            </div>                     
        </div>  
    </div>
</div>
</body>
