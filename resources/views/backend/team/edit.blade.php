@extends('backend.layouts.master')
@section('title',$teams->title)
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
            <form method="post" action="{{route('teams.update',$teams->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Ad Ve Soyad</label>
                    <input type="text" name="name" value="{{$teams->name}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Ünvan</label>
                    <input type="text" name="title" value="{{$teams->title}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Fotoğrafı</label>
                    <img src="{{asset($teams->image)}}" class="img-thumbnail rounded" width="300">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Üye Güncelle</button>
                </div>
            </form>
        </div>
    </div>
@endsection
