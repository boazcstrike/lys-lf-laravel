<?php

namespace App\Http\Controllers;

use App\Employee_Type;
 
class Employee_TypeAPIController extends Controller
{
    public function index()
    {
        return Employee_Type::all();
    }
 
    public function show($id)
    {
        return Employee_Type::with(['employees'])->find($id);
    }

    public function store(Request $request)
    {
        return Employee_Type::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $employeeType = Employee_Type::findOrFail($id);
        $employeeType->update($request->all());

        return $employeeType;
    }

    public function delete(Request $request, $id)
    {
        $employeeType = Employee_Type::findOrFail($id);
        $employeeType->delete();

        return 204;
    }
}