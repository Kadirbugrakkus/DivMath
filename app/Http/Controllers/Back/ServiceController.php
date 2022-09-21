<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use App\Models\ServiceCategoryModel;
use App\Models\ServiceContentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ServiceCategoryModel::orderBy('created_at', 'DESC')->get();
        return view('backend.services.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'min:3',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

        $category = new ServiceCategoryModel;
        $content = new  ServiceContentModel;
        $category->icon = $request->icon;
        $category->title = $request->category;
        $category->slug = Str::slug($request->category);
        $category->save();
        $content->title = $request->title;
        $content->text = $request->text;

        $content->slug = Str::slug($request->title);
        $content->servicesId = $category->id;
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $content->image = 'uploads/' . $imageName;
        }
        $content->save();
        toastr()->success('Hizmet başarıyla oluşturuldu...', 'Başarılı');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ServiceCategoryModel::findOrFail($id);
        $content = ServiceContentModel::findOrFail($id);
        return view('backend.services.edit', compact('category','content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'min:3',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

        $category = ServiceCategoryModel::findOrFail($id);
        $content = ServiceContentModel::findOrFail($id);
        $category->icon = $request->icon;
        $category->title = $request->category;
        $category->slug = Str::slug($request->category);
        $category->save();
        $content->title = $request->title;
        $content->text = $request->text;

        $content->slug = Str::slug($request->title);
        $content->servicesId = $category->id;
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $content->image = 'uploads/' . $imageName;
        }
        $content->save();
        toastr()->success('Hizmet başarıyla güncellendi...', 'Başarılı');
        return redirect()->route('services.index');
    }

    public function switch(Request $request)
    {
        $content = ServiceCategoryModel::findOrFail($request->id);
        $content->status = $request->statu == 'true' ? 1 : 0;
        $content->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        ServiceCategoryModel::find($id)->delete();
        toastr()->warning('İçerik Silinenlere Taşındı', 'Taşındı');
        return redirect()->route('services.index');
    }

    public function trashed()
    {
        $category = ServiceCategoryModel::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        return view('backend.services.trashed', compact('category'));
    }

    public function recover($id)
    {
        ServiceCategoryModel::onlyTrashed()->find($id)->restore();
        toastr()->success('Hizmet Başarıyla Kurtarıldı', 'Başarılı');
        return redirect()->route('services.trash');
    }

    public function hardDelete($id)
    {
        ServiceCategoryModel::onlyTrashed()->find($id);
        $hardDelete = ServiceContentModel::onlyTrashed()->find($id);
        if (File::exists($hardDelete->image))
        {
            File::delete(public_path($hardDelete->image));
        }
        $hardDelete->forceDelete();
        toastr()->error('Hizmet Kalıcı Olarak Silindi', 'Silindi');
        return redirect()->route('services.trash');
    }
}
