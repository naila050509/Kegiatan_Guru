<?php
session_start();
include 'koneksi.php';

// === HANDLE REGISTER ===
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $level = 'user'; // default level
    $status = 'pending'; // menunggu persetujuan admin

    $query = "INSERT INTO user (nama, password, level, status) VALUES ('$nama', '$password', '$level', '$status')";
    $result = mysqli_query($koneksi, $query);
    
    if ($result) {
        echo "Akun berhasil dibuat. Tunggu persetujuan admin.";
    } else {
        echo "Gagal membuat akun: " . mysqli_error($koneksi);
    }
    exit(); // penting agar tidak lanjut ke bagian login
}

// === HANDLE STATUS UPDATE (approve / pending) ===
if (isset($_GET['id']) && isset($_GET['aksi'])) {
    $id = $_GET['id'];
    $aksi = $_GET['aksi'];

    if ($aksi == 'approve') {
        $status = 'approved';
    } elseif ($aksi == 'pending') {
        $status = 'pending';
    } else {
        die("Aksi tidak valid.");
    }

    $query = "UPDATE user SET status='$status' WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: dist/index.php?pesan=status_diupdate");
        exit();
    } else {
        echo "Gagal update status: " . mysqli_error($koneksi);
        exit();
    }
}

// === HANDLE LOGIN ===
if (isset($_POST['nama']) && isset($_POST['password'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE nama='$nama' AND password='$password'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        if ($data['status'] == 'pending') {
            header("location:login.php?pesan=belum_disetujui");
            exit();
        } else {
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['level'] = $data['level'];

            if ($data['level'] == "admin") {
                header("location:dist/index.php");
            } elseif ($data['level'] == "user") {
                header("location:src/index.php");
            } else {
                header("location:login.php?pesan=level_tidak_dikenal");
            }
            exit();
        }
    } else {
        header("location:login.php?pesan=gagal");
        exit();
    }
}

// Kalau tidak ada aksi GET atau POST
echo "Tidak ada aksi yang diproses.";
?>