@extends('backend.layouts.master')
@section('title','Silinen İçerikler')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4" xmlns="http://www.w3.org/1999/html">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-left text-primary"><strong>@yield('title')</strong></h6>
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{count($category)}} Sonuç Bulundu...</strong></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Hizmet Adı</th>
                        <th>Fotoğraf</th>
                        <th>İçerik Başlığı</th>
                        <th>İçerik</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $cat)
                        <tr>
                            <td>{{$cat->title}}</td>
                            <td>
                                <img src="{{asset($cat->getServiceContent->image)}}" width="150" style="border-radius: 5px">
                            </td>
                            <td>{{Str::limit($cat->getServiceContent->title,15)}}</td>
                            <td>{{Str::limit($cat->getServiceContent->text,20)}}</td>
                            <td>
                                <a href="{{route('services.recover',[$cat->id,$cat->getServiceContent->id])}}" title="Kurtar" class="btn btn-sm btn-success"><i class="fa fa-recycle"></i></a>
                                <a href="{{route('services.hard.delete',[$cat->id,$cat->getServiceContent->id])}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
