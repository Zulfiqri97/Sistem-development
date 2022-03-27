<?php

namespace App\Controllers;

class User extends BaseController
{

    public function index()
    {
        // untuk mencetak user yang terdaftar
        // $data['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        // return view('admin/index', $data);
        return view('admin/index');
    }
}
