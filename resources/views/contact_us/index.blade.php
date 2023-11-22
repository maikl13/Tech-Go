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
                                    <th>البريد الإلكتروني</th>
                                    <th>الإسم</th>
                                    <th>العنوان</th>
                                    <th>تاريخ التسجيل</th>
                                    <th>عمليات</th>
                                </tr>
                                <?php $i = 0; ?>
                                @foreach($contact_us as $c)
                                    <tr>
                                        <td><p id="sample_{{$i}}">{{$c->email}}</p></td>
                                        <td>{{$c->name}}</td>
                                        <td>{{$c->title}}</td>
                                        <td>{{$c->created_at}}</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary"
                                               onclick="CopyToClipboard('sample_{{$i}}');return false;">نسخ البريد</a>
                                            <a href="mailto:{{$c->email}}" class="btn btn-outline-primary">مراسلة</a>
                                            <a href="/admin/contact_us/{{$c->id}}" class="btn btn-outline-primary">عرض</a>
                                        </td>
                                    </tr>

                                    <?php $i++; ?>
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