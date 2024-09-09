<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function inputname()
    {
        return view('form/inputusername');
    }
    public function getid()
    {
        return view('form/getid');
    }
    public function inputuser()
    {
        $UserModel = new \App\Models\UserTable();
        $data = [
            'name' => $this->request->getPost('name'),
            'password' => $this->request->getPost('password'),
        ];        
        $UserModel->save($data);        
        return redirect()->to('input')->with('message', 'Success');        
    }
}
