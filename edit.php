<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM karyawan WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head><title>Edit Karyawan</title></head>
<body>
<h2>Edit Data Karyawan</h2>
<form method="POST">
    NIP: <input type="text" name="nip" value="<?= $row['nip'] ?>" required><br>
    Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br>
    Jabatan: <input type="text" name="jabatan" value="<?= $row['jabatan'] ?>"><br>
    Departemen: <input type="text" name="departemen" value="<?= $row['departemen'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br>
    Telepon: <input type="text" name="telepon" value="<?= $row['telepon'] ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $departemen = $_POST['departemen'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $update = mysqli_query($conn, "UPDATE karyawan SET
        nip='$nip', nama='$nama', jabatan='$jabatan', departemen='$departemen',
        email='$email', telepon='$telepon' WHERE id=$id");

    if ($update) {
        echo "Data berhasil diupdate. <a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
