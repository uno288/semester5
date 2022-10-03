<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pendaftaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
        require_once "navbar.php";
    ?>

    <div class="container-fluid mt-3">
        <h3>Pendaftaran Mahasiswa Baru</h3> 
        <p>Anda akan melakukan proses pendaftaran</p>
            <div class="row">
                <div class="col-6">
                    <form action="simpan_data.php" method="post">
                        <div class="form-floating mb-3 mt-3">
                            <h4>Nama Lengkap</h4>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" name="nama">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <h4>Email</h4>
                            <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <h4>No.HP</h4>
                            <input type="text" class="form-control" id="noHp" placeholder="Masukan No.Handphone" name="noHp">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <h4>NIK/No.KTP</h4>
                            <input type="text" class="form-control" id="nik" placeholder="Masukan NIK/no.KTP" name="nik">
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </div>
</body>
</html>