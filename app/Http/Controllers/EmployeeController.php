<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    public function employees()
    {
        $data = Employee::all();
        return view('employees',['employees'=>$data]);
    }

    public function addemployee()
    {
        $data = \request()->validate([
            'Employeename'=>'required',
            'Employeeposition'=>'required',
            'Phonenumber'=>'required',
            'Phonenumber'=>'required',
            'Email'=>'required',
            'Hiredate'=>'required',
            'Salary'=>'required',
        ]);

        $employee = new employee();
        $employee->ename = $data['Customername'];
        $employee->eposition = $data['Phonenumber'];
        $employee->ephone = $data['Deliveryloc'];
        $employee->eemail = $data['Productname'];
        $employee->hdate = $data['Productquantity'];
        $employee->salary = $data['Productprice'];
        $employee->save();

        return back();

    }
}
