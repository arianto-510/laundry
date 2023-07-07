<?php
include '../koneksi.php';

$pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");

$harga = mysqli_query($conn, "SELECT harga from harga");
$h = mysqli_fetch_assoc($harga);


if (isset($_POST['submit'])) {
    $tgl = date('Y-m-d');
    $id = $_POST['nama'];
    $tgl_selesai = $_POST['tgl_selesai'];
    $berat = (int)$_POST['berat'];
    $hr = (int)$h['harga'];
    $harga = $hr * $berat;
    $status = 1;


    mysqli_query($conn, "INSERT INTO transaksi VALUES(null, '$tgl', '$id', '$harga', '$berat', '$tgl_selesai', '$status')");


    if (mysqli_affected_rows($conn) > 0) {
        header("Location: transaksi.php");
    }
}



include './header.php';
?>

<div class="container">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-10 col-md-offset-3 bg-white px-4 py-3 mx-auto my-3" style="border-radius: 8px;">
                <h5>Tambah Transaksi</h5>

                <form method="post">
                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <select type="text" class="form-select" name="nama">
                            <option value="" hidden selected> -- Pilih -- </option>
                            <?php while ($p = mysqli_fetch_assoc($pelanggan)) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="berat" Berat>Berat</label>
                        <input type="number" class="form-control" name="berat">
                    </div>
                    <div class="form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai">
                    </div>
                    <br>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Jenis Pakaian</th>
                            <th width="20%">Jumlah</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="jenis[]">
                            </td>
                            <td><input type="number" name="jumlah[]" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="jenis[]">
                            </td>
                            <td><input type="number" name="jumlah[]" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="jenis[]">
                            </td>
                            <td><input type="number" name="jumlah[]" class="form-control"></td>
                        </tr>
                    </table>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
include './footer.php';
?>