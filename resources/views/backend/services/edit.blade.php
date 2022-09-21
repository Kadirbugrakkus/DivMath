@extends('backend.layouts.master')
@section('title',$category->title.' hizmetini güncelle')
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
            <form method="post" action="{{route('services.update',$category->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Hizmet Kategorisi</label>
                    <input type="text" name="category" class="form-control" value="{{$category->title}}" required>
                </div>
                <div class="form-group">
                    <label>Hizmet İkonu</label>
                    <input type="text" name="icon" class="form-control" value="{{$category->icon}}" required>
                </div>
                <div class="form-group">
                    <label>Hizmet Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$content->title}}" required>
                </div>
                <div class="form-group">
                    <label>Proje Fotoğrafı</label>
                    <img src="{{asset($content->image)}}" class="img-thumbnail rounded" width="300">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Hizmet Detayı</label>
                    <textarea name="text" id="editor" class="form-control" rows="4">{!! $content->text !!}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Hizmet Güncelle</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote(
                {
                    'height':250
                }
            );
        });
    </script>
@endsection
