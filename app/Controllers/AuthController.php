<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Firebase;
use Exception;
use CodeIgniter\I18n\Time;

class AuthController extends BaseController
{
    private $firebaseAuth;
    private $firestore;

    public function __construct()
    {
        $firebase = new Firebase();
        $this->firebaseAuth = $firebase->getAuth();
        $this->firestore = $firebase->getFirestore();  // Get Firestore client
    }

    // Display the registration form
    public function register()
    {
        return view('auth/register');
    }

    // Process the sign-up form submission
    public function processSignup()
{
    // Get the form data
    $firstName = $this->request->getPost('first_name');
    $surname = $this->request->getPost('surname');
    $email = $this->request->getPost('email');
    $phone = $this->request->getPost('phone');
    $dob = $this->request->getPost('dob');
    $gender = $this->request->getPost('gender');
    $password = $this->request->getPost('password');

    // Validate the form data
    if (empty($firstName) || empty($surname) || empty($email) || empty($phone) || empty($dob) || empty($gender) || empty($password)) {
        return redirect()->back()->with('error', 'All fields are required!');
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return redirect()->back()->with('error', 'Invalid email format.');
    }

    try {
        // Create the user in Firebase Authentication
        $user = $this->firebaseAuth->createUserWithEmailAndPassword($email, $password);
        $uid = $user->uid;

        // Prepare the user data to be stored in Firestore
        $userDocument = $this->firestore->collection('users')->document($uid); // Create a document for each user

        // Data to store in Firestore (fields like first_name, surname, etc.)
        $userData = [
            'first_name' => $firstName,
            'surname' => $surname,
            'email' => $email,
            'phone' => $phone,
            'dob' => $dob,
            'gender' => $gender,
            'created_at' => Time::now()->toDateTimeString(),  // Store the current timestamp
        ];

        // Store the user data in Firestore
        $userDocument->set($userData);  // This will create the document and store the data

        // Check if the document was created successfully
        $document = $userDocument->snapshot();
        if ($document->exists()) {
            log_message('info', 'User data saved to Firestore: ' . json_encode($document->data()));
        } else {
            log_message('error', 'Failed to create Firestore document for user: ' . $uid);
        }

        // Redirect to the login page with a success message
        return redirect()->to('/login')->with('success', 'Sign-up successful! You can now log in.');

    } catch (Exception $e) {
        // Handle any exceptions (e.g., Firebase Authentication or Firestore errors)
        log_message('error', 'Error in sign-up process: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
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
        // Get the form data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validate that the fields are not empty
        if (empty($email) || empty($password)) {
            return redirect()->back()->with('error', 'Email and Password are required!');
        }

        try {
            // Attempt to sign in the user with Firebase Authentication
            $user = $this->firebaseAuth->signInWithEmailAndPassword($email, $password);

            // Store the user session upon successful login
            session()->set([
                'user_id' => $user->uid,  // Save the user UID in the session
                'user_email' => $email,   // Save the user email in the session
                'logged_in' => true        // Set logged-in flag to true
            ]);

            // Redirect to the dashboard or homepage
            return redirect()->to('/dashboard')->with('success', 'Login successful!');

        } catch (Exception $e) {
            // Handle any errors during login (e.g., invalid credentials)
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // Logout functionality
    public function logout()
    {
        // Remove user session
        session()->remove(['user_id', 'user_email', 'logged_in']);

        // Redirect to the login page with success message
        return redirect()->to('/login')->with('success', 'You have logged out successfully.');
    }
}
