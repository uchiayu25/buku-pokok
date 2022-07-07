<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="bootstrap/js/jquery-3.2.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="image\Disdukcapil Kabupaten Badung.png" alt="">
        </div>
        <div class="text-center mt-4 name">
           Pelaporan Buku Pokok Pemakaman
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <div style="text-align:center">
                <button class="btn btn-primary rounded-pill mt-3"  style="width:150px" >Login</button>
            </div> 
        </form>
        <div class="text-center fs-6">
            <a href="#">Lupa password?</a> or <a href="Signup.php">Buat Akun</a>
        </div>
        
    </div>
</body>
</html>