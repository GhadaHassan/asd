<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Levels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LevelsController extends Controller
{
    public function index(){
        $data['title'] = "المرحله الدراسيه";
        if(request()->ajax()){
            return datatables()->of(Levels::select([
                'LEVEL_ID','LEVEL_TEXT'
            ])
            )

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.levels-action')
            ->rawColumns(['status', 'action'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.levels.list',$data);
    }
    public function create(){
        $data['title'] = 'أضافه مرحله دراسيه';
        return view('dashboard.levels.add-edit', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $id = $request->DepartmentId;
        // dd($id);
        $data = $request->validate([
            'LEVEL_TEXT' => 'required',
        ]);
        if(!empty($id)){
            Levels::where(array('id' => $id))->update($data);
            return Redirect::to("dashboard/levels")->withSuccess("تم تعديل المعلومات");
        }else{
            $levels_id = Levels::insertGetId($data);
            return Redirect::to("dashboard/levels")->withSuccess("تم اضافه المعلومات");
        }

    }

    public function edit(){

    }

    public function delete($id){
        $levels = Levels::findOrFail($id)->delete();
        return Redirect::to("dashboard/levels")->withSuccess("تم حذف المعلومات");
    }
}
