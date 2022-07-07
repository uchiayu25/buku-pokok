<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper signup">
        <div class="logo">
            <img src="image\Disdukcapil Kabupaten Badung.png" alt="">
        </div>
        <div class="text-center mt-4 name">
           Pendaftaran Akun Pengguna Baru
        </div>
        <form class="p-3 mt-3">
            <div class="input-group mb-3">
                <select id="dataKecamatan" class="form-select form-field" aria-label="Default select example">
                    <option selected>Kecamatan</option>
                    <option value="1">Abiansemal</option>
                    <option value="2">Kuta</option>
                    <option value="2">Kuta Utara</option>
                    <option value="2">Kuta Selatan</option>
                    <option value="3">Mengwi</option>
                    <option value="2">Petang</option>
                </select>
                <select class="form-select form-field" aria-label="Default select example">
                    <option selected>Kel/Desa</option>
                </select>
                <select class="form-select form-field" aria-label="Default select example">
                    <option selected>Dusun</option>
                    
                </select>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="NIK" id="userName" placeholder="NIK">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Name" id="userName" placeholder="Nama Lengkap">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <div style="text-align:center">
                <button class="btn btn-danger rounded-pill" style="width:150px">Cancel</button>
                <button class="btn btn-primary rounded-pill"  style="width:150px" >Registrasi</button>
            </div>
        </form>
        <div class="text-center fs-6">
            <a href="Login.php">Sudah Punya Akun? Silahkan Login! </a>
        </div>
        
    </div>
</body>
</html>