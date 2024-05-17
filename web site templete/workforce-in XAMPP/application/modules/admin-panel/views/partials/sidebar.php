<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= anchor(admin('dashboard'), img('assets/favicon.png', '', 'class="brand-image img-circle elevation-3" style="opacity: 0.7"').'<span class="brand-text font-weight-light">'.APP_NAME.'</span>', 'class="brand-link"'); ?>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= img('assets/admin-panel/images/user.png', '', 'class="img-circle elevation-2"') ?>
            </div>
            <div class="info">
                <?= anchor(admin('dashboard'), $this->user->name, 'class="d-block"'); ?>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <?= anchor(admin('dashboard'), '<i class="nav-icon fas fa-home"></i> <p>Dashboard</p>', 'class="nav-link '.(active_navigation($name, ['profile', 'dashboard', 'profile-check'])).'"'); ?>
                </li>
                <li class="nav-item">
                    <?= anchor(admin('seo'), '<i class="nav-icon fas fa-globe"></i> <p>SEO</p>', 'class="nav-link '.active_navigation($name, 'seo').'"'); ?>
                </li>
            </ul>
        </nav>
    </div>
</aside>