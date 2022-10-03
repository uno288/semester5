<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simpan Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php
        require_once "navbar.php";
        include "koneksi.php";
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $nohp = $_POST['nohp'];
            $nik = $_POST['nik'];
            $querySQL = "INSERT INTO calon_maba ('nama', 'email', 'nohp', 'nik') VALUES($nama, $email, $nohp, $nik)";
            $excSQL = mysqli_query($koneksi, $querySQL);
        }
    ?>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-sm-12">
                <p>
                    <?php
                        if($excSQL){
                            $lastid = mysqli_insert_id($koneksi);
                            echo "Terima kasih telah mendaftar menjadi calon mahasiswa dengan ID $lastid";
                        }
                        else{
                            echo "Pendaftaran belum berhasil, silahkan coba lagi";
                        }
                    ?>
                </p>
                <a href="pmb.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

</body>
</html>