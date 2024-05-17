<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row ">
    <h3 class="mb-2 mt-3">Availability </h3>
    <div class="col-md-6">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/calendar.svg') ?></span>
            <input type="text" name="start_from" id="start_from" class="form-control" placeholder="Start From" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group xb-item--field">
            <span><?= img('assets/images/icon/calendar.svg') ?></span>
            <input type="text" name="until" id="until" class="form-control" placeholder="Until" />
        </div>
    </div>

    <div class="form-group xb-item--field">
        <h3 class="mb-2 mt-3">Job Category</h3>
        <label>Select job</label>
        <select class="form-select mb-5" aria-label="Default select example">
            <option selected>Select job</option>
            <option>Construction</option>
        </select>

        <label>Type of job</label>
        <select class="form-select mb-5" aria-label="Default select example">
            <option selected>Select field</option>
            <option>Civil Engineer</option>
            <option>Construction Worker</option>
            <option>Building Engineer</option>
            <option>Plasterer</option>
        </select>
    </div>

    <div class="col-12">
        <?= anchor('apply/linguistic-skills', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/professional-experience', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>