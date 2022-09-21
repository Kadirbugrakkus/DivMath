<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use App\Models\BlogcategoryModel;
use App\Models\TeamsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = BlogModel::orderBy('created_at', 'DESC')->get();
        return view('backend.blog.index', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogcategoryModel::all();
        $teams = TeamsModel::all();
        return view('backend.blog.create', compact('categories','teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'min:3',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

        $content = new BlogModel;
        $content->title = $request->title;
        $content->category_id = $request->category;
        $content->content = $request->icerikContent;
        $content->author_id = $request->author_id;
        $content->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $content->image = 'uploads/' . $imageName;
        }
        $content->save();
        toastr()->success('İçerik başarıyla oluşturuldu...', 'Başarılı');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $icerik = BlogModel::findOrFail($id);
        $teams = TeamsModel::all();
        if ($icerik)
            $categories = BlogcategoryModel::all();
        return view('backend.blog.edit',
            [
                'icerik'=>$icerik,
                'teams'=>$teams,
                'categories'=>$categories,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'min:3',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

        $content = BlogModel::findOrFail($id);
        $content->title = $request->title;
        $content->category_id = $request->category;
        $content->content = $request->icerikContent;
        $content->author_id = $request->author_id;
        $content->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $content->image = 'uploads/' . $imageName;
        }
        $content->save();
        toastr()->success('Başarılı', 'İçerik başarıyla güncellendi...');
        return redirect()->route('blog.index');
    }

    public function switch(Request $request)
    {
        $content = BlogModel::findOrFail($request->id);
        $content->status = $request->statu == 'true' ? 1 : 0;
        $content->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        BlogModel::find($id)->delete();
        toastr()->warning('İçerik Silinenlere Taşındı', 'Taşındı');
        return redirect()->route('blog.index');
    }

    public function trashed()
    {
        $content = BlogModel::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        return view('backend.blog.trashed', compact('content'));
    }

    public function recover($id)
    {
        BlogModel::onlyTrashed()->find($id)->restore();
        toastr()->success('İçerik Başarıyla Kurtarıldı', 'Başarılı');
        return redirect()->route('blog.trashed');
    }

    public function hardDelete($id)
    {
        $hardDelete = BlogModel::onlyTrashed()->find($id);
        if (File::exists($hardDelete->image))
        {
            File::delete(public_path($hardDelete->image));
        }
        $hardDelete->forceDelete();
        toastr()->error('İçerik Kalıcı Olarak Silindi', 'Silindi');
        return redirect()->route('blog.trashed');
    }
}
