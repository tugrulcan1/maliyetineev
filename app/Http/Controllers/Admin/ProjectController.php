<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FloorPlan;
use App\Models\Galery;
use App\Models\HousingStatus;
use App\Models\HousingType;
use App\Models\Project;
use App\Models\ProjectHousings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use Darryldecode\Cart\Validators\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy("created_at", "desc")->get();
        $galery = Galery::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $housing_types = HousingType::all();
        $housing_status = HousingStatus::all();
        return view('admin.projects.create', ['housing_types' => $housing_types, 'housing_status' => $housing_status]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $allDatas = $request->all();
    //     $vData = $request->validate([
    //         'project_title' => 'required|string',
    //         'description' => 'required|string|max:128',
    //         'image' => 'required',
    //     ]);
    //     $projectId = Project::create($vData);

    //     return redirect()->route('admin.projects.create')->with('success', 'Project and housings created successfully');
    // }



    public function store(Request $request)
    {
        $request->validate([
            'project_title' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'image' => 'required',
        ]);

        $dosya = $request->file('image');



        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if (!$dosya || !$dosya->isValid()) {
            return redirect()->back()->with('error', 'Geçerli bir dosya seçin.');
        }

        // Dosyayı yükleme klasörüne kaydetme
        $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
        $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet

        $details = [];
        for ($i = 1; $i <= 4; $i++) {
            $detailTitle = $request->input("project_detail_title$i");
            $detailTitle2 = $i . '. ADIM';
            $detailDescription = $request->input("detail_description$i");
            $details[] = [
                'title' => $detailTitle2,
                'sub_title' => $detailTitle,
                'description' => $detailDescription
            ];
        }
        
        $detailsJson = json_encode($details);

        if($request->hasFile('cover_image')){
            $file = $request->file('cover_image');
            $coverImagefileName = time() . '_' . $file->getClientOriginalName(); // Benzersiz dosya adı oluştur
            $file->move(public_path('projects_cover_image'), $coverImagefileName);
        }

        $project = Project::create([
            'project_title' => $request->input('project_title'),
            'project_sub_title' => $request->input('project_sub_title'),
            'description' => $request->input('description'),
            'project_type' => $request->input('project_type'),
            'slug' => $request->input('slug'),
            'image' => $dosyaAdi,
            'details' => $detailsJson,
            'konum'   =>$request->input('konum'),
            'cover_image' => $coverImagefileName
        ]);

        $galleries = $request->file('gallery');

        if (count($galleries) > 0) {
            foreach ($galleries as $key => $gallery) {
                // Dosyayı yükleme klasörüne kaydetme
                $galleryAdi = $gallery->getClientOriginalName(); // Dosya adını alın
                $gallery->move(public_path('uploads'), $galleryAdi); // Dosyayı uploads klasörüne kaydet
                Galery::create([
                    "image" => $galleryAdi,
                    "project_id" => $project->id
                ]);
            }
        }


        return redirect()->route('admin.projects.index')
            ->with('success', 'Proje başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project=Project::with('galleries')->where('id',$project->id)->first(); 
        $floorPlans = DB::table('floor_plans')
            ->where('project_id', $project->id)
            ->get();    
        return view('client.projectsdetail', compact('project','floorPlans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $project = Project::with("galleries")->where("id", $project->id)->first();
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project){
        $validator = Validator::make($request->all(), [
            'project_title' => 'required',
            'description' => 'required',
            'slug' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.projects.edit', $project->id)
                ->withErrors($validator)
                ->withInput();
        }

        $dosya = $request->file('image');
        $dosyaAdi = $project->image;

        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if ($dosya) {
            // Dosyayı yükleme klasörüne kaydetme
            $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
            $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet
        }

        $details = [];
        for ($i = 1; $i <= 4; $i++) {
            $detailTitle = $request->input("project_detail_title$i");
            $detailDescription = $request->input("detail_description$i");
            $details[] = [
                'title' => $detailTitle,
                'description' => $detailDescription
            ];
        }

        $detailsJson = json_encode($details);

        $galleries = $request->file('gallery');
        if ($galleries && count($galleries) > 0) {
            foreach ($galleries as $key => $gallery) {
                // Dosyayı yükleme klasörüne kaydetme
                $galleryAdi = $gallery->getClientOriginalName(); // Dosya adını alın
                $gallery->move(public_path('uploads'), $galleryAdi); // Dosyayı uploads klasörüne kaydet
                Galery::create([
                    "image" => $galleryAdi,
                    "project_id" => $project->id
                ]);
            }
        }

        $project->update([
            'project_title' => $request->input('project_title'),
            'project_sub_title' => $request->input('project_sub_title'),
            'project_type' => $request->input('project_type'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'image' => $dosyaAdi,
            'details' => $detailsJson,
            'konum'   =>$request->input('konum')
        ]);

        // Floor Plans güncelleme işlemi
        $floorPlansData = $request->input('floor_plans');
        if ($floorPlansData) {
            foreach ($floorPlansData as $floorPlanId => $floorPlanValue) {
                $floorPlan = FloorPlan::findOrFail($floorPlanId);
                $floorPlan->update(['floor_plan' => $floorPlanValue]);
            }
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proje başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */


    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proje başarıyla silindi.');
    }

    public function deleteGallery($id)
{
    $gallery = Galery::find($id);

    if(!$gallery) {
        return response()->json(['message' => 'Gallery not found'], 404);
    }

    // Görseli fiziksel olarak diskten de sil
    if(File::exists(public_path('uploads/' . $gallery->image))) {
        File::delete(public_path('uploads/' . $gallery->image));
    }

    $gallery->delete();

    return response()->json(['message' => 'Gallery deleted successfully'], 200);
}

    public function addProjectFloorPlan(Request $request){
        // print_r($request->all());die;

        $request->validate([
            'project_id' => 'required|integer',
            'floor_plan' => 'required|string',
            'file' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // $fileName = null;

          if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('kat_plani'), $fileName);
        }    

        $addedProjectFloorPlan = DB::table('floor_plans')->insert([
            'project_id' => $request->input('project_id'),
            'floor_plan' => $request->input('floor_plan'),
            'image_path' => $fileName
        ]);

        if($addedProjectFloorPlan){
            return redirect()->back()->with('success','Kat planı başarıyla eklendi.');
        }else{
            return redirect()->back()->with('danger','Kat planı eklenirken hata!');
        }


    }//End

}