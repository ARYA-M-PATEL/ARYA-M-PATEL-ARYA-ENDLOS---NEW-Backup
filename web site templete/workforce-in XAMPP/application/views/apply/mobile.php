<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><img src="assets/images/icon/c_call.svg" alt=""></span>
            <input type="text" name="mobile_no3" id="mobile_no3" class="form-control" placeholder="+91 12345 67890" autofocus />
        </div>
    </div>
    <div class="col-12">
        <?= anchor('apply/otp-verification', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>