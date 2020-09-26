<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;

class UsersController extends Controller
{
    public function index(){
        $data['title'] = "المستخدمين";
        if(request()->ajax()){
            return datatables()->of(User::select([
                'USER_ID','NAME','ROLE','PHONE'
            ])
            )

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.users-action')
            ->rawColumns(['status', 'action'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.users.list',$data);
    }

    public function create(){

        $data['title'] = 'ADD USER';
        return view('dashboard.users.add-edit', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $id = $request->userId;
        // dd($request->userId);
        $data = $request->validate([
            'NAME' => 'required',
            'ROLE' => 'required',
            'PASSWORD' => 'required',
            'PHONE' => 'required',
        ]);

        if(!empty($request->PASSWORD)){
            $data['PASSWORD'] = bcrypt($request->get('PASSWORD'));
        }else{
            unset($data['PASSWORD']);
        }
        // unset($data['authorization']);
        if (!empty($id)) {
            User::where(array('id' => $id))->update($data);
            return Redirect::to("dashboard/users")->withSuccess("GREAT INFO HAS BEEN UPDATED");
        } else {

            // $data['authorization'] = $request->authorization;
            // $data['created_at'] = date('Y-m-d H:i:s');
            $user_id = User::insertGetId($data);
            return Redirect::to("dashboard/users")->withSuccess("GREAT INFO HAS BEEN CREATED");
        }
    }
}
