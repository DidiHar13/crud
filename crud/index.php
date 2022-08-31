<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
</head>

<body>

    <h2>CRUD DATA Produk</h2>
    <br />
    <a href="tambah.php">+ TAMBAH Data</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from produk");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_produk']; ?></td>
                <td><?php echo $d['keterangan']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>