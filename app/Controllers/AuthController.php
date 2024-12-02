<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\I18n\Time;

class AuthController extends BaseController
{
    private $db;

    public function __construct()
    {
        // Load the database connection
        $this->db = \Config\Database::connect();
    }

    // Display the registration form
    public function register()
    {
        return view('auth/register');
    }

    // Process the sign-up form submission
    public function processSignup()
    {
        // Get form data
        $firstName = $this->request->getPost('first_name');
        $surname = $this->request->getPost('surname');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $dob = $this->request->getPost('dob');
        $gender = $this->request->getPost('gender');
        $password = $this->request->getPost('password');

        // Validate form data
        if (empty($firstName) || empty($surname) || empty($email) || empty($phone) || empty($dob) || empty($gender) || empty($password)) {
            return redirect()->back()->with('error', 'All fields are required!');
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Invalid email format.');
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            // Insert user into the database
            $builder = $this->db->table('users');
            $userData = [
                'first_name' => $firstName,
                'surname' => $surname,
                'email' => $email,
                'phone' => $phone,
                'dob' => $dob,
                'gender' => $gender,
                'password' => $hashedPassword,
                'role' => 'guest', // Default role for new users
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $builder->insert($userData);

            // Redirect to login page with success message
            return redirect()->to('/')->with('success', 'Sign-up successful! You can now log in.');

        } catch (DataException $e) {
            // Log and handle any exceptions
            log_message('error', 'Error in sign-up process: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: Unable to register user.');
        }
    }

    // Display the login form
    public function login()
    {
        return view('auth/login');
    }

    // Process the login form submission
    public function processLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (empty($email) || empty($password)) {
            return redirect()->back()->with('error', 'Email and Password are required!');
        }

        try {
            // Retrieve user from the database
            $builder = $this->db->table('users');
            $user = $builder->where('email', $email)->get()->getRow();

            if ($user && password_verify($password, $user->password)) {
                // Set session data including the user's role
                session()->set([
                    'user_id' => $user->id,
                    'user_email' => $user->email,
                    'user_role' => $user->role, // Fetch the user's role
                    'logged_in' => true,
                ]);

                return redirect()->to('/contracts')->with('success', 'Login successful!');
            } else {
                return redirect()->back()->with('error', 'Invalid email or password.');
            }

        } catch (DataException $e) {
            // Log and handle any exceptions
            log_message('error', 'Error in login process: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: Unable to log in.');
        }
    }

    // Logout functionality
    public function logout()
    {
        session()->remove(['user_id', 'user_email', 'user_role', 'logged_in']);
        return redirect()->to('/login')->with('success', 'You have logged out successfully.');
    }

    // Delete account functionality
    public function deleteAccount()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'You need to log in to delete your account.');
        }

        $userId = session()->get('user_id');

        try {
            $builder = $this->db->table('users');
            $builder->where('id', $userId)->delete();

            // Clear session and redirect
            session()->destroy();
            return redirect()->to('/')->with('success', 'Your account has been deleted successfully.');
        } catch (DataException $e) {
            log_message('error', 'Error in delete account process: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: Unable to delete account.');
        }
    }

    // Change password functionality
    public function changePassword()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'You need to log in to change your password.');
        }

        return view('auth/change_password');
    }

    public function processChangePassword()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'You need to log in to change your password.');
        }

        $userId = session()->get('user_id');
        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
            return redirect()->back()->with('error', 'All fields are required.');
        }

        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('error', 'New password and confirmation do not match.');
        }

        try {
            $builder = $this->db->table('users');
            $user = $builder->where('id', $userId)->get()->getRow();

            if ($user && password_verify($currentPassword, $user->password)) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                $builder->where('id', $userId)->update(['password' => $hashedPassword, 'updated_at' => Time::now()]);
                return redirect()->to('/')->with('success', 'Your password has been changed successfully.');
            } else {
                return redirect()->back()->with('error', 'Current password is incorrect.');
            }

        } catch (DataException $e) {
            log_message('error', 'Error in change password process: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: Unable to change password.');
        }
    }
}

/*if (session()->get('user_role') !== 'admin') {
    return redirect()->to('/unauthorized')->with('error', 'You do not have permission to access this page.');
}
*/