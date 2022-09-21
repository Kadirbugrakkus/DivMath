@extends('backend.layouts.master')
@section('title','Tüm Hizmetler')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4" xmlns="http://www.w3.org/1999/html">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold float-left text-primary"><strong>@yield('title')</strong></h6>
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{count($category)}} Sonuç Bulundu...</strong>
                <a href="{{route('services.trash')}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-warning">
                    <i class="fas fa-trash fa-sm text-white-50"></i> Deleted Content</a></h6>

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
                            <td>{!! Str::limit($cat->getServiceContent->title,15) !!}</td>
                            <td>{!! Str::limit($cat->getServiceContent->text,20) !!}</td>
                            <td>
                                <input class="switch" blog="{{$cat->id}}" type="checkbox" data-toggle="toggle"
                                       data-onstyle="success" data-offstyle="danger"
                                       data-on="Aktif" data-off="Pasif" @if($cat->status==1) checked @endif>
                            </td>
                            <td>
                                <a href="{{route('serviceDetails',[$cat->slug,$cat->getServiceContent->slug])}}" target="_blank" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{route('services.edit',[$cat->id,$cat->getServiceContent->id])}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="{{route('services.delete',[$cat->id,$cat->getServiceContent->id])}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('switch')
    <script>
        $(function () {
            $('.switch').change(function () {
                id = ($(this)[0].getAttribute('blog'));
                statu=$(this).prop('checked');
                $.ajax({
                    type: "GET",
                    url: '{{route('services.switch')}}',
                    data:{
                        id:id,
                        statu:statu
                    },
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log('xHR: ' + xhr);
                        console.log('ajaxOption: ' + ajaxOptions);
                        console.log('thrownError: ' + thrownError);
                    }
                });
            })
        })
    </script>
@endsection
