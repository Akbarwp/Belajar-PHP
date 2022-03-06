<?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "php_dasar");

    // Ambil data dari tabel
    // $result = mysqli_query($conn, "SELECT * FROM barang");
    // if(!$result) {
    //     echo mysqli_error($conn);
    // }

    // Ambil data dari object result
    /** 
    1. mysqli_fetch_row() --> mengembalikan array numerik
    2. mysqli_fetch_assoc() --> mengembalikan array associative
    3. mysqli_fetch_array() --> mengembalikan array numerik / associative, tapi data double
    4. mysqli_fetch_object() --> menggunakan arah panah ($mhs -> nama)
    */

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function create($data) {
        global $conn;

        $jenis = htmlspecialchars($data["jenis"]);
        $nama = htmlspecialchars($data["nama"]);
        $ukuran = htmlspecialchars($data["ukuran"]);
        $jual = htmlspecialchars($data["jual"]);
        $beli = htmlspecialchars($data["beli"]);
        $stok = htmlspecialchars($data["stok"]);

        $gambar = uploud();
        if(!$gambar) {
            return false;
        }

        $SQL = "INSERT INTO barang 
        VALUES(generateID(), '$jenis', '$nama', '$ukuran', '$jual', '$beli', '$stok', '$gambar')";
        mysqli_query($conn, $SQL);

        return mysqli_affected_rows($conn);
    }

    function uploud() {

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // Cek sudah memilih gambar
        if($error == 4) {
            echo "<script> 
                alert('Pilih gambar dahulu!');
                </script>";
            return false;
        }

        // Cek file gambar
        $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script> 
                alert('Mohon unggah file gambar, bukan file lain!');
                </script>";
            return false;
        }

        // Cek ukuran file gambar
        if($ukuranFile > 1000000) {
            echo "<script> 
                alert('Ukuran gambar terlalu besar!');
                </script>";
            return false;
        }

        // Generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        // Lolos pengecekan gambar
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
    }

    function delete($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM barang WHERE ID_Barang = '$id'");

        return mysqli_affected_rows($conn);
    }

    function update($data) {
        global $conn;

        $id = htmlspecialchars($data["id"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $nama = htmlspecialchars($data["nama"]);
        $ukuran = htmlspecialchars($data["ukuran"]);
        $jual = htmlspecialchars($data["jual"]);
        $beli = htmlspecialchars($data["beli"]);
        $stok = htmlspecialchars($data["stok"]);

        $gambarLama = htmlspecialchars($data["gambarLama"]);
        // Cek gambar baru atau tidak
        if($_FILES["gambar"]["error"] == 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = uploud();
        }

        $SQL = "UPDATE barang SET 
            Jenis_Barang = '$jenis', 
            Nama_Barang = '$nama', 
            Ukuran_Barang = '$ukuran', 
            Harga_Jual = '$jual', 
            Harga_Beli = '$beli', 
            Stok = '$stok', 
            Gambar = '$gambar'
            WHERE ID_Barang = '$id'";
        mysqli_query($conn, $SQL);

        return mysqli_affected_rows($conn);
    }

    function search($cari) {
        require "pagination.php";
        $SQL = "SELECT * FROM barang WHERE 
            Jenis_Barang LIKE '%$cari%' OR
            Nama_Barang LIKE '%$cari%' OR
            Ukuran_Barang LIKE '%$cari%' OR
            Harga_Jual LIKE '%$cari%' OR
            Harga_Beli LIKE '%$cari%' OR
            Stok LIKE '%$cari%'
            LIMIT $awalData, $jmlDataPerHalaman
        ";
        return query($SQL);
    }

    function registrasi($data) {
        global $conn;

        $email = strtolower(stripslashes($data["email"]));
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // Cek konfirmasi password
        if($password !== $password2) {
            echo "<script>
                    alert('Password tidak sama');
                </script>";
            return false;
        }

        // Cek isi email dan username
        $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
        $result2 = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Email sudah terdaftar');
                </script>";
            return false;

        } else if(mysqli_fetch_assoc($result2)) {
            echo "<script>
                    alert('Username sudah terdaftar');
                </script>";
            return false;
        }

        // Enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // User baru ke database
        mysqli_query($conn, "ALTER TABLE users AUTO_INCREMENT = 1;");
        mysqli_query($conn, "INSERT INTO users VALUES('', '$email', '$username', '$password')");

        return 1;
    }
?>