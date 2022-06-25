<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\FileModel;

class Home extends BaseController
{
    protected $userModel, $fileModel;
    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->fileModel = new FileModel();
    }
    public function index()
    {
        return view('index');
    }
    public function profile()
    {
        $users = $this->userModel->where(['username' => session()->get('username')])->first();
        $data = [
            'users' => $users
        ];
        return view('profile', $data);
    }
    public function updateProfile()
    {
        $fileSampul = $this->request->getFile('sampul');
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('photoLama');
        } else {
            $namaSampul = $fileSampul->getName();
            if ($namaSampul != 'profile.jpg') {
                $fileSampul->move('img');
            }
            // hapus file lama
            unlink('img/' . $this->request->getVar('photoLama'));
        }

        $this->userModel->save([
            'id' => session()->get('id'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'name' => $this->request->getVar('name'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'photo' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to(base_url());
    }
    public function files()
    {
        $files = $this->fileModel->where(['id_owner' => session()->get('id')])->findAll();
        $data = [
            'files' => $files
        ];
        return view('files', $data);
    }
    public function addFiles()
    {
        return view('addFiles');
    }
    public function addFilesProcess()
    {
        $file = $this->request->getFile('file');
        $fileName = $file->getRandomName();
        $file->move('assets/upload/', $fileName);
        $this->fileModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => explode(".", $fileName)[0],
            'file' => $fileName,
            'id_owner' => session()->get('id'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to(base_url('files'));
    }
    public function deleteFiles($id)
    {
        $file = $this->fileModel->find($id);
        // hapus file
        unlink('assets/upload/' . $file->file);

        $this->fileModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to(base_url('files'));
    }
}
