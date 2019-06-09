<?php

namespace App\Http\Controllers;

use App\Employee;
 
class EmployeeAPIController extends Controller
{
    public function index()
    {
        return Employee::all();
    }
 
    public function show($id)
    {
        return Employee::with(['employeeType'])->find($id);
    }

    public function store(Request $request)
    {
        return Employee::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return $employee;
    }

    public function delete(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return 204;
    }
}