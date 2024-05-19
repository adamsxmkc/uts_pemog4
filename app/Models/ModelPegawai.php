<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model
{
    protected $table = 'pegawai'; // Menyesuaikan nama tabel dengan 'pegawai'
    protected $primaryKey = 'id_pegawai'; // Menyesuaikan nama primary key dengan 'id_pegawai'
    protected $allowedFields = ['nip', 'nama', 'jenis_kelamin', 'departement', 'jabatan', 'email', 'telephone']; // Menyesuaikan field yang diperbolehkan

    /**
     * Update data pegawai di database.
     *
     * @param int $id ID pegawai yang akan diupdate.
     * @param array $data Data baru untuk pegawai.
     * @return bool True jika update berhasil, dan false jika sebaliknya.
     */
    public function updatePegawai($id, $data)
    {
        return $this->update($id, $data); // Melakukan update data pegawai di database
    }
}
