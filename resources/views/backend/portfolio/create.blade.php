@extends('backend.layouts.master')
@section('title','Proje Oluştur')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4" xmlns="http://www.w3.org/1999/html">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-left text-primary"><strong>@yield('title')</strong></h6>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form method="post" action="{{route('portfolio.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Proje Başlığı</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Proje Dili</label>
                    <input type="text" name="language" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Proje Fotoğrafı</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Proje Oluştur</button>
                </div>
            </form>
        </div>
    </div>
@endsection
