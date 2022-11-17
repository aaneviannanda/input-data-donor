<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendonor_category;
use App\Models\Pendonor_data;



class AdminPendonorDataController extends Controller
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
    
    public function indexAddPedonorData(){
        $categories = Pendonor_category::all();
        $data_donor = Pendonor_data::all();
        $pendonors = Pendonor_data::with(['categories'])->paginate(15);
        return view('admin.view_addPendonorData', compact('categories', 'data_donor'));
    }

    public function insert_pendonors_data(Request $request){
        Pendonor_data::create([
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
        return redirect()->route('admin.pendonorData');
    }
    
    public function update_pendonors_data($id, Request $request) {
        $pendonor_data = Pendonor_data::find($id);

        // Set Value
        $pendonor_data->pendonor_category_id = $request->pendonor_category_id;
        $pendonor_data->card_number = $request->card_number;
        $pendonor_data->name = $request->name;
        $pendonor_data->gender = $request->gender;
        $pendonor_data->no_ktp_sim = $request->no_ktp;
        $pendonor_data->address = $request->address;
        $pendonor_data->phone_number = $request->phone_number;
        $pendonor_data->profession = $request->profession;
        $pendonor_data->office_address = $request->office_address;
        $pendonor_data->office_phone_number = $request->office_phone;
        $pendonor_data->place_birth = $request->place_birth;
        $pendonor_data->date_birth = $request->date_birth;
        $pendonor_data->number_of_donors = $request->number_donors;

        $pendonor_data->save();
        return redirect()->route('admin.pendonorData');
    }

    public function delete_pendonors_data($id) {
        Pendonor_data::find($id)->delete();
        return redirect()->route('admin.pendonorData');
    }

}
