@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333;">الاشعارات</h3>
                <div class="row" style="margin: 0px;">


                    <div class="col-10" style="padding-left: 0px;padding-right: 0px;">
                        <div style="width: 25%;float:right">
                            <a href="{{url("/")."/admin/getNotificationName"}}" class="btn btn-outline-primary"
                               style="width: 100%"> ارسال اشعار</a>
                        </div>
                    </div>


                </div>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">

                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th width="70px">#</th>
                                    <th>العنوان</th>
                                    <th>المحتوي</th>
                                    <th>النوع</th>
                                    <th>المستخدم</th>
                                    <th width="">عمليات</th>

                                </tr>
                                @foreach($data as $r)

                                    <tr>
                                        <td>{{$r->id}}</td>
                                        <td>{{$r->title}}</td>
                                        <td>{{$r->body}}</td>
                                        <td>{{$r->type}}</td>
                                        <td>
                                            @if($r->user_id != 0)
                                            {{$r->user->name}}
                                            @else
                                                جميع المستخدمين
                                            @endif
                                        </td>
                                        <td>
                                               <a class="btn btn-outline-primary"
                                               href="/admin/notification/{{$r->id}}/delete">حذف</a>
            
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