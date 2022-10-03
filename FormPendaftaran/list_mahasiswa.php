<!DOCTYPE html>
<html lang="en">
<head>
  <title>List Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>

  <?php
    require_once "navbar.php";
    include "koneksi.php";
  ?>

  <div class="container-fluid mt-3">
    <h3>List Data Calon Mahasiswa</h3>
   
    <table class="table table-hover table-striped" id="list_table">
      <thead>
        <tr>
          <th>Nama Lengkap</th>
          <th>Email</th>
          <th>No.Hp</th>
          <th>NIK/No.Hp</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $querySQL = "SELECT * FROM calon_maba";
      $excSQL = mysqli_query($koneksi, $querySQL);

      if (mysqli_num_rows($excSQL) > 0) {
        while ($row = mysqli_fetch_assoc($excSQL)){
          //ambil data
          $id = $row["id"];
          $nama = $row["nama"];
          $email = $row["email"];
          $nohp = $row["nohp"];
          $nik = $row["nik"];
      ?>
        <tr>
          <td>
            <a href="view_detail_mahasiswa.php?id=<?php echo $id; ?>">
              <?php echo $id; ?></td>
            </a>
          </td>
          <td><?php echo $nama; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $nohp; ?></td>
          <td><?php echo $nik; ?></td>
        </tr> 
      <?php
        }
      }
      ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#list_table').DataTable();
    });
  </script>

</body>
</html>