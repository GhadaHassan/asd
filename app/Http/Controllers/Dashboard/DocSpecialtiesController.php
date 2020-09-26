<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\DocSpecialties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DocSpecialtiesController extends Controller
{
    public function index(){
        $data['title'] = "تخصص الطبيب";
        if(request()->ajax()){
            return datatables()->of(DocSpecialties::select([
                'SPECIALT_ID','TEXT'
            ])
            )

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.docSpecialties-action')
            ->rawColumns(['status', 'action'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.docSpecialties.list',$data);
    }
    public function create(){
        $data['title'] = 'أضافه تخصص طبيب';
        return view('dashboard.docSpecialties.add-edit', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $id = $request->DepartmentId;
        // dd($id);
        $data = $request->validate([
            'TEXT' => 'required',
        ]);
        if(!empty($id)){
            DocSpecialties::where(array('id' => $id))->update($data);
            return Redirect::to("dashboard/docSpecialties")->withSuccess("تم تعديل المعلومات");
        }else{
            $docSpecialties_id = DocSpecialties::insertGetId($data);
            return Redirect::to("dashboard/docSpecialties")->withSuccess("تم اضافه المعلومات");
        }

    }

    public function edit(){

    }

    public function delete($id){
        $docSpecialties = DocSpecialties::findOrFail($id)->delete();
        return Redirect::to("dashboard/docSpecialties")->withSuccess("تم حذف المعلومات");
    }
}
