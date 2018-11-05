<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\department;
use App\position;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employee = employee::all();
      return view('employee.employee', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = department::all();
        $position = position::all();
        return view('employee.tambah_employee', compact('department','position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new employee;
        $employee -> nama = $request -> nama;
        $employee -> jenis_kelamin = $request -> jenis_kelamin;
        $employee -> department_id = $request -> department;
        $employee -> position_id = $request -> position;
        $employee -> alamat = $request -> alamat;
        $employee -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $department = department::all();
      $position = position::all();
      $employee = employee::find($id);
      return view('employee.edit_employee', compact('employee','department','position'));
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
