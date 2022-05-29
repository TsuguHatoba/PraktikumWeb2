<?php
require 'Model.php';
require 'Koneksi.php';
include 'index.php';

CekUserSession($_SESSION['NomorMember']);
CekMember($connection, $_SESSION['NomorMember']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
</head>

<body>
    <div class="container" style="width:fit-content">
        <a href='FormMember.php?form=tambah'><button class="btn btn-success">Tambah Data</button></a>

            <table class="table table-bordered table-striped table-danger">
                <tr>
                    <th>Nama Member</th>
                    <th>Nomor Member</th>
                    <th>Alamat</th>
                    <th>Tanggal Mendaftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            <?php foreach (GetDatamember($connection) as $row) : ?>

            <tr>
                <td><?= $row->nama_member; ?></td>
                <td><?= $row->nomor_member; ?></td>
                <td><?= $row->alamat; ?></td>
                <td><?= $row->tgl_mendaftar; ?></td>
                <td><?= $row->tgl_terakhir_bayar; ?></td>

                <td>
                    <a href='FormMember.php?id_member=<?= $row->id_member ?>&form=update'><button class="btn btn-light">Edit</button></a>
                    <a onclick="return confirm('Hapus Data?')" href='FormMember.php?id_member=<?= $row->id_member ?>&form=delete'><button class="btn btn-dark">Delete</button></a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </div>
</body>
</html>