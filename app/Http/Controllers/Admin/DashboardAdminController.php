<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendonor_data;
use Illuminate\Support\Collection;

class DashboardAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexDashboardAdmin(){
        return view('admin.index');
    }

    public function getChartData(){
        $pendonor_data = Pendonor_data::all();
        $data = collect($pendonor_data);
        $month_data = [];
        foreach($data as $value){
            $month = date("m", strtotime($value->created_at));
            array_push($month_data, ['bulan' => $month, 'data' => $value]);
        };
        $count_data = [];
        for($i=0; $i<12; $i++){
            $count_pendonor = collect($month_data)->where('bulan', $i+1)->count('bulan');
            array_push($count_data, ['bulan' => $i+1, 'total' => $count_pendonor]);
        }

        $chart_data = json_encode($count_data);
        return $chart_data;
    }
}
