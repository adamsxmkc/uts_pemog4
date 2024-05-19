<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen'; // Nama tabel di database
    protected $primaryKey = 'id_dosen'; // Nama primary key
    protected $allowedFields = ['nidn', 'nama_dosen', 'mata_kuliah', 'email', 'status_dosen']; // Kolom yang diizinkan untuk diisi

    /**
     * Mengupdate data dosen di database.
     *
     * @param int $id ID dosen yang akan diupdate.
     * @param array $data Data baru untuk dosen tersebut.
     * @return bool True jika berhasil diupdate, dan false jika gagal.
     */
    public function updateDosen($id, $data)
    {
        return $this->update($id, $data); // Mengupdate data dosen di database
    }
}
