<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="<?php echo e(route('admin_home')); ?>">
		            <span class="brand-logo"><img  src="<?php echo e(asset('assets')); ?>/images/logo/logo-icon.png" alt="" ></span>
                    <?php
                    $logo_name = 'admin-logo-text.png';
                    /**if($_REQUEST('theme')){
                    $logo_name = 'admin-logo-text-white.png';
                    }**/
                    ?>
                    <img class="brand-text" src="<?php echo e(asset('assets')); ?>/images/logo/<?php echo e($logo_name); ?>" alt="" >
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!--<li class=" nav-item">
                <a class="d-flex align-items-center" href="/admin">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Home</span>
                    <span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="dashboard-analytics.html">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="dashboard-ecommerce.html">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span>
                        </a>
                    </li>
                </ul>
            </li>-->

            <!-- Apps &amp; Pages -->
            <li class=" navigation-header">
                <span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span>
                <i data-feather="more-horizontal">
                </i>
            </li>

            <li class=" nav-item  <?php echo $__env->yieldContent('Categories_status'); ?>">
                <a class="d-flex align-items-center" href="<?php echo e(route('admin_category')); ?>">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="Kanban">Categories</span>
                </a>
            </li>

            <li class=" nav-item <?php echo $__env->yieldContent('Services_status'); ?>">
                <a class="d-flex align-items-center" href="<?php echo e(route('admin_service')); ?>">
                    <i data-feather="file-text"></i>
                    <span class="menu-title text-truncate" data-i18n="Invoice">Services</span>
                </a>
            </li>
            <li class=" nav-item <?php echo $__env->yieldContent('Messages_status'); ?>">
                <a class="d-flex align-items-center" href="<?php echo e(route('admin_message')); ?>">
                    <i data-feather='message-square'></i>
                    <span class="menu-title text-truncate" data-i18n="settings">Messages</span>
                </a>
            </li>
            <li class=" nav-item <?php echo $__env->yieldContent('Reviews_status'); ?>">
                <a class="d-flex align-items-center" href="<?php echo e(route('admin_review')); ?>">
                    <i data-feather='align-justify'></i>
                    <span class="menu-title text-truncate" data-i18n="settings">Reviews</span>
                </a>
            </li>
            <li class=" nav-item <?php echo $__env->yieldContent('Faq_status'); ?>">
                <a class="d-flex align-items-center" href="<?php echo e(route('admin_faq')); ?>">
                    <i data-feather='check'></i>
                    <span class="menu-title text-truncate" data-i18n="settings">Faq</span>
                </a>
            </li>
            <li class=" nav-item <?php echo $__env->yieldContent('Setting_status'); ?>">
                <a class="d-flex align-items-center" href="<?php echo e(route('admin_setting')); ?>">
                    <i data-feather='settings'></i>
                    <span class="menu-title text-truncate" data-i18n="settings">Settings</span>
                </a>
            </li>


        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/admin/_mainmenu.blade.php ENDPATH**/ ?>