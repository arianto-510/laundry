<?php
include '../koneksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($conn, "INSERT INTO pelanggan VALUES(null, '$nama', '$hp', '$alamat')");

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: pelanggan.php");
    }
}


include './header.php';

?>

<div class="container">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-3 bg-white px-4 py-3 mx-auto my-3" style="border-radius: 5px;">
                <form method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary my-2" name="tambah">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>