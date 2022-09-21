<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\TeamsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = TeamsModel::orderBy('created_at','DESC')->get();
        return view('backend.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teamsCreate = TeamsModel::all();
        return view('backend.team.create', compact('teamsCreate'));
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
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

        $teams = new TeamsModel;
        $teams->name = $request->name;
        $teams->title = $request->title;
        $teams->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->name) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $teams->image = 'uploads/' . $imageName;
        }
        $teams->save();
        toastr()->success('Üye başarıyla eklendi...', 'Başarılı');
        return redirect()->route('teams.index');
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
        $teams = TeamsModel::findOrFail($id);
        $teamsCreate = TeamsModel::all();
        return view('backend.team.edit', compact('teamsCreate','teams'));
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
                'name'=>'required|min:5',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

        $teams = TeamsModel::findOrFail($id);
        $teams->name = $request->name;
        $teams->title = $request->title;
        $teams->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->name) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $teams->image = 'uploads/' . $imageName;
        }
        $teams->save();
        toastr()->success('Üye başarıyla güncellendi...', 'Başarılı');
        return redirect()->route('teams.index');
    }

    public function switch(Request $request)
    {
        $teams = TeamsModel::findOrFail($request->id);
        $teams->status = $request->statu == 'true' ? 1 : 0;
        $teams->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = TeamsModel::find($id);
        $teams->forceDelete();
        toastr()->error('Üye Kalıcı Olarak Silindi', 'Silindi');
        return redirect()->route('teams.index');
    }
}
