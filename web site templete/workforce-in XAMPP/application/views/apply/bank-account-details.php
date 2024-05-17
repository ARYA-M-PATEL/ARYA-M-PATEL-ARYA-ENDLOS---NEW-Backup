<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="form-group xb-item--field">
             <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="account_name" id="account_name" class="form-control" placeholder="Account Name"
                autofocus />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
             <span><?= img('assets/images/icon/c_mail.svg') ?></span>
            <input type="text" name="account_number" id="account_number" class="form-control"
                placeholder="Account Number" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
             <span><?= img('assets/images/icon/c_mail.svg') ?></span>
            <input type="text" name="ifsc_code" id="ifsc_code" class="form-control" placeholder="IFSC Code" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
             <span><?= img('assets/images/icon/c_mail.svg') ?></span>
            <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="Bank Name" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
             <span><?= img('assets/images/icon/c_mail.svg') ?></span>
            <input type="text" name="branch_name" id="branch_name" class="form-control" placeholder="Branch Name" />
        </div>
    </div>
    <div class="col-12">
        <?= anchor('apply/professional-experience', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/documents', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>