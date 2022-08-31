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
    <h3>TAMBAH DATA Produk</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr>
                <td>Katerangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>