<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\employee;
use Illuminate\Support\Facades\hash;
use App\Models\user;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login/registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nipEmployees' => 'required|unique:employees|size:10',
            'phoneNumber' => 'required|unique:employees',
            'fullName' => 'required',
            'domicile' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:4',

        ]);
        employee::create($validation);
        //mengambil id tebesar untuk di masukan kedalam table users
        $idEmployee = DB::table('employees')->max('id');
        user::create([
            'idEmployees' => $idEmployee,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);
        return redirect('/registrasi')->with('success', 'Registration successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sigIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',

        ]);
        //mengambil data dari dua tabel untuk set sessions
        $user = DB::table('users')
            ->leftJoin('employees', 'employees.id', '=', 'users.idEmployees')
            ->where('users.email', '=', $request->email)->first();
        //pengecekan user
        if (!empty($user)) {
            //cek password
            if (Hash::check($request->password, $user->password)) {
                session([
                    "login" => true,
                    "idEmployees" => $user->id,
                    "fullName" => $user->fullName,
                    "email" => $user->email,
                    "nipEmployees" => $user->nipEmployees,
                ]);
                return redirect('/');
            } else {
                return redirect('/login')->with('warning', 'Password wrong!!');
            }
        } else {
            return redirect('/login')->with('error', 'Not Registered Please Register');
        }
    }
    public function logOut()
    {
        session()->flush();
        return redirect('/login');
    }
}