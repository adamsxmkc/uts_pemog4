<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    protected $dosenModel;

    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }

    public function index()
    {
        $data['dosen'] = $this->dosenModel->findAll();
        return view('dosen/index', $data);
    }

    public function create()
    {
        return view('dosen/create');
    }

    public function store()
    {
        $rules = [
            'nidn' => 'required',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'email' => 'required',
            'status_dosen' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nidn' => $this->request->getVar('nidn'),
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'mata_kuliah' => $this->request->getVar('mata_kuliah'),
            'email' => $this->request->getVar('email'),
            'status_dosen' => $this->request->getVar('status_dosen')
        ];

        // Simpan data ke database menggunakan model
        $this->dosenModel->save($data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['dosen'] = $this->dosenModel->find($id);
        return view('dosen/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nidn' => 'required',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'email' => 'required',
            'status_dosen' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nidn' => $this->request->getVar('nidn'),
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'mata_kuliah' => $this->request->getVar('mata_kuliah'),
            'email' => $this->request->getVar('email'),
            'status_dosen' => $this->request->getVar('status_dosen')
        ];

        // Update data ke database menggunakan model
        $this->dosenModel->update($id, $data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil diperbarui.');
    }
    public function delete($id)
    {
        // Cek apakah data dosen dengan id yang diberikan ada
        $dosen = $this->dosenModel->find($id);
        if (!$dosen) {
            return redirect()->to('/dosen')->with('error', 'Data dosen tidak ditemukan.');
        }

        // Hapus data dosen dari database menggunakan model
        $this->dosenModel->delete($id);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil dihapus.');
    }
    public function view($id)
    {
        $data['dosen'] = $this->dosenModel->find($id);
        if (!$data['dosen']) {
            return redirect()->to('/dosen')->with('error', 'Data Dosen tidak ditemukan.');
        }
        return view('dosen/view', $data);
    }
}
