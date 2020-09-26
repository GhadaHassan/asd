<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\DocDegrees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DocDegreesController extends Controller
{
    public function index(){
        $data['title'] = "درجه الطبيب";
        if(request()->ajax()){
            return datatables()->of(DocDegrees::select([
                'DEGREES_ID','TEXT'
            ])
            )

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.docDegrees-action')
            ->rawColumns(['status', 'action'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.docDegrees.list',$data);
    }
    public function create(){
        $data['title'] = 'أضافه درجه طبيب';
        return view('dashboard.docDegrees.add-edit', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $id = $request->DepartmentId;
        // dd($id);
        $data = $request->validate([
            'TEXT' => 'required',
        ]);
        if(!empty($id)){
            DocDegrees::where(array('id' => $id))->update($data);
            return Redirect::to("dashboard/docDegrees")->withSuccess("تم تعديل المعلومات");
        }else{
            $docDegreess_id = DocDegrees::insertGetId($data);
            return Redirect::to("dashboard/docDegrees")->withSuccess("تم اضافه المعلومات");
        }

    }

    public function edit(){

    }

    public function delete($id){
        $docDegrees = DocDegrees::findOrFail($id)->delete();
        return Redirect::to("dashboard/docDegrees")->withSuccess("تم حذف المعلومات");
    }
}
