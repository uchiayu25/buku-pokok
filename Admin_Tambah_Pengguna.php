<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelaporan Buku Pokok Pemakaman(Dusun)</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<header id="header" class="fixed-top"> 
        <!-- NAVIGATION BAR -->
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
    
    <div class="wrapper mt-15">
        <div class="logo">
            <img src="image\tambah_pengguna.png" alt="">
        </div>
        <div class="text-center mt-2 mb-3 name">
            Pilih Jenis Admin yang Ingin Dibuat
        </div>
        <div class = "d-flex justify-content-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radiokecamatan" value="radiokecamatan">
                <label class="form-check-label" for="radiokecamatan">Kecamatan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radiodesa" value="radiodesa">
                <label class="form-check-label" for="radiodesa">Kelurahan/Desa</label>
            </div>
        </div>
        <form class = "p-1 mt-2" id="tambah1_form" name="tambah1_form" method="post" style="display:none;">
            <input type=hidden name=st value=0>
            <div class="input-group mb-2 mt-3">
                <select class="form-select" aria-label="Default select example" name=kecamatan id='s4'>
                    <option value=''>--Kecamatan--</option> -->
                    <?Php
                        require "config.php";// connection to database 
                        $sql="SELECT * FROM `kecamatan` ORDER BY nama_kecamatan";
                        foreach ($dbo->query($sql) as $row) {
                        echo "<option value=$row[kode_kecamatan]>$row[nama_kecamatan]</option>";
                        }
                    ?>
                </select>
            </div>
            <input style="margin-top:10px" class="form-control" type="text" name="NIK" id="NIK1" placeholder="NIK" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="text" name="nama_lengkap" id="nama_lengkap1" placeholder="Nama Lengkap" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="email" name="email" id="email1" placeholder="Email" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="password" name="password" id="password1" placeholder="Password" autocomplete="off">
            <div style="text-align:center">
                <button type="button" class="btn btn-danger rounded-pill mt-3" style="width:150px" name= "cancel1" value="cancel1" id="cancel1">Batal</button>
                <button type="button" class="btn btn-primary rounded-pill mt-3"  style="width:150px" name= "tambah1" value="tambah1" id="tambah1" >Tambah</button>
            </div>
        </form>
        <form class = "p-1 mt-2" id="tambah2_form" name="tambah2_form" method="post" style="display:none;">
            <input type=hidden name=st value=0>
            <div class="input-group mb-2 mt-3">
                <select class="form-select" aria-label="Default select example" name=kecamatan id='s1'>
                    <option value=''>--Kecamatan--</option> -->
                    <?Php
                        require "config.php";// connection to database 
                        $sql="SELECT * FROM `kecamatan` ORDER BY nama_kecamatan";
                        foreach ($dbo->query($sql) as $row) {
                        echo "<option value=$row[kode_kecamatan]>$row[nama_kecamatan]</option>";
                        }
                    ?>
                </select>
                <select class="form-select" name=desa aria-label="Default select example" id="s2">
                    <option value=''>--Desa/Kel--</option>
                </select>
            </div>
            <input style="margin-top:10px" class="form-control" type="text" name="NIK" id="NIK2" placeholder="NIK" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="text" name="nama_lengkap" id="nama_lengkap2" placeholder="Nama Lengkap" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="email" name="email" id="email2" placeholder="Email" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="password" name="password" id="password2" placeholder="Password" autocomplete="off">
            <div style="text-align:center">
                <button type="button"  class="btn btn-danger rounded-pill mt-3" style="width:150px" name= "cancel2" value="cancel2" id="cancel2">Batal</button>
                <button type="button"  class="btn btn-primary rounded-pill mt-3"  style="width:150px" name= "tambah2" value="tambah2" id="tambah2" >Tambah</button>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <!-- <footer id="footer">
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
                     <div class="col-lg-4 col-md-12 footer-links mt-3">
                        <h5>Menu Tersedia</h5>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Laporan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Formulir</a></li>
                        </ul>
                    </div>
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
    </footer> -->
    <script>
        $(document).ready(function() {
            $('#radiokecamatan').on('click', function() {
                $("#tambah1_form").show();
                $("#tambah2_form").hide();
            });
            $('#radiodesa').on('click', function() {
                $("#tambah2_form").show();
                $("#tambah1_form").hide();
            });
            $('#cancel1').on('click', function() {
                location.replace('daftar_pengguna.php');
            });
            $('#cancel2').on('click', function() {
                location.replace('daftar_pengguna.php');
            });
            $("#s1").change(function(){
                    var selectedCountry = $(this).children("option:selected").val();
                    $.ajax({
                        type: 'GET',
                        url: "datasignup.php?aksi=get_desa&id_kecamatan="+selectedCountry,
                        success: function(data) {
                            dataFull = JSON.parse(data)
                            $("#s2").html("<option value=''>--Desa/Kel--</option>")
                            Object.keys(dataFull).forEach(function(key){
                                $("#s2").append("<option value='"+dataFull[key]['kode_desa']+"'>"+dataFull[key]['nama_desa']+"</option>");
                            })
                        }
                    });
            });

            $("#tambah1").on('click', function(){
                $("#NIK1").removeClass("is-invalid")
                $("#nama_lengkap1").removeClass("is-invalid")
                $("#email1").removeClass("is-invalid")
                $("#password1").removeClass("is-invalid")
                $("#s4").removeClass("is-invalid")

                NIK1           = $("#NIK1").val()
                nama_lengkap1  = $("#nama_lengkap1").val()
                email1         = $("#email1").val()
                password1      = $("#password1").val()
                s4            = $("#s4 option:selected").val()
                errorTotal    = 0

                var form_data = new FormData();

                if(isNaN(parseInt(NIK1)) || NIK1.length!=16){errorTotal++;$("#NIK1").addClass("is-invalid")}
                if(nama_lengkap1==""){errorTotal++;$("#nama_lengkap1").addClass("is-invalid")}
                if(email1==""){errorTotal++;$("#email1").addClass("is-invalid")}
                if(password1==""){errorTotal++;$("#password1").addClass("is-invalid")}
                if(s4==""){errorTotal++;$("#s4").addClass("is-invalid")}
                if(errorTotal>0){return}

                form_data.append("action","tambah_adm_kecamatan");
                form_data.append("NIK1",NIK1);
                form_data.append("nama_lengkap1",nama_lengkap1);
                form_data.append("email1",email1);
                form_data.append("password1",password1);
                form_data.append("kecamatan1",s4);
                
                $.ajax({
                    url: 'datasignup.php',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'POST',
                    success: function(response){
                        alert("Akun Admin Kecamatan Berhasil Ditambahkan")
                    },
                    error: function(error){
                        console.log(error)
                    }
                });
            });

            $("#tambah2").on('click', function(){
                $("#NIK2").removeClass("is-invalid")
                $("#nama_lengkap2").removeClass("is-invalid")
                $("#email2").removeClass("is-invalid")
                $("#password2").removeClass("is-invalid")
                $("#s1").removeClass("is-invalid")
                $("#s2").removeClass("is-invalid")

                NIK2           = $("#NIK2").val()
                nama_lengkap2  = $("#nama_lengkap2").val()
                email2         = $("#email2").val()
                password2      = $("#password2").val()
                s1            = $("#s1 option:selected").val()
                s2            = $("#s2 option:selected").val()
                errorTotal    = 0

                var form_data = new FormData();

                if(isNaN(parseInt(NIK2)) || NIK2.length!=16){errorTotal++;$("#NIK2").addClass("is-invalid")}
                if(nama_lengkap2==""){errorTotal++;$("#nama_lengkap2").addClass("is-invalid")}
                if(email2==""){errorTotal++;$("#email2").addClass("is-invalid")}
                if(password2==""){errorTotal++;$("#password2").addClass("is-invalid")}
                if(s1==""){errorTotal++;$("#s1").addClass("is-invalid")}
                if(s2==""){errorTotal++;$("#s2").addClass("is-invalid")}
                if(errorTotal>0){return}

                form_data.append("action","tambah_adm_desa");
                form_data.append("NIK2",NIK2);
                form_data.append("nama_lengkap2",nama_lengkap2);
                form_data.append("email2",email2);
                form_data.append("password2",password2);
                form_data.append("kecamatan2",s1);
                form_data.append("desa2",s2);
                
                $.ajax({
                    url: 'datasignup.php',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'POST',
                    success: function(response){
                        alert("Akun Admin Desa Berhasil Ditambahkan")
                    },
                    error: function(error){
                        console.log(error)
                    }
                });
            });
        });
    </script>
</body>
</html>