@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333;">المستخدمين</h3>
                <a class="btn btn-outline-primary" href="/admin/users">جميع المستخدمين</a>
                <a class="btn btn-outline-primary" href="/admin/admins">المسؤولين</a>
                <br>
                <br>
                <div class="row" style="margin: 0px;">


                    <div class="col-10" style="padding-left: 0px;padding-right: 0px;">
                        <div style="width: 25%;float:right">
                            <a href="{{url("/")."/admin/users/create"}}" class="btn btn-outline-primary"
                               style="width: 100%"> إضافة
                                مستخدم</a>
                        </div>
                        <div style="width: 75%;float:right;padding-right: 10px">
                            <input type="text" class="form-control " name="search" id="search"
                                   placeholder="بحث" style="width: 100%;"
                                   value="{{ isset($search) ? $search : ''  }}">
                        </div>
                    </div>
                    <div class="col-2" style="padding-left: 5px;padding-right: 5px;">
                        <a href="/admin/users/search/{{ isset($search) ? $search : 'all' }}"
                           style="width: 100%"
                           class="btn btn-outline-primary col-12"
                           id="search_button">بحث</a>
                    </div>

                </div>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">

                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th width="70px">صورة</th>
                                    <th width="40px">الرقم</th>
                                    <th>الإسم</th>
                                    <th>نظام التشغيل</th>
                                    <th>الحزمة</th>
                                    <th>الصلاحية</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>رقم الهاتف</th>
                                    <th>تاريخ التسجيل</th>
                                    <th width="280px">عمليات</th>

                                </tr>
                                @foreach($users as $r)

                                    <tr>
                                        <td><img src="/get_image/images/{{$r->image}}" width="50px"></td>
                                        <td>{{$r->id}}</td>
                                        <td>{{$r->name}}</td>
                                        <td>{{$r->OS}}</td>
                                        <td>{{$r->package_name}}</td>
                                        @if($r->permission=='user')
                                            <td>زبون</td>
                                        @elseif($r->permission=='admin')
                                            <td>مسؤول</td>
                                        @elseif($r->permission=='add_data')
                                            <td>مدخل بيانات</td>
                                        @elseif($r->permission=='orders')
                                            <td>متابع الطلبيات</td>
                                        @endif
                                        <td>
                                            <a href="mailto: {{$r->email}}">@if($r->email=="null")@else {{$r->email}} @endif</a>
                                        </td>
                                        <td><a href="tel:{{$r->phone}}">{{$r->phone}}</a></td>
                                        <td>{{$r->created_at}}</td>
                                        <td>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/users/{{$r->id}}/edit">تعديل</a>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/create_notification/{{$r->id}}">إرسال إشعار</a> <a
                                                    class="btn btn-outline-primary"
                                                    href="/admin/users/edit_user_password/{{$r->id}}">تعديل كلمة
                                                المرور</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $('#search').bind('input', function () {
        var search_button = document.getElementById('search_button');
        var search = document.getElementById('search');
        if (search.value.length == 0) {
            document.getElementById('search_button').setAttribute('href', '/admin/users/search/' + 'all');
        } else {
            document.getElementById('search_button').setAttribute('href', '/admin/users/search/' + search.value);
        }
    });

    $('#search').keypress(function (e) {
        if (e.which == 13) {
            var search = document.getElementById('search');
            if (search.value.length == 0) {
                window.location.href = '/admin/users/search/' + 'all';
            } else {
                window.location.href = '/admin/users/search/' + search.value;
            }
        }
    });
</script>
@endsection