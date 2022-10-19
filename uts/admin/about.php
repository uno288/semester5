<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <?php
        include "navbar.php";
        include "koneksi.php";
        
        $querySQL = "SELECT * FROM about";
        $execQuerySQL = mysqli_query($koneksi,$querySQL);

        if (mysqli_num_rows($execQuerySQL) > 0){
          while($row = mysqli_fetch_assoc($execQuerySQL)){  
    ?>

    <!-- about -->
    <div class="section" id="about">
        <div class="container">
            <div class="col-md-6" data-aos="fade-up">
                <h4><?= $row['subJudul']?></h4>
                <h1 class="size-50"><?= $row['judul']?></h1>
                <div class="h-50"></div>
                <?= $row['deskripsi']?>
                <div class="h-50"></div>
            </div>
            <div class="col-md-6 about-img-div">
                <div class="about-border" data-aos="fade-up" data-aos-delay=".5"></div>
                <img src="img/<?= $row['gambar']?>" width="400" class="img-responsive" alt=""  data-aos="fade-right" data-aos-delay="0" />
            </div>
        </div>
    </div>
    
    <?php
            }
        }
    ?>
    <!-- ./about -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!--  plugins  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!--  main script  -->
    <script src="js/custom.js"></script>
</body>
</html>