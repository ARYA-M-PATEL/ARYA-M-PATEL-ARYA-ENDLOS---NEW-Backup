<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
    <?php $this->load->view('includes/head'); ?>
    <body>
        <!-- backtotop - start -->
        <div class="xb-backtotop">
            <a href="javascript:;" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader start -->
        <div id="xb-loadding">
            <div class="loader">
                <div class="plane">
                    <?= img("assets/images/icon/plane.gif", "", 'class="plane-img"'); ?>
                </div>
                <div class="earth-wrapper">
                    <div class="earth"></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <div class="body_wrap">
        <?php 
            $this->load->view('includes/header');
            echo '<div class="body-overlay"></div><main>';
            if(isset($breadcumb)):
                $this->load->view('includes/breadcumb');
            endif;
            echo $contents;
            $this->load->view('includes/footer');
            echo '</main>';
            $this->load->view('includes/scripts');
        ?>
        </div>
    </body>
</html>