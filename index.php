<?php
session_start();

if(isset($_SESSION['status']) == 'login'){
    header("Location: ./admin/index.php");
}

include './koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE user = '$username' AND pass = '$password'");

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header('Location: admin/');
    } else {
        header("Location: index.php?pesan=gagal");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Laundry</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body style="background-color: #f0f0f0;">
    <br><br><br>
    <center>
        <h3>Sistem Informasi Laundry</h3>
    </center>
    <br><br><br>
    <div class="container">
        <div class="col-md-4 col-md-offset-4 mx-auto">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Username & Password Salah</div>";
                } elseif ($_GET['pesan'] == 'logout') {
                    echo "<div class='alert alert-success'>Berhasil Logout</div>";
                } elseif ($_GET['pesan'] == 'belum_login') {
                    echo "<div class='alert alert-warning'>Anda Belum Login</div>";
                }
            }
            ?>
            <form method="post">
                <div class="panel" style="background-color: #fff; border-radius: 5px;">
                    <div class="panel-body me-4 ms-4">
                        <br>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary" name="login">Login</button>
                        </div>
                        <br>
                    </div>
            </form>
        </div>
    </div>

    <script src="./js/bootstrap.js"></script>
</body>

</html>