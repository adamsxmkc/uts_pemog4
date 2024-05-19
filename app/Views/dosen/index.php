<?= $this->extend('tampilan') ?>
<?= $this->section('isi_content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Dosen</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
            /* Ubah warna menjadi hitam */
            color: white;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .panel-body {
            padding: 15px;
        }

        .table thead {
            background-color: #f8f9fa;
            color: black;
            /* Warna teks hitam */
            font-weight: bold;
            /* Tebalkan tulisan */
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
            <a href="<?= base_url('dosen/create') ?>" class="btn btn-custom">+ Tambah Dosen</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span style="font-weight: bold; color: white;">Tabel Dosen</span> <!-- Menambahkan atribut style -->
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>NIDN</th>
                                        <th>Nama</th>
                                        <th>Mata Kuliah</th>
                                        <th>Email</th>
                                        <th>Status Dosen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dosen as $item) : ?>
                                        <tr>
                                            <td><?= $item['nidn'] ?></td>
                                            <td><?= $item['nama_dosen'] ?></td>
                                            <td><?= $item['mata_kuliah'] ?></td>
                                            <td><?= $item['email'] ?></td>
                                            <td><?= $item['status_dosen'] ?></td>
                                            <td>
                                                <a href="<?= base_url('dosen/view/' . $item['id_dosen']) ?>" class="btn btn-info btn-sm">Lihat</a>
                                                <a href="<?= base_url('dosen/edit/' . $item['id_dosen']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= base_url('dosen/delete/' . $item['id_dosen']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn btn-danger btn-sm">Delete</a>
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