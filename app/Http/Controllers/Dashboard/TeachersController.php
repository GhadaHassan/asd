<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeachersController extends Controller
{
    public function index(){
        $data['title'] = "المدرسين";
        if(request()->ajax()){
            $q1 = Teacher::with('levels');
            $q2 = Teacher::with('subjects');
            $q3 = Teacher::with('services');
            return datatables()
            ->eloquent($q1,$q2,$q3)
            ->addColumn('levels', function(Teacher $teacher){
                return $teacher->levels->LEVEL_TEXT;
            })
            ->addColumn('subjects', function(Teacher $teacher){
                return $teacher->subjects->SUBJECT_TEXT;
            })
            ->addColumn('services', function(Teacher $teacher){
                return $teacher->services->SERVICE_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.techer-action')
            ->rawColumns(['status', 'action','levels','subjects','services'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.techer.list',$data);
    }

    public function delete($id){
        $techer = Teacher::findOrFail($id)->delete();
        return Redirect::to("dashboard/techer")->withSuccess("تم حذف المعلومات");
    }
}
