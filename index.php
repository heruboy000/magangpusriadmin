<!DOCTYPE html>
<html lang="en">
<?php
function rupiah($angka)
{
    $hasilrupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasilrupiah;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pendataan Magang PT Pusri</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/assets_home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/assets_home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/assets_home/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/assets_home/css/style.css" rel="stylesheet">
    <link href="assets/assets_home/img/logoo.png" rel="icon">
</head>

<body>
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="index.html" class="navbar-brand">
                    <h2 class="text-white fw-bold d-block">Pendataan Magang PT Pusri</h2>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto ms-xl-auto p-0">
                        <a href="index.php" class="nav-item nav-link ">Beranda</a>
                        <a href="#tata" class="nav-item nav-link ">Tata Cara Magang</a>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="assets/assets_home/img/Pusri.jpg" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Selamat Datang Di Website</h6>
                            <h3 class="text-white display-3 mb-4 animated fadeInRight">Pendataan Magang PT Pusri</h3>
                            <a href="login.php" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Login</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/assets_home/img/Pusri2.jpg" class="img-fluid max-width: 100%;" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Selamat Datang Di Website</h6>
                            <h3 class="text-white display-3 mb-4 animated fadeInLeft">Pendataan Magang PT Pusri</h3>
                            <a href="login.php" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Login</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
  <div class="containerTata" id="tata">
  <div class="row justify-content-center my-5">
    <div class="col-md-5 shadow"  >
      <h3 class="text-center text-uppercase">Tata cara magang Di PT pupuk Sriwidjaja Palembang</h3>
      <p style="text-align:justify;">Berikut ini merupakan tata cara magang di PT Pupuk Sriwidjaja Palembang</p>
      <ul>
        <li>
          Mendaftar terlebih dahulu diwebsite resmi pusri
        </li>
        <li>
          Setelah itu peserta magang membuat akun terlebih dahulu
        </li>
        <li>
          Selanjutnya peserta magang login terlebih dahulu
        </li>
        <li>
          Setelah login peserta magang mengisi biodata. Pastikan biodata yang diisi benar
        </li>
        <li>
          Jika peserta magang telah menyelesaikan magang, peserta magang harus mengumpulkan laporan kerja praktik.
        </li>
      </ul>
    </div>
    <div class="col-md-5  align-item-center" style="height:300px;">
      <img src="pusri.png" alt="" style="width:500px;">
      
    </div>
  </div>

  </div>
    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="h3 text-secondary">Tautan</a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="home.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Home</a>
                        <a href="login.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Login</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="h3 text-secondary">Jam Operasional</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <p class="mb-1">Senin - Jumat</p>
                        <h6 class="text-light">09:00 am - 07:00 pm</h6>
                        <p class="mb-1">Sabtu</p>
                        <h6 class="text-light">09:00 am - 12:00 pm</h6>
                        <p class="mb-1">Minggu</p>
                        <h6 class="text-light">Tutup</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="h3 text-secondary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Jalan Sudirman</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> +628 8989 9992</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> Pendataan Magang PT Pusri@gmail.com</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Pendataan Magang PT Pusri</a>, All right reserved.</span>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/assets_home/lib/wow/wow.min.js"></script>
    <script src="assets/assets_home/lib/easing/easing.min.js"></script>
    <script src="assets/assets_home/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/assets_home/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/assets_home/js/main.js"></script>
</body>

</html>