<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<section class="contact pt-5 pb-5 bg-success">
    <div class="container">
        <div class="xb-contact pos-rel">
            <div class="row">
                <div class="col-lg-6">
                    <?= img("assets/images/service/img_01.jpg"); ?>
                </div>
                <div class="col-lg-6">
                    <div class="xb-item--inner">
                        <div class="xb-item--holder mb-25">
                            <span class="apply-now-text">
                                <?= img("assets/images/icon/n_pad.svg") ?>Apply now
                            </span>
                            <h2><?= $pageTitle ?></h3>
                        </div>
                        <?= form_open('', 'class="xb-item--form contact-from apply-form"') ?>
                        <?php $this->load->view('apply/'.$page); ?>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>