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

        $project = Project::create([
            'project_title' => $request->input('project_title'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'image' => $dosyaAdi
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
        $floor_plans = FloorPlan::where('project_id',$project->id)->get();
        $kat_planlari = [];
        $kat_gorselleri = [];
            foreach($floor_plans as $floor_plan){
                $kat_planlari[] = $floor_plan->floor_plan;
                $kat_gorselleri[] = $floor_plan->image;
            }
        $project=Project::with('galleries')->where('id',$project->id)->first();     

        return view('client.projectsdetail', compact('project','kat_planlari','kat_gorselleri'));
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
    public function update(Request $request, Project $project)
    {
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
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'image' => $dosyaAdi
        ]);

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



}