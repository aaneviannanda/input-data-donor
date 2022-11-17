<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendonor_category;

class AdminCategoryController extends Controller
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
    
    public function indexAddPendonorCategory(){
        $data = Pendonor_category::all();
        return view('admin.view_addPendonorCategory', compact('data'));
    }

    public function insert_category(Request $request){
        $name = $request->name;
        Pendonor_category::create(['name' => $name]);
        return redirect()->route('admin.pendonorCategory');
    }

    public function update_category($id, Request $request){
        $name = $request->name;
        $category = Pendonor_category::find($id);
        $category->name = $name;
        $category->save();
        return redirect()->route('admin.pendonorCategory');
    }

    public function delete_category($id){
        Pendonor_category::find($id)->delete();
        return redirect()->route('admin.pendonorCategory');
    }
}
