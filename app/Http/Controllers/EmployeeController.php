<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(){
        $employee = Employee::all();
        return view('home.home',compact('employee'));
    }
    public function storeEmployee(Request $request){
        $employee = Employee::create($request->all());
        return redirect()->route('home');
    }
}
