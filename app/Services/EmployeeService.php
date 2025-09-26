<?php

namespace App\Services;

use App\Models\Employee;
class EmployeeService {
    public function getEmployees()
    {
        return Employee::all();
    }
    public function createEmployee($employee)
    {
        return Employee::create($employee);
    }
}
?>