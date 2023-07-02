<?php
include '../koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM pelanggan");


include 'header.php';

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
                    <th>Id</th>
                    <th>Nama </th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php $i = 1; ?>
                <?php while ($p = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['hp']; ?></td>
                        <td><?= $p['alamat']; ?></td>
                        <td>
                            <a href="hapus_pelanggan.php?id=<?= $p['id']; ?>" onclick="return confirm('Yakin Akan Dihapus')" class="btn btn-sm btn-danger">Hapus</a>
                            <a href="edit_pelanggan.php?id=<?= $p['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>