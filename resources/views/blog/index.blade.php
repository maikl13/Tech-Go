@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">المدونة</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                    <div class="add-product">
                                <a href="/admin/blog/create" class="btn btn-outline-primary"> إضافة مقالة</a>
                            </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الصورة</th>
                                <th>الإسم عربي</th>
                                <th>الإسم انجليزي</th>
                              
                      
                                <th>خصائص</th>
                            </tr>
                            @foreach($data as $r)
                                <tr>
                                    <td><img src="/blog_images/{{$r->image}}" width="120px"></td>
                                    <td>{{$r->title_ar}}</td>
                                    <td>{{$r->title_en}}</td>
                                
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/blog/{{$r->id}}/edit">تعديل</a>
                                        <a class="btn btn-danger" href="/admin/blog/{{$r->id}}/delete">حذف</a>
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