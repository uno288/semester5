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

    <?php
        include "navbar.php";
        include "koneksi.php";
        
        $querySQL = "SELECT * FROM project";
        $execQuerySQL = mysqli_query($koneksi,$querySQL);
        $querySQL2 = "SELECT * FROM project";
        $execQuerySQL2 = mysqli_query($koneksi,$querySQL2);
    ?>
    
    <!-- projects -->
    <div class="section" id="projects">
        <div class="container">
            <div class="col-md-12">
                <h4>Kumpulan Projek yang Pernah Saya Buat</h4>
                <h1 class="size-50">Projek - Projek Saya</h1> 
            </div>
            <!-- main container -->
            <div class="main-container portfolio-inner clearfix">
                <!-- portfolio div -->
                <div class="portfolio-div">
                    <div class="portfolio">

                        <!-- portfolio_filter -->
                        <div class="categories-grid wow fadeInLeft">
                            <nav class="categories">
                                <ul class="portfolio_filter">
                                    <li><a href="" class="active" data-filter="*">All</a></li>
                                    <?php
                                    if (mysqli_num_rows($execQuerySQL) > 0){
                                        while($row = mysqli_fetch_assoc($execQuerySQL)){  
                                    ?>
                                    <li><a href="" data-filter=".<?= $row['kategori']?>"><?= $row['kategori']?></a></li>
                                    <?php
                                            }
                                        }           
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- portfolio_filter -->

                        <!-- portfolio_container -->
                        <div class="no-padding portfolio_container clearfix" data-aos="fade-up">

                        <?php
                        if (mysqli_num_rows($execQuerySQL2) > 0){
                            while($row2 = mysqli_fetch_assoc($execQuerySQL2)){  
                        ?>

                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 <?= $row2['kategori']?> logo">
                                <a data-filter=".<?= $row2['kategori']?>" data-toggle="modal"
                                href="" data-target="#animatedModal<?php echo $row2['id'];?>" 
                                class="portfolio_item"> <img src="img/<?= $row2['gambar']?>" alt="image" class="img-responsive"/>
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span><?= $row2['judul_desk']?></span> <em><?= $row2['sub_desk']?></em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Pop Up Modal --> 
                        <div class="modal fade" id="animatedModal<?php echo $row2['id'];?>"  aria-hidden="true" >
                            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
                            <div id="btn-close-modal"  data-dismiss="modal" aria-label="Close"></i>&times;</div>
                            <div class="modal-content">
                                <div class="container">
                                    <div class="portfolio-padding">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h2><?= $row2['judul_desk']?>,<h2>
                                            <h3><?= $row2['sub_desk']?></h3>
                                            <div class="h-50"></div>
                                            <p><?= $row2['deskripsi']?>.</p>
                                            <br />
                                            <br /> <img src="img/<?= $row2['gambar']?>" alt="" class="img-responsive" />
                                            <br />
                                            <br />
                                            <p><?= $row2['deskripsi2']?></p>
                                            <br />
                                            <br /> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Pop Up -->

                        <?php
                            } 
                        }
                        ?> 
                    </div>  
                </div>
            </div>
        </div>
    </div>

    
   
    

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