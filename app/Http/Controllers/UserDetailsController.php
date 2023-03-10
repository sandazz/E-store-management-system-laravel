<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.admin.createEmployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        UserDetails::create($request->all());
        return redirect()->route('user.showEmployee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function show($userDetails)
    {
        $employee['details'] = UserDetails::find($userDetails);
        return view('users.admin.showEmployee')->with($employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($userDetails)
    {

        $employee['details'] = UserDetails::find($userDetails);

        return view('users.admin.updateEmployee')->with($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $userDetails)
    {
       $user = UserDetails::find($userDetails);
       $user -> update($request->all());
       return redirect()->route('user.showEmployee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($userDetails)
    {
        $user = UserDetails::find($userDetails);
        $user->delete();
        return redirect()->route('user.showEmployee');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function loginCheck(Request $request){

        $email = $request->email;
        $password = $request->password;
        $user = UserDetails::where('email','=',$email)->first();
        if($user){
            if($user->password == $password){
                if($user->role == 'admin'){
                    return redirect()->route('user.admin');
                }
                if($user->role == 'employee'){
                    return redirect()->route('user.employee');
                }
                if($user->role == 'customer'){
                    return redirect()->route('user.customer');
                }
                dd('wrong');
            }else{
                dd('not correct');
            }
        }
        else{
            dd("invalid user");
        }
    }

    public function admin()
    {
        return view('users.admin.dash');
    }
    public function employee()
    {
        return view('users.employee.dash');
    }
    public function customer()
    {
        return view('users.customer.dash');
    }

    public function showEmployee()
    {
        $response['employees'] = UserDetails::all()->where('role','=','employee');
        return view('users.admin.employeeView')->with($response);
    }
}
