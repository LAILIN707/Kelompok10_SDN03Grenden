<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='index.php'>Klik disini</a>";
	exit;
}

$level=$_SESSION["level"];

if ($level!=2) {
    echo "Anda tidak punya akses pada halaman ini";
    exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SDN 03 Grenden</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/tt.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
<form action="" method="post">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="guru_beranda.php">SDN 03 Grenden</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="guru_mapel.php">Jadwal Mengajar</a></li>
                    <li class="nav-item"><a class="nav-link" href="guru_absensi.php">Absensi</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php echo $nama; ?></a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="guru_beranda.php">Beranda</a></li>
                        <li><a class="dropdown-item" href="guru_profile.php">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">SDN 03 Grenden</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">SDN Grenden 03 adalah Sekolah Dasar (SD) Negeri yang berlokasi di
                        Propinsi Jawa Timur Kabupaten Kab. Jember dengan alamat Jl. Raya Puger No. 205 - Puger.</p>
                    <a class="btn btn-primary btn-xl" href="#Absensi">Get Started!</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Tentang -->
    <section class="page-section bg-primary" id="Tentang">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">SDN 03 Grenden</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">SDN Grenden 03 adalah Sekolah Dasar (SD) Negeri yang berlokasi di
                        Propinsi Jawa Timur Kabupaten Kab. Jember dengan alamat Jl. Raya Puger No. 205 - Puger.
                        Didirikan pada tanggal :2007-06-20</p>
                    <a class="btn btn-light btn-xl" href="#Absensi">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Absensi-->
    <section class="page-section" id="Absensi">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Absensi</h2>
                    <hr class="divider" />
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Input NIS-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="nip" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">NIP</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Input Username -->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="username" id="email" type="text" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Username</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Input Tanggal -->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="tanggal" id="phone" type="date" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Tanggal</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                        <!-- Layanan -->
                        <div class="form-floating mb-3">
                            <div class="form-floating">
                                <select name="keterangan" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected value="Hadir">Hadir</option>
                                    <option value="Ijin">Ijin</option>
                                    <option value="Alpha">Alpha</option>
                                </select>
                                <label for="floatingSelect">Keterangan</label>
                            </div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl" name="Simpan" id="submitButton"
                                type="submit">Submit</button>
                        </div><br>
                        <?php
                            include_once("config.php");

                            if (isset($_POST['Simpan'])){
                                $nip = $_POST['nip'];
                                $username = $_POST['username'];
                                $tanggal = $_POST['tanggal'];
                                $keterangan = $_POST['keterangan'];

                                $query = mysqli_query($kon, "Insert into absensi_guru (nip, username, tanggal, keterangan) value ('$nip', '$username', '$tanggal', '$keterangan')");
                                if ($query){
                                    echo "Berhasil Tambah Data";
                                } else {
                                    echo "Gagal Tambah Data";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-primary py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-white">Copyright &copy; 2021 SDN 03 Grenden</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</form>
</body>

</html>