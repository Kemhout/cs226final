<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function add_students(Request $request) {
        $student = DB::table('student')->insert([
            'id_card' => $request->id_card,
            'phone_number' => $request->phone_number,
            'full_name' => $request->full_name,
            'grade' => $request->grade,
            'created_at' => date("y-m-d h:i:s"),
            'updated_at' => date("y-m-d h:i:s")
        ]);
        if($student == 1) {
            return redirect('/list_students');
        }
    }
    
    function list_students() {
        $student_info = DB::table("student_info")->pluck('student_card')->toArray();
        $students = DB::table("student")
        ->orderBy('id_card', 'asc')
        ->get();
        return view('list_students', compact('students', 'student_info'));
    }

    function edit_students($id) {
        $student = DB::table("student")->where('id_card', $id)->get();
        if($student[0]->id_card == (int)$id) {
            return view('edit_students', compact('student'));
        }
    }

    function update_students($id, Request $request) {
        $student = DB::table('student')->where('id_card', $request->id_card)
        ->update([
            'phone_number' => $request->phone_number,
            'full_name' => $request->full_name,
            'grade' => $request->grade,
            'updated_at' => date("y-m-d h:i:s")
        ]);
        if($student == 1) {
            return redirect('/list_students');
        }
    }

    function delete_students($id) {
        $student = DB::delete('delete from student where id_card ='.$id);
        if($student == 1) {
            return redirect('/list_students');
        }
    }

}
