@extends('backend.layouts.master')
@section('title',$project->title)
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4" xmlns="http://www.w3.org/1999/html">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-left text-primary"><strong>GÜNCELLE</strong></h6>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form method="post" action="{{route('portfolio.update',$project->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Proje Başlığı</label>
                    <input type="text" name="title" value="{{$project->title}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Proje Dili</label>
                    <input type="text" name="language" value="{{$project->language}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Proje Fotoğrafı</label>
                    <img src="{{asset($project->image)}}" class="img-thumbnail rounded" width="300">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Proje Güncelle</button>
                </div>
            </form>
        </div>
    </div>
@endsection
