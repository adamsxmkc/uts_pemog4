<?= $this->extend('tampilan') ?>
<?= $this->section('isi_content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .container {
            margin-top: 30px;
        }

        .btn-container {
            margin-bottom: 20px;
            text-align: right;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }

        .panel {
            border: 1px solid #ddd;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
        }

        .panel-body {
            padding: 20px;
        }

        .table thead {
            background-color: #e9ecef;
            color: #333;
            font-weight: bold;
        }

        .table tbody tr {
            transition: background-color 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }

        .btn-info {
            background-color: #17a2b8;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="btn-container">
            <a href="<?= base_url('pegawai/create') ?>" class="btn btn-custom">+ Tambah Pegawai</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel Pegawai
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Departemen</th>
                                        <th>Jabatan</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pegawai as $item) : ?>
                                        <tr>
                                            <td><?= $item['nip'] ?></td>
                                            <td><?= $item['nama'] ?></td>
                                            <td><?= $item['jenis_kelamin'] ?></td>
                                            <td><?= $item['departement'] ?></td>
                                            <td><?= $item['jabatan'] ?></td>
                                            <td><?= $item['email'] ?></td>
                                            <td><?= $item['telephone'] ?></td>
                                            <td>
                                                <a href="<?= base_url('pegawai/view/' . $item['id_pegawai']) ?>" class="btn btn-info btn-sm">Lihat</a>
                                                <a href="<?= base_url('pegawai/edit/' . $item['id_pegawai']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= base_url('pegawai/delete/' . $item['id_pegawai']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Advanced Tables -->
            </div>
        </div>
    </div>
</body>

</html>

<?= $this->endSection() ?>
