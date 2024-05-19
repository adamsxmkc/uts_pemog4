<?php

namespace App\Controllers;

use App\Models\ModelPegawai;

class Pegawai extends BaseController
{
    protected $pegawaiModel;

    public function __construct()
    {
        $this->pegawaiModel = new ModelPegawai();
    }

    public function index()
    {
        $data['pegawai'] = $this->pegawaiModel->findAll();
        return view('pegawai/index', $data);
    }

    public function create()
    {
        return view('pegawai/create');
    }

    public function store()
    {
        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'departement' => 'required',
            'jabatan' => 'required',
            'email' => 'required|valid_email',
            'telephone' => 'required|max_length[20]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'departement' => $this->request->getVar('departement'),
            'jabatan' => $this->request->getVar('jabatan'),
            'email' => $this->request->getVar('email'),
            'telephone' => $this->request->getVar('telephone')
        ];

        $this->pegawaiModel->save($data);

        return redirect()->to('/pegawai')->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['pegawai'] = $this->pegawaiModel->find($id);
        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'departement' => 'required',
            'jabatan' => 'required',
            'email' => 'required|valid_email',
            'telephone' => 'required|max_length[20]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'departement' => $this->request->getVar('departement'),
            'jabatan' => $this->request->getVar('jabatan'),
            'email' => $this->request->getVar('email'),
            'telephone' => $this->request->getVar('telephone')
        ];

        $this->pegawaiModel->update($id, $data);

        return redirect()->to('/pegawai')->with('success', 'Data pegawai berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pegawai = $this->pegawaiModel->find($id);
        if (!$pegawai) {
            return redirect()->to('/pegawai')->with('error', 'Data pegawai tidak ditemukan.');
        }

        $this->pegawaiModel->delete($id);

        return redirect()->to('/pegawai')->with('success', 'Data pegawai berhasil dihapus.');
    }

    public function view($id)
    {
        $data['pegawai'] = $this->pegawaiModel->find($id);
        if (!$data['pegawai']) {
            return redirect()->to('/pegawai')->with('error', 'Data pegawai tidak ditemukan.');
        }
        return view('pegawai/view', $data);
    }
}
