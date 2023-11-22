@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3>اتصل بنا</h3>
                <section>

                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">


                                <tr>
                                    <td>الإسم</td>
                                    <td>{{$contact_us->name}}</td>
                                </tr>
                                <tr>
                                    <td>البريد الإلكتروني</td>
                                    <td><a href="mailto:{{$contact_us->email}}">{{$contact_us->email}}</a></td>
                                </tr>
                                <tr>
                                    <td>الهاتف</td>
                                    <td style="direction: ltr"><a href="tel:{{$contact_us->phone}}">{{$contact_us->phone}}</a></td>
                                </tr>
                                <tr>
                                    <td>التاريخ</td>
                                    <td>{{$contact_us->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>عنوان الرسالة</td>
                                    <td>{{$contact_us->title}}</td>
                                </tr>
                                <tr>
                                    <td>نص الرسالة</td>
                                    <td>{{$contact_us->body}}</td>
                                </tr>

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
        function CopyToClipboard(id) {
            var r = document.createRange();
            r.selectNode(document.getElementById(id));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(r);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
        }
    </script>

@endsection