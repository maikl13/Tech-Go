@extends('layouts.template')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="tile">
                    <div class="tile-body">
                        <h3>الزيارات</h3>
                        <table class="table table-hover table-bordered" id="">
                            <tr>
                                <th>الصورة</th>
                                <th>المنتج</th>
                                <th>المستخدم</th>
                                <th>السعر</th>
                                <th>نظام التشغيل</th>
                                <th>التاريخ</th>
                                <th>اشعار</th>

                            </tr>
                            @foreach($views as $v)
                                <tr>
                                    <td><img src="/storage/small_image/{{$v->image}}" width="70px"></td>
                                    <td>{{$v->product}}</td>
                                    <td>@if($v->user=="")-@else {{$v->user}}@endif</td>
                                    <td>{{$v->price}}</td>

                                    <td>@if($v->OS=="")-@else {{$v->OS}}@endif</td>

                                    <td>{{$v->created_at}}</td>
                                    <td><a href="/admin/create_notification/{{$v->user_id}}" class="pd-setting">ارسال
                                            إشعار</a></td>

                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection