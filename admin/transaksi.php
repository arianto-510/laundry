<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM transaksi, pelanggan WHERE transaksi.id_pelanggan = pelanggan.id");




include './header.php';
?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h5>Data Pelanggan</h5>
        </div>
        <div class="panel-body">
            <a href="tambah_pelanggan.php" class="btn btn-sm btn-info my-2 text-light">Tambah</a>
            <table class="table table-bordered table-striped text-center">
                <tr>
                    <th>No</th>
                    <th>Invoice </th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Berat (Kg)</th>
                    <th>Tgl. Selesai</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>OPSI</th>
                </tr>
                <?php $i = 1; ?>
                <?php while ($t = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $t['tanggal']; ?></td>
                        <td><?= $t['tanggal']; ?></td>
                        <td><?= $t['nama']; ?></td>
                        <td><?= $t['berat']; ?></td>
                        <td><?= $t['tgl_selesai']; ?></td>
                        <td><?= $t['harga']; ?></td>
                        <td>
                            <?php if ($t['status']) {
                                if ($t['status'] == '1') {
                                    echo "<span class='badge bg-warning'>Proses</span>";
                                } elseif ($t['status'] == '2') {
                                    echo "<span class='badge bg-info'>Cuci</span>";
                                } elseif ($t['status'] == '3') {
                                    echo "<span class='badge bg-success'>Selesai</span>";
                                }
                            } ?>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="">Invoice</a>
                            <a class="btn btn-sm btn-info" href="">Edit</a>
                            <a class="btn btn-sm btn-danger" href="">Batalkan</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>