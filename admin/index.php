<?php
session_start();
if ($_SESSION['status'] != 'login') {
    header("Location: ../index.php?pesan=belum_login");
}

?>
<?php include './header.php'; ?>
<div class="container">
    <div class="alert alert-primary my-3">
        <h4 class="text-center">Selamat Datang <?= $_SESSION['username']; ?></h4>
    </div>

</div>

<?php include 'footer.php'; ?>