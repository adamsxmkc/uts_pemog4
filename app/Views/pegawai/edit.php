<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border: 2px solid #ffcad4;
        }

        h1 {
            text-align: center;
            color: #ff6b6b;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 2rem;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #555;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 12px;
            background-color: #f8f9fa;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus,
        select:focus {
            border-color: #ff6b6b;
            outline: none;
            box-shadow: 0 0 8px rgba(255, 107, 107, 0.5);
        }

        input[type="submit"] {
            background: #ff6b6b;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.3s;
        }

        input[type="submit"]:hover {
            background: #e45858;
            transform: translateY(-3px);
        }

        .message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 12px;
            font-size: 16px;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        @media (max-width: 600px) {
            .container {
                padding: 30px;
                margin: 20px;
            }

            input[type="text"],
            select {
                padding: 12px;
                font-size: 14px;
            }

            input[type="submit"] {
                padding: 12px 16px;
                font-size: 16px;
            }

            h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Data Pegawai</h1>
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

        <form action="<?= base_url('pegawai/update/' . $pegawai['id_pegawai']) ?>" method="post">
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" id="nip" name="nip" value="<?= $pegawai['nip'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?= $pegawai['nama'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki" <?= $pegawai['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $pegawai['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="departement">Departemen:</label>
                <input type="text" id="departement" name="departement" value="<?= $pegawai['departement'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" value="<?= $pegawai['jabatan'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?= $pegawai['email'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" id="telephone" name="telephone" value="<?= $pegawai['telephone'] ?>" class="form-control">
            </div>

            <input type="submit" value="Simpan" class="btn btn-primary">
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
