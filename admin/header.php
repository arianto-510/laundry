<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body style="background-color: #f0f0f0;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Informasi Laundry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <img src="../icons/home.svg"><a class="nav-link" href="index.php">Home</a>
                    <img src="../icons/person.svg"><a class="nav-link" href="pelanggan.php">Pelanggan</a>
                    <img src="../icons/transaksi.svg"><a class="nav-link" href="transaksi.php">Transaksi</a>
                    <img src="../icons/book.svg"><a class="nav-link" href="#">Laporan</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pengaturan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ganti_pass.php">Ganti Password</a></li>
                            <li><a class="dropdown-item" href="#">Atur Harga</a></li>
                        </ul>
                    </li>
                    <img src="../icons/box-arrow-left.svg"><a class="nav-link" href="logout.php">Logout</a>

                </div>
            </div>
        </div>
    </nav>