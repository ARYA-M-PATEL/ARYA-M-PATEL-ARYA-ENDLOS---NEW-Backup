<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_call.svg') ?></span>
            <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="+91 12345 67890" autofocus />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_call.svg') ?></span>
            <input type="text" name="add_mobile_no" id="add_mobile_no" class="form-control" placeholder="+91 12345 67890" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_mail.svg') ?></span>
            <input type="email" name="email1" id="email1" class="form-control" placeholder="Email" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_mail.svg') ?></span>
            <input type="email" name="email2" id="email2" class="form-control" placeholder="Email" />
        </div>
    </div>
    <div class="col-12">
        <?= anchor('apply/personal-information', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/family-information', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>