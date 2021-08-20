<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function addnewemployee(){
        return view('admin.addnewemployee');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:5'
        ]);

        $employee=new Employee(
            [
                'name'=>$request->get('name'),
                'email'=>$request->get('email'),
                'gender'=>$request->get('gender'),
                'address'=>$request->get('address'),
                'mobile'=>$request->get('mobile'),
                'password'=>Hash::make($request->get('password'))
            ]
            );
            $user=new User([
                'name'=>$request->get('name'),
                'email'=>$request->get('email'),
                'password'=>Hash::make($request->get('password')),
                'role'=>'emp'
            ]);

            $user->save();
            $employee->save();

            return redirect()->route('showemployeedetails')->with('success', "Register successfull");


    }
    public function showEmployeeName(){
        $currentUser=$_COOKIE['currentUser'];
        $employee=Employee::all()->where('email','=',$currentUser)->first();
        return view('employee.employeedetails', compact('employee'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('admin.viewemployeedetails', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.editEmployee', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $employee->update($request->all());
       return redirect()->route('showemployeedetails')->with('success','Product update Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee -> delete();
        return redirect()->route('showproductdetails')->with('success', "Product Delete SuccessFully");

    }
}
