<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #444;
            margin-bottom: 30px;
        }

        .label {
            font-weight: bold;
            margin-top: 10px;
            font-size: 18px;
            color: #666;
            display: block;
        }

        .value {
            margin-bottom: 15px;
            font-size: 18px;
            color: #333;
            padding: 10px;
            border-radius: 8px;
            background: #f8f9fa;
        }

        .btn-container {
            text-align: center;
            margin-top: 30px;
        }

        .btn-secondary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-secondary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lihat Data Mahasiswa</h1>

        <div class="value">
            <span class="label">Nama:</span> <?= $mahasiswa['nama'] ?>
        </div>

        <div class="value">
            <span class="label">Jurusan:</span> <?= $mahasiswa['jurusan'] ?>
        </div>

        <div class="value">
            <span class="label">Email:</span> <?= $mahasiswa['email'] ?>
        </div>

        <div class="value">
            <span class="label">Telepon:</span> <?= $mahasiswa['telepon'] ?>
        </div>

        <div class="btn-container">
            <a href="<?= base_url('mahasiswa') ?>" class="btn-secondary">Kembali</a>
        </div>
    </div>
</body>

</html>
