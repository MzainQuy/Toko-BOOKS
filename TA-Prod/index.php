<?php
    include "config/koneksi.php";
    include "library/controller.php";
    
    $tabel = 'tbl_user';
    @$username = $_POST['user'];
    @$password = $_POST['pass'];
	@$akses = $_POST['akses'];
    
    $go = new controller();

    if (isset($_POST['login'])) {
        $go->login($con, $tabel, $username, $password, $akses);
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!-- google-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <title>Login</title>
    
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #E1E5EA;
}
.title-header{
    position: absolute;
    top: 6%;
    left: 16%;
    text-align: center;
    font-family: 'Dela Gothic One', cursive;
}
.header-h1, .header-h2{
    color: #293B5F;
    padding: 6px;
}
hr{
	background-color: #fff;
	border-top: 5px dashed #0A1D37;
    margin-bottom: 20px;
}

form.form-box{
    margin-top: 55px;
}
input {
  display: block;
  margin: 20px auto 20px auto;
}
.text-center{
    color: #47597E;
}
button {
  display: block;
  margin: auto;
}

.form-select, .form-control{
    border-radius: 7px;
    }

label{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
</style>
</head>
<body>

    <div class="title-header">
        <h1 class="header-h1">SELAMAT DATANG DI TOKO BUKU KAMI</h1>
        <h2 class="header-h2">Silahkan login untuk masuk website kami</h2>
        <hr>
    </div>

	<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
            <form class="form-box border-3 shadow p-5 rounded" style="width: 450px;" method="post">
                <h1 class="text-center p-3" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Login</h1>

                <div class="form-floating mb-2">
                <input type="text" name="user" class="form-control" id="floatingUsername" required>
                <label for="floatingUsername">Username :</label>
                </div>
                <div class="form-floating mb-3">
                <input type="password" name="pass" class="form-control" id="floatingPassword" required>
                <label for="floatingPassword">Password :</label>
                </div>
				<select class="form-select mb-3" name="akses" required>
                    <option></option>
                    <option value="manager">Manager</option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
		        </select>
                <button type="submit" class="btn btn-primary" name="login" value="LOGIN" style="color: #DEEEEA;">LOGIN</button>
		    </form>
        
    </div>
</body>
</html>