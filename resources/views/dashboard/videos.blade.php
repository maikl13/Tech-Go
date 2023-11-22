@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">اراء العملاء</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="add-product">
                            <a href="/admin/videos/create" class="btn btn-outline-primary">إضافة</a>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الصورة المصغرة</th>
                                <th>خصائص</th>
                            </tr>
                            @foreach($data as $s)


                                <tr>
                             
                                        
                                        <td>
                                            <img src="/storage/images/{{$s->image}}" style="width:75px" />
                                        </td>

                                        <td>

                                      
                                            <a class="btn btn-outline-primary"
                                               href="/admin/videos/{{$s->id}}/edit">تعديل</a>

                                               <a class="btn btn-danger"
                                               href="/admin/videos/{{$s->id}}/delete">حذف</a>
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