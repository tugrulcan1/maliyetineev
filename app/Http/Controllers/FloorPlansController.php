<?php

namespace App\Http\Controllers;

use App\Models\FloorPlan;
use Illuminate\Http\Request;

class FloorPlansController extends Controller
{
    public function index(){
        $floorPlans = FloorPlan::all();

        return view('admin.floor_plans.index');
    }//End

    public function addFloorPlan(Request $request){

        // print_r($request->project_id);die;
         // Store the file in storage\app\public folder
         if($request->file){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->store('uploads', 'public');
         }
     

        $addedData = FloorPlan::create([
            'floor_plan' => $request->input('floor_plan'),
            'image'      => $filePath,
            'project_id' => $request->project_id
        ]);

        if($addedData){
            return redirect()->back()->with('success','Kat planı başarıyla eklendi.');
        }else{
            return redirect()->back()->with('danger','Kat planı eklenemedi.');
        }

    }//End
}
