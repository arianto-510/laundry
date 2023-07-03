<?php
include '../koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM harga");

$h = mysqli_fetch_assoc($query);

include './header.php';

?>

<div class="col-md-4 col-md-offset-4 mx-auto" style="background-color: #fff; border-radius: 5px;">
    <div class="panel-body me-4 ms-4">
        <br>
        <h5>Atur Harga Laundry Per Kilo</h5>
        <form method="post">
            <div class="form-group mt-2">
                <label>Atur Harga</label>
                <input type="number" class="form-control" name="harga" value="<?= $h['harga']; ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-primary my-2" name="ganti">Ganti Harga</button>
            </div>
        </form>
        <br>
    </div>
</div>

<?php include 'footer.php'; ?>