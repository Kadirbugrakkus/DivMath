<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\BlogcategoryModel;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogcategoryModel::all();
        return view('backend.categories.index', compact('categories'));
    }

    public function switch(Request $request)
    {
        $category = BlogcategoryModel::findOrFail($request->id);
        $category->status = $request->statu == 'true' ? 1 : 0;
        $category->save();

        $contents = BlogcategoryModel::where('category_id',$request->id)->get();
        foreach($contents as $content){
            $content->status = $request->statu == 'true' ? 1 : 0;
            $content->save();
        }
    }

    public function create(Request $request)
    {
        $isExist = BlogcategoryModel::whereSlug(Str::slug($request->category))->first();
        if ($isExist)
        {
            toastr()->error($request->category . ' Adında Kategori Zaten Mevcut..', 'Hata');
            return redirect()->route('category.index');
        }
        $category = new BlogcategoryModel();
        $category->name = $request->category;
        $category->slug = Str::slug($request->category);
        $category->save();
        toastr()->success('Kategori Başarıyla Oluşturuldu..', 'Başarılı');
        return redirect()->route('category.index');
    }

    public function getData(Request $request)
    {
        $category = BlogcategoryModel::findOrFail($request->id);
        return response()->json($category);
    }

    public function update(Request $request)
    {
        $isSlug = BlogcategoryModel::whereSlug(Str::slug($request->slug))->whereNotIn('id', [$request->id])->first();
        $isName = BlogcategoryModel::whereName(($request->category))->whereNotIn('id', [$request->id])->first();
        if ($isSlug or $isName) {
            toastr()->error($request->category . ' Adında Kategori Zaten Mevcut..', 'Hata');
            return redirect()->route('category.index');
        }
        $category = BlogcategoryModel::find($request->id);
        $category->name = $request->category;
        $category->slug = Str::slug($request->slug);
        $category->save();
        toastr()->success('Kategori Başarıyla Güncellendi..', 'Başarılı');
        return redirect()->route('category.index');
    }

    public function delete(Request $request)
    {
        $category = BlogcategoryModel::findOrFail($request->id);
        if ($category->id == 1) {
            toastError('Bu Kategori Silinemez !');
            return redirect()->route('category.index');
        }
        $message =' ';
        $count = count($category->categoryCount);
        if ($count > 0) {
            BlogModel::where('category_id', $category->id)->update(['category_id' => 1]);
            $defaultCategory = BlogcategoryModel::find(1);
            $message = 'Bu kategoriye ait ' . $count . ' içerik ' . $defaultCategory->name . ' kategorisine taşındı.';
        }
        $category->delete();
        toastError($message,'Bu Kategori Başariyla Silindi !');
        return redirect()->route('category.index');
    }
}
