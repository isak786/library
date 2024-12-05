<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Admin extends Controller {
    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel(); // Load UserModel
        helper(['url', 'form']);           // Load URL and Form helpers
    }

    // Admin Dashboard: List all users
    public function index() {
        $data['users'] = $this->userModel->findAll(); // Fetch all users
        return view('admin/dashboard', $data);       // Pass data to the view
    }

    // Render Add User Form
    public function addUser() {
        return view('admin/addUser');
    }

    // Save New User
    public function saveUser() {
        $data = [



            'first_name' =>$this->request->getPost('first_name'),
           'surname'  => $this->request->getPost('surname'),
           'email'  => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'dob' => $this->request->getPost('dob'),
            'gender' => $this->request->getPost('gender'),
            'password' => $this->request->getPost('password'),
            'role'=> $this->request->getPost('role')
           
        ];
        $this->userModel->insert($data);
        return redirect()->to('admin');
    }

    // Render Edit User Form
    public function editUser($id) {
        $data['user'] = $this->userModel->find($id); // Fetch user by ID
        return view('admin/editUser', $data);
    }

    // Update User
    public function updateUser($id) {
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'surname'    => $this->request->getPost('surname'),
            'email'      => $this->request->getPost('email'),
            'phone'      => $this->request->getPost('phone'),
            'dob'        => $this->request->getPost('dob'),
            'gender'     => $this->request->getPost('gender'),
            'role'       => $this->request->getPost('role'),
        ];
    
        // Only update the password if the field is not empty
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
    
        // Update the user
    if ($this->userModel->update($id, $data)) {
        return redirect()->to('/admin')->with('message', 'User updated successfully');
    } else {
        return redirect()->back()->with('error', 'Failed to update user');
    }
}
    
    // Delete User
    public function deleteUser($id) {
        $this->userModel->delete($id);
        return redirect()->to('/admin');
    }
}

