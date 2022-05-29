<?php
require 'Koneksi.php';
require 'Model.php';
include 'index.php';

$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_member'];

if ($form == 'tambah') {
    if (isset($_POST['nama_member'])) {
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $password_member = $_POST['password_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        TambahMember($connection, $nama_member, $nomor_member, $password_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }
} else if ($form == 'update') {
    $dataMember = GetDataMemberById($connection, $id);
    if (isset($_POST['nama_member'])) {
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $password_member = $_POST['password_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        UpdateMember($connection, $nama_member, $nomor_member, $password_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id);
    }
} else if ($form == 'delete') {
    HapusMember($connection, $id);
}

?>

<?php if ($form == 'tambah') : ?>

    <form method="post">
        <div class="container" style="width:fit-content">
            <table class="table table-bordered table-striped table-danger">
                <tr>
                    <th>
                        <label for="nama_member">Tambah Nama Member</label>
                    </th>
                    <th>
                        <input type="text" name="nama_member" id="nama_member">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="nomor_member">Tambah Nomor Member</label>
                    </th>
                    <th>
                        <input type="text" name="nomor_member" id="nomor_member">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="nomor_member">Tambah Password</label>
                    </th>
                    <th>
                        <input type="text" name="password_member" id="password_member">
                    </th>
                </tr>     
                <tr>
                    <th>
                        <label for="alamat">Tambah Alamat</label>
                    </th>
                    <th>
                        <input type="text" name="alamat" id="alamat">
                    </th>
                </tr>   
                <tr>
                    <th>
                        <label for="tgl_mendaftar">Tambah Tanggal Mendaftar</label>        
                    </th>
                    <th>
                        <input type="datetime-local" name="tgl_mendaftar" id="tgl_mendaftar">
                    </th>
                </tr>   
                <tr>
                    <th>
                        <label for="tgl_terakhir_bayar">Tanggal Tanggal Terakhir Bayar</label>
                    </th>
                    <th>
                        <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar">
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
                        <label for="nama_member">Nama Member</label>        
                    </th>
                    <th>
                        <input type="text" value="<?php $dataMember->nama_member; echo "$dataMember->nama_member" ?>" name="nama_member" id="nama_member">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="nomor_member">Nomor Member</label>
                    </th>
                    <th>
                        <input type="text" value="<?php $dataMember->nomor_member;echo "$dataMember->nomor_member" ?>" name="nomor_member" id="nomor_member">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="nomor_member">Password Member</label>
                    </th>
                    <th>
                        <input type="text" value="<?php $dataMember->password_member;echo "$dataMember->password_member" ?>" name="password_member" id="password_member">
                    </th>
                </tr>     
                <tr>
                    <th>
                        <label for="alamat">Alamat</label>
                    </th>
                    <th>
                        <input type="text" value="<?php $dataMember->alamat; echo "$dataMember->alamat" ?>" name="alamat" id="alamat">
                    </th>
                </tr>   
                <tr>
                    <th>
                        <label for="tgl_mendaftar">Tanggal Mendaftar</label>
                    </th>
                    <th>
                        <input type="datetime-local" value="<?php $dataMember->tgl_mendaftar; echo "$dataMember->tgl_mendaftar" ?>" name="tgl_mendaftar" id="tgl_mendaftar">        
                    </th>
                </tr>   
                <tr>
                    <th>
                        <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar</label>
                    </th>
                    <th>
                        <input type="date" value="<?php $dataMember->tgl_terakhir_bayar; echo "$dataMember->tgl_terakhir_bayar" ?>" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar">
                    </th>
                </tr> 
            </table>
            <button class="btn btn-success" name='update' type="submit">Update Member</button>
        </div>
    </form>
<?php endif; ?>