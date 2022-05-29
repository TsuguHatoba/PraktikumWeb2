<?php
require 'Model.php';
require 'Koneksi.php';
include 'index.php';

CekUserSession($_SESSION['NomorMember']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
</head>

<body>
    <div class="container" style="width:fit-content">
        <a href='FormPeminjaman.php?form=tambah'><button class="btn btn-success">Tambah Data</button></a>

            <table class="table table-bordered table-striped table-danger">
                <tr>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            <?php foreach (GetDataPeminjaman($connection) as $row) : ?>

            <tr>
                <td><?= $row->tgl_pinjam; ?></td>
                <td><?= $row->tgl_kembali; ?></td>

                <td>
                    <a href='FormPeminjaman.php?id_peminjaman=<?= $row->id_peminjaman ?>&form=update'><button class="btn btn-light">Edit</button></a>
                    <a onclick="return confirm('Hapus Data?')" href='FormPeminjaman.php?id_peminjaman=<?= $row->id_peminjaman ?>&form=delete'><button class="btn btn-dark">Delete</button></a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </div>
</body>
</html>