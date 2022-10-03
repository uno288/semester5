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
    include "koneksi.php";

    $id = $_GET['id'];
    $querySQL = "SELECT * FROM calon_maba WHERE id=$id";
    $excSQL = mysqli_query($koneksi, $querySQL);

    $nama = "-";
    $email = "-";
    $nohp = "-";
    $nik= "-";
    if (mysqli_num_rows($excSQL) > 0) {
      while ($row = mysqli_fetch_assoc($excSQL)){
        //ambil data
        $nama = $row["nama"];
        $email = $row["email"];
        $nohp = $row["nohp"];
        $nik = $row["nik"];
      }
    }
?>

<div class="container-fluid mt-3">
  <table class="table table-hover table-striped">
    <thread>
        <tr>
            <th>ID</th>
            <th><?php echo $id; ?></th>
        </tr>
    </thread>
    <tbody>
        <td>nama</td>
        <td><?php echo $nama; ?><td>
    </tbody>
    <tbody>
        <td>email</td>
        <td><?php echo $email; ?><td>
    </tbody>
    <tbody>
        <td>nohp</td>
        <td><?php echo $nohp; ?><td>
    </tbody>
    <tbody>
        <td>nik</td>
        <td><?php echo $nik; ?><td>
    </tbody>
</div>

</body>
</html>