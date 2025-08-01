<?php

// Pastikan baris ini adalah yang paling atas
namespace App\Controllers;

// Panggil model yang benar
use App\Models\OnlineCourseModel;

// Pastikan class extends BaseController
class Courses extends BaseController
{
    // READ: Menampilkan semua data pendaftaran
    public function index()
    {
        $model = new OnlineCourseModel();
        $data['pendaftaran'] = $model->orderBy('id', 'DESC')->findAll();

        return view('courses/index', $data);
    }

    // CREATE: Menampilkan form tambah pendaftaran
    public function create()
    {
        return view('courses/create');
    }

    // CREATE: Menyimpan data pendaftaran baru
    public function store()
    {
        $model = new OnlineCourseModel();
        $model->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'nama_kursus' => $this->request->getPost('nama_kursus'),
            'jumlah_pembayaran' => $this->request->getPost('jumlah_pembayaran'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'tanggal_pembayaran' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/courses');
    }

    // UPDATE: Menampilkan form edit pendaftaran
    public function edit($id)
    {
        $model = new OnlineCourseModel();
        $data['pendaftaran'] = $model->find($id);

        return view('courses/edit', $data);
    }

    // UPDATE: Memperbarui data pendaftaran di database
    public function update($id)
    {
        $model = new OnlineCourseModel();
        $model->update($id, [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'nama_kursus' => $this->request->getPost('nama_kursus'),
            'jumlah_pembayaran' => $this->request->getPost('jumlah_pembayaran'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
        ]);

        return redirect()->to('/courses');
    }

    // DELETE: Menghapus data pendaftaran
    public function delete($id)
    {
        $model = new OnlineCourseModel();
        $model->delete($id);

        return redirect()->to('/courses');
    }
}