<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UsersModel();
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
        // $fileSampul = $this->request->getFile('sampul');
        // dd($fileSampul);
        // if ($fileSampul->getError() == 4) {
        //     $namaSampul = $this->request->getVar('photoLama');
        // } else {
        //     dd($namaSampul = $fileSampul->getName());
        //     if ($namaSampul != 'profile.jpg') {
        //         $fileSampul->move('img');
        //     }
        //     // hapus file lama
        //     unlink('img/' . $this->request->getVar('photoLama'));
        // }

        $this->userModel->save([
            'id' => session()->get('id'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'name' => $this->request->getVar('name'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            // 'photo' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to(base_url());
    }
    public function files()
    {
        return view('files');
    }
}
