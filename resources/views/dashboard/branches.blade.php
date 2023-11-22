@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الفروع</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="add-product">
                            <a href="/admin/branches/create" class="btn btn-outline-primary">إضافة</a>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>العنوان</th>
                                <th>اوقات العمل</th>
                                <th>رقم الهاتف</th>
                               
                                <th></th>
                            </tr>
                            @foreach($data as $s)


                                <tr>
                                    <td><img src="/storage/images/{{$s->image}}" width="150px"/></td>
                                        
                                      
                                        <td>{{$s->title_ar}}
                                            </br>
                                            {{$s->title_en}}
                                        </td>
                                        <td>{{$s->address_ar}}
                                            </br>
                                            {{$s->address_en}}
                                        </td>
                                        <td>{{$s->worktimes_ar}}
                                            </br>
                                            {{$s->worktimes_en}}
                                        </td>
                                        <td>{{$s->phone}}</td>
                                        
                                        <td>

                                        <a class="btn btn-danger"
                                               href="/admin/branches/{{$s->id}}/delete">حذف</a>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/branches/{{$s->id}}/edit">تعديل</a>
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