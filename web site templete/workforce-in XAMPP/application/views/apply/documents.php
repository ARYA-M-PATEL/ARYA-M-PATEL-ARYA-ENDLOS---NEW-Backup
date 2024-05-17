<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="upload-doc-area">
        <div class="col-md-12">
            <label>Education Certificate</label>
            <div class="form-group xb-item--field input-group">
                <input type="file" class="form-control" id="inputGroupFile">
            </div>
        </div>
        <div class="col-md-12">
            <label>Licenses</label>
            <div class="form-group xb-item--field input-group custom-file-button">
                <input type="file" class="form-control" id="inputGroupFile">
            </div>
        </div>
    </div>

    <div class="col-12">
        <?= anchor('apply/bank-account-details', 'Prev', 'class="thm-btn"'); ?>
        <button class="thm-btn" type="submit">submit</button>
    </div>
</div>