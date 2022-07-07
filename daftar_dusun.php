<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lokasi</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="Desa_Page.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <div class="dropdown">
                        <li class="nav-item">
                        <a class="nav-link active">Dusun<span class="sr-only">(current)</span></a>
                            <div class="dropdown-content">
                                <a href="daftar_dusun.php">Daftar Dusun</a>
                                <a href="tambah_dusun.php">Tambah Dusun Baru</a>
                            </div>
                        </li>
                </div>
                <div class="dropdown">
                        <li class="nav-item">
                            <a class="nav-link">Pengguna</a>
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
    <section class="laporan container">
        <form class="container-laporan-buku container row">
        <div class="logo col-5">
                    <img src="image\lokasi.png" alt="">
        </div>
        <div class="col-7 content">
            <div class="form-row">
                <div class="form-group mt-lg-5" style="width: 500px;">
                    <input type="text" class="form-control changedata" id="inputcari" placeholder="Cari">
                    <span class="input-group-append"></span>
                </div>
                <div class="mt-lg-5">
                    <button type="button" class="btn btn-outline-primary ml-lg-5 col-10" id="tambah">Tambah Dusun</button>
                </div>
            </div>
        </div>
            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kelurahan/Desa</th>
                    <th scope="col">Dusun</th>
                    </tr>
                </thead>
                <tbody id="lapdusun">
                </tbody>
            </table>
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
<script>
    datafl = JSON.parse(localStorage.getItem('dataUser'))
    console.log(datafl)
    $(".changedata").change(function(){
        datachange()
    })

    $(".changedata").keyup(function(e){
        datachange()
        if(e.keyCode == 8){datachange()}
    })

    function datachange(){
        search    = $("#inputcari").val()

        $.ajax({
            type: 'GET',
            url: "datasignup.php?aksi=get_list_dusun2&desa="+datafl['kode_desa']+"&search="+search,
            success: function(data) {
                dataFull = JSON.parse(data)
                count = 1
                $("#lapdusun").empty()
                Object.keys(dataFull).forEach(function(key){
                    $("#lapdusun").append("<tr>"+
                                        "<td scope='col'>"+count+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_kecamatan']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_desa']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_dusun']+"</td></tr>");
                    count++
                })
                localStorage.setItem("DataDusun", JSON.stringify(dataFull));
            }
        });
    }

    $.ajax({
        type: 'GET',
        url: "datasignup.php?aksi=get_list_dusun&id_desa="+datafl['kode_desa'],
        success: function(data) {
            dataFull = JSON.parse(data)
            count = 1
            $("#lapdusun").empty()
            Object.keys(dataFull).forEach(function(key){
                $("#lapdusun").append("<tr>"+
                                        "<td scope='col'>"+count+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_kecamatan']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_desa']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_dusun']+"</td></tr>");
                count++
            })
            localStorage.setItem("DataDusun", JSON.stringify(dataFull));
        }
    });

    $('#tambah').on('click', function() {
            location.replace('tambah_dusun.php');
    });
</script>
</html>