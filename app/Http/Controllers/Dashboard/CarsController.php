<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarsController extends Controller
{
    //  show - delete

    public function index(){
        $data['title'] = "المواصلات";
        if(request()->ajax()){
            $q1 = Car::with('users');
            $q2 = Car::with('services');
            return datatables()
            ->eloquent($q1,$q2)
            ->addColumn('user', function(Car $cars){
                return $cars->users->NAME;
            })
            ->addColumn('services', function(Car $cars){
                return $cars->services->SERVICE_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.cars-action')
            ->rawColumns(['status', 'action','user','services'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.cars.list',$data);
    }

    public function delete($id){
        $cars = Car::findOrFail($id)->delete();
        return Redirect::to("dashboard/cars")->withSuccess("تم حذف المعلومات");
    }
}
