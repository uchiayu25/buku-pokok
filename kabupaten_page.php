<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabupaten-Beranda</title>
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
                    <a class="nav-link" href="kabupaten_page.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lihat_laporan_kabupaten.php">Laporan</a>
                </li>
                <div class="dropdown">
                        <li class="nav-item">
                            <a class="nav-link">Pengguna</a>
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
    
    <!-- <div style="z-index:1"> -->
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
                        <select class="form-select changedata" aria-label="Default select example" id="kecamatan">
                            <option selected value="">Kecamatan</option>
                            <?Php
                                require "config.php";// connection to database 
                                $sql="SELECT * FROM `kecamatan` ORDER BY nama_kecamatan";
                                foreach ($dbo->query($sql) as $row) {
                                echo "<option value=$row[kode_kecamatan]>$row[nama_kecamatan]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                            <span class="input-group-text font-weight-bold" id="basic-addon1" style="background:transparent; border: none; color: white">Kelurahan/Desa</span>
                            <select class="form-select changedata" aria-label="Default select example" id="desa">
                                <option selected value="">Kelurahan/Desa</option>
                            </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                                <span class="input-group-text font-weight-bold" id="basic-addon1" style="background:transparent; border: none; color: white">Dusun</span>
                                <select class="form-select changedata" aria-label="Default select example" id="dusun">
                                    <option selected value="">Dusun</option>
                                </select>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
    
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
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </section>
    <!-- Menu -->
    <!-- <section class="fitur">
        <div class="container mt-lg-5">
            <h2>Menu</h2>
        </div>
        <div class="container_menu mt-5 mb-5">
            <div class="menu d-flex flex-column flex-md-row gap-3 gap-md-0 align-items-center align-items-md-stretch">
                <span class="border-three">
                    <div class="menu_box mt-2">
                        <div class="menu-detail">
                            <div class="menu_detail-ox">
                                <h4>Lihat Pengguna</h4>
                            </div>
                            <div class="menu_img-container mt-3">
                                <div class="menu_img-box">
                                    <img src="image\lihatpengguna.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </span>
                <span class="border-five mr-3">
                    <div class="menu_box mt-2">
                        <div class="menu-detail">
                            <div class="menu_detail-ox">
                                <h4>Lihat Laporan</h4>
                            </div>
                            <div class="menu_img-container mt-3">
                                <div class="menu_img-box">
                                    <img src="image\lihatlaporan.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
                <span class="border-four mr-3">
                    <div class="menu_box mt-2">
                        <div class="menu-detail">
                            <div class="menu_detail-ox">
                                <h4>Riwayat Pelaporan</h4>
                            </div>
                            <div class="menu_img-container mt-3">
                                <div class="menu_img-box">
                                    <img src="image\history.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </span>
            </div>
        </div>
    </section> -->
    <section class="nampilin" id="nampilin" style="z-index:-1">
        <form class="container-fluid tabel mt-lg-5">
            <div class="container in">
                <div class="form-row row-cols-2 align-items-center mt-3">
                    <div class="content">
                        <h3 class="ml-2">TABEL DATA KEMATIAN</h3>
                    </div>
                    <!-- <div>
                        <input type="text" class="col-sm-6 col-md-5 offset-md-2 col-lg-10 changedata" name="search" id="inputcari" placeholder="Cari">
                    </div> -->
                </div>
                <div class="form-row mt-lg-3">
                    <div class="ml-2 d-lg-inline-flex align-items-center">
                        <label>Rentang</label>
                        <div class="input-group date changedata" id="datepicker1">
                            <input type="date" class="form-control ml-4" id="dater">
                            <span class="input-group-append"></span>
                        </div>
                        <span class="ms-3">sampai</span>
                        <div class="input-group date changedata" id="datepicker1">
                            <input type="date" class="form-control ml-4" id="dates">
                            <span class="input-group-append"></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mr-2">
                    <button type="button" class="col-md-1" onclick="exportingData()">Export</button>
                </div>
                <table class="table mt-3 activemb-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col" id="datatampil">Nama Kecamatan</th>
                            <th scope="col">Laki-Laki</th>
                            <th scope="col">Perempuan</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody id="lapotabel">
                    </tbody>
                </table>
            </div>
        </form>
    </section>
    <div style="width:29.7cm; border: black 0.5px solid; display:none" id="exportData" >
        <div style="text-align:center">
            <h4><b>BUKU POKOK PEMAKAMAN</b></h4>
            <h4><b>LAPORAN AGREGAT</b></h4>
            <h4 id="tempatMakam" style="line-height:0px"></h4>
            <!-- <h4 id="alamatMakam" style="line-height:0px"></h4> -->
        </div>
        <table class="center" style="margin-top:40px; border: 1px solid black; border-collapse: collapse;">
            <thead>
                <th style="border: 1px solid black; border-collapse: collapse;">NO</th>
                <th style="border: 1px solid black; border-collapse: collapse; width: 500px" id="tampil">NAMA KECAMATAN</th>
                <th style="border: 1px solid black; border-collapse: collapse; width: 150px">LAKI - LAKI</th>
                <th style="border: 1px solid black; border-collapse: collapse; width: 150px">PEREMPUAN</th>
                <th style="border: 1px solid black; border-collapse: collapse; width: 150px">TOTAL</th>
            </thead>
            <tbody id="isiTabel">
            </tbody>
        </table>
        <div style="position:relative">
            <div style="position:absolute;right:30px">
                <p id="tmptgl_petugas">Badung,</p>
                <p style="line-height:0px">Petugas</p>
                <h4 style="margin-top:60px" id="tmptgl_nama">hshsh</h4>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <div class="mt-0">
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
<script>
    function subtractDays(numOfDays, date = new Date()) {
        date.setDate(date.getDate() - numOfDays);
        return date;
    }

    datafl = JSON.parse(localStorage.getItem('dataUser'))
    console.log(datafl)

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today2 = yyyy + '-' + mm + '-' +  dd;
    $("#dater, #dates").attr({'max':today2})

    $(".changedata").change(function(){
        datachange()
    })

    $(".changedata").keyup(function(e){
        datachange()
        if(e.keyCode == 8){datachange()}
    })

    if(datafl['role'] == "1"){
        $("#tmptgl_petugas").html(datafl['kabupaten']+", ")
    }else if(datafl['role'] == "2"){
        $("#tmptgl_petugas").html(datafl['nama_kecamatan']+", ")
    }else if(datafl['role'] == "3"){
        $("#tmptgl_petugas").html(datafl['nama_desa']+", ")
    }else{
        $("#tmptgl_petugas").html(datafl['nama_dusun']+", ")
    }
    $("#tmptgl_nama").html(datafl['nama_lengkap'])

    function exportingData() {
        var divContents = $("#exportData").html();
        var printWindow = window.open('', '', 'height=400,width=800');
        printWindow.document.write('<html><head></head><body >');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }

    function datachange(){
        kecamatan = $("#kecamatan").children("option:selected").val();
        desa      = $("#desa").children("option:selected").val();
        dusun     = $("#dusun").children("option:selected").val();
        awal      = $("#dater").val()
        akhir     = $("#dates").val()
        search    = $("#inputcari").val()
        console.log(desa)

        $("#tempatMakam").empty()
        $("#alamatMakam").html("ALAMAT: ")
        tampil = "nama_kecamatan"
        $("#datatampil").html('Nama Kecamatan')
        $("#tampil").html('NAMA KECAMATAN')
        // seedata = "display:block"
        $("#nampilin").show()
        if(kecamatan!=""){
            tampil = "nama_desa"
            $("#datatampil").html('Nama Kelurahan/Desa')
            $("#tempatMakam").empty()
            $("#tempatMakam").append(" "+$("#kecamatan").children("option:selected").html())
            $("#alamatMakam").append($("#kecamatan").children("option:selected").html())
            $("#tampil").html('NAMA KELURAHAN/DESA')
        }
        if(desa!=""){
            tampil = "nama_dusun"
            $("#datatampil").html('Nama Dusun')
            $("#tempatMakam").empty()
            $("#tempatMakam").append(" "+$("#desa").children("option:selected").html())
            $("#tempatMakam").append("; "+$("#kecamatan").children("option:selected").html())
            $("#alamatMakam").append($("#desa").children("option:selected").html())
            $("#tampil").html('NAMA DUSUN')
        }
        if(dusun!=""){
            $("#nampilin").hide()
        }

        $.ajax({
            type: 'GET',
            url: "datasignup.php?aksi=get_agrekabupaten&kecamatan="+kecamatan+"&desa="+desa+
                "&dusun="+dusun+"&awal="+awal+"&akhir="+akhir+"&search="+search,
            success: function(data) {
                dataFull = JSON.parse(data)
                count = 1
                laki = 0;
                perempuan = 0;
                total = 0;
                console.log(dataFull)
                $("#lapotabel").empty()
                $("#isiTabel").empty()
                Object.keys(dataFull).forEach(function(key){
                    $("#lapotabel").append("<tr>"+
                                            "<td scope='col'>"+count+"</td>"+
                                            "<td scope='col'>"+dataFull[key][tampil]+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['laki_laki']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['perempuan']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['total']+"</td></tr>");
                                $("#isiTabel").append("<tr>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+count+"</td>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; cell-padding:10px; cell-spacing:15px;'>"+dataFull[key][tampil]+"</td>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['laki_laki']+"</td>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['perempuan']+"</td>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['total']+"</td>"+
                                    "</tr>"
                                );
                    count++
                    laki+=parseInt(dataFull[key]['laki_laki'])
                    perempuan+=parseInt(dataFull[key]['perempuan'])
                    total+=parseInt(dataFull[key]['total'])
                })

                dienow = dataFull.filter((dataFull)=>dataFull.date_lapor==today2);
                
                var startDate = subtractDays(30, new Date(today2));
                var endDate = new Date(today2);

                diebulan = dataFull.filter((dataFull)=> new Date(dataFull.date_lapor) >= startDate && new Date(dataFull.date_lapor) <= endDate);

                $("#lapotabel").append("<tr>"+
                                "<td scope='col' colspan='2'>JUMLAH TOTAL</td>"+
                                "<td scope='col'>"+laki+"</td>"+
                                "<td scope='col'>"+perempuan+"</td>"+
                                "<td scope='col'>"+total+"</td></tr>");
                        $("#isiTabel").append("<tr>"+
                            "<th scope='col' colspan='2' style='border: 1px solid black; border-collapse: collapse; text-align:center'>JUMLAH TOTAL</th>"+
                            "<th scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+laki+"</th>"+
                            "<th scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+perempuan+"</th>"+
                            "<th scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+total+"</th>"+
                            "</tr>"
                        );
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

                localStorage.setItem("Dataagrekabupaten", JSON.stringify(dataFull));
            }
        });
        return
    }

    $("#kecamatan").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
        if(selectedCountry!=""){
            $.ajax({
                type: 'GET',
                url: "datasignup.php?aksi=get_desa&id_kecamatan="+selectedCountry,
                success: function(data) {
                    $("#desa").html("<option selected value=''>Kelurahan/Desa</option>")
                    $("#dusun").html("<option selected value=''>Dusun</option>")
                    dataFull = JSON.parse(data)
                    Object.keys(dataFull).forEach(function(key){
                        $("#desa").append("<option value='"+dataFull[key]['kode_desa']+"'>"+dataFull[key]['nama_desa']+"</option>");
                    })
                }
            });
        }else{
            $("#kecamatan").children("option:selected").val("");
            $("#desa").html("<option selected value=''>Kelurahan/Desa</option>")
            $("#dusun").html("<option selected value=''>Dusun</option>")
        }
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
                $("#dusun").html("<option selected value=''>Dusun</option>")
                dataFull = JSON.parse(data)
                Object.keys(dataFull).forEach(function(key){
                    $("#dusun").append("<option value='"+dataFull[key]['kode_dusun']+"'>"+dataFull[key]['nama_dusun']+"</option>");
                })
            }
        });
        $("#dusun").children("option:selected").val("");
        datachange()
    });

    $("#tmptgl_petugas").append(dd+"-"+mm+"-"+yyyy)

    $.ajax({
        type: 'GET',
        url: "datasignup.php?aksi=get_agrekabupaten2",
        success: function(data) {
            dataFull = JSON.parse(data)
            count = 1
            laki = 0;
            perempuan = 0;
            total = 0;
            $("#lapotabel").empty()
            $("#isiTabel").empty()
            Object.keys(dataFull).forEach(function(key){
                $("#lapotabel").append("<tr>"+
                                            "<td scope='col'>"+count+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['nama_kecamatan']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['laki_laki']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['perempuan']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['total']+"</td></tr>");
                                $("#isiTabel").append("<tr>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+count+"</td>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; cell-padding:10px; cell-spacing:15px;'>"+dataFull[key]['nama_kecamatan']+"</td>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['laki_laki']+"</td>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['perempuan']+"</td>"+
                                    "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['total']+"</td>"+
                                    "</tr>"
                                );
                count++
                laki+=parseInt(dataFull[key]['laki_laki'])
                perempuan+=parseInt(dataFull[key]['perempuan'])
                total+=parseInt(dataFull[key]['total'])
                })
                dienow = dataFull.filter((dataFull)=>dataFull.date_lapor==today2);
                var startDate = subtractDays(30, new Date(today2));
                var endDate = new Date(today2);

                diebulan = dataFull.filter((dataFull)=> new Date(dataFull.date_lapor) >= startDate && new Date(dataFull.date_lapor) <= endDate);

                $("#lapotabel").append("<tr>"+
                                "<td scope='col' colspan='2'>JUMLAH TOTAL</td>"+
                                "<td scope='col'>"+laki+"</td>"+
                                "<td scope='col'>"+perempuan+"</td>"+
                                "<td scope='col'>"+total+"</td></tr>");
                        $("#isiTabel").append("<tr>"+
                            "<th scope='col' colspan='2' style='border: 1px solid black; border-collapse: collapse; text-align:center'>JUMLAH TOTAL</th>"+
                            "<th scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+laki+"</th>"+
                            "<th scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+perempuan+"</th>"+
                            "<th scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+total+"</th>"+
                            "</tr>"
                        );
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

            localStorage.setItem("Dataagrekabupaten", JSON.stringify(dataFull));
        }
    });

    //scroll animation
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
</html>