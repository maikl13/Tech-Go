@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الرسائل</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                
                                <th>العميل</th>
                                <th>الشركة</th>
            
                                <th>الموضوع</th>
                                <th>الرسالة</th>
                                <th>التاريخ</th>
                             
                                <th></th>
                            </tr>
                            @foreach($data as $s)


                                <tr>
                             
                                        
                            
                                        <td>الاسم:{{$s->name}} <br/>
                                            هاتف: {{$s->phone}} <br/>
                                            واتس: {{$s->phone_whatsapp}}<br/>
                                            البريد الالكتروني: <br/> {{$s->email}}
                                        </td>
                                        <td>
                                            اسم الشركة: {{$s->company_name}} <br/>
                                            عنوان الشركة: {{$s->company_location}}

                                        </td>

                                        <td>{{$s->subject}}</td>
                                        <td>{{$s->message}}</td>
                                        <td>{{$s->created_at->format('Y-m-d h:i a')}}</td>

                                        <td>

                                        <a class="btn btn-danger"
                                               href="/admin/medicalrequests/{{$s->id}}/delete">حذف</a>
                                    
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