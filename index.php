<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Karyawan</h2>
    <a href="tambah.php">+ Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th><th>NIP</th><th>Nama</th><th>Jabatan</th><th>Departemen</th><th>Email</th><th>Telepon</th><th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM karyawan");
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nip'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jabatan'] ?></td>
            <td><?= $row['departemen'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['telepon'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
