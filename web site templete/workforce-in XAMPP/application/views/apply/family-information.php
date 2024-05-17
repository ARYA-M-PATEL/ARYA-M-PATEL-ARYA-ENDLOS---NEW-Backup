<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label>Marital Status: </label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status1" checked />
                <label class="form-check-label" for="status1">Single</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status2" />
                <label class="form-check-label" for="status2">Married</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status3" />
                <label class="form-check-label" for="status3">Divorced</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status4" />
                <label class="form-check-label" for="status4">Widowed</label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="partner_name" id="partner_name" class="form-control" placeholder="Partner Name" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_call.svg') ?></span>
            <input type="text" name="mobile_no3" id="mobile_no3" class="form-control" placeholder="+91 12345 67890" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_mail.svg') ?></span>
            <input type="email" name="partner_email" id="partner_email" class="form-control" placeholder="Partner Email " />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="noc" id="noc" class="form-control" placeholder="Number of children" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/c_user.svg') ?></span>
            <input type="text" name="add_contact_name" id="add_contact_name" class="form-control"placeholder="Name" />
        </div>
    </div>
    <div class="col-md-12 mt-4 mb-3">
        <div class="form-group">
            <label>Additional Contact Relationship: </label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="relation" id="rel_1" checked />
                <label class="form-check-label" for="rel_1">Family member</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="relation" id="rel_2" />
                <label class="form-check-label" for="rel_2">Friend</label>
            </div>
        </div>
    </div>
    <div class="col-12">
        <?= anchor('apply/contact-information', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/linguistic-skills', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>