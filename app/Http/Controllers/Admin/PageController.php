<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use App\Models\Project;
use Illuminate\Http\Request;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(CreatePageRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('sayfa_gorselleri', $fileName, 'public');

            $filePathUrl = asset('storage/' . $filePath);
            $validatedData['file'] = $filePathUrl;
        }

        $slug = Str::slug($validatedData['title']);
        $originalSlug = $slug;
        $counter = 1;

        while (Page::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validatedData['slug'] = $slug;

        Page::create($validatedData);

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully.');
    }

    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('sayfa_gorselleri', $fileName, 'public');

            $filePathUrl = asset('storage/' . $filePath);
            $validatedData['file'] = $filePathUrl;
        }
        // print_r($validatedData);die;


            $filePathUrl = asset('storage/' . $filePath);
            $validatedData['file'] = $filePathUrl;

        // print_r($validatedData);die;

        $slug = Str::slug($validatedData['title']);
        $originalSlug = $slug;
        $counter = 1;

        while (Page::where('slug', $slug)->where('id', '!=', $page->id)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validatedData['slug'] = $slug;

        $page->update($validatedData);

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully.');
    }

    public function projeBasvuruSurecleri(){
        $projects = Project::all();
        $data = DB::table('proje_basvuru_surecleri')->latest()->first();
        return view('admin.proje_basvuru_surecleri.index', compact('data','projects'));
    }//End

    public function projecBasvuruSurecleriEkle(Request $request){

        $proje_basvuru_sureci = DB::table('proje_basvuru_surecleri')->where('project_id', $request->project_id)->first();

        if($proje_basvuru_sureci){
            DB::table('proje_basvuru_surecleri')->update([
                'title_1'       => $request->title_1,
                'description_1' => $request->description_1,
                'title_2'       => $request->title_2,
                'description_2' => $request->description_2,
                'title_3'       => $request->title_3,
                'description_3' => $request->description_3,
                'title_4'       => $request->title_4,
                'description_4' => $request->description_4,
                'title_5'       => $request->title_5,
                'description_5' => $request->description_5,
                'updated_at'    => now()
            ]);

            return redirect()->back()->with('success','Başaryıla Güncellendi');

        }else{
            DB::table('proje_basvuru_surecleri')->insert([
                'project_id'    => $request->project_id,
                'title_1'       => $request->title_1,
                'description_1' => $request->description_1,
                'title_2'       => $request->title_2,
                'description_2' => $request->description_2,
                'title_3'       => $request->title_3,
                'description_3' => $request->description_3,
                'title_4'       => $request->title_4,
                'description_4' => $request->description_4,
                'title_5'       => $request->title_5,
                'description_5' => $request->description_5,
                'created_at'    => now()
            ]);
            return redirect()->back()->with('success','Başaryıla Eklendi.');

        }

    }//End


}
