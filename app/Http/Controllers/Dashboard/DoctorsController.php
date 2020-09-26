<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Comment\Doc;

class DoctorsController extends Controller
{
    public function index(){
        $data['title'] = "الأطباء";
        if(request()->ajax()){
            $q1 = Doctors::with('specialt');
            $q2 = Doctors::with('degree');
            return datatables()
            ->eloquent($q1,$q2)
            ->addColumn('degree', function(Doctors $doctors){
                return $doctors->degree->TEXT;
            })
            ->addColumn('specialt', function(Doctors $doctors){
                return $doctors->specialt->TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.doctors-action')
            ->rawColumns(['status', 'action','degree','specialt'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.doctors.list',$data);
    }

    public function delete($id){
        $doctors = Doctors::findOrFail($id)->delete();
        return Redirect::to("dashboard/doctors")->withSuccess("تم حذف المعلومات");
    }
}
