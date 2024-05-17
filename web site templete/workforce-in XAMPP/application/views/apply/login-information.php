<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="first_name" id="first_name" class="form-control"
                placeholder="First Name" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="middel_name" id="middel_name" class="form-control"
                placeholder="Middel Name" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="last_name" id="last_name" class="form-control"
                placeholder="Last Name" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_mail.svg') ?></span>
            <input type="email" name="email" id="email" class="form-control"
                placeholder="Email" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="password" name="password" id="password" class="form-control"
                placeholder="password">
        </div>
    </div>
    <div class="col-12">
        <?= anchor('apply/otp-verification', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/personal-information', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>