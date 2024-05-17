<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="mission pb-130">
    <div class="container">
        <div class="row align-items-center mt-100">
            <div class="col-lg-6 mt-30">
                <div class="mission__img">
                    <div class="inner-img d-inline-block wow skewIn" style="visibility: visible;">
                        <?= img('assets/something-lost.png'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-30">
                <div class="mission__content">
                    <div class="sec-title">
                        <h2 class="mb-20 wow skewIn" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms;">Error 404 <br> <span>This page can’t be found</span></h2>
                        <p>No webpage was found for the web address: <?= current_url(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>