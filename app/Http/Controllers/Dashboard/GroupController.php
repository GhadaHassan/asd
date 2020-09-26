<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Levels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GroupController extends Controller
{
    public function index(){
        $data['title'] = "الصوف الدراسيه";
        if(request()->ajax()){
            $q = Group::with('levels');
            return datatables()
            ->eloquent($q)
            ->addColumn('levels', function(Group $group){
                return $group->levels->LEVEL_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.groups-action')
            ->rawColumns(['status', 'action','levels'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.groups.list',$data);
    }
    public function create(){
        $data['title'] = 'أضافه صف دراسى';
        $data['levels'] = Levels::all();
        return view('dashboard.groups.add-edit', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $id = $request->DepartmentId;
        // dd($id);
        $data = $request->validate([
            'LEVEL_ID' => 'sometimes|nullable|numeric',
            'GROUP_TEXT' => 'required'
        ]);
        if(!empty($id)){
            Group::where(array('id' => $id))->update($data);
            return Redirect::to("dashboard/groups")->withSuccess("تم تعديل المعلومات");
        }else{
            $groups_id = Group::insertGetId($data);
            return Redirect::to("dashboard/groups")->withSuccess("تم اضافه المعلومات");
        }

    }

    public function edit(){

    }

    public function delete($id){
        $groups = Group::findOrFail($id)->delete();
        return Redirect::to("dashboard/groups")->withSuccess("تم حذف المعلومات");
    }
}
