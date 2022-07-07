<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header id="header" class="fixed-top"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="image\Badung.png" width="40" height="40" class="d-inline-block align-middle" alt="">
                Disdukcapil Badung
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" href="Desa_Page.php">Beranda</a>
                </li>
                <div class="dropdown">
                        <li class="nav-item">
                            <a class="nav-link">Dusun</a>
                            <div class="dropdown-content">
                                <a href="daftar_dusun.php">Daftar Dusun</a>
                                <a href="tambah_dusun.php">Tambah Dusun Baru</a>
                            </div>
                        </li>
                </div>
                <div class="dropdown">
                        <li class="nav-item">
                            <a class="nav-link active">Pengguna<span class="sr-only">(current)</span></a>
                            <div class="dropdown-content">
                                <a href="daftar_admin_dusun.php">Daftar Admin Dusun</a>
                                <a href="admin_dusun_baru.php">Admin Dusun Baru</a>
                            </div>
                        </li>
                </div>
                <div class="dropdown">
                        <li class="nav-item">
                        <a class="nav-link">Laporan</a>
                            <div class="dropdown-content">
                                <a href="lihat_laporan_desa.php">Lihat Laporan</a>
                                <a href="laporan_baru.php">Laporan Baru</a>
                            </div>
                        </li>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Log Out</a>
                </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <!-- Formulir -->
    <section class="formulir" style="margin-top: 7em;">
        <form class="container">
            <div class="logo atas text-center">
                <img src="image\datadiri.png" class= "mt-lg-5 " alt="">
            </div>
            <div class="form-row mt-lg-5">
                <div class="form-group col-md-4">
                    <label for="dusun">Dusun</label>
                    <input type="text" class="form-control" id="dusun" placeholder="Dusun" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="kelurahan">Kelurahan/Desa</label>
                    <input type="text" class="form-control" id="desa" placeholder="Kelurahan/Desa" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="inputNIK">NIK</label>
                <input type="text" class="form-control" id="NIK" placeholder="NIK" disabled>
            </div>
            <div class="form-group">
                <label for="inputNama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" disabled>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" disabled>
            </div>
            <div class="mt-lg-5 text-right">
                <button type="button" class="btn btn-primary rounded-pill" id="verifikasi">Verifikasi</button>
                <button type="button" class="btn btn-danger rounded-pill" id="tolak">Tolak</button>
                <button type="button" class="btn btn-secondary rounded-pill" id="cancel">Kembali</button>
            </div>
        </form>
    </section>
    <!-- Footer -->
    <footer id="footer">
        <div class="footer-top mt-lg-5">
            <div class="container_footer">
                <div class="row">
                    <div class="col-lg-6 col-md-12 footer-contact mt-3">
                        <h4>Dinas Kependudukan Dan Pencatatan Sipil<span></span></h4>
                        <p>
                            Pusat Pemerintahan Mangupraja Mandala,<br> 
                            Jl. Raya Sempidi Mengwi, <br> 
                            Badung-Bali <br><br>
                            <strong>Telepon:</strong> (0361) 894980<br>
                            <strong>Email:</strong> disdukcapil@badungkab.go.id<br>
                        </p>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12 footer-links mt-3">
                        <h5>Menu Tersedia</h5>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Laporan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Formulir</a></li>
                        </ul>
                    </div> -->
                    <div class="col-lg-6 col-md-12 footer-links mt-3">
                        <h5>Media Sosial Kami</h5>
                        <p>Temukan kami dalam beberapa media sosial berikut ini.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
<script>
    $(document).ready(function() {
        datafl = JSON.parse(localStorage.getItem('Databaruadmdusun'))[<?= $_GET["key"]?>]
        console.log(datafl)

        $("#kecamatan").val(datafl['nama_kecamatan']);
        $("#desa").val(datafl['nama_desa']);
        $("#dusun").val(datafl['nama_dusun']);
        $("#NIK").val(datafl['NIK']);
        $("#nama_lengkap").val(datafl['nama_lengkap']);
        $("#email").val(datafl['Email']);

        $('#cancel').on('click', function() {
            location.replace('admin_dusun_baru.php');
        });

        $('#tolak').on('click', function() {
            $.ajax({
                type: 'GET',
                url: "datasignup.php?aksi=del_pengdutolak&id_laporan="+datafl['username'],
                success: function(data) {
                    alert("laporan ditolak")
                    location.replace('lihat_laporan_ditolak.php');
                }
            });
        });

        $('#verifikasi').on('click', function() {
            $("#dusun").removeClass("is-invalid")
            $("#desa").removeClass("is-invalid")
            $("#kecamatan").removeClass("is-invalid")
            $("#NIK").removeClass("is-invalid")
            $("#nama_lengkap").removeClass("is-invalid")
            $("#email").removeClass("is-invalid")

            dusun              = $("#dusun").val()
            desa               = $("#desa").val()
            kecamatan          = $("#kecamatan").val()
            NIK                = $("#NIK").val()
            nama_lengkap       = $("#nama_lengkap").val()
            email              = $("#email").val()
            errorTotal         = 0

            var form_data = new FormData();
            
            if(isNaN(parseInt(NIK)) || NIK.length!=16){errorTotal++;$("#NIK").addClass("is-invalid")}
            if(nama_lengkap==""){errorTotal++;$("#nama_lengkap").addClass("is-invalid")}
            if(dusun==""){errorTotal++;$("#dusun").addClass("is-invalid")}
            if(desa==""){errorTotal++;$("#desa").addClass("is-invalid")}
            if(kecamatan==""){errorTotal++;$("#kecamatan").addClass("is-invalid")}
            if(email==""){errorTotal++;$("#email").addClass("is-invalid")}
            if(errorTotal>0){return}

            form_data.append("action","verifikasi_adm_dusun");
            form_data.append("NIK",NIK);
            form_data.append("nama_lengkap",nama_lengkap);
            form_data.append("dusun",datafl['kode_dusun']);
            form_data.append("desa",datafl['kode_desa']);
            form_data.append("kecamatan",datafl['kode_kecamatan']);
            form_data.append("Email",email);
            form_data.append("username",datafl['username']);
            $.ajax({
                url: 'datasignup.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                evalScripts:true,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function(response){
                    alert("Akun diaktifkan")
                    location.replace('daftar_admin_dusun.php');
                }
            });
        });
    });
</script>
</body>
</html>