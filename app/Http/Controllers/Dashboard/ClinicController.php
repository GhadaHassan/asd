<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Clinics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClinicController extends Controller
{
    public function index(){
        $data['title'] = "العيادات";
        if(request()->ajax()){
            $q1 = Clinics::with('users');
            $q2 = Clinics::with('services');
            return datatables()
            ->eloquent($q1,$q2)
            ->addColumn('user', function(Clinics $clinics){
                return $clinics->users->NAME;
            })
            ->addColumn('services', function(Clinics $clinics){
                return $clinics->services->SERVICE_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.clinic-action')
            ->rawColumns(['status', 'action','user','services'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.clinic.list',$data);
    }

    public function delete($id){
        $clinic = Clinics::findOrFail($id)->delete();
        return Redirect::to("dashboard/clinic")->withSuccess("تم حذف المعلومات");
    }
}
