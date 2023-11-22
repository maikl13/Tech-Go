@extends('layouts.template')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3>البحوثات</h3>
                <section>

                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th>النص</th>
                                    <th>التاريخ</th>

                                </tr>
                                @foreach($search as $s)
                                    <tr>
                                        <td>{{$s->name}}</td>
                                        <td>{{$s->created_at}}</td>

                                    </tr>
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