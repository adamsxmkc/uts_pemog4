<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            background-color: #fffbf2;
            margin: 0;
            padding: 0;
        }

        .form-container {
            margin-top: 50px;
            padding: 30px;
            border-radius: 20px;
            background-color: #fff;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            border: 2px solid #ffcbf2;
        }

        .btn-custom {
            background-color: #ff8fab;
            color: white;
            border: none;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-custom:hover {
            background-color: #ff7096;
            transform: translateY(-3px);
        }

        .btn-custom:focus {
            box-shadow: none;
            outline: none;
        }

        .form-control {
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff6f91;
            font-size: 2rem;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
        }

        .input-group-text {
            background-color: #ffcbf2;
            border-radius: 10px;
        }

        .input-group .form-control {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .input-group .input-group-text {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-6 form-container">
            <h1>Tambah Mahasiswa</h1>
            <form action="<?= base_url('mahasiswa/store') ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <div class="input-group">
                        <input type="text" id="nama" name="nama" class="form-control" required>
                        <div class="input-group-append">
                            <span class="input-group-text">🎓</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan:</label>
                    <div class="input-group">
                        <select name="jurusan" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="Kimia Syariah">Kimia Syariah</option>
                            <option value="Sastra Mesin">Sastra Mesin</option>
                            <option value="Ilmu Alam Ghaib">Ilmu Alam Ghaib</option>
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text">📚</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <div class="input-group">
                        <input type="email" id="email" name="email" class="form-control" required>
                        <div class="input-group-append">
                            <span class="input-group-text">📧</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="telepon">Telepon:</label>
                    <div class="input-group">
                        <input type="text" id="telepon" name="telepon" class="form-control" required>
                        <div class="input-group-append">
                            <span class="input-group-text">📞</span>
                        </div>
                    </div>
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
