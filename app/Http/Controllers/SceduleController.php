<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\user;
use App\Models\Scedule;

class SceduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data tgl sekarang ini gunakan untuk pengecekan agar setiap karyawan tidak bisa absen 2 kali setiap /tgl
        $idEmployees = session('idEmployees');
        $tglSekarang = date('y-m-d');
        // kirim data karyawan untuk melakukan absen berdasarkan id tabel dan tgl
        $data['scedules'] = employee::leftjoin('scedules', 'scedules.idEmployees', '=', 'employees.id')
            ->where('scedules.idEmployees', $idEmployees)
            ->Where('scedules.date', $tglSekarang)
            ->first(['employees.*', 'scedules.id as idScedule', 'scedules.IN', 'scedules.Out', 'Scedules.date']);
        return view('scedules.index', $data);
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

        if ($request->idScedule == null) {
            $request->validate([
                'IN' => 'required',
                'location_In' => 'required'
            ]);
            $idEmployee = session('idEmployees');
            Scedule::create([
                'date' => date('y-m-d'),
                'IN' => $request->IN,
                'location_In' => $request->location_In,
                'idEmployees' => $idEmployee
            ]);
            return redirect('/scedule')->with('success', 'absensi berhasil');
        } else {

            $request->validate([
                'Out' => 'required',
                'location_Out' => 'required'

            ]);
            $idEmployee = session('idEmployees');
            Scedule::where('idEmployees', $idEmployee)
                ->update([
                    'Out' => $request->Out,
                    'location_Out' => $request->location_Out
                ]);
            return redirect('/scedule')->with('success', 'absensi berhasil');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $idEmployees = session('idEmployees');
        $data['scedules'] = Scedule::leftjoin('employees', 'employees.id', '=', 'scedules.idEmployees')
            ->where('scedules.idEmployees', $idEmployees)
            ->get(['employees.*', 'scedules.*']);
        return view('scedules.history', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}