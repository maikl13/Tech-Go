<?php $__env->startSection('content'); ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ارسال رسالة</h5>
      </div>
      <form action="/admin/newsletter/send" method="post">
        <?php echo csrf_field(); ?>
      <div class="modal-body">
        <div class="form-group">
            <textarea name="message" style="height:200px !important" placeholder="محتوي الرسالة" class="form-control body"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
</form>
    </div>
  </div>
</div>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">القائمة البريدية</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="add-product">
                            <a  data-toggle="modal" data-target="#exampleModal" href="#!" class="btn btn-outline-primary">ارسال رسالة</a>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>البريد الالكتروني</th>
                                <th>تاريخ التسجيل</th>
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                             
                                        

                                        <td><?php echo e($s->email); ?></td>

                                        <td><?php echo e($s->created_at->format('Y-m-d h:i a')); ?></td>

                                        <td>

                                        <a class="btn btn-danger"
                                               href="/admin/newsletter/<?php echo e($s->id); ?>/delete">حذف</a>
                                       
                                        </td>
                                    
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>
                    </div>

                </section>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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
            height: 400,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: "mceNonEditable",
            toolbar_mode: 'sliding',
            contextmenu: "link image imagetools table",
        });


    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/dashboard/newsletter.blade.php ENDPATH**/ ?>