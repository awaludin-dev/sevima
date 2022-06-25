<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\FileModel;
use App\Models\DiscussionModel;
use App\Models\DiscussionChatModel;

class Home extends BaseController
{
    protected $userModel, $fileModel, $discussionModel, $discussionChatModel;
    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->fileModel = new FileModel();
        $this->discussionModel = new DiscussionModel();
        $this->discussionChatModel = new DiscussionChatModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Udinesia'
        ];
        return view('index', $data);
    }
    public function profile()
    {
        $users = $this->userModel->where(['username' => session()->get('username')])->first();
        $data = [
            'judul' => 'Profile - Udinesia',
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
            'judul' => 'File Manager - Udinesia',
            'files' => $files
        ];
        return view('files', $data);
    }
    public function addFiles()
    {
        $data = [
            'judul' => 'Udinesia'
        ];
        return view('addFiles', $data);
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
    public function myDiscussion()
    {
        $discussions = $this->discussionModel->where(['owner_id' => session()->get('id')])->findAll();
        $data = [
            'judul' => 'My Discussion - Udinesia',
            'discussions' => $discussions
        ];
        return view('myDiscussion', $data);
    }
    public function discussion()
    {
        $discussions = $this->discussionModel->findAll();
        $data = [
            'judul' => 'Discussion - Udinesia',
            'discussions' => $discussions
        ];
        return view('discussion', $data);
    }
    public function addDiscussion()
    {
        $data = [
            'judul' => 'Add Discussion - Udinesia'
        ];
        return view('addDiscussion', $data);
    }
    public function addDiscussionProcess()
    {
        $this->discussionModel->save([
            'judul' => $this->request->getVar('judul'),
            'pengirim' => session()->get('name'),
            'isi' => $this->request->getVar('isi'),
            'owner_id' => session()->get('id'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambah!');

        return redirect()->to(base_url('myDiscussion'));
    }
    public function viewDiscussion($id)
    {
        $discussion = $this->discussionModel->where(['id' => $id])->first();
        $comments = $this->discussionChatModel->where(['discussion_id' => $id])->findAll();
        $data = [
            'judul' => $discussion->judul . ' - Udinesia',
            'discussion' => $discussion,
            'comments' => $comments
        ];
        return view('viewDiscussion', $data);
    }
    public function addComment()
    {
        $this->discussionChatModel->save([
            'pengirim' => $this->request->getVar('pengirim'),
            'isi' => $this->request->getVar('isi'),
            'discussion_id' => $this->request->getVar('discussion_id'),
            'owner_id' => session()->get('id'),
        ]);

        return redirect()->to(base_url('discussion'));
    }
    public function deleteDiscussion($id)
    {
        $comments = $this->discussionChatModel->where(['discussion_id' => $id])->findAll();
        $this->discussionModel->delete($id);
        foreach ($comments as $comment) {
            $this->discussionChatModel->delete($comment->id);
        }
        return redirect()->to(base_url('discussion'));
    }
    public function editDiscussion($id)
    {
        $discussion = $this->discussionModel->where(['id' => $id])->first();
        $data = [
            'judul' => 'Edit Discussion - Udinesia',
            'discussion' => $discussion
        ];
        return view('editDiscussion', $data);
    }
    public function editDiscussionProcess($id)
    {
        $this->discussionModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'pengirim' => session()->get('name'),
            'isi' => $this->request->getVar('isi'),
            'owner_id' => session()->get('id'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to(base_url('myDiscussion'));
    }
}
