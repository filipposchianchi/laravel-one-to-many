<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
class MyController extends Controller
{
    //
    public function index() {

        $emps = Employee::all();
        return view("final.page", compact("emps"));
    }
}
