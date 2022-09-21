<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = PortfolioModel::orderBy('created_at','DESC')->get();
        return view('backend.portfolio.index',compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portCreate = PortfolioModel::all();
        return view('backend.portfolio.create', compact('portCreate'));
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

        $portfolio = new PortfolioModel;
        $portfolio->title = $request->title;
        $portfolio->language = $request->language;
        $portfolio->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $portfolio->image = 'uploads/' . $imageName;
        }
        $portfolio->save();
        toastr()->success('Proje başarıyla oluşturuldu...', 'Başarılı');
        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = PortfolioModel::findOrFail($id);
        $portCreate = PortfolioModel::all();
        return view('backend.portfolio.edit', compact('portCreate','project'));
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

        $portfolio = PortfolioModel::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->language = $request->language;
        $portfolio->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $portfolio->image = 'uploads/' . $imageName;
        }
        $portfolio->save();
        toastr()->success('Proje başarıyla güncellendi...', 'Başarılı');
        return redirect()->route('portfolio.index');
    }

    public function switch(Request $request)
    {
        $portfolio = PortfolioModel::findOrFail($request->id);
        $portfolio->status = $request->statu == 'true' ? 1 : 0;
        $portfolio->save();
    }

    public function delete($id)
    {
        PortfolioModel::find($id)->delete();
        toastr()->warning('İçerik Silinenlere Taşındı', 'Taşındı');
        return redirect()->route('portfolio.index');
    }

    public function trashed()
    {
        $portfolio = PortfolioModel::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        return view('backend.portfolio.trash', compact('portfolio'));
    }

    public function recover($id)
    {
        PortfolioModel::onlyTrashed()->find($id)->restore();
        toastr()->success('İçerik Başarıyla Kurtarıldı', 'Başarılı');
        return redirect()->route('trash');
    }
    public function hardDelete($id)
    {
        $hardDelete = PortfolioModel::onlyTrashed()->find($id);
        if (File::exists($hardDelete->image))
        {
            File::delete(public_path($hardDelete->image));
        }
        $hardDelete->forceDelete();
        toastr()->error('İçerik Kalıcı Olarak Silindi', 'Silindi');
        return redirect()->route('trash');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
