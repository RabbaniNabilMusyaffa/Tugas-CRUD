<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link rel="shortcut icon" href="foto/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/create.css">
</head>

<body>

    <div class="container">
        <?php
        include "conn.php";
        $data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$_GET[id]'");
        $fetch = mysqli_fetch_array($data);
        ?>
        <h1>Ubah Data Siswa</h1>
        <p>Isikan semua data dengan benar, lalu tekan simpan</p>

        <form action="action_update.php" method="post" enctype="multipart/form-data">

            <table align="center">
                <tr type="hidden">
                    <td><input type="hidden" name="id" value="<?= $fetch['id']; ?>"></td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type=" name" name="username" value="<?= $fetch['username']; ?>" required></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" value="<?= $fetch['password']; ?>" required></td>
                </tr>

                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td><input type="file" name="foto" value="<?= $fetch['foto']; ?>" required></td>
                </tr>


            </table>

            <br>
            <input onclick="return confirm('Apa anda sudah yakin?')" type="submit" value="update" name="update"
                width="100%">

        </form>
    </div>

    <div>
        <button style="position: absolute; bottom: 0; margin-bottom: 20px; width: 100px; margin-left: 15px;">
            <a href="detail.php" style="color: red; text-decoration: none;">Kembali</a>
        </button>
    </div>
</body>

</html>