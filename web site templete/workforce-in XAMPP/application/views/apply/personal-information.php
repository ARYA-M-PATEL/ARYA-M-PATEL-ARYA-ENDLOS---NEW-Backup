<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12 mb-3">
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" checked />
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" />
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Nationality" autofocus />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/calendar.svg') ?></span>
            <input type="text" name="date_of_birth" id="date_of_birth" class="form-control datepicker" autocomplete="off" placeholder="Date of Birth" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="passport_no" id="passport_no" class="form-control" placeholder="Passport no" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/calendar.svg') ?></span>
            <input type="text" name="date_of_issue" id="date_of_issue" class="form-control datepickers" placeholder="Date of issue" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/calendar.svg') ?></span>
            <input type="text" name="date_of_expiry" id="date_of_expiry" class="form-control datepicker" placeholder="Date of expiry" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/location-2.svg') ?></span>
            <input type="text" name="home_address" id="home_address" class="form-control" placeholder="Home address" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/location-2.svg') ?></span>
            <input type="text" name="current_address" id="current_address" class="form-control" placeholder="Current address" />
        </div>
    </div>
    <div class="col-12">
        <?= anchor('apply/login-information', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/contact-information', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>