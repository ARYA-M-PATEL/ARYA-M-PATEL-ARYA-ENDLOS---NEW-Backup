<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="modal fade" id="upload-dropzone-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload project images</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open($dropzone, 'class="dropzone" id="upload-dropzone" method="post" enctype="multipart/form-data"'); ?>
                    <div class="drop_box text-center">
                        <header>
                            <?= img('assets/images/image.png'); ?>
                            <h3>Drag & drop</h3> <br>
                            <h4>or <a href="javascript:;" class="dropzone-select dz-clickable">browse</a></h4>
                        </header>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-3" id="submit-all"><i class="fa fa-upload fa-lg"></i> Click to Upload Files</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/basic.css" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
<style>
    .dropzone {
        align-items: center;
        width: 100%;
        padding: 25px;
        background-color: #f3f3f3;
        border-radius: 12px;
    }

    .dz-message {
        display: none;
    }

    .dz-remove {
        margin-top: 0.6rem;
    }

    .dz-preview{
        background-color: #ffffff;
        padding: 15px;
        width: 100% !important;
        border-radius: 15px;
        cursor: auto;
    }

    .dz-progress {
        border-radius: 10px;
    }
</style>
<script>
    Dropzone.autoDiscover = false;
    const id = "#upload-dropzone";
    
    $('#submit-all').prop('disabled', true);
    
    const uploadDropzone = new Dropzone(id, {
        url: "<?= base_url($dropzone) ?>",
        paramName: "file_name",
        autoProcessQueue: false,
        acceptedFiles: '.jpg,.jpeg,.png',
        parallelUploads: 1,
        maxFilesize: 125, // Max filesize in MB
        maxFiles: 150,
        addRemoveLinks: true,
        clickable: id + " .dropzone-select"
    });

    document.getElementById("submit-all").addEventListener("click", function(event) {
        $('#submit-all').prop('disabled', true);
        event.preventDefault();
        event.stopPropagation();
        uploadDropzone.processQueue();
    });

    // Listen to the 'complete' event, which is triggered when an upload is complete
    uploadDropzone.on("complete", function(file) {
        // After each upload completes, manually start the next upload in the queue
        if (uploadDropzone.getQueuedFiles().length > 0) {
            uploadDropzone.processQueue(); // Start processing the next file
        }
    });

    uploadDropzone.on("queuecomplete", function (progress) {
        const files = this.getAcceptedFiles().length - this.getRejectedFiles().length;
        
        if(files > 0) {
            $('#submit-all').prop('disabled', true);
            setTimeout(() => { location.reload(); }, 2000);
        }
    });

    uploadDropzone.on("addedfile", function (file) {
        $('.dz-image, .dz-size').hide();
        $('.dz-remove').addClass('btn btn-primary');
        $('#submit-all').prop('disabled', false);

        setTimeout(() => { if(file.accepted === false) uploadDropzone.removeFile(file) }, 500);
    });
    
    uploadDropzone.on("removedfile", function (file) {
        if (uploadDropzone.files.length < 1) {
            $('#submit-all').prop('disabled', true);
        }
    });

    $('#upload-dropzone-modal').on('hidden.bs.modal', function () {
        uploadDropzone.removeAllFiles(true);
    });
</script>