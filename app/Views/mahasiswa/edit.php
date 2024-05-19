<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap');

        body {
            font-family: 'Comic Neue', Arial, sans-serif;
            background-color: #ffebf0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border: 2px solid #ffd1dc;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff69b4;
            font-size: 28px;
            position: relative;
        }

        h1::after {
            content: '✨';
            font-size: 28px;
            color: #ff69b4;
            position: absolute;
            top: 0;
            right: -30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #ff1493;
        }

        input[type="text"],
        select,
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #ffd1dc;
            border-radius: 15px;
            background-color: #fff5f8;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        select:focus,
        input[type="email"]:focus {
            border-color: #ff69b4;
        }

        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ffd1dc;
            border-radius: 15px;
            background-color: #fff5f8;
            transition: border-color 0.3s;
        }

        input[type="submit"] {
            background-color: #ff69b4;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #ff1493;
        }

        .message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 15px;
        }

        .error {
            background-color: #fce4e4;
            color: #d9534f;
        }

        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Data Mahasiswa</h1>
        <?php if (session()->has('errors')) : ?>
            <div class="message error">
                <?php foreach (session('errors') as $error) : ?>
                    <?= $error ?><br>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php if (session()->has('success')) : ?>
            <div class="message success">
                <?= session('success') ?>
            </div>
        <?php endif ?>

        <?php if (session()->has('error')) : ?>
            <div class="message error">
                <?= session('error') ?>
            </div>
        <?php endif ?>

        <form action="<?= base_url('mahasiswa/update/' . $mahasiswa['id_mahasiswa']) ?>" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
            <label for="jurusan">Jurusan:</label>
            <select name="jurusan" id="jurusan">
                <option value="">-- Pilih --</option>
                <option value="Kimia Syariah" <?= $mahasiswa['jurusan'] == 'Kimia Syariah' ? 'selected' : '' ?>>Sistem Informatika</option>
                <option value="Sastra Mesin" <?= $mahasiswa['jurusan'] == 'Sastra Mesin' ? 'selected' : '' ?>>PAI</option>
                <option value="Ilmu Alam Ghaib" <?= $mahasiswa['jurusan'] == 'Ilmu Alam Ghaib' ? 'selected' : '' ?>>Ilmu Silat</option>
            </select>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" value="<?= $mahasiswa['telepon'] ?>">
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>

</html>
