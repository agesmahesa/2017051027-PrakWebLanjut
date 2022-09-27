<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;
use PhpParser\Node\Expr\FuncCall;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa/list', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Mahasiswa'
        ];

        return view('mahasiswa/create');
    }

    public function store()
    {
        $mahasiswaModel = new Mahasiswa();
        if (!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $data = [
            //disesuaikan sama kayak yang di database, jadi harus sama 
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $mahasiswaModel->save($data);

        return redirect()->to('/mahasiswa');
    }
    public function delete($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswaModel = new Mahasiswa();

        $data = [
            'title' => 'Edit Mahasiswa',
            "mahasiswa" => $mahasiswaModel->find($id)
        ];

        return view('mahasiswa/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ])) {
            return redirect()->to('/edit/' . $id);
        }
        $mahasiswaModel = new Mahasiswa();
        $data = [
            //disesuaikan sama kayak yang di database, jadi harus sama 
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];
        $mahasiswaModel->update($id, $data);

        return redirect()->to('/mahasiswa');
    }
}
