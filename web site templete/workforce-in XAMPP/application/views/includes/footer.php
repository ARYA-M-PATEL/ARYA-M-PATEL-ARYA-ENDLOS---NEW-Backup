<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- footer start -->
<footer class="site-footer gray-bg pt-65">
    <div class="container">
        <div class="row mt-none-30 pb-60">
            <div class="col-lg-4 mt-30 col-md-4 ">
                <div class="footer__widget">
                    <h3 class="widget-title">Contact us now</h3>
                    <ul class="footer__cta list-unstyled mt-50">
                        <li class="ul_li">
                            <span><?= img("assets/images/icon/f_call.svg"); ?></span>
                            <a href="tel:<?= $this->config->item('mobile') ?>" class="text-black"><?= $this->config->item('mobile') ?></a>
                        </li>
                        <li class="ul_li">
                            <span><?= img("assets/images/icon/f_mail.svg"); ?></span>
                            <a href="mailto:<?= $this->config->item('email') ?>" class="text-black"><?= $this->config->item('email') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 mt-30 col-md-4 ">
                <div class="footer__widget">
                    <h3 class="widget-title">Visit us now</h3>
                    <ul class="footer__cta list-unstyled mt-50">
                        <li class="ul_li">
                            <span><?= img("assets/images/icon/f_call.svg"); ?></span>
                            <?= $this->config->item('address') ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 mt-30 col-md-4 footer__custom-col">
                <div class="footer__widget">
                    <h3 class="widget-title">Explore Link</h3>
                    <ul class="footer__links list-unstyled">
                        <li>
                            <?= anchor('about-israel', '<span>'.img("assets/images/icon/bullet.svg").' About Israel</span>'); ?>
                        </li>
                        <li>
                            <?= anchor('about', '<span>'.img("assets/images/icon/bullet.svg").' About Us</span>'); ?>
                        </li>
                        <li>
                            <?= anchor('terms-and-conditions', '<span>'.img("assets/images/icon/bullet.svg").' Terms & Conditions</span>'); ?>
                        </li>
                        <li>
                            <?= anchor('privacy-policy', '<span>'.img("assets/images/icon/bullet.svg").' Privacy Policy</span>'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__copyright ul_li_between">
            <div class="footer__copyright-text mt-15">
                Copyright © 2023 <?= APP_NAME ?> All rights reserved.
            </div>
            <div class="footer__copyright-img mt-20">
                <?= img("assets/images/icon/card_img.png"); ?>
            </div>
        </div>
    </div>
</footer>
<!-- footer start -->