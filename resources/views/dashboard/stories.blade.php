@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">قصص النجاح</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="add-product">
                            <a href="/admin/stories/create" class="btn btn-outline-primary">إضافة</a>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>صورة</th>
                                <th>العنوان عربي</th>
                                <th>العنوان انجليزي</th>
                                <th>المحتوي عربي</th>
                                <th>المحتوي انجليزي</th>
                             
                                <th></th>
                            </tr>
                            @foreach($data as $s)


                                <tr>
                             
                                        
                                    <td><img src="/storage/images/{{$s->image}}" width="150px"/></td>

                                        <td>{{$s->title_ar}}</td>
                                        <td>{{$s->title_en}}</td>
                                        <td>{{$s->content_ar}}</td>
                                        <td>{{$s->content_en}}</td>

                                        <td>

                                        <a class="btn btn-danger"
                                               href="/admin/stories/{{$s->id}}/delete">حذف</a>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/stories/{{$s->id}}/edit">تعديل</a>
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