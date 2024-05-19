<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Dosen</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');

        body {
            font-family: 'Baloo 2', cursive;
            background-color: #ffe0b2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #ff7043;
        }

        .label {
            font-weight: bold;
            margin-top: 10px;
            font-size: 18px;
            color: #ff7043;
            display: block;
        }

        .value {
            margin-bottom: 20px;
            font-size: 18px;
            color: #555;
            padding: 10px;
            background-color: #ffccbc;
            border-radius: 10px;
        }

        .btn-container {
            text-align: center;
        }

        .btn-secondary {
            background-color: #ff7043;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-secondary:hover {
            background-color: #e64a19;
            color: white;
        }

        .btn-secondary::before {
            content: '⬅';
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lihat Data Dosen</h1>

        <div class="value">
            <span class="label">NIDN:</span> <?= $dosen['nidn'] ?>
        </div>

        <div class="value">
            <span class="label">Nama:</span> <?= $dosen['nama_dosen'] ?>
        </div>

        <div class="value">
            <span class="label">Mata Kuliah:</span> <?= $dosen['mata_kuliah'] ?>
        </div>

        <div class="value">
            <span class="label">Email:</span> <?= $dosen['email'] ?>
        </div>

        <div class="value">
            <span class="label">Status Dosen:</span> <?= $dosen['status_dosen'] ?>
        </div>

        <div class="btn-container">
            <a href="<?= base_url('dosen') ?>" class="btn-secondary">Kembali</a>
        </div>
    </div>
</body>

</html>
