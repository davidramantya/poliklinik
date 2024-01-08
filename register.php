<?php
    include 'koneksi.php';

    $tahun_bulan = date('Ym');

    $query_no_rm = "SELECT MAX(SUBSTRING_INDEX(no_rm, '-', -1)) as max_no_rm FROM pasien WHERE SUBSTRING_INDEX(no_rm, '-', 1) = '$tahun_bulan'";
    $result_no_rm = mysqli_query($mysqli, $query_no_rm);
    $row_no_rm = mysqli_fetch_assoc($result_no_rm);
    $max_no_rm = $row_no_rm['max_no_rm'];

    if ($max_no_rm === null) {
        $nomor_rm = 1;
    } else {
        // Jika sudah ada antrian, tambahkan 1
        $nomor_rm = $max_no_rm + 1;
    }
    
    // Format antrian sesuai kebutuhan
    $no_rm = sprintf("%s-%03d", $tahun_bulan, $nomor_rm);
?>

<!DOCTYPE html>
<html>

<head>
<<<<<<< HEAD
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
=======
    <title>Registrasi Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- CSS Custom untuk Halaman Registrasi -->
>>>>>>> d31b5567ecfc76b5e7d17c1113fbd1c0d9db3cd1
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
<<<<<<< HEAD
            background-color: #4eaaa6;
=======
            background-color: #29ab67;
>>>>>>> d31b5567ecfc76b5e7d17c1113fbd1c0d9db3cd1
        }

        .login-container {
            display: flex;
            max-width: 1200px;
            /* Ubah max-width sesuai kebutuhan */
            background-color: #fff;
            color: #186218;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .left-container {
            flex: 1;
            overflow: hidden;
        }

        .left-container img {
            width: 100%;
            height: 100%;
<<<<<<< HEAD
            object-fit: contain; 
=======
            object-fit: cover;
>>>>>>> d31b5567ecfc76b5e7d17c1113fbd1c0d9db3cd1
        }

        .right-container {
            flex: 1;
            padding: 40px;
            /* Menambahkan padding untuk memperbesar area formulir */
        }

        .login-form {
            max-width: 400px;
            /* Sesuaikan dengan kebutuhan */
            margin: 0 auto;
        }

        .login-form h2 {
            text-align: center;
            /* Tengahkan judul */
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: none;
            /* Hapus border */
            border-bottom: 1px solid #ccc;
            /* Tambahkan garis bawah */
            outline: none;
            /* Hapus outline */
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="left-container">
<<<<<<< HEAD
            <img src="assets/images/hospital1.jpg" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <br><br><br>
                <h4 class="text-center">Register </h4>
                <p class="login-box-msg text-center">Daftarkan diri anda sebagai <span
                        class="text-primary">Pasien</span> </p>
                <form action="pages/register/checkRegister.php" method="post">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="nama" required>

                    <label for="no_hp">Nomor KTP :</label>
                    <input type="number" class="form-control" name="no_ktp" required>

                    <label for="no_hp">Alamat :</label>
                    <input class="form-control" id="alamat" name="alamat" required></input>

                    <label for="no_hp">Password :</label>
                    <input type="password" class="form-control" name="password" required>

                    <label for="no_hp">Nomor Handphone :</label>
                    <input type="number" class="form-control" name="no_hp" required>

                    <button type="submit" class="btn btn-block btn-primary">
                        Register
                    </button>
                </form>

            </div>
            <div class="text-center mt-3">
                <p>- Sudah punya akun pasien? -</p> 
                <a href="loginUser.php" class="">
                    Login
                </a>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
</script>
</body>

</html>
=======
            <img src="assets/images/hospital.png" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <h2>Registrasi Pasien</h2>
                <form id="registerForm">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>

                    <label for="alamat">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" required>

                    <label for="no_ktp">Nomor KTP:</label>
                    <input type="text" id="no_ktp" name="no_ktp" required>

                    <label for="no_hp">Nomor HP:</label>
                    <input type="text" id="no_hp" name="no_hp" required>
                    
                    <input type="hidden" id="no_rm" name="no_rm" value="<?= $no_rm ?>" required>


                    <button type="button" class="btn btn-primary btn-block" onclick="registerUser()">Register</button>
                </form>

                <div class="register-link">
                    <p><b>Sudah punya akun?</b> <a href="login.php">Login disini</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function registerUser() {
            var nama = document.getElementById('nama').value;
            var alamat = document.getElementById('alamat').value;
            var no_ktp = document.getElementById('no_ktp').value;
            var no_hp = document.getElementById('no_hp').value;
            var no_rm = document.getElementById('no_rm').value;

            // Kirim data ke PHP untuk proses registrasi
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_register.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Handle registrasi berhasil
                        Swal.fire({
                            icon: 'success',
                            title: 'Registrasi Berhasil!',
                            text: response.message,
                            timer: 3000,
                            showConfirmButton: false
                        }).then(function () {
                            window.location.href = 'login.php';
                        });
                    } else {
                        // Handle registrasi gagal
                        Swal.fire({
                            icon: 'error',
                            title: 'Registrasi Gagal',
                            text: response.message
                        });
                    }
                }
            };
            var params = 'nama=' + nama + '&alamat=' + alamat + '&no_ktp=' + no_ktp + '&no_hp=' + no_hp + '&no_rm=' + no_rm ;
            xhr.send(params);
        }
    </script>
</body>

</html>
>>>>>>> d31b5567ecfc76b5e7d17c1113fbd1c0d9db3cd1
