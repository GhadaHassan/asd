<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Clothes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClothesController extends Controller
{
    public function index(){
        $data['title'] = "الملابس";
        if(request()->ajax()){
            $q1 = Clothes::with('users');
            $q2 = Clothes::with('services');
            return datatables()
            ->eloquent($q1,$q2)
            ->addColumn('user', function(Clothes $clothes){
                return $clothes->users->NAME;
            })
            ->addColumn('services', function(Clothes $clothes){
                return $clothes->services->SERVICE_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.clothes-action')
            ->rawColumns(['status', 'action','user','services'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.clothes.list',$data);
    }

    public function delete($id){
        $clothes = Clothes::findOrFail($id)->delete();
        return Redirect::to("dashboard/clothes")->withSuccess("تم حذف المعلومات");
    }
}
