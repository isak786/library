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
        $serviceAccountPath = WRITEPATH . 'firebase-service-account.json';
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccountPath);
        
        $this->auth = $firebase->createAuth();
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
