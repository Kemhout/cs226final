<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StaffsController extends Controller
{
    function add_staff(Request $request) {
        $staff = DB::table('staffs')->insert([
            'vaccination_card' => $request->vaccination_card,
            'phone_number' => $request->phone_number,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'id_card' => $request->id_card,
            'created_at' => date("y-m-d h:i:s"),
            'updated_at' => date("y-m-d h:i:s")
        ]);
        if($staff == 1) {
            return redirect('/list_staffs');
        }
    }

    function list_staffs() {
        $staffs = DB::table("staffs")
        ->orderBy('created_at', 'asc')
        ->get();
        return view('list_staffs', compact('staffs'));
    }

    function delete_staffs($id) {
        $staff = DB::delete('delete from staffs where vaccination_card ='.$id);
        if($staff == 1) {
            return redirect('/list_staffs');
        }
    }

    function edit_staffs($id) {
        $staffs = DB::table("staffs")->where('vaccination_card', $id)->get();
        if($staffs[0]->vaccination_card == (int)$id) {
            return view('edit_staffs', compact('staffs'));
        }
    }

    function update_staffs($id, Request $request) {
        $staffs = DB::table('staffs')->where('vaccination_card', $request->vaccination_card)
        ->update([
            'phone_number' => $request->phone_number,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'id_card' => $request->id_card,
            'updated_at' => date("y-m-d h:i:s")
        ]);
        if($staffs == 1) {
            return redirect('/list_staffs');
        }
    }
}
