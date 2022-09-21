@extends('backend.layouts.master')
@section('title','Ekip')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{count($teams)}} Sonuç Bulundu...</strong></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Ad-Soyad</th>
                        <th>Fotoğraf</th>
                        <th>Ünvan</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>
                                <img src="{{asset($data->image)}}" width="150" style="border-radius: 5px">
                            </td>

                            <td>{{$data->title}}</td>
                            <td>{{$data->created_at->diffForHumans()}}</td>
                            <td>
                                <input class="switch" project-id="{{$data->id}}" type="checkbox" data-toggle="toggle"
                                       data-onstyle="success" data-offstyle="danger"
                                       data-on="Aktif" data-off="Pasif" @if($data->status==1) checked @endif></td>
                            <td>
                                <a href="{{route('teams.edit',$data->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="{{route('delete',$data->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
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
                id = ($(this)[0].getAttribute('project-id'));
                statu=$(this).prop('checked');
                $.ajax({
                    type: "GET",
                    url: '{{route('teams.switch')}}',
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
