<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');

        body {
            font-family: 'Baloo 2', cursive;
            background-color: #ffeb3b;
            margin: 0;
            padding: 0;
        }

        .form-container {
            margin-top: 50px;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #ff5722;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-custom:hover {
            background-color: #e64a19;
            transform: scale(1.05);
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #ff9800;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 15px;
            border: 2px solid #ffc107;
            border-radius: 10px;
            background-color: #fffde7;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus {
            border-color: #ff5722;
            outline: none;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff5722;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="col-md-6 form-container">
            <h1>Tambah Dosen</h1>
            <form action="<?= base_url('dosen/store') ?>" method="post" class="mt-4">
                <div class="form-group">
                    <label for="nidn">NIDN:</label>
                    <input type="text" id="nidn" name="nidn" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama_dosen">Nama:</label>
                    <input type="text" id="nama_dosen" name="nama_dosen" class="form-control">
                </div>

                <div class="form-group">
                    <label for="mata_kuliah">Mata Kuliah:</label>
                    <input type="text" id="mata_kuliah" name="mata_kuliah" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="status_dosen">Status Dosen:</label>
                    <select name="status_dosen" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Hybrid">Hybrid</option>
                        <option value="Asisten Dosen">Asisten Dosen</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-custom btn-block">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
