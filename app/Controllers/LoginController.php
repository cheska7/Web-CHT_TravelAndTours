<?php
namespace App\Controllers;

use App\Models\Employee;
use Symfony\Component\Routing\RouteCollection;

class LoginController {

    public function validateLogin(int $id, RouteCollection $routes) {
        $employee = new Employee();
        $employee->read($id);
        
        require_once APP_ROOT . '/views/Login-view.php';
    }
}
