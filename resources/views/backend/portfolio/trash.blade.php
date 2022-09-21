@extends('backend.layouts.master')
@section('title','Taşınan Projeler')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{count($portfolio)}} Sonuç Bulundu...</strong>
                <a href="#" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-warning">
                    <i class="fas fa-trash fa-sm text-white-50"></i> Silinen Projeler</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Dil</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolio as $data)
                        <tr>
                            <td>
                                <img src="{{asset($data->image)}}" width="150" style="border-radius: 5px">
                            </td>
                            <td>{{Str::limit($data->title,20)}}</td>
                            <td>{{$data->language}}</td>
                            <td>{{$data->created_at->diffForHumans()}}</td>
                            <td>
                                <input class="switch" project-id="{{$data->id}}" type="checkbox" data-toggle="toggle"
                                       data-onstyle="success" data-offstyle="danger"
                                       data-on="Aktif" data-off="Pasif" @if($data->status==1) checked @endif></td>
                            <td>

                                <a href="{{route('recover',$data->id)}}" title="Kurtar" class="btn btn-sm btn-success"><i class="fa fa-recycle"></i></a>
                                <a href="{{route('hard.delete',$data->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

