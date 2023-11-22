@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الإعدادات</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="add-product">
                            <a href="/admin/settings/create" class="btn btn-outline-primary">إضافة إعداد</a>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الإسم</th>
                                <th>القيمة</th>
                                <th></th>
                            </tr>
                            @foreach($settings as $r)
                                <tr>

                                    <td>{{$r->key}}</td>
                                    <td>
                                        <p style="width: 200px;overflow-wrap: break-word;">{{$r->value}}</p>

                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/settings/{{$r->id}}/edit">تعديل</a>
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