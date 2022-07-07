<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan(Dusun)</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style5.css">
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
    <section class="laporan container">
        <form class="container-laporan-buku container row">
        <div class="logo col-5">
                    <img src="image\daftarpengguna.png" alt="">
        </div>
        <div class="col-7 content">
            <div class="form-row mt-lg-5">
                <div class="form-group">
                    <label for="dusun">Dusun</label>
                    <select class="form-select col-15 changedata" aria-label="Default select example" id="dusun">
                        <option value=''>Dusun</option>
                    </select>
                </div>
                <div class="form-group ml-md-4">
                    <label for="desa">Kelurahan/Desa</label>
                    <select class="form-select col-15 changedata" aria-label="Default select example" id="desa">
                        <option value=''>Kelurahan/Desa</option>
                    </select>
                </div>
                <div class="form-group ml-md-4">
                    <label for="kecamatan">Kecamatan</label>
                    <select class="form-select changedata" aria-label="Default select example" name=kecamatan id='kecamatan'>
                    <option value=''>--Kecamatan--</option>
                        <?Php
                            require "config.php";// connection to database 
                            $sql="SELECT * FROM `kecamatan` ORDER BY nama_kecamatan";
                            foreach ($dbo->query($sql) as $row) {
                            echo "<option value=$row[kode_kecamatan]>$row[nama_kecamatan]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group mt-lg-1" style="width: 500px;">
                        <input type="text" class="form-control changedata" id="inputcari" placeholder="Cari">
                        <span class="input-group-append"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mt-3">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="laptabelpeng">
                </tbody>
            </table>
        </div>
            <!-- <nav aria-label="pagination">
                <ul class="pagination justify-content-end mt-lg-5">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                    <li class="page-item"><a class="page-link" href="#">1 <span class=" sr-only">(current)</span></a></li>
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> -->
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
    
</body>
</html>
<script>
    datafl = JSON.parse(localStorage.getItem('dataUser'))
    console.log(datafl)
    $("#kecamatan").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
        $.ajax({
            type: 'GET',
            url: "datasignup.php?aksi=get_desa&id_kecamatan="+selectedCountry,
            success: function(data) {
                $("#desa").html("<option value=''>Kelurahan/Desa</option>")
                $("#dusun").html("<option value=''>Dusun</option>")
                dataFull = JSON.parse(data)
                Object.keys(dataFull).forEach(function(key){
                    $("#desa").append("<option value='"+dataFull[key]['kode_desa']+"'>"+dataFull[key]['nama_desa']+"</option>");
                })
            }
        });
        $("#desa").children("option:selected").val("");
        $("#dusun").children("option:selected").val("");
        datachange()
    });

    $("#desa").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
        $.ajax({
            type: 'GET',
            url: "datasignup.php?aksi=get_dusun&id_desa="+selectedCountry,
            success: function(data) {
                $("#dusun").html("<option value=''>Dusun</option>")
                dataFull = JSON.parse(data)
                Object.keys(dataFull).forEach(function(key){
                    $("#dusun").append("<option value='"+dataFull[key]['kode_dusun']+"'>"+dataFull[key]['nama_dusun']+"</option>");
                })
            }
        });
        $("#dusun").children("option:selected").val("");
        datachange()
    });

    $.ajax({
        type: 'GET',
        url: "datasignup.php?aksi=get_pengkab",
        success: function(data) {
            dataFull = JSON.parse(data)
            count = 1
            $("#laptabelpeng").empty()
            Object.keys(dataFull).forEach(function(key){
                if(dataFull[key]['status']==2){
                    $("#laptabelpeng").append("<tr>"+
                                        "<td scope='col' style='color:red;'>"+count+"</td>"+
                                        "<td scope='col' style='color:red;'>"+dataFull[key]['NIK']+"</td>"+
                                        "<td scope='col' style='color:red;'>"+dataFull[key]['nama_lengkap']+"</td>"+
                                        "<td scope='col' style='color:red;'>"+dataFull[key]['Email']+"</td>"+
                                        "<td scope='col' style='color:red;'>"+dataFull[key]['status_akun']+"</td>"+
                                        "<td class='d-inline-flex gap-3 align-items-center justify-content-center'><button type='button' class='btn btn-success' onclick='edit("+key+")'><i class='fas fa-edit'></i>Edit</button></tr>");     
                } if(dataFull[key]['status']==1){
                    $("#laptabelpeng").append("<tr>"+
                                        "<td scope='col'>"+count+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['NIK']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_lengkap']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['Email']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['status_akun']+"</td>"+
                                        "<td class='d-inline-flex gap-3 align-items-center justify-content-center'><button type='button' class='btn btn-success' onclick='edit("+key+")'><i class='fas fa-edit'></i>Edit</button></tr>");
                }
                count++
            })
            localStorage.setItem("Datapengguna", JSON.stringify(dataFull));
        }
    });

    function edit(key){
        location.replace("Edit_Pengguna.php?key="+key)
    }

    $(".changedata").change(function(){
        datachange()
    })

    $(".changedata").keyup(function(e){
        datachange()
        if(e.keyCode == 8){datachange()}
    })

    function datachange(){
        kecamatan = $("#kecamatan").children("option:selected").val();
        desa      = $("#desa").children("option:selected").val();
        dusun     = $("#dusun").children("option:selected").val();
        search    = $("#inputcari").val()

        $.ajax({
            type: 'GET',
            url: "datasignup.php?aksi=get_pengkab2&kecamatan="+kecamatan+"&desa="+desa+
                "&dusun="+dusun+"&search="+search,
            success: function(data) {
                dataFull = JSON.parse(data)
                count = 1
                $("#laptabelpeng").empty()
                Object.keys(dataFull).forEach(function(key){
                    if(dataFull[key]['status']==2){
                    $("#laptabelpeng").append("<tr>"+
                                        "<td scope='col' style='color:red;'>"+count+"</td>"+
                                        "<td scope='col' style='color:red;'>"+dataFull[key]['NIK']+"</td>"+
                                        "<td scope='col' style='color:red;'>"+dataFull[key]['nama_lengkap']+"</td>"+
                                        "<td scope='col' style='color:red;'>"+dataFull[key]['Email']+"</td>"+
                                        "<td scope='col' style='color:red;'>"+dataFull[key]['status_akun']+"</td>"+
                                        "<td class='d-inline-flex gap-3 align-items-center justify-content-center'><button type='button' class='btn btn-success' onclick='edit("+key+")'><i class='fas fa-edit'></i>Edit</button></tr>");     
                } if(dataFull[key]['status']==1){
                    $("#laptabelpeng").append("<tr>"+
                                        "<td scope='col'>"+count+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['NIK']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_lengkap']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['Email']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['status_akun']+"</td>"+
                                        "<td class='d-inline-flex gap-3 align-items-center justify-content-center'><button type='button' class='btn btn-success' onclick='edit("+key+")'><i class='fas fa-edit'></i>Edit</button></tr>");
                }
                    count++
                })
                localStorage.setItem("Datapengguna", JSON.stringify(dataFull));
            }
        });
    }

</script>