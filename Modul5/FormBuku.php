<?php
require 'Koneksi.php';
require 'Model.php';
include 'index.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_buku'];

if ($form == 'tambah') {
    if (isset($_POST['judul_buku'])) {
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        TambahBuku($connection, $judul_buku, $penulis, $penerbit, $tahun_terbit);
    }
} else if ($form == "update") {
    $dataBuku = GetDataBukuById($connection, $id);
    if (isset($_POST['judul_buku'])) {
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        UpdateBuku($connection, $judul_buku, $penulis, $penerbit, $tahun_terbit, $id);
    }
} else if ($form == 'delete') {
    HapusBuku($connection, $id);
}

?>

<?php if ($form == 'tambah') : ?>

    <form method="post">
        <div class="container" style="width:fit-content">
            <table class="table table-bordered table-striped table-danger">
                <tr>
                    <th>
                        <label for="judul_buku">Tambah Nama Buku</label>
                    </th>
                    <th>
                        <input type="text" name="judul_buku" id="judul_buku">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="penulis">Tambah Penulis</label>
                    </th>
                    <th>
                        <input type="text" name="penulis" id="penulis">
                    </th>
                </tr>    
                <tr>
                    <th>
                        <label for="penerbit">Tambah Penerbit</label>
                    </th>
                    <th>
                        <input type="text" name="penerbit" id="penerbit">
                    </th>
                </tr>   
                <tr>
                    <th>
                        <label for="tahun_terbit">Tambah Tahun Terbit</label>
                    </th>
                    <th>
                        <input type="text" name="tahun_terbit" id="tahun_terbit">
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
                        <label for="judul_buku">Judul Buku</label>
                    </th>
                    <th>
                        <input type="text" value="<?php $dataBuku->judul_buku; echo "$dataBuku->judul_buku" ?>" name="judul_buku" id="judul_buku">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="penulis">Penulis</label>
                    </th>
                    <th>
                        <input type="text" value="<?php $dataBuku->penulis; echo "$dataBuku->penulis" ?>" name="penulis" id="penulis">
                    </th>
                </tr>    
                <tr>
                    <th>
                        <label for="penerbit">Penerbit</label>
                    </th>
                    <th>
                        <input type="text" value="<?php $dataBuku->penerbit; echo "$dataBuku->penerbit" ?>" name="penerbit" id="penerbit">
                    </th>
                </tr>   
                <tr>
                    <th>
                        <label for="tahun_terbit">Tahun Terbit</label>
                    </th>
                    <th>
                        <input type="text" value="<?php $dataBuku->tahun_terbit; echo "$dataBuku->tahun_terbit" ?>" name="tahun_terbit" id="tahun_terbit">
                    </th>
                </tr>   
            </table>
            <button class="btn btn-success" name='update' type="submit">Update Buku</button>
        </div>
    </form>
<?php endif; ?>