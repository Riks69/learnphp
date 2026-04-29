<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function view()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            redirect('/users');
            return;
        }
        
        $user = User::find($id);
        if (!$user) {
            redirect('/users');
            return;
        }
        
        view('users/view', compact('user'));
    }

    public function edit()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            redirect('/users');
            return;
        }
        
        $user = User::find($id);
        if (!$user) {
            redirect('/users');
            return;
        }
        
        view('users/edit', compact('user'));
    }

    public function update()
    {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            redirect('/users');
            return;
        }
        
        $user = User::find($id);
        if (!$user) {
            redirect('/users');
            return;
        }
        
        $user->email = $_POST['email'];
        
        // Kui parool on sisestatud, siis uuenda seda
        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }
        
        $user->save();
        redirect('/users/view?id=' . $user->id);
    }

    public function delete()
    {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            redirect('/users');
            return;
        }
        
        $user = User::find($id);
        if (!$user) {
            redirect('/users');
            return;
        }
        
        $user->delete();
        redirect('/users');
    }
}