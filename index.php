<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelaporan Buku Pokok Pemakaman Disdukcapil Badung</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
    
    <div class="wrapper">
        <div class="logo">
            <img src="image\Disdukcapil Kabupaten Badung.png" alt="">
        </div>
        <div class="text-center mt-2 name">
           Pelaporan Buku Pokok Pemakaman
        </div>
        <form class = "p-1 mt-3" id="login_form" name="login_form" method="post">
            <input style="margin-top:10px" class="form-control" type="text" name="userName" id="userName" placeholder="Email atau NIK" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="password" name="pwd" id="pwd" placeholder="Password" autocomplete="off">
            <div style="text-align:center">
                <button class="btn btn-primary rounded-pill mt-3"  style="width:150px" name= "login" value="Login" id="butlogin" type="button">Login</button>
            </div>
            <div class="text-center fs-6 mt-3">
                <a id="ganti_pass" href="#">Lupa password?</a> or <a id="buat_akun" href="#">Buat Akun</a>
            </div>
        </form>
       
        <form class="p-3 mt-3" id="register_form" name=register_form method="post" style="display:none;">
            <input type=hidden name=st value=0>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name=kecamatan id='s1'>
                    <option value=''>--Kecamatan--</option>
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
                <select class="form-select" name=dusun aria-label="Default select example" id="s3">
                    <option value=''>--Dusun--</option>
                </select>
            </div>
            <input style="margin-top:10px" class="form-control" type="text" name="NIK" id="NIK" placeholder="NIK" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="email" name="email" id="email" placeholder="Email" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
            <div style="text-align:center">
                <button class="btn btn-danger rounded-pill mt-3" style="width:150px" name= "cancel" value="cancel" id="cancel">Batal</button>
                <button class="btn btn-primary rounded-pill mt-3" style="width:150px" name= "registrasi" value="registrasi" id="registrasi" type="button" >Registrasi</button>
            </div>
            <div class="text-center fs-6 mt-3">
                <a id="balik_login" href = "#">Sudah Punya Akun? Silahkan Login! </a>
            </div>
        </form>

        <form class = "p-1 mt-3" id="gantipass_form" name="gantipass_form" method="post" style="display:none;">
            <input style="margin-top:10px" class="form-control" type="text" name="name_user" id="name_user" placeholder="Masukan NIK yang terdaftar" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="password" name="newpwd" id="newpwd" placeholder="Masukan Password Baru" autocomplete="off">
            <div style="text-align:center">
                <button type="button" class="btn btn-primary rounded-pill mt-3"  style="width:250px" name= "ganti" value="ganti" id="butganti">Ganti Password</button>
                <button class="btn btn-danger rounded-pill mt-3" style="width:150px" name= "batalganti" value="batalganti" id="batalganti">Batal</button>
            </div>
        </form>

    </div>
    <script>
        $(document).ready(function() {
            $('#cancel').on('click', function() {
                $("#login_form").show();
                $("#register_form").hide();
            });
            $('#balik_login').on('click', function() {
                $("#login_form").show();
                $("#register_form").hide();
            });
            $('#buat_akun').on('click', function() {
                $("#register_form").show();
                $("#login_form").hide();
            });
            $('#ganti_pass').on('click', function() {
                $("#gantipass_form").show();
                $("#login_form").hide();
            });
            $('#batalganti').on('click', function() {
                $("#login_form").show();
                $("#gantipass_form").hide();
            });
            $("#registrasi").on('click', function(){
                $("#NIK").removeClass("is-invalid")
                $("#nama_lengkap").removeClass("is-invalid")
                $("#email").removeClass("is-invalid")
                $("#password").removeClass("is-invalid")
                $("#s1").removeClass("is-invalid")
                $("#s2").removeClass("is-invalid")
                $("#s3").removeClass("is-invalid")

                NIK           = $("#NIK").val()
                nama_lengkap  = $("#nama_lengkap").val()
                password      = $("#password").val()
                email         = $("#email").val()
                s1            = $("#s1 option:selected").val()
                s2            = $("#s2 option:selected").val()
                s3            = $("#s3 option:selected").val()
                errorTotal    = 0

                var form_data = new FormData();
                

                if(isNaN(parseInt(NIK)) || NIK.length!=16){errorTotal++;$("#NIK").addClass("is-invalid")}
                if(nama_lengkap==""){errorTotal++;$("#nama_lengkap").addClass("is-invalid")}
                if(email==""){errorTotal++;$("#email").addClass("is-invalid")}
                if(password==""){errorTotal++;$("#password").addClass("is-invalid")}
                if(s1==""){errorTotal++;$("#s1").addClass("is-invalid")}
                if(s2==""){errorTotal++;$("#s2").addClass("is-invalid")}
                if(s3==""){errorTotal++;$("#s3").addClass("is-invalid")}
                if(errorTotal>0){return}

                form_data.append("action","signup_user");
                form_data.append("NIK",NIK);
                form_data.append("nama_lengkap",nama_lengkap);
                form_data.append("email",email);
                form_data.append("password",password);
                form_data.append("kecamatan",s1);
                form_data.append("desa",s2);
                form_data.append("dusun",s3);
                $.ajax({
                    url: 'datasignup.php',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'POST',
                    success: function(response){
                        alert("Mohon menunggu validasi 1x24 jam. Apabila belum divalidasi, harap menghubungi kepala desa setempat")
                        $("#login_form").show();
                        $("#register_form").hide();
                    }
                });
            });

            $('#butlogin').on('click', function() {
                $("#userName").removeClass("is-invalid")
                $("#pwd").removeClass("is-invalid")

                user = $('#userName').val();
                pwd = $('#pwd').val();
                errorTotal    = 0

                var form_data = new FormData();

                if(user==""){errorTotal++;$("#userName").addClass("is-invalid")}
                if(pwd==""){errorTotal++;$("#pwd").addClass("is-invalid")}
                if(errorTotal>0){return}
                
                form_data.append("action","signin_user");
                form_data.append("user",user);
                form_data.append("pwd",pwd);
                $.ajax({
                    url: 'datasignup.php',
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: "POST",
                    data: form_data,
                    cache: false,
                    success: function(dataResult){
                        if(dataResult == 1){
                            alert("Password Salah")
                        }else if(dataResult == 2){
                            alert("Akun Tidak Ditemukan")
                        }else{
                            localStorage.setItem("dataUser", JSON.stringify(dataResult));
                            data = JSON.parse(localStorage.getItem('dataUser'))
                            console.log(data)
                            if(data['role'] == 4){
                                location.replace('dusun_page.php');
                            }
                            else if(data['role'] == 3){
                                location.replace('Desa_Page.php');
                            }
                            else if(data['role'] == 2){
                                location.replace('kecamatan_page.php');
                            }
                            else if(data['role'] == 1){
                                location.replace('kabupaten_page.php');
                            }
                        }
                    }
                });
            });
            
            $('#butganti').on('click', function() {
                $("#name_user").removeClass("is-invalid")
                $("#newpwd").removeClass("is-invalid")

                name_user = $('#name_user').val();
                newpwd = $('#newpwd').val();
                errorTotal    = 0

                var form_data = new FormData();

                if(isNaN(parseInt(name_user)) || name_user.length!=16){errorTotal++;$("#name_user").addClass("is-invalid")}
                if(newpwd==""){errorTotal++;$("#newpwd").addClass("is-invalid")}
                if(errorTotal>0){return}
                
                form_data.append("action","gantipass");
                form_data.append("name_user",name_user);
                form_data.append("newpwd",newpwd);
                $.ajax({
                    url: 'datasignup.php',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'POST',
                    success: function(dataResult){
                        if(dataResult == 2){
                            alert("Akun tidak ditemukan")
                        }else{
                            alert("Password berhasil diganti. Mohon melakukan login kembali")
                            $("#login_form").show();
                            $("#gantipass_form").hide();
                        }
                    }
                });
            });

            $("#s1").change(function(){
                var selectedCountry = $(this).children("option:selected").val();
                $.ajax({
                    type: 'GET',
                    url: "datasignup.php?aksi=get_desa&id_kecamatan="+selectedCountry,
                    success: function(data) {
                        $("#s2").html("<option value=''>--Desa/Kel--</option>")
                        $("#s3").html("<option value=''>--Dusun--</option>")
                        dataFull = JSON.parse(data)
                        Object.keys(dataFull).forEach(function(key){
                            $("#s2").append("<option value='"+dataFull[key]['kode_desa']+"'>"+dataFull[key]['nama_desa']+"</option>");
                        })
                    }
                });
            });

            $("#s2").change(function(){
                var selectedCountry = $(this).children("option:selected").val();
                $.ajax({
                    type: 'GET',
                    url: "datasignup.php?aksi=get_dusun&id_desa="+selectedCountry,
                    success: function(data) {
                        $("#s3").html("<option value=''>--Dusun--</option>")
                        dataFull = JSON.parse(data)
                        Object.keys(dataFull).forEach(function(key){
                            $("#s3").append("<option value='"+dataFull[key]['kode_dusun']+"'>"+dataFull[key]['nama_dusun']+"</option>");
                        })
                        // $("#s3").append("<option value='NewId'>Dusun Lainnya</option>")
                    }
                });
            });            
        });
    </script>
    <div id="txtHint2"></div>
</body>
</html>