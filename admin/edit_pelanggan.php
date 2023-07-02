<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pelanggan WHERE id = '$id'");

$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];


$data = mysqli_query($conn, "UPDATE pelanggan set nama = '$nama', hp = '$hp', alamat = '$alamat' WHERE id = '$id'");

$p = mysqli_fetch_assoc($query);

include 'header.php';
?>
<div class="container">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-3 bg-white px-4 py-3 mx-auto my-3" style="border-radius: 5px;">
                <form method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $p['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="hp" class="form-control" value="<?= $p['hp']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $p['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary my-2" name="edit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>