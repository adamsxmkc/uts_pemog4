<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');

        body {
            font-family: 'Baloo 2', cursive;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffeb3b;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #ff5722;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #ff9800;
        }

        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ffc107;
            border-radius: 10px;
            background-color: #fffde7;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #ff5722;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #e64a19;
            transform: scale(1.05);
        }

        .message {
            margin-top: 15px;
            padding: 15px;
            border-radius: 10px;
            font-size: 16px;
        }

        .error {
            background-color: #ffcccc;
            color: #d32f2f;
        }

        .success {
            background-color: #c8e6c9;
            color: #388e3c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Data Dosen</h1>
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

        <form action="<?= base_url('dosen/update/' . $dosen['id_dosen']) ?>" method="post">
            <!-- Menambahkan ID dosen ke URL -->
            <label for="nidn">NIDN:</label>
            <input type="text" id="nidn" name="nidn" value="<?= $dosen['nidn'] ?>">
            <label for="nama_dosen">Nama:</label>
            <input type="text" id="nama_dosen" name="nama_dosen" value="<?= $dosen['nama_dosen'] ?>">
            <label for="mata_kuliah">Mata Kuliah:</label>
            <input type="text" id="mata_kuliah" name="mata_kuliah" value="<?= $dosen['mata_kuliah'] ?>">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= $dosen['email'] ?>">
            <label for="status_dosen">Status Dosen:</label>
            <select name="status_dosen">
                <option value="">--pilih--</option>
                <option value="Tetap">Tetap</option>
                <option value="Hybrid">Hybrid</option>
                <option value="Asisten Dosen">Asisten Dosen</option>
            </select>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>

</html>
