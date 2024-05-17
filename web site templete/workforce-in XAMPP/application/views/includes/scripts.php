<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?= script("assets/js/jquery-3.7.1.min.js"); ?>
<?= script("assets/js/bootstrap.bundle.min.js"); ?>
<?= script("assets/js/swiper.min.js"); ?>
<?= script("assets/js/wow.min.js"); ?>
<?= script("assets/js/appear.js"); ?>
<?= script("assets/js/odometer.min.js"); ?>
<?= script("assets/js/jquery.nice-select.min.js"); ?>
<?= script("assets/js/imagesloaded.pkgd.min.js"); ?>
<?= script("assets/js/isotope.pkgd.min.js"); ?>
<?= script("assets/js/jquery.magnific-popup.min.js"); ?>
<?= script("assets/js/jquery-ui.min.js"); ?>
<?= script("assets/js/parallax-scroll.js"); ?>
<?php if(!empty($datetimepicker)): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
<?php endif ?>
<?= script("assets/js/main.js".ASSET_VERSION); ?>