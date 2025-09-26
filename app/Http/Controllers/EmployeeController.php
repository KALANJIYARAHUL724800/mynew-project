<?php

namespace App\Http\Controllers;


use App\Services\EmployeeService;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{
    private $employeeService;
    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $this->employeeService->getEmployees();;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return $this->employeeService->createEmployee(($request->all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function insertData(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password' => 'required'
        ]);
        dd($validated,$validated['name']);
        return $request->all();
    }
}
