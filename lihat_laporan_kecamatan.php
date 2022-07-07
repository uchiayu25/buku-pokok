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
                    <a class="nav-link" href="kecamatan_page.php">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="lihat_laporan_kecamatan.php">Laporan<span class="sr-only">(current)</span></a>
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
    <section class="laporan container">
        <form class="container-laporan-buku container row">
        <div class="logo col-5">
                    <img src="image\laporan.png" alt="">
        </div>
        <div class="col-7 content">
            <div class="form-row mt-lg-5">
                
                <div class="form-group">
                    <label for="dusun">Dusun</label>
                    <select class="form-select col-10 changedata" aria-label="Default select example" id="dusun">
                        <option value=''>Dusun</option>
                    </select>
                </div>
                <div class="form-group ml-md-4">
                    <label for="desa">Kelurahan/Desa</label>
                    <select class="form-select col-10 changedata" aria-label="Default select example" id="desa">
                        <option value=''>Kelurahan/Desa</option>
                    </select>
                </div>
                <div class="form-group ml-md-4">
                    <label for="kecamatan">Kecamatan</label>
                    <select class="form-select changedata" aria-label="Default select example" id="kecamatan" disabled></select>
                </div>
            </div>
            <div class="mt-3 content" >
                <div class="form-group row ">
                            <label for="pilihakta" class="col-3">Akta Kematian</label>
                            <select id="pilihakta" class="col-5 changedata">
                                <option value="" selected>Semua</option>
                                <option value="1">Ada</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                </div>
                <div class="form-row mt-lg-3">
                    <div class=" d-lg-inline-flex align-items-center">
                        <label>Awal</label>
                        <div class="input-group date changedata" id="datepicker1">
                            <input type="date" class="form-control ml-4" id="dater">
                            <span class="input-group-append"></span>
                        </div>
                        <span class="ms-3">Sampai</span>
                        <div class="input-group date changedata" id="datepicker1">
                            <input type="date" class="form-control ml-4" id="dates">
                            <span class="input-group-append"></span>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group mt-lg-5" style="width: 500px;">
                        <input type="text" class="form-control changedata" id="inputcari" placeholder="Cari">
                        <span class="input-group-append"></span>
                    </div>
                    <div class="mt-lg-5">
                        <button type="button" class="btn btn-outline-primary ml-lg-5 justify-content-end" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Export</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mt-3">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Dusun</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Tempat, Tanggal Meninggal</th>
                        <th scope="col">Tanggal Pemakaman</th>
                        <th scope="col">NIK Pelapor</th>
                        <th scope="col">Nama Pelapor</th>
                        <th scope="col">Nama Keluarga</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="lapotabel">
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
    <div style="width:29.7cm; border: black 0.5px solid; display:none" id="exportData" >
        <div style="text-align:center">
            <h4><b>BUKU POKOK PEMAKAMAN</b></h4>
            <h4 id="tempatMakam" style="line-height:0px"></h4>
            <!-- <h4 id="alamatMakam" style="line-height:0px"></h4> -->
        </div>
        <table style="margin-top:20px; border: 1px solid black; border-collapse: collapse;">
            <thead>
                <th style="border: 1px solid black; border-collapse: collapse;">NO</th>
                <th style="border: 1px solid black; border-collapse: collapse;">NIK</th>
                <th style="border: 1px solid black; border-collapse: collapse;">NAMA</th>
                <th style="border: 1px solid black; border-collapse: collapse;">TEMPAT, TANGGAL MENINGGAL</th>
                <th style="border: 1px solid black; border-collapse: collapse;">TANGGAL PEMAKAMAM</th>
                <th style="border: 1px solid black; border-collapse: collapse;">NAMA PELAPOR</th>
                <th style="border: 1px solid black; border-collapse: collapse;">NIK PELAPOR</th>
                <th style="border: 1px solid black; border-collapse: collapse;">NAMA KELUARGA YANG DAPAT DIHUBUNGI</th>
                <th style="border: 1px solid black; border-collapse: collapse;">ALAMAT</th>
            </thead>
            <tbody id="isiTabel">
            </tbody>
        </table>
        <div style="position:relative">
            <div style="position:absolute;left:30px">
                <p>Mengetahui</p>
                <p style="line-height:0px" id="daerah_camat"></p>
                <p style="margin-top:60px" id="nama_camat">hshsh</p>
                <p style="line-height:0px" id="nip_camat"></p>
            </div>
            <div style="position:absolute;right:30px">
                <p id="tmptgl_petugas">Badung,</p>
                <p style="line-height:0px">Petugas</p>
                <p style="margin-top:60px" id="tmptgl_nama">hshsh</p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nama Camat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" id="nameCamat" placeholder="Nama Camat">
                <input type="text" class="form-control" id="NIPCamat" style="margin-top:10px" placeholder="NIP Camat">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="exportingData()">Save changes</button>
            </div>
            </div>
        </div>
    </div>
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
        $("#daerah_camat").html("Camat "+datafl['nama_kecamatan'].replace("Kecamatan", ""))
    }else if(datafl['role'] == "3"){
        $("#tmptgl_petugas").html(datafl['nama_desa']+", ")
    }else{
        $("#tmptgl_petugas").html(datafl['nama_dusun']+", ")
    }
    $("#tmptgl_nama").html(datafl['nama_lengkap'])

    function exportingData() {
        $("#nama_camat").html($("#nameCamat").val())
        $("#nip_camat").html("NIP. "+$("#NIPCamat").val())
        var divContents = $("#exportData").html();
        var printWindow = window.open('', '', 'height=400,width=800');
        printWindow.document.write('<html><head></head><body >');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }

    function datachange(){
        kecamatan = datafl['kode_kecamatan']
        desa      = $("#desa").children("option:selected").val();
        dusun     = $("#dusun").children("option:selected").val();
        pilihakta = $("#pilihakta").children("option:selected").val();
        awal      = $("#dater").val()
        akhir     = $("#dates").val()
        search    = $("#inputcari").val()

        $("#tempatMakam").empty()
        $("#alamatMakam").html("ALAMAT: ")
        if(kecamatan!=""){
            $("#tempatMakam").empty()
            $("#tempatMakam").append(" "+$("#kecamatan").children("option:selected").html())
            $("#alamatMakam").append($("#kecamatan").children("option:selected").html())
        }

        if(desa!=""){
            $("#tempatMakam").empty()
            $("#tempatMakam").append(" "+$("#desa").children("option:selected").html())
            $("#tempatMakam").append("; "+$("#kecamatan").children("option:selected").html())
            $("#alamatMakam").append($("#desa").children("option:selected").html())
        }

        if(dusun!=""){
            $("#tempatMakam").empty()
            $("#tempatMakam").append(" "+$("#dusun").children("option:selected").html())
            $("#tempatMakam").append("; "+$("#desa").children("option:selected").html())
            $("#tempatMakam").append("; "+$("#kecamatan").children("option:selected").html())
            $("#alamatMakam").append($("#dusun").children("option:selected").html())
        }

        $.ajax({
            type: 'GET',
            url: "datasignup.php?aksi=get_lapokecamatan2&kecamatan="+kecamatan+"&desa="+desa+
                "&dusun="+dusun+"&pilihakta="+pilihakta+"&awal="+awal+"&akhir="+akhir+"&search="+search,
            success: function(data) {
                dataFull = JSON.parse(data)
                count = 1
                $("#lapotabel").empty()
                $("#isiTabel").empty()
                Object.keys(dataFull).forEach(function(key){
                    $("#lapotabel").append("<tr>"+
                                            "<td scope='col'>"+count+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['nama_dusun']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['NIK_m']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['nama_m']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['tanggal_m']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['tanggal_p']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['NIK_p']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['nama_p']+"</td>"+
                                            "<td scope='col'>"+dataFull[key]['hub_p']+"</td>"+
                                            "<td class='d-inline-flex gap-3 align-items-center justify-content-center'><button type='button' class='btn btn-success' onclick='detail("+key+")'><i class='fas fa-edit'></i>Detail</button></td></tr>");
                        $("#isiTabel").append("<tr>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+count+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['NIK_m']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['nama_m']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['tempat_m']+', '+dataFull[key]['tanggal_m']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['tanggal_p']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['nama_p']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['NIK_p']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['hub_p']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['alamat']+"</td>"+
                        "</tr>"
                    )
                    count++
                })
                localStorage.setItem("DataLapkecamatan", JSON.stringify(dataFull));
            }
        });
    }

    $("#kecamatan").append("<option selected='"+datafl['kode_kecamatan']+"'>"+datafl['nama_kecamatan']+"</option>");
    $.ajax({
        type: 'GET',
        url: "datasignup.php?aksi=get_desa&id_kecamatan="+datafl['kode_kecamatan'],
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

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today2 = yyyy + '-' + mm + '-' +  dd;
    $("#tmptgl_petugas").append(dd+"-"+mm+"-"+yyyy)
    $("#dater, #dates").attr({'max':today2})

    function detail(key){
        location.replace("detail_laporan_kecamatan.php?key="+key)
    }

    $("#tempatMakam").empty()
    $("#tempatMakam").append(" "+$("#kecamatan").children("option:selected").html())
    $.ajax({
        type: 'GET',
        url: "datasignup.php?aksi=get_lapokecamatan&id_kecamatan="+datafl['kode_kecamatan'],
        success: function(data) {
            dataFull = JSON.parse(data)
            count = 1
            $("#lapotabel").empty()
            $("#isiTabel").empty()
            Object.keys(dataFull).forEach(function(key){
                $("#lapotabel").append("<tr>"+
                                        "<td scope='col'>"+count+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_dusun']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['NIK_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['tanggal_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['tanggal_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['NIK_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['hub_p']+"</td>"+
                                        "<td class='d-inline-flex gap-3 align-items-center justify-content-center'><button type='button' class='btn btn-success' onclick='detail("+key+")'><i class='fas fa-edit'></i>Detail</button></td></tr>");
                        $("#isiTabel").append("<tr>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+count+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['NIK_m']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['nama_m']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['tempat_m']+', '+dataFull[key]['tanggal_m']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['tanggal_p']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['nama_p']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['NIK_p']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['hub_p']+"</td>"+
                            "<td scope='col' style='border: 1px solid black; border-collapse: collapse; text-align:center'>"+dataFull[key]['alamat']+"</td>"+
                        "</tr>"
                )
                count++
            })
            localStorage.setItem("DataLapkecamatan", JSON.stringify(dataFull));
        }
    });
</script>
