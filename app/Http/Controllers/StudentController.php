<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Validator;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student  = Student::all();
      
        return view('dashBordStudent.home' );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashBordStudent.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
        [
            "departement"=>'required',
            "name"   =>'required',
            "ratio"  =>'required',
            "father"  =>'required',
            "mother"  =>'required',
            "total" => 'required',

        ]);


        $student  = new  Student();
        $student->departement = $request->departement;
        $student->name  = $request->name;
        $student->ratio  = $request->ratio;
        $student->father  = $request->father;
        $student->father_job  = $request->father_job;
        $student->mother  = $request->mother;
        $student->place_and_number_of_registration  = $request->place_and_number_of_registration;
        $student->place_of_birth  = $request->place_of_birth;
        $student->place_Get_the_certificate  = $request->place_Get_the_certificate;
        $student->total  = $request->religion;
        $student->religion  = $request->gender;
        $student->city  = $request->language;
        $student->gender  = $request->exam_session;
        $student->language  = $request->exam_session;
        $student->exam_session  = $request->city;
        $student->teacher  = $request->family;
        $student->family  = $request->recruitment_division;
        $student->recruitment_division  = $request->national_number;
        $student->national_number  = $request->date_of_birth;
        $student->date_of_birth  = $request->mobile_phone_number;
        $student->mobile_phone_number  = $request->landline_number;
        $student->landline_number = $request->date_of_registration;
        $student->detailed_address  = $request->detailed_address;
        $student->date_of_registration = $request->date_of_registration;
        $student->save();
        // dd($request->all());


       return redirect()->back();
        



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit( $idt)
    {
        $student  =  Student::find($id);
        return view('dashBordStudent.edit'   , compact($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $this->validate($request , 
        [
            "name"   =>'required',
            "ratio"  =>'required',
            "father"  =>'required',
            "father_job"  =>'required',
            "mother"  =>'required',
            "place_and_number_of_registration"  =>'required',
            "place_of_birth"  =>'required',
            "place_Get_the_certificate"  =>'required',
            "total" => 'required',
            "religion"  =>'required',
            "city"  =>'required',
            "gender" => 'required',
            "language"  => 'required',
            "exam_session"=>'required',
            "teacher"  =>'required',
            "family"  =>'required',
            "recruitment_division"  =>'required',
            "national_number"  =>'required',
            "date_of_birth"  =>'required',
            "mobile_phone_number"  =>'required',
            "landline_number"  =>'required',
            'detailed_address'=>'requred',
            "date_of_registration"  =>'required',
        ]);

        $student->name  = $request->name;
        $student->ratio  = $request->ratio;
        $student->father  = $request->father;
        $student->father_job  = $request->father_job;
        $student->mother  = $request->mother;
        $student->place_and_number_of_registration  = $request->place_and_number_of_registration;
        $student->place_of_birth  = $request->place_of_birth;
        $student->place_Get_the_certificate  = $request->place_Get_the_certificate;
        $student->religion  = $request->religion;
        $student->gender  = $request->gender;
        $student->city  = $request->city;
        $student->family  = $request->family;
        $student->recruitment_division  = $request->recruitment_division;
        $student->national_number  = $request->national_number;
        $student->date_of_birth  = $request->date_of_birth;
        $student->mobile_phone_number  = $request->mobile_phone_number;
        $student->landline_number  = $request->landline_number;
        $student->date_of_registration = $request->date_of_registration;
        $student->detailed_address  = $request->detailed_address;

        // $student->save();
        dd($request->all());




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student  =Student::find($id);
        $student->delete();
         return redirect()->back();
    }





//  Trashed Prooduct  Student

public function trashed()
{
    $student = Student::onlyTrashed()->get();
    return view('dashBordStudent.trashed' , compact('stident'));

}


public function restoer($id)
{
    $student =  Stident::withTrashed()->where('id'  , $id)->first();
    $student->restoer();
    return redirect()->back();

}

public  function DeleteEnd($id)
{
    $student =  Stident::withTrashed()->where('id'  , $id)->first();
    $student->forceDelete();
    return redirect()->back();
}

}