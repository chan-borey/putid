<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class IdController extends BaseController
{
    public function chooseID()
    {
        $id = $this->request->getPost('id');
        // $name = $this->request->getPost('name');
        // // $UserModel = new \App\Models\UserTable();
        // $id = filter_var($id, FILTER_SANITIZE_STRING);
        // $name = filter_var($name, FILTER_SANITIZE_STRING);


        // if ($id === $name) {
        //     return redirect()->to(base_url('ID/' . $id . '/' . $name));
        // }

        return redirect()->to(base_url('ID/'.$id));
    }
    public function ID($id)
    {
        // $id = filter_var($id, FILTER_SANITIZE_STRING);
        // $name = filter_var($name, FILTER_SANITIZE_STRING);

        $UserModel = new \App\Models\UserTable();
        $data = $UserModel->find($id);
        // $data = $UserModel->find($name);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("No Username ID $id not found.");
        }

        // Extract specific fields
        $viewData = [
            'id' => $id, // Pass the ID as well
            'name' => $data['name'],
            'password' => $data['password']
        ];

        return view('form/viewID', $viewData);

    }
    // public function back($id)
    // {
    //     return view('form/back');
    // }
    public function update($id)
    {
        $UserModel = new \App\Models\UserTable();

        // Retrieve the data from the request
        $data = [
            'name' => $this->request->getPost('name'),
            'password' => $this->request->getPost('password')
        ];

        // Update the record
        $UserModel->update($id, $data);

        // Redirect to a success page or back to the edit page
        return redirect()->to('getid')->with('status', 'item updated successfully');
    }

}
