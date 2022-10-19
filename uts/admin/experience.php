<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Herjuno's Project</title>
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
    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h4>Pengalaman merupakan guru terbaik</h4>
                <h1 class="size-50">Pengalaman <br /> Saya</h1>
                <div class="h-50"></div>
            </div>
        </div>

        <?php
            include "navbar.php";
            include "koneksi.php";
            
            $querySQL = "SELECT * FROM experience";
            $execQuerySQL = mysqli_query($koneksi,$querySQL);

            if (mysqli_num_rows($execQuerySQL) > 0){
            while($row = mysqli_fetch_assoc($execQuerySQL)){  
        ?>

        <div class="container">
            <div class="col-md-6">
                <ul class="timeline">
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?= $row['tanggal']?></p>
                            <h3><?= $row['judul']?></h3>
                            <h4><?= $row['subJudul']?></h4>
                            <p><?= $row['deskripsi']?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <?php
                }
            }
        ?>
        
    </div>


    <!-- ./experience -->

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


