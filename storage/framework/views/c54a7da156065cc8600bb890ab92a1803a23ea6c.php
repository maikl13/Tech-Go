
    
    <?php $__env->startSection('head'); ?>
        <link href="<?php echo e(url('uploader/jquery.dm-uploader.css')); ?>" rel="stylesheet">
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>



    <form id="form" action="<?php echo e(url('admin/sync/upload_image')); ?>">
        <?php echo csrf_field(); ?>
    </form>
    <div class="row">
        <div class="col-md-6 col-sm-12">

            <!-- Our markup, the important part here! -->
            <div id="drag-and-drop-zone" class="dm-uploader p-5">
                <h3 class="mb-5 mt-5 text-muted">اسحب الملفات هنا للرفع</h3>

                <div class="btn btn-primary btn-block mb-5">
                    <span>استعراض ملفات للرفع</span>
                    <input type="file" title='Click to add Files' />
                </div>
            </div><!-- /uploader -->

        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card h-100">
                <div class="card-header">
                    File List
                </div>

                <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
                    <li class="text-muted text-center empty">لا يوجد ملفات للرفع.</li>
                </ul>
            </div>
        </div>
    </div><!-- /file list -->



    <div class="row" style="direction: rtl">
        <div class="col-12">
            <div class="card h-100">
                <div class="card-header">
                    سجل الرفع
                </div>

                <ul class="list-group list-group-flush" id="debug">
                    <li class="list-group-item text-muted empty">جاري التحميل ....</li>
                </ul>
            </div>
        </div>
    </div> <!-- /debug -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('uploader/jquery.dm-uploader.js')); ?>"></script>

<script type="text/javascript">
    $(function(){
        /*
         * For the sake keeping the code clean and the examples simple this file
         * contains only the plugin configuration & callbacks.
         *
         * UI functions ui_* can be located in: demo-ui.js
         */
        $('#drag-and-drop-zone').dmUploader({ //
            url: $('#form').attr('action'),
            maxFileSize: 3000000, // 3 Megs
            onDragEnter: function(){
                // Happens when dragging something over the DnD area
                this.addClass('active');
            },
            onDragLeave: function(){
                // Happens when dragging something OUT of the DnD area
                this.removeClass('active');
            },
            onInit: function(){
                // Plugin is ready to use
                ui_add_log('جاهز لبدء الرفع:)', 'info');
            },
            onComplete: function(){
                // All files in the queue are processed (success or error)
                ui_add_log('تم الانتهاء من رفع كافة الملفات المحددة');
            },
            onNewFile: function(id, file){
                // When a new file is added using the file selector or the DnD area
                ui_add_log('اضافه ملف جديد #' + id);
                ui_multi_add_file(id, file);
            },
            onBeforeUpload: function(id){
                // about tho start uploading a file
                ui_add_log('جاري رفع الملف  #' + id);
                ui_multi_update_file_status(id, 'uploading', 'Uploading...');
                ui_multi_update_file_progress(id, 0, '', true);
            },
            onUploadCanceled: function(id) {
                // Happens when a file is directly canceled by the user.
                ui_multi_update_file_status(id, 'warning', 'Canceled by User');
                ui_multi_update_file_progress(id, 0, 'warning', false);
            },
            onUploadProgress: function(id, percent){
                // Updating file progress
                ui_multi_update_file_progress(id, percent);
            },
            onUploadSuccess: function(id, data){
                // A file was successfully uploaded
                console.log(data);
                ui_add_log('Server Response for file #' + id + ': ' + JSON.stringify(data));
                ui_add_log('Upload of file #' + id + ' COMPLETED', 'success');
                ui_multi_update_file_status(id, 'success', 'Upload Complete');
                ui_multi_update_file_progress(id, 100, 'success', false);
            },
            onUploadError: function(id, xhr, status, message){
                ui_multi_update_file_status(id, 'danger', message);
                ui_multi_update_file_progress(id, 0, 'danger', false);
            },
            onFallbackMode: function(){
                // When the browser doesn't support this plugin :(
                ui_add_log('Plugin cant be used here, running Fallback callback', 'danger');
            },
            onFileSizeError: function(file){
                ui_add_log('File \'' + file.name + '\' cannot be added: size excess limit', 'danger');
            }
        });
    });


    /*
 * Some helper functions to work with our UI and keep our code cleaner
 */

    // Adds an entry to our debug area
    function ui_add_log(message, color)
    {
        var d = new Date();

        var dateString = (('0' + d.getHours())).slice(-2) + ':' +
            (('0' + d.getMinutes())).slice(-2) + ':' +
            (('0' + d.getSeconds())).slice(-2);

        color = (typeof color === 'undefined' ? 'muted' : color);

        var template = $('#debug-template').text();
        template = template.replace('%%date%%', dateString);
        template = template.replace('%%message%%', message);
        template = template.replace('%%color%%', color);

        $('#debug').find('li.empty').fadeOut(); // remove the 'no messages yet'
        $('#debug').prepend(template);
    }

    // Creates a new file and add it to our list
    function ui_multi_add_file(id, file)
    {
        var template = $('#files-template').text();
        template = template.replace('%%filename%%', file.name);

        template = $(template);
        template.prop('id', 'uploaderFile' + id);
        template.data('file-id', id);

        $('#files').find('li.empty').fadeOut(); // remove the 'no files yet'
        $('#files').prepend(template);
    }

    // Changes the status messages on our list
    function ui_multi_update_file_status(id, status, message)
    {
        $('#uploaderFile' + id).find('span').html(message).prop('class', 'status text-' + status);
    }

    // Updates a file progress, depending on the parameters it may animate it or change the color.
    function ui_multi_update_file_progress(id, percent, color, active)
    {
        color = (typeof color === 'undefined' ? false : color);
        active = (typeof active === 'undefined' ? true : active);

        var bar = $('#uploaderFile' + id).find('div.progress-bar');

        bar.width(percent + '%').attr('aria-valuenow', percent);
        bar.toggleClass('progress-bar-striped progress-bar-animated', active);

        if (percent === 0){
            bar.html('');
        } else {
            bar.html(percent + '%');
        }

        if (color !== false){
            bar.removeClass('bg-success bg-info bg-warning bg-danger');
            bar.addClass('bg-' + color);
        }
    }


</script>
<!-- File item template -->
<script type="text/html" id="files-template">
    <li class="media">
        <div class="media-body mb-1">
            <p class="mb-2">
                <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
            </p>
            <div class="progress mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                     role="progressbar"
                     style="width: 0%"
                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <hr class="mt-1 mb-1" />
        </div>
    </li>
</script>

<!-- Debug item template -->
<script type="text/html" id="debug-template">
    <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/sync/imagesuploader.blade.php ENDPATH**/ ?>