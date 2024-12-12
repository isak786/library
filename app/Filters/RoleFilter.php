<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Implement your role-checking logic here
        $userRole = session()->get('role'); // Example: retrieving role from session

        if (!in_array($userRole, $arguments)) {
            return redirect()->to('/login'); // Redirect if the role doesn't match
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing here
    }
}
