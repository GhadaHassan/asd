<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Restaurants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RestaurantsController extends Controller
{
    public function index(){
        $data['title'] = "المطاعم";
        if(request()->ajax()){
            $q1 = Restaurants::with('users');
            $q2 = Restaurants::with('services');
            return datatables()
            ->eloquent($q1,$q2)
            ->addColumn('user', function(Restaurants $restaurants){
                return $restaurants->users->NAME;
            })
            ->addColumn('services', function(Restaurants $restaurants){
                return $restaurants->services->SERVICE_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.restaurants-action')
            ->rawColumns(['status', 'action','user','services'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.restaurants.list',$data);
    }

    public function delete($id){
        $restaurants = Restaurants::findOrFail($id)->delete();
        return Redirect::to("dashboard/restaurants")->withSuccess("تم حذف المعلومات");
    }
}
