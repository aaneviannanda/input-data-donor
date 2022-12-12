<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Pendonor_data;
use App\Models\Pendonor_category;

class HomeClientController extends Controller
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
    
    public function indexHomeClient(){
        $id = Auth::id();
        $data = Pendonor_data::with(['categories'])->where('user_id',$id)->first();
        $categories = Pendonor_category::all();
        return view('client.home', compact('data', 'categories'));
    }

    public function update_user_data(Request $request){
        Pendonor_data::where('user_id', Auth::id())->update([
            'pendonor_category_id' => $request->pendonor_category_id,
            'card_number' => $request->card_number,
            'name' => $request->name,
            'gender' => $request->gender,
            'no_ktp_sim' => $request->no_ktp,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'profession' => $request->profession,
            'office_address' => $request->office_address,
            'office_phone_number' => $request->office_phone,
            'place_birth' => $request->place_birth,
            'date_birth' => $request->date_birth,
            'number_of_donors' => $request->number_donors
        ]);
        return redirect()->route('home');
    }
}
