@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">خطوات العمل</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                    <div class="add-product">
                                <a href="/admin/steps/create" class="btn btn-outline-primary"> إضافة جديد</a>
                            </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>#</th>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>خصائص</th>
                            </tr>
                            @foreach($data as $key => $r)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td><img style="width:50px" src="/uploads/images/{{$r->icon}}"/></td>
                                    <td>{{$r->title_ar}} <br/> {{$r->title_en}}</td>

                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/steps/{{$r->id}}/edit">تعديل</a>
                                        <a class="btn btn-danger" href="/admin/steps/{{$r->id}}/delete">حذف</a>
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