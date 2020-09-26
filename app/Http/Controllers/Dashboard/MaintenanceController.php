<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MaintenanceController extends Controller
{
    public function index(){
        $data['title'] = "مراكز الصيانه";
        if(request()->ajax()){
            $q2 = Maintenance::with('services');
            return datatables()
            ->eloquent($q2)
            ->addColumn('services', function(Maintenance $maintenance){
                return $maintenance->services->SERVICE_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.maintenance-action')
            ->rawColumns(['status', 'action','services'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.maintenance.list',$data);
    }

    public function delete($id){
        $maintenance = Maintenance::findOrFail($id)->delete();
        return Redirect::to("dashboard/maintenance")->withSuccess("تم حذف المعلومات");
    }
}
