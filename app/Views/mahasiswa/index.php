<?= $this->extend('tampilan') ?>

<?= $this->section('isi_content') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .btn-container {
            margin-bottom: 20px;
            text-align: right;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #218838;
            color: white;
        }

        .panel {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            background-color: black;
            color: white;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-weight: bold; /* Menambahkan ketebalan pada judul */
        }

        .panel-body {
            padding: 15px;
        }

        .table thead {
            background-color: #f8f9fa;
            color: black;
            font-weight: bold;
        }

        .btn-danger {
            color: white;
            background-color: #dc3545;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-danger:hover {
            background-color: #c82333;
            color: white;
        }

        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="btn-container">
            <a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-custom">+ Tambah Mahasiswa</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span style="font-weight: bold; color: white;">Tabel Mahasiswa</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mahasiswa as $item) : ?>
                                        <tr>
                                            <td><?= $item['id_mahasiswa'] ?></td>
                                            <td><?= $item['nama'] ?></td>
                                            <td><?= $item['jurusan'] ?></td>
                                            <td><?= $item['email'] ?></td>
                                            <td><?= $item['telepon'] ?></td>
                                            <td>
                                                <a href="<?= base_url('mahasiswa/view/' . $item['id_mahasiswa']) ?>" class="btn btn-info btn-sm">Lihat</a>
                                                <a href="<?= base_url('mahasiswa/edit/' . $item['id_mahasiswa']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= base_url('mahasiswa/delete/' . $item['id_mahasiswa']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?= $this->endSection() ?>
