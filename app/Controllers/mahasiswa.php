<?php

namespace App\Controllers;

use App\Models\ModelMahasiswa;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new ModelMahasiswa();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswaModel->findAll();
        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function store()
    {
        $rules = [
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required|valid_email',
            'telepon' => 'required|max_length[15]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan'),
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon')
        ];

        $this->mahasiswaModel->save($data);

        return redirect()->to('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->find($id);
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required|valid_email',
            'telepon' => 'required|max_length[15]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan'),
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon')
        ];

        $this->mahasiswaModel->update($id, $data);

        return redirect()->to('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function delete($id)
    {
        $mahasiswa = $this->mahasiswaModel->find($id);
        if (!$mahasiswa) {
            return redirect()->to('/mahasiswa')->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        $this->mahasiswaModel->delete($id);

        return redirect()->to('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus.');
    }

    public function view($id)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->find($id);
        if (!$data['mahasiswa']) {
            return redirect()->to('/mahasiswa')->with('error', 'Data mahasiswa tidak ditemukan.');
        }
        return view('mahasiswa/view', $data);
    }
}
