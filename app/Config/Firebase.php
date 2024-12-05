<?php

namespace Config;

use Kreait\Firebase\Factory;
use Google\Cloud\Firestore\FirestoreClient;

class Firebase
{
    private $auth;
    private $firestore;

    public function __construct()
    {
        // Path to Firebase service account key
        $serviceAccountPath = WRITEPATH . 'firebase-service-account.json';

        // Initialize Firebase authentication
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccountPath);
        $this->auth = $firebase->createAuth();

        // Initialize Firestore with the service account
        $this->firestore = new FirestoreClient([
            'keyFilePath' => $serviceAccountPath,
        ]);
    }

    public function getAuth()
    {
        return $this->auth;
    }

    public function getFirestore()
    {
        return $this->firestore;
    }
}
