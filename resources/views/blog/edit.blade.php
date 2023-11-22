@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل مقالة {{$item->title_ar}}</h3>
                    </div>
                    <form method="POST" action="/admin/blog/update" enctype="multipart/form-data">
                        @csrf


                        <label>إسم المقالة عربي</label>
                        <input type="text" name="title_ar" value="{{$item->title_ar}}" class="form-control"  >

                        <label>إسم المقالة انجليزي</label>
                        <input type="text" name="title_en" class="form-control"  value="{{$item->title_en}}">

                        <label>محتوي المقالة عربي</label>
                        <textarea class="body form-control" name="content_ar">{{$item->content_ar}}</textarea>

                        <label>محتوي المقالة انجليزي</label>
                        <textarea class="body form-control" name="content_en">{{$item->content_en}}</textarea>

                        <label>تحديث صورة المقالة </label>
                        <img src="/blog_images/{{$item->image}}" style="width:100px;display:block" />
                        <input type="file" name="image" class="form-control"
                               accept="image/*" >
  


                               <input type="hidden" name="id" value="{{$item->id}}" />
    
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.body',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: "30s",
            autosave_prefix: "{path}{query}-{id}-",
            autosave_restore_when_empty: false,
            autosave_retention: "2m",
            image_advtab: true,
            // content_css: '//www.tiny.cloud/css/codepen.min.css',
            link_list: [
                {title: 'My page 1', value: 'https://www.codexworld.com'},
                {title: 'My page 2', value: 'https://www.xwebtools.com'}
            ],
            image_list: [
                {title: 'My page 1', value: 'https://www.codexworld.com'},
                {title: 'My page 2', value: 'https://www.xwebtools.com'}
            ],
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'Some class', value: 'class-name'}
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {text: 'My text'});
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {alt: 'My alt text'});
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg'});
                }
            },
            templates: [
                {
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...'},
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: "mceNonEditable",
            toolbar_mode: 'sliding',
            contextmenu: "link image imagetools table",
        });


    </script>
@endsection