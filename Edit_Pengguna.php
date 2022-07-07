<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Datepicker -->
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
                <li class="nav-item">
                    <a class="nav-link" href="kabupaten_page.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lihat_laporan_kabupaten.php">Laporan</a>
                </li>
                <div class="dropdown">
                        <li class="nav-item">
                            <a class="nav-link active">Pengguna <span class="sr-only">(current)</span></a>
                            <div class="dropdown-content">
                                <a href="daftar_pengguna.php">Daftar Pengguna</a>
                                <a href="Admin_Tambah_Pengguna.php">Tambah Admin Pengguna</a>
                            </div>
                        </li>
                </div>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="Riwayat_Pelaporan.php">Riwayat Pelaporan</a>
                </li> -->
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
                <input type="text" class="form-control" id="inputNIK" placeholder="NIK" disabled>
            </div>
            <div class="form-group">
                <label for="inputNama">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputemail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputAkta">Status Pengguna</label>
                    <div class="col-sm-10">
                        <div class="form-check" id="pilstatus">
                            <label class="form-check-label isi col-1">
                                <input class="form-check-input radio-inline" type="radio" name="status" id="status1" value="1">
                                Aktif</label>
                                <label class="form-check-label isi col-2 ml-lg-3">
                                    <input class="form-check-input radio-inline" type="radio" name="status" id="status2" value="2">
                                    Tidak Aktif</label>
                        </div>
                    </div>
            </div>
            <div class="mt-lg-5 text-right">
                <button type="button" class="btn btn-primary rounded-pill" id="update">Perbarui</button>
                <button type="button" class="btn btn-danger rounded-pill" id="cancel">Batal</button>
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
    
<script type="text/javascript">
    $(document).ready(function() {
        datafl = JSON.parse(localStorage.getItem('Datapengguna'))[<?= $_GET["key"]?>]
        $("#kecamatan").val(datafl['nama_kecamatan']);
        $("#desa").val(datafl['nama_desa']);
        $("#dusun").val(datafl['nama_dusun']);
        $("#inputNIK").val(datafl['NIK']);
        $("#inputNamaLengkap").val(datafl['nama_lengkap']);
        $("#inputemail").val(datafl['Email']);

        if(datafl['status']==1){
            $("#status1").attr({'checked':true})
        } else if(datafl['status']==2){
            $("#status2").attr({'checked':true})
        }

        $('#cancel').on('click', function() {
            location.replace('daftar_pengguna.php');
        });


        $('#update').on('click', function() {
            $("#inputNamaLengkap").removeClass("is-invalid")
            $("#inputemail").removeClass("is-invalid")
            $('input[name="status"]').removeClass("is-invalid")

            nama_lengkap       = $("#inputNamaLengkap").val()
            email              = $("#inputemail").val()
            status             = $('input[name="status"]:checked').val();
            errorTotal         = 0

            var form_data = new FormData();
            
            if(nama_lengkap==""){errorTotal++;$("#inputNamaLengkap").addClass("is-invalid")}
            if(email==""){errorTotal++;$("#inputemail").addClass("is-invalid")}
            if(status==""){errorTotal++;$('#input[name="status"]').addClass("is-invalid")}
            if(errorTotal>0){return}

            form_data.append("action","update_pengguna");
            form_data.append("nama_lengkap",nama_lengkap);
            form_data.append("email",email);
            form_data.append("status", status)
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
                    alert("Akun diperbarui")
                    location.replace('daftar_pengguna.php');
                }
            });
        });
    });
</script>
</body>
</html>