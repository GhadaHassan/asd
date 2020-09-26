<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mockery\Matcher\Subset;

class SubjectsController extends Controller
{
    public function index(){
        $data['title'] = "الماده الدراسيه";
        if(request()->ajax()){
            return datatables()->of(Subject::select([
                'SUBJECT_ID','SUBJECT_TEXT'
            ])
            )

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.subjects-action')
            ->rawColumns(['status', 'action'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.subjects.list',$data);
    }
    public function create(){
        $data['title'] = 'اضافه ماده دراسيه';
        return view('dashboard.subjects.add-edit', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $id = $request->DepartmentId;
        // dd($id);
        $data = $request->validate([
            'SUBJECT_TEXT' => 'required',
        ]);
        if(!empty($id)){
            Subject::where(array('id' => $id))->update($data);
            return Redirect::to("dashboard/subjects")->withSuccess("تم تعديل المعلومات");
        }else{
            $subjects_id = Subject::insertGetId($data);
            return Redirect::to("dashboard/subjects")->withSuccess("تم اضافه المعلومات");
        }

    }

    public function edit(){

    }

    public function delete($id){
        $subject = Subject::findOrFail($id)->delete();
        return Redirect::to("dashboard/subjects")->withSuccess("تم حذف المعلومات");
    }
}
