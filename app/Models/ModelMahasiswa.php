<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table = 'mahasiswa'; // Nama tabel di database
    protected $primaryKey = 'id_mahasiswa'; // Nama primary key
    protected $allowedFields = ['nama', 'jurusan', 'email', 'telepon']; // Kolom yang diizinkan untuk diisi

    /**
     * Mengupdate data mahasiswa di database.
     *
     * @param int $id ID mahasiswa yang akan diupdate.
     * @param array $data Data baru untuk mahasiswa tersebut.
     * @return bool True jika berhasil diupdate, dan false jika gagal.
     */
    public function updateMahasiswa($id, $data)
    {
        return $this->update($id, $data); // Mengupdate data mahasiswa di database
    }
}
