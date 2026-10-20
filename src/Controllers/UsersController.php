<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $title = 'users';
        $users = User::all();
        view('users/index', compact('title', 'users'));
    }
        public function view()
    {
        $users = User::find($_GET['id']);
        if ($users) {
            return view('users/view', compact('User'));
        }
        echo 404;
    }

    public function edit()
    {
        $users = User::find($_GET['id']);
        if ($users) {
            return view('users/edit', compact('User'));
        }
        echo 404;
    }

    public function update()
    {
        $users = User::find($_GET['id']);
        if ($users) {
            $users->title = $_POST['title'];
            $users->body = $_POST['body'];
            $users->category = $_POST['category'];
            $users->author = $_POST['author'];
            $users->save();
            return redirect('/admin/users');
        }
        echo 404;
    }

    public function delete()
    {
        $users = User::find($_GET['id']);
        if ($users) {
            $users->delete();
            return redirect('/admin/users');
        }
        echo 404;
    }
}