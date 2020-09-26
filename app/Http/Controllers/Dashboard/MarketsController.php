<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Markets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MarketsController extends Controller
{
    public function index(){
        $data['title'] = "السوبر ماركيت";
        if(request()->ajax()){
            $q1 = Markets::with('users');
            $q2 = Markets::with('services');
            return datatables()
            ->eloquent($q1,$q2)
            ->addColumn('user', function(Markets $markets){
                return $markets->users->NAME;
            })
            ->addColumn('services', function(Markets $markets){
                return $markets->services->SERVICE_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.markets-action')
            ->rawColumns(['status', 'action','user','services'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.markets.list',$data);
    }

    public function delete($id){
        $markets = Markets::findOrFail($id)->delete();
        return Redirect::to("dashboard/markets")->withSuccess("تم حذف المعلومات");
    }
}
