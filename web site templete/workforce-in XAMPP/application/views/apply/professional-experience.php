<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group xb-item--field">
            <span>
                <?= img('assets/images/icon/calendar.svg') ?>
            </span>
            <input type="text" name="from_year" id="from_year" class="form-control" placeholder="From Year" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group xb-item--field">
            <span>
                <?= img('assets/images/icon/calendar.svg') ?>
            </span>
            <input type="text" name="to_year" id="to_year" class="form-control" placeholder="To Year" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span>
                <?= img('assets/images/icon/c_message.svg') ?>
            </span>
            <textarea type="text" name="description" id="description" class="form-control"
                placeholder="Description"></textarea>
        </div>
    </div>

    <div class="xb-item--holder mb-25">
        <h2>Medical Information</h2>
    </div>

    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">General Disclaimer Signature: </label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="yes_no2" id="y2" checked />
                <label class="form-check-label" for="y2">
                    Yes
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="yes_no2" id="n2" />
                <label class="form-check-label" for="n2">
                    No
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span>
                <?= img('assets/images/icon/c_message.svg') ?>
            </span>
            <textarea type="text" name="sensitives" id="sensitives" class="form-control"
                placeholder="Sensitives"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group xb-item--field">
            <span>
                <?= img('assets/images/icon/c_message.svg') ?>
            </span>
            <textarea type="text" name="description2" id="description2" class="form-control"
                placeholder="Description"></textarea>
        </div>
    </div>

    <div class="col-12">
        <?= anchor('apply/professional-information', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/bank-account-details', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>