<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
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
        return view('studentData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
        ]);

        $check = Student::where(['id'=>$request->name,'country_id'=>$request->name, 'class_id'=>$request->name ])->first();

        if($check)
        {
            return redirect()->back()->with('failed','Student Details Already Exist');
        }

        // $studentData = Student::orderBy('id','desc')->first();
        // $id = $studentData  ? ("rihal" . sprintf('%04u', ($studentData->id + 1))  ) : ("rihal" . sprintf('%04u', 1));
        

        $id = $request->id;
        $name = $request->name;
        $date_of_birth = $request->date_of_birth;

        $studentData = new Student;
        $studentData->id=$id;
        $studentData->name =  $name;
        $studentData->date_of_birth =  $date_of_birth;
        $studentData->save();
        return redirect()->back()->with('success','Student Details Successfully Add');
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
