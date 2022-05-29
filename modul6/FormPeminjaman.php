<?php
require 'Koneksi.php';
require 'Model.php';
include 'index.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_peminjaman'];

if ($form == 'tambah') {
    if (isset($_POST['tgl_pinjam'])  && isset($_POST['tgl_kembali'])) {
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        TambahPeminjaman($connection, $tgl_pinjam, $tgl_kembali);
    }
} else if ($form == 'update') {
    $dataPeminjaman = GetDataPeminjamanById($connection, $id);
    if (isset($_POST['tgl_pinjam'])  && isset($_POST['tgl_kembali'])) {
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        UpdatePeminjaman($connection, $tgl_pinjam, $tgl_kembali, $id);
    }
} else if ($form == 'delete') {
    HapusPeminjaman($connection, $id);
}
?>

<?php if ($form == 'tambah') : ?>
    <form method="post">
        <div class="container" style="width:fit-content">
            <table class="table table-bordered table-striped table-danger">
                <tr>
                    <th>
                        <label for="tgl_pinjam">Tanggal Pinjam</label>
                    </th>
                    <th>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="tgl_kembali">Tanggal Kembali</label>
                    </th>
                    <th>
                        <input type="date" name="tgl_kembali" id="tgl_kembali">
                        </th>
                </tr>    
            </table>
            <button class="btn btn-success" name='tambah' type="submit">Tambahkan Data</button>
        </div>
    </form>

<?php elseif ($form == 'update') : ?>
    <form method="post">
        <div class="container" style="width:fit-content">
            <table class="table table-bordered table-striped table-danger">
                <tr>
                    <th>
                        <label for="tgl_pinjam">Tanggal Pinjam</label>
                    </th>
                    <th>
                        <input type="date" value="<?php $dataPeminjaman->tgl_pinjam; echo "$dataPeminjaman->tgl_pinjam" ?>" name="tgl_pinjam" id="tgl_pinjam">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="tgl_kembali">Tanggal Kembali</label>
                    </th>
                    <th>
                    <input type="date" value="<?php $dataPeminjaman->tgl_kembali; echo "$dataPeminjaman->tgl_kembali" ?>" name="tgl_kembali" id="tgl_kembali">
                    </th>
                </tr>    
            </table>
            <button class="btn btn-success" name='update' type="submit">Update Peminjaman</button>
        </div>
    </form>
<?php endif; ?>