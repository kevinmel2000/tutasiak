<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lecturer;
use Input, Session, Hash, Redirect;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $lecturers = Lecturer::all();
      return view('dashboard.admin.lecturer.index', ['lecturer' => $lecturers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admin.lecturer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $lecturers = new Lecturer;
      $lecturers->name = Input::get('name');
      $lecturers->address = Input::get('address');
      $lecturers->email = Input::get('email');
      $lecturers->password = Hash::make(Input::get('password'));
      $lecturers->active = Input::get('active');
      $lecturers->save();
      Session::flash('message', 'You have successfully added lecturer');
      return Redirect::to('dashboard/admin/lecturers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
