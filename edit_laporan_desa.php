<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pelaporan(Dusun)</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Datepicker -->
    <script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
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
                            <a class="nav-link">Pengguna</a>
                            <div class="dropdown-content">
                                <a href="daftar_admin_dusun.php">Daftar Admin Dusun</a>
                                <a href="admin_dusun_baru.php">Admin Dusun Baru</a>
                            </div>
                        </li>
                </div>
                <div class="dropdown">
                        <li class="nav-item">
                        <a class="nav-link active">Laporan<span class="sr-only">(current)</span></a>
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
            <div class="form-group align-right">
                <div class="input-group col-md-2">
                    <input type="text"  class="form-control" id="thedate" disabled>
                    <span class="input-group-append"></span>
                </div>
            </div>
            <div class="logo text-center">
                <img src="image\formulir.png" class= "mt-lg-5 " alt="">
            </div>
            <div class="form-row mt-lg-5">
                <div class="form-group col-md-4">
                    <label for="dusun">Pertugas</label>
                    <input type="text" class="form-control" id="petugas" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="dusun">Dusun</label>
                    <input type="text" class="form-control" id="dusun" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="kelurahan">Kelurahan/Desa</label>
                    <input type="text" class="form-control" id="desa" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputNIKPelapor">No Kartu Keluarga</label>
                    <input type="text" class="form-control" id="inputKK" placeholder="Nomor Kartu Keluarga" disabled>
                </div>
                <div class="form-group col-6">
                    <label for="inputNIK">NIK</label>
                    <input type="text" class="form-control" id="inputNIK" placeholder="NIK" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="inputNama">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap" disabled>
            </div>
            <div class="form-group">
                <label for="inputAlamat">Alamat Lengkap</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat Lengkap" disabled>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputjenkel">Jenis Kelamin</label>
                    <select id="inputjenkel" class="form-control" disabled>
                        <option selected>Pilih  </option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="inputAnak">Anak ke-</label>
                    <input type="text" class="form-control" id="inputanak" placeholder="1,2,3,dan sebagainya" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputtempat">Tempat Meninggal</label>
                    <select id="inputtempat" class="form-control" disabled>
                        <option selected>Pilih  </option>
                        <option value="Rumah Sakit">Rumah Sakit</option>
                        <option value="Rumah">Rumah</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="date">Tanggal Meninggal</label>
                    <div class="input-group date" id="datepicker2">
                        <input type="date" class="form-control" id="datem" disabled>
                            <span class="input-group-append"></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Tanggal Pemakaman</label>
                    <div class="input-group date" id="datepicker3">
                        <input type="date" class="form-control" id="datep" disabled>
                            <span class="input-group-append"></span>
                    </div>
                </div>
                <div class="form-group col-4">
                    <label for="inputlainnya">Lainnya</label>
                    <input type="text" class="form-control" id="inputlainnya" placeholder="Silahkan ditulis" disabled>
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputAkta">Akta Kematian</label>
                    <div class="col-sm-10">
                        <div class="form-check" id="pilakta">
                            <label class="form-check-label isi col-1">
                                <input class="form-check-input radio-inline" type="radio" name="akta" id="akta1" value="1"disabled>
                                Ada</label>
                                <label class="form-check-label isi col-1">
                                    <input class="form-check-input radio-inline" type="radio" name="akta" id="akta2" value="0"disabled>
                                    Tidak</label>
                            <div class="form-check form-check-inline col-sm-6">
                                <input type="text" class="form-control" id="inputakta" placeholder="Nomer Akta" disabled>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="form-group">
                <label for="inputNIKPelapor">NIK Pelapor</label>
                <input type="text" class="form-control" id="inputNIKPelapor" placeholder="NIK Pelapor"disabled>
            </div>
            <div class="form-group">
                <label for="inputNamaPelapor">Nama Lengkap Pelapor</label>
                <input type="text" class="form-control" id="inputNamaPelapor" placeholder="Nama Lengkap Pelapor"disabled>
            </div>
            <div class="form-group">
                <label for="inputKeluarga">Nama Anggota Keluarga</label>
                <input type="text" class="form-control" id="inputKeluarga" placeholder="Nama Anggota Keluarga" disabled>
            </div>
            <div class="form-group">
                <label for="inputTelepon">Nomor Telepon</label>
                <input type="text" class="form-control" id="inputTelepon" placeholder="Nomor Telepon / HP / WA" disabled>
            </div>
            <div class="mt-lg-5 text-right">
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
    
<script type="text/javascript">
    $(document).ready(function() {
        datafl = JSON.parse(localStorage.getItem('DataLapdesa'))[<?= $_GET["key"]?>]
        console.log(datafl)
        $("#petugas").val(datafl['nama_lengkap_kepdusun'])
        $("#thedate").val(datafl['date_lapor']);
        $("#kecamatan").val(datafl['nama_kecamatan']);
        $("#desa").val(datafl['nama_desa']);
        $("#dusun").val(datafl['nama_dusun']);
        $("#inputKK").val(datafl['no_kk']);
        $("#inputanak").val(datafl['no_anak']);
        $("#inputNIK").val(datafl['NIK_m']);
        $("#inputNamaLengkap").val(datafl['nama_m']);
        $("#inputjenkel").val(datafl['jenis_kelamin']);
        if(datafl['tempat_m']=="Rumah" || datafl['tempat_m']=="Rumah Sakit"){
            $("#inputtempat").val(datafl['tempat_m']);
            $("#inputlainnya").val("");
        } else{
            $("#inputtempat").val("lainnya");
            $("#inputlainnya").val(datafl['tempat_m']);

        }
        $("#inputAlamat").val(datafl['alamat']);
        $("#datem").val(datafl['tanggal_m']);
        $("#datep").val(datafl['tanggal_p']);
        if(datafl['kode_akta']==0){
            $("#akta2").attr({'checked':true})
            $("#inputakta").val("");
        } else if(datafl['kode_akta']==1){
            $("#akta1").attr({'checked':true})
            $("#inputakta").removeAttr("disabled");
            $("#inputakta").val(datafl['no_akta']);
        }
        $("#inputNIKPelapor").val(datafl['NIK_p']);
        $("#inputNamaPelapor").val(datafl['nama_p']);
        $("#inputKeluarga").val(datafl['hub_p']);
        $("#inputTelepon").val(datafl['no_hp']);

        $('#cancel').on('click', function() {
            location.replace('lihat_laporan_desa.php');
        });
    });
</script>
</body>
</html>