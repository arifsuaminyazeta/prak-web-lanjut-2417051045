<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

   public function create()
    {
        $kelas = $this->kelasModel->all(); 
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        
        return view('layouts.create_user', $data); 
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'), // Menggunakan 'npm', bukan 'nim'
            'kelas_id' => $request->input('kelas_id'),
        ]);
        
        return redirect()->to('/user');
    }
}