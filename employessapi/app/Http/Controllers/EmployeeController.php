<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    protected $employees;

    public function __construct(){
        $this->employees = new Employee();
    }

    /**
     * Display a listing of the employees.
     */
    public function index()
    {
        return $this->employees->all();

    }

    /**
     * Store a newly created employee in storage.
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([

        //     'firstLastName' => ['required', 'regex:/^[A-Z]+$/u', 'max:20'],
        //     'secondLastName' => ['required', 'regex:/^[A-Z]+$/u', 'max:20'],
        //     'firstName'=> ['required', 'regex:/^[A-Z]+$/u', 'max:20'],
        //     'otherNames'=> ['nullable', 'regex:/^[A-Z]+$/u', 'max:50'],
        //     'country' => ['required', 'integer'],
        //     'typeid' => ['required', 'integer'],
        //     'email' => ['required', 'email', 'max:300'],
        //     'datei' => [
        //         'required',
        //         function ($attribute, $value, $fail) {
        //             $currentDate = now();
        //             $maxDate = $currentDate->subMonth();
        //             if ($value > $currentDate || $value < $maxDate) {
        //                 $fail('The date must be between ' . $maxDate->toDateString() . ' and ' . $currentDate->toDateString());
        //             }
        //         },
        //     ],
        //     'area' => ['required', 'integer'],
        // ]);

        // $status = '1';

        // $tms = now()->format('d/m/Y H:i:s');

        // $domain = ($validatedData['country'] === '1') ? 'global.com.co' : 'global.com.us';

        // $email_format = strtolower($validatedData['firstName'] . '.' . $validatedData['firstLastName']);

        // $check = Employee::where('email', 'LIKE', $email_format . '%@%')->count();
        
        // $email = ($check > 0) ? $email_format . '.' . ($check + 1) : $email_format;

        // $email .= '@' . $domain;

        // $validatedData['email'] = $email;

        // $employee = new Employee();
        // $employee->firstLastName = $validatedData['firstLastName'];
        // $employee->secondLastName = $validatedData['secondLastName'];
        // $employee->firstName = $validatedData['firstName'];
        // $employee->otherNames = $validatedData['otherNames'];
        // $employee->country = $validatedData['country'];
        // $employee->typeid = $validatedData['typeid'];
        // $employee->id_number = $validatedData['id_number'];
        // $employee->email = $validatedData['email'];
        // $employee->datei = $validatedData['datei'];
        // $employee->area = $validatedData['area'];
        // $employee->status = $status;

        // $employee->save();

        // return redirect('/employees')->with('success', 'Employee record created successfully!');

        return $this->employees->create($request->all());
    }

    /**
     * Display the specified employee.
     */
    public function show(string $id)
    {
        // $employee = Employee::findOrFail($id);

        // return redirect()->route('employee.show', ['employee'=> $employee]);

        $employees = $this->employees->find($id);
        return $employees;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validatedData = $request->validate([
        //     'firstLastName' => ['required', 'regex:/^[A-Z]+$/u', 'max:20'],
        //     'secondLastName' => ['required', 'regex:/^[A-Z]+$/u', 'max:20'],
        //     'firstName' => ['required', 'regex:/^[A-Z]+$/u', 'max:20'],
        //     'otherNames' => ['nullable', 'regex:/^[A-Z]+$/u', 'max:50'],
        //     'country' => ['required', 'integer'],
        //     'typeid' => ['required', 'integer'],
        //     'id_number' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'email', 'max:300'],
        //     'datei' => [
        //         'required',
        //         function ($attribute, $value, $fail) {
        //             $currentDate = now();
        //             $maxDate = $currentDate->subMonth();
        //             if ($value > $currentDate || $value < $maxDate) {
        //                 $fail('The date must be between ' . $maxDate->toDateString() . ' and ' . $currentDate->toDateString());
        //             }
        //         },
        //     ],
        //     'area' => ['required', 'integer'],
        // ], [
        //     'firstLastName.required' => 'The first last name field is required.',
        //     'firstLastName.regex' => 'The first last name field must contain only uppercase letters.',
        // ]);
    
        // // Update the Employee record
        // $employee = Employee::findOrFail($id);
        // $employee->update($validatedData);
    
        // return redirect('/employees')->with('success', 'Record updated successfully!');

        $employees = $this->employees->find($id);
        $employees->update($request->all());
        return $employees;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Employee::findOrFail($id)->delete();

        // return redirect('/employees')->with('success', 'Record deleted successfully!');

        $employees = $this->employees->find($id);
        return $employees->delete();
    }
}
