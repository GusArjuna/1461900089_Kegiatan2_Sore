<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\DataGuru;
use App\Models\DataSiswa;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        $studentselect = DataGuru::select('nama_guru', 'nip')->get();
        $studentw = DataGuru::where('nama_guru', '=', 'Budi Setiawan')->get();
        $studentjoin = DataSiswa::join('data_guru', 'wali_kelas', '=', 'nama_guru')->get();
        $studentjoinlike = DataSiswa::join('data_guru', 'wali_kelas', '=', 'nama_guru')
            ->where('nama_guru', 'like', 'Budi Setiawan')->get();
        return view(
            'home0089',
            [
                'student' => $student,
                'studentw' => $studentw,
                'studentselect' => $studentselect,
                'studentjoin' => $studentjoin,
                'studentjoinlike' => $studentjoinlike
            ]
        );
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
