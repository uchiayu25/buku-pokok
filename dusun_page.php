<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dusun-Beranda</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style2.css">
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
                <li class="nav-item active">
                    <a class="nav-link" href="dusun_page.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <div class="dropdown">
                        <li class="nav-item">
                            <a class="nav-link">Laporan</a>
                            <div class="dropdown-content">
                                <a href="Lihat_Laporan.php">Lihat Laporan</a>
                                <a href="laporan_baru_dusun.php">Laporan Baru</a>
                                <a href="lihat_laporan_ditolak.php">Laporan Ditolak</a>
                            </div>
                        </li>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="Dusun_Pelaporan.php">Formulir</a>
                </li>
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
    
    <!-- HERO -->
    <section id="hero" class="d-flex align-items-center">
        <img src="image\dashb.png" class="img-fluid" alt="">
    </section>
    <!-- Location -->
    <div class="container-fluid loc">
        <div class="row row-cols-3">
            <div class="col">
                <div class="input-group mb-2">
                    <span class="input-group-text font-weight-bold" id="basic-addon1" style="background:transparent; border: none; color: white">Kecamatan</span>
                    <select class="form-select" aria-label="Default select example" id="kecamatan" disabled></select>
                </div>
            </div>
            <div class="col">
                <div class="input-group mb-2">
                        <span class="input-group-text font-weight-bold" id="basic-addon1" style="background:transparent; border: none; color: white">Kelurahan/Desa</span>
                        <select class="form-select" aria-label="Default select example" id="desa" disabled></select>
                </div>
            </div>
            <div class="col">
                <div class="input-group mb-2">
                            <span class="input-group-text font-weight-bold" id="basic-addon1" style="background:transparent; border: none; color: white">Dusun</span>
                            <select class="form-select" aria-label="Default select example" id="dusun" disabled></select>
                 </div>
            </div>
        </div>
    </div>
    
    <!-- count -->
    <section class="count_total reveal" style="z-index:-1">
        <div class="container">
            <h2>Akumulasi Kematian</h2>
        </div>  
        <div class="container mt-5">
            <div class="count d-flex flex-column flex-md-row gap-3 gap-md-0 align-items-center align-items-md-stretch">
                <span class="border">
                    <div class="count_box mt-2">
                        <div class="count-detail">
                            <div class="count_img-container">
                                <div class="count_img-box">
                                    <img src="image\total_death.png" alt="">
                                </div>
                            </div>
                            <div class="card_detail-ox">
                                <span class="countering" id="totalsemua">Total Kematian</span>
                                <h4>Total Kematian</h4>
                            </div>
                        </div>
                    </div>
                </span>
                <span class="border">
                    <div class="count_box mt-2">
                        <div class="count-detail">
                            <div class="count_img-container">
                                <div class="count_img-box">
                                    <img src="image\man.png" alt="">
                                </div>
                            </div>
                            <div class="card_detail-ox">
                                <span class="countering" id="totallaki">Total Kematian</span>
                                <h4>Laki-Laki</h4>
                            </div>
                        </div>
                    </div>
                </span>
                <span class="border">
                    <div class="count_box mt-2">
                        <div class="count-detail">
                            <div class="count_img-container">
                                <div class="count_img-box">
                                    <img src="image\woman.png" alt="">
                                </div>
                            </div>
                            <div class="card_detail-ox">
                                <span class="countering" id="totalperempuan">Total Kematian</span>
                                <h4>Perempuan</h4>
                            </div>
                        </div>
                    </div>
                </span>
            </div>
        </div>
        <div class="container mt-5">
            <div class="count d-flex flex-column flex-md-row gap-3 gap-md-0 align-items-center align-items-md-stretch">
                <span class="border-two">
                    <div class="count_box mt-2">
                        <div class="count-detail">
                            <div class="count_img-container">
                                <div class="count_img-box">
                                    <img src="image\total_death.png" alt="">
                                </div>
                            </div>
                            <div class="count_detail-ox">
                                <span class="countering" id="totalharian">Total Kematian</span>
                                <h4>Harian</h4>
                            </div>
                        </div>
                    </div>
                </span>
                <span class="border-two">
                    <div class="count_box mt-2">
                        <div class="count-detail">
                            <div class="count_img-container">
                                <div class="count_img-box">
                                    <img src="image\total_death.png" alt="">
                                </div>
                            </div>
                            <div class="count_detail-ox">
                                <span class="countering" id="totalbulan">Total Kematian</span>
                                <h4>Bulanan</h4>
                            </div>
                            <div>
                                <!-- Tst -->
                            </div>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </section>
    <section class="nampilin" id="nampilin" style="display:none">
    <table class="table mt-3 activemb-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kecamatan</th>
                            <th scope="col">Laki-Laki</th>
                            <th scope="col">Perempuan</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody id="lapotabel">
                    </tbody>
                </table>
    </section>
    <!-- Menu -->
    <!-- <section class="fitur">
        <div class="container mt-lg-5">
            <h2>Menu</h2>
        </div>
        <div class="container_menu mt-5 mb-5">
            <div class="menu d-flex flex-column flex-md-row gap-3 gap-md-0 align-items-center align-items-md-stretch">
                <span class="border-three">
                    <div class="menu_box mt-2" onclick="location.href='Dusun_Pelaporan.php';">
                        <div class="menu-detail">
                            <div class="menu_detail-ox">
                                <h4>Buat Laporan</h4>
                            </div>
                            <div class="menu_img-container mt-3">
                                <div class="menu_img-box">
                                    <img src="image\buatlaporan.png" alt="">
                                </div>
                            </div>
                            <div class="menu_detail-ox">
                            </div>
                        </div>
                    </div>
                </span>
                <span class="border-four mr-3">
                        <div class="menu_box mt-2" onclick="location.href='Lihat_Laporan.php';">
                            <div class="menu-detail">
                                <div class="menu_detail-ox">
                                    <h4>Lihat Laporan</h4>
                                </div>
                                <div class="menu_img-container mt-3">
                                    <div class="menu_img-box">
                                        <img src="image\lihatlaporan.png" alt="">
                                    </div>
                                </div>
                                <div class="menu_detail-ox">
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </section> -->
    <!-- Footer -->
    <footer id="footer">
        <div class=" mt-lg-5">
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
                    <!-- <div class="col-lg-6 col-md-12 footer-links mt-3">
                        <h5>Media Sosial Kami</h5>
                        <p>Temukan kami dalam beberapa media sosial berikut ini.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<script>
    function subtractDays(numOfDays, date = new Date()) {
        date.setDate(date.getDate() - numOfDays);
        return date;
    }

    datafl = JSON.parse(localStorage.getItem('dataUser'))
    console.log(datafl)
    $("#kecamatan").append("<option selected='"+datafl['kode_kecamatan']+"'>"+datafl['nama_kecamatan']+"</option>");
    $("#desa").append("<option selected='"+datafl['kode_desa']+"'>"+datafl['nama_desa']+"</option>");
    $("#dusun").append("<option selected='"+datafl['kode_dusun']+"'>"+datafl['nama_dusun']+"</option>");
    
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today2 = yyyy + '-' + mm + '-' +  dd;

    $.ajax({
        type: 'GET',
        url: "datasignup.php?aksi=get_agredusun&id_dusun="+datafl['kode_dusun'],
        success: function(data) {
            dataFull = JSON.parse(data)
            count = 1
            laki = 0;
            perempuan = 0;
            total = 0;
            $("#lapotabel").empty()
            Object.keys(dataFull).forEach(function(key){
                $("#lapotabel").append("<tr>"+
                                            "<td scope='col'>"+count+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['nama_dusun']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['laki_laki']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['perempuan']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['total']+"</td></tr>");
                count++
                laki+=parseInt(dataFull[key]['laki_laki'])
                perempuan+=parseInt(dataFull[key]['perempuan'])
                total+=parseInt(dataFull[key]['total'])
                })

                dienow = dataFull.filter((dataFull)=>dataFull.date_lapor==today2);
                var startDate = subtractDays(30, new Date(today2));
                var endDate = new Date(today2);

                diebulan = dataFull.filter((dataFull)=> new Date(dataFull.date_lapor) >= startDate && new Date(dataFull.date_lapor) <= endDate);
                $("#totalsemua").html(total)
                $("#totallaki").html(laki);
                $("#totalperempuan").html(perempuan);

                jumlah_harian = 0;
                Object.keys(dienow).forEach(function(key){
                    jumlah_harian+=parseInt(dienow[key].total)
                })
                $("#totalharian").html(jumlah_harian)

                jumlah_bulan = 0;
                Object.keys(diebulan).forEach(function(key){
                    jumlah_bulan+=parseInt(diebulan[key].total)
                })
                $("#totalbulan").html(jumlah_bulan)

            localStorage.setItem("Dataagredusun", JSON.stringify(dataFull));
        }
    });

    function reveal() {
        var reveals = document.querySelectorAll(".reveal");
    

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
            } else {
            reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);

</script>