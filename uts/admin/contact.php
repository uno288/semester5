

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak</title>
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
    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h4>Contact</h4>
                <h1 class="size-50">Contact  Me</h1>
                <div class="h-50"></div>

            <?php
                include "navbar.php";
                include "koneksi.php";
                
                $querySQL = "SELECT * FROM contact";
                $execQuerySQL = mysqli_query($koneksi,$querySQL);

                if (mysqli_num_rows($execQuerySQL) > 0){
                while($row = mysqli_fetch_assoc($execQuerySQL)){  
            ?>

            </div>
            <div class="col-md-4" data-aos="fade-up">

                <h3>Phone Number</h3>
                <p><?= $row['no_hp']?></p>
                <h3>Email</h3>
                <p><?= $row['email']?></p>
                <h3>Address</h3>
                <p><?= $row['address']?></p>

                <h3>Social Network</h3>

                <ul class="social">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="h-50"></div>
            </div>         
            <?php
                    }
                }
            ?>

            <div class="col-md-8" data-aos="fade-up">
                <form action="" method="post" class="contact contact-bg" >
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Your Name" />
                    <input type="email" id="email" name="email" class="form-control" placeholder="Your E-mail" />
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" />
                    <textarea name="pesan" class="form-control" placeholder="Your Message" style="height:120px"></textarea>
                    <input type="submit" name="submit" id="submit" class="button" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
    
    <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $pesan = $_POST['pesan'];
            $querySQL = "INSERT INTO data_pelanggan (id, nama, email, phone, pesan) VALUES(NULL, '$nama', '$email', '$phone', '$pesan')";
            $execSQL = mysqli_query($koneksi, $querySQL);

            if($execSQL){
                echo "Your message was sent successfully! I will be in touch as soon as I can";
            }else{
                echo "Something went wrong, try refreshing and submitting the form again.";
            }  
        } 
    ?>

    <!-- ./contact -->

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