<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
class StudentsController extends Controller
{
    public function register(){

        $url=url('/register');
        $title="Student Registration";
        $data=compact('url','title');
        return view('form')->with($data);
    }


    public function registerform(Request $request){

        // echo "<pre>";
        // print_r($request->all());

        $students = new Students;

        $students->sname=$request['name'];
        $students->email=$request['email'];
        $students->gender=$request['gender'];
        $students->address=$request['address'];
        $students->dob=$request['dob'];
        $students->password=md5($request['password']);
        $students->points=$request['points'];
        $students->save();

        return redirect('/students');
    }

    public function students(){
       
        $students = Students::all();
        $data = compact('students');     
        return view('students')->with($data);
    }

    public function delete($id){
        $student = Students::find($id);
        if(!is_null($student)){
            $student->delete();
        }
        return redirect('/students');
    }

    public function edit($id){

        $student = Students::find($id);
        if(is_null($student)){
            return redirect('students');
        }
        else{

            $url=url('/students/update').'/'.$id;
            $title="Update Record";
            $student = Students::find($id);
            $data=compact('student','url','title');
            return view('form')->with($data);
        }
    }

    public function update($id , Request $request){
        $student = Students::find($id);
        $student->sname=$request['name'];
        $student->email=$request['email'];
        $student->gender=$request['gender'];
        $student->address=$request['address'];
        $student->dob=$request['dob'];
        $student->points=$request['points'];
        $student->save();
        return redirect('/students');

    } 
}
