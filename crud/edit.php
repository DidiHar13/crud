<!DOCTYPE html>
<html>

<head>
    <title>CRUD </title>
</head>

<body>

    <h2>CRUD DATA Produk</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>Edit DATA Produk</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from produk where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td>
                        <input type="hidden" name="id" value="<?= $d['id']; ?>">
                        <input type="text" name="nama_produk" value="<?= $d['nama_produk']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Katerangan</td>
                    <td><input type="text" name="keterangan" value="<?= $d['keterangan']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" value="<?= $d['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="number" name="jumlah" value="<?= $d['jumlah']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>