<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
</head>
<body>
    <h2>Tambah Data Karyawan</h2>
    <form method="POST">
        NIP: <input type="text" name="nip" required><br>
        Nama: <input type="text" name="nama" required><br>
        Jabatan: <input type="text" name="jabatan"><br>
        Departemen: <input type="text" name="departemen"><br>
        Email: <input type="email" name="email"><br>
        Telepon: <input type="text" name="telepon"><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $departemen = $_POST['departemen'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];

        $insert = mysqli_query($conn, "INSERT INTO karyawan (nip, nama, jabatan, departemen, email, telepon)
                                       VALUES ('$nip', '$nama', '$jabatan', '$departemen', '$email', '$telepon')");

        if ($insert) {
            echo "Data berhasil disimpan. <a href='index.php'>Lihat Data</a>";
        } else {
            echo "Gagal menyimpan data: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
