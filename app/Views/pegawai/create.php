<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://source.unsplash.com/1600x900/?office');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .form-container {
            margin-top: 100px;
            padding: 40px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            /* Semi-transparent background */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #28a745;
            /* Green button color */
            color: white;
        }

        .btn-custom:hover {
            background-color: #218838;
            /* Darker green on hover */
            color: white;
        }

        .form-title {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="col-md-6 form-container">
            <h1 class="text-center form-title">Tambah Pegawai</h1>
            <form action="<?= base_url('pegawai/store') ?>" method="post" class="mt-4">
                <div class="form-group">
                    <label for="nip">NIP:</label>
                    <input type="text" id="nip" name="nip" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="departement">Departemen:</label>
                    <input type="text" id="departement" name="departement" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <input type="text" id="jabatan" name="jabatan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Telephone:</label>
                    <input type="text" id="telephone" name="telephone" class="form-control" required>
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
