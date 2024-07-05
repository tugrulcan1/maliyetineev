<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\City;
use App\Models\Housing;
use App\Models\HousingStatus;
use App\Models\HousingType;
use App\Models\Menu;
use App\Models\Project;
use App\Models\ProjectHouseSetting;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index($slug){
        $menu = Menu::getMenuItems();
        $project = Project::where('slug',$slug)->firstOrFail();
        return view('client.projects.index',compact('menu','project'));
    }

    public function brandProjects($id){
        $menu = Menu::getMenuItems();
        $brand = Brand::where('id',$id)->first();
        return view('client.projects.brand_projects',compact('menu','brand'));
    }

    public function whatIsPage() {
        return view("client.whatIsPage");

    }

    public function projectList(Request $request){
        $projects = Project::orderBy('id');
        if($request->input("search")){
            $projects = $projects->where('project_title','LIKE','%'.$request->input('search').'%');
        }

        if($request->input("city_id")){
            $projects = $projects->where('city_id',$request->input("city_id"));
        }

        if($request->input("housing_type_id")){
            $projects = $projects->where('housing_type_id',$request->input("housing_type_id"));
        }

        $housingTypes = HousingType::where('active',1)->get();
        $housingStatus = HousingStatus::get();
        $cities = City::get();
        $projects = $projects->get();
        $menu = Menu::getMenuItems();

        // $topraktanProjeler = Project::where('project_type','Topraktan Projeler')->get();
        // $devamEdenProjeler = Project::where('project_type','Devam Eden Projeler')->get();
        // $bitmisProjeler    = Project::where('project_type','Bitmiş Projeler')->get();

        $satisiDevamEden    = Project::where('project_type','Satışı Devam Eden')->get();
        $satisiTamamlanmis  = Project::where('project_type','Satışı Tamamlanmış')->get();
        return view('client.projects',compact('menu','projects','housingTypes','housingStatus','cities','satisiDevamEden','satisiTamamlanmis'));
    }

    public function projectHousingDetail($projectSlug,$housingOrder){
        $menu = Menu::getMenuItems();
        $project = Project::where('slug',$projectSlug)->firstOrFail();
        $projectHousing = $project->roomInfo->keyBy('name');
        $projectHousingSetting = ProjectHouseSetting::where('house_type',$project->housing_type_id)->orderBy('order')->get();
        return view('client.projects.project_housing',compact('menu','project','housingOrder','projectHousingSetting','projectHousing'));
    }

    public function satisi_devam_eden(){
        $satisiDevamEden = Project::where('project_type','Satışı Devam Eden')->get();
        return view('client.projects.satisi_devam_eden',compact('satisiDevamEden'));
    }//End


    public function satisi_devam_eden_projelerimiz(){
        $satisiDevamEden = Project::where('project_type','Satışı Devam Eden')->get();
        return view('client.projects.satisi_devam_eden_projelerimiz',compact('satisiDevamEden'));
    }//End

    public function satisi_tamamlanmis(){
        $satisiTamamlanmis = Project::where('project_type','Satışı Tamamlanmış')->get();
        return view('client.projects.satisi_tamamlanmis',compact('satisiTamamlanmis'));
    }//End

}
