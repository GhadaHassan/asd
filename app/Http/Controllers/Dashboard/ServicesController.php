<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Departments;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ServicesController extends Controller
{
    public function index(){
        $data['title'] = "الخدمات";
        if(request()->ajax()){
            $q = Services::with('departments');
            return datatables()
            ->eloquent($q)
            ->addColumn('department', function(Services $services){
                return $services->departments->DEPARTMENT_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.services-action')
            ->rawColumns(['status', 'action','department'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.services.list',$data);
    }
    public function create(){
        $data['title'] = 'أضافه خدمه';
        $data['departments'] = Departments::all();
        return view('dashboard.services.add-edit', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $id = $request->DepartmentId;
        // dd($id);
        $data = $request->validate([
            'DEPARTMENT_ID' => 'sometimes|nullable|numeric',
            'SERVICE_TEXT' => 'required'
        ]);
        if(!empty($id)){
            Services::where(array('id' => $id))->update($data);
            return Redirect::to("dashboard/services")->withSuccess("تم تعديل المعلومات");
        }else{
            $services_id = Services::insertGetId($data);
            return Redirect::to("dashboard/services")->withSuccess("تم اضافه المعلومات");
        }

    }

    public function edit(){

    }

    public function delete($id){
        $departments = Services::findOrFail($id)->delete();
        return Redirect::to("dashboard/services")->withSuccess("تم حذف المعلومات");
    }
}
