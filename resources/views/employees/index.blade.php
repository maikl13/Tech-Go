@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">فريق العمل</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                    <div class="add-product">
                                <a href="/admin/employees/create" class="btn btn-outline-primary"> إضافة جديد</a>
                            </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>التصنيف</th>
                                <th></th>
                            </tr>
                            @foreach($data as $r)
                                <tr>
                                    <td><img style="width:150px" src="/uploads/teams/{{$r->image}}"/></td>
                                    <td>{{$r->title_ar}} <br/> {{$r->title_en}}</td>
                                    <td>
                                        @if($r->category)
                                            {{$r->category->title_ar}} / {{$r->category->title_en}}
                                        @else
                                            -
                                        @endif

                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/employees/{{$r->id}}/edit">تعديل</a>
                                        <a class="btn btn-outline-primary" href="/admin/employees/{{$r->id}}/delete">حذف</a>
                                    </td>
                                </tr>

                            @endforeach

                        </table>
                    </div>

                </section>


            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function edit($name) {
            window.location.href = $name;
        }
    </script>
    <script type="text/javascript" src="{{asset('public/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection