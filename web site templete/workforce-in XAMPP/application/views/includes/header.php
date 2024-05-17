<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- header start -->
<header class="site-header header-style-one">
    <div class="header__top-wrap gray-bg">
        <div class="container">
            <div class="header__top ul_li_between">
                <div class="header__top-cta">
                    <?= img("assets/images/icon/n_pad.svg"); ?><span>Help Desk :</span> <a href="tel:<?= $this->config->item('mobile') ?>" class="text-black"><?= $this->config->item('mobile') ?></a>
                </div>
                <ul class="header__top-info ul_li">
                    <li><?= img("assets/images/icon/location.svg"); ?><?= $this->config->item('address') ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header__wrap stricky">
        <div class="container">
            <div class="header__inner ul_li_between">
                <div class="header__logo">
                    <?= anchor('', img("assets/images/logo/logo.svg")); ?>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <li class="<?= !empty($name) && in_array($name, ['home', 'error', 'terms-and-conditions', 'privacy-policy']) ? 'active' : '' ?>">
                                <?= anchor('', '<span>Home</span>'); ?>
                            </li>
                            <li class="<?= !empty($name) && $name === 'about-israel' ? 'active' : '' ?>">
                                <?= anchor('about-israel', '<span>About Israel</span>'); ?>
                            </li>
                            <li class="<?= !empty($name) && $name === 'about' ? 'active' : '' ?>">
                                <?= anchor('about', '<span>About us</span>'); ?>
                            </li>
                            <li class="<?= !empty($name) && $name === 'contact' ? 'active' : '' ?>">
                                <?= anchor('contact', '<span>Contact us</span>'); ?>
                            </li>
                            <li class="<?= !empty($name) && $name === 'apply' ? 'active' : '' ?>">
                                <?= anchor('apply', '<span>Apply Now</span>'); ?>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="xb-hamburger-menu">
                    <div class="xb-nav-mobile">
                        <div class="xb-nav-mobile-button"><i class="fal fa-bars"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="xb-header-wrap">
        <div class="xb-header-menu">
            <div class="xb-header-menu-scroll">
                <div class="xb-menu-close xb-hide-xl xb-close"></div>
                <div class="xb-logo-mobile xb-hide-xl">
                    <?= anchor('', img("assets/images/logo/logo.svg")); ?>
                </div>
                <nav class="xb-header-nav">
                    <ul class="xb-menu-primary clearfix">
                        <li class="menu-item">
                            <?= anchor('', '<span>Home</span>'); ?>
                        </li>
                        <li class="menu-item">
                            <?= anchor('about-israel', '<span>About Israel</span>'); ?>
                        </li>
                        <li class="menu-item">
                            <?= anchor('about', '<span>About us</span>'); ?>
                        </li>
                        <li class="menu-item">
                            <?= anchor('contact', '<span>Contact us</span>'); ?>
                        </li>
                        <li class="menu-item">
                            <?= anchor('apply', '<span>Apply Now</span>'); ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="xb-header-menu-backdrop"></div>
    </div>
</header>