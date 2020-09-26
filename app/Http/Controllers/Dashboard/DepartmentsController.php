<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DepartmentsController extends Controller
{
    public function index(){
        $data['title'] = "الأقسام";
        if(request()->ajax()){
            return datatables()->of(Departments::select([
                'DEPARTMENT_ID','DEPARTMENT_TEXT'
            ])
            )

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.departments-action')
            ->rawColumns(['status', 'action'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.departments.list',$data);
    }
    public function create(){
        $data['title'] = 'أضافه قسم';
        return view('dashboard.departments.add-edit', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $id = $request->DepartmentId;
        // dd($id);
        $data = $request->validate([
            'DEPARTMENT_TEXT' => 'required',
        ]);
        if(!empty($id)){
            Departments::where(array('id' => $id))->update($data);
            return Redirect::to("dashboard/departments")->withSuccess("تم تعديل المعلومات");
        }else{
            $departments_id = Departments::insertGetId($data);
            return Redirect::to("dashboard/departments")->withSuccess("تم اضافه المعلومات");
        }

    }

    public function edit(){

    }

    public function delete($id){
        $departments = Departments::findOrFail($id)->delete();
        return Redirect::to("dashboard/departments")->withSuccess("تم حذف المعلومات");
    }
}
