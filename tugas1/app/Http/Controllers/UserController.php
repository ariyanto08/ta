<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function index(){
        $data['list_admin'] = Admin::all();
        return view('content.admin.index', $data);
    }
    function create(){
        return view('content.admin.create');
    }
    function store()
    {
        $user = new Admin();
        $user->username = request('username');
        $user ->password = bcrypt (request('password'));
        $user->save();

        return redirect('admin')->with('success', 'Data Berhasil Ditambahkan');
    }
    function edit(Admin $user)
    {
        $data['admin'] =  $user;
        return view('content.admin.edit', $data);
    }
    function update(Admin $user)
    {
        $user->username = request('username');
        if(request('password')) $user ->password = bcrypt (request('password'));
        $user->save();

        return redirect('admin')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Admin $user)
    {
        $user->delete();
        return redirect('admin')->with('danger', 'Data Berhasil Dihapus');
    }
}
