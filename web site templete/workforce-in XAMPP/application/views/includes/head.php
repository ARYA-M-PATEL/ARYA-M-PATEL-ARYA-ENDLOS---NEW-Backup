<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <?= link_tag('assets/favicon.png'.ASSET_VERSION, 'icon', 'image/png') ?>
    <?php $this->load->view('seo-data'); ?>
    <!-- css include -->
    <?= link_tag("assets/css/bootstrap.min.css"); ?>
    <?= link_tag("assets/css/fontawesome.css"); ?>
    <?= link_tag("assets/css/animate.css"); ?>
    <?= link_tag("assets/css/swiper.min.css"); ?>
    <?= link_tag("assets/css/odometer.css"); ?>
    <?= link_tag("assets/css/nice-select.css"); ?>
    <?= link_tag("assets/css/jquery-ui.min.css"); ?>
    <?= link_tag("assets/css/magnific-popup.css"); ?>
    <?php if(!empty($datetimepicker)): ?>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
	<?php endif ?>
    <?= link_tag("assets/css/main.css".ASSET_VERSION); ?>
</head>