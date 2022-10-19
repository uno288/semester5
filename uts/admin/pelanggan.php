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
<?php
    include "koneksi.php";
    if(isset($_POST['Submit'])){
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
</body>