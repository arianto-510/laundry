<?php
include '../koneksi.php';

if (isset($_POST['ganti'])) {
    $new_pass = md5($_POST['pass']);
    mysqli_query($conn, "UPDATE admin set pass = '$new_pass'");
    header("Location: ganti_pass.php?pesan=berhasil");
}

?>


<?php include './header.php'; ?>
<div class="container">
    <?php if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'berhasil') {
            echo "<div class='alert alert-success col-md-4 mx-auto mt-3'>Password berhasil diganti</div>";
        } else {
            echo "<div class='alert alert-danger col-md-4 mx-auto mt-3'>Password Gagal diganti</div>";
        }
    } ?>


    <div class="col-md-4 col-md-offset-4 mx-auto" style="background-color: #fff; border-radius: 5px;">
        <div class="panel-body me-4 ms-4">
            <br>
            <h5>Ganti Password</h5>
            <form method="post">
                <div class="form-group mt-2">
                    <label>Password Baru</label>
                    <input type="text" class="form-control" name="pass">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary my-2" name="ganti">Ganti Password</button>
                </div>
            </form>
            <br>
        </div>
    </div>

    <?php include 'footer.php'; ?>