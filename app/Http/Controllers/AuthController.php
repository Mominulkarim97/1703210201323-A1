<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class AuthController extends Controller
{
	public function add(){
		return view('add_employee');
	}    
	public function get(Request $req){
		$name = $req->name;
		$email = $req->email;
		$dob = $req->dob;
		$salary=$req->salary;
		$gender=$req->gender;
		$status=$req->status;
		$obj = new Employee();
		$obj->name = $name;
		$obj->email= $email;
		$obj->date_of_birth = $dob;
		$obj->salary = $salary;
		$obj->gender = $gender;
		$obj->status= $status;
		if($obj->save()){
			return redirect()->to('/show');
		}
	}
	public function show(){
		$employee = Employee::all();
		return view('employee',['employee'=>$employee]);
	}
}

