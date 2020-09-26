<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Transports;
use Illuminate\Http\Request;
use Illuminate\Mail\Transport\Transport;
use Illuminate\Support\Facades\Redirect;

class TransportsController extends Controller
{
    public function index(){
        $data['title'] = "النقل";
        if(request()->ajax()){
            $q2 = Transports::with('services');
            return datatables()
            ->eloquent($q2)
            ->addColumn('services', function(Transports $transport){
                return $transport->services->SERVICE_TEXT;
            })

            ->addIndexColumn()
            ->addColumn('action','dashboard.datatable.transport-action')
            ->rawColumns(['status', 'action','services'])
            ->make(true);
        }
        // dd(User::all());
        return view('dashboard.transport.list',$data);
    }

    public function delete($id){
        $transport = Transports::findOrFail($id)->delete();
        return Redirect::to("dashboard/transport")->withSuccess("تم حذف المعلومات");
    }
}
