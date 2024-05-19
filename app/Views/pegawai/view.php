<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Pegawai</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');

        body {
            font-family: 'Baloo 2', cursive;
            background-color: #f0e4d7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #ffe0b2;
        }

        h1 {
            text-align: center;
            font-size: 28px;
            color: #ff7043;
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #ff7043;
            display: inline-block;
            width: 150px;
            font-size: 16px;
        }

        .value {
            font-size: 16px;
            color: #777;
            margin-bottom: 15px;
            padding-left: 10px;
            background-color: #fff3e0;
            border-radius: 8px;
            padding: 5px 10px;
        }

        .data-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .btn-container {
            text-align: center;
            margin-top: 30px;
        }

        .btn-secondary {
            background-color: #ff7043;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-secondary:hover {
            background-color: #f4511e;
        }

        .btn-secondary::before {
            content: '⬅';
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lihat Data Pegawai</h1>

        <div class="data-item">
            <span class="label">Nama:</span>
            <span class="value"><?= $pegawai['nama'] ?></span>
        </div>

        <div class="data-item">
            <span class="label">NIP:</span>
            <span class="value"><?= $pegawai['nip'] ?></span>
        </div>

        <div class="data-item">
            <span class="label">Jenis Kelamin:</span>
            <span class="value"><?= $pegawai['jenis_kelamin'] ?></span>
        </div>

        <div class="data-item">
            <span class="label">Departemen:</span>
            <span class="value"><?= $pegawai['departement'] ?></span>
        </div>

        <div class="data-item">
            <span class="label">Jabatan:</span>
            <span class="value"><?= $pegawai['jabatan'] ?></span>
        </div>

        <div class="data-item">
            <span class="label">Email:</span>
            <span class="value"><?= $pegawai['email'] ?></span>
        </div>

        <div class="data-item">
            <span class="label">Telephone:</span>
            <span class="value"><?= $pegawai['telephone'] ?></span>
        </div>

        <div class="btn-container">
            <a href="<?= base_url('pegawai') ?>" class="btn-secondary">Kembali</a>
        </div>
    </div>
</body>

</html>
