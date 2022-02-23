<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\DB;

class StudentInfoController extends Controller
{
    function index($id) {
        $student = DB::table("student")->where('id_card', $id)->get();
        if($student[0]->id_card == (int)$id) {
            return view('studentInfo/add_students_info', compact('student'));
        }
    }
    
    function list_students_info($id) {
        $students = DB::table("student_info")
        ->where('student_card', $id)
        ->get();
        return view('studentInfo/list_students_info', compact('students'));
    }

    function add_students_info($id, Request $request) {
        $student = DB::table('student_info')->insert([
            'student_card' => $request->student_card,
            'parent_name' => $request->parent_name,
            'parent_phone' => $request->parent_phone,
            'scholarship' => $request->scholarship,
            'enroll_date' => $request->enroll_date,
            'created_at' => date("y-m-d h:i:s"),
            'updated_at' => date("y-m-d h:i:s")
        ]);
        if($student == 1) {
            return redirect('/list_students');
        }
    }

    function edit_students_info($id) {
        $student = DB::table("student_info")->where('student_card', $id)->get();
        if($student[0]->student_card == (int)$id) {
            return view('studentInfo/edit_students_info', compact('student'));
        }
    }

    function update_students_info($id, Request $request) {
        $student = DB::table('student_info')->where('student_card', $request->student_card)
        ->update([
            'parent_name' => $request->parent_name,
            'parent_phone' => $request->parent_phone,
            'scholarship' => $request->scholarship,
            'enroll_date' => $request->enroll_date,
            'updated_at' => date("y-m-d h:i:s")
        ]);
        // if($student == 1) {
        //     return redirect("/list_students");
        // }
    }

    function delete_students_info($id) {
        $student = DB::delete('delete from student_info where student_card ='.$id);
        if($student == 1) {
            return redirect('/list_students');
        }
    }
}
