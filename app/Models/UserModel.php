<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';         // Table name
    protected $primaryKey = 'id';       // Primary key
    protected $allowedFields = [        // Fields allowed for insert/update
       'first_name', 'surname', 'email', 'phone', 'dob', 'gender', 'role', 'password', 'created_at', 'updated_at'
    ];
}
