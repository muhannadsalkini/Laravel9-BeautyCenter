<?php
$setting = \App\Http\Controllers\HomeController::getsetting();
?>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="wrapper white-bg">
    <!--header section start-->
    <!--header section start-->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <div class="header-left">
                            <div class="call-center">
                                <?php if($setting->phone != null): ?><p><i class="zmdi zmdi-phone"></i><?php echo e($setting->phone); ?></p><?php endif; ?>
                            </div>
                            <div class="mail-address">
                                <?php if($setting->email): ?><p><i class="zmdi zmdi-email"></i><?php echo e($setting->email); ?></p><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <?php if($setting->facebook != null): ?><a href="<?php echo e($setting->facebook); ?>" target="_blank"><i class="zmdi zmdi-facebook"></i></a><?php endif; ?>
                            <?php if($setting->instagram): ?><a href="<?php echo e($setting->instagram); ?>" target="_blank"><i class="zmdi zmdi-instagram"></i></a><?php endif; ?>
                            <?php if($setting->twitter): ?><a href="<?php echo e($setting->twitter); ?>" target="_blank"><i class="zmdi zmdi-twitter"></i></a><?php endif; ?>
                            <?php if($setting->youtube): ?><a href="<?php echo e($setting->youtube); ?>" target="_blank"><i class="zmdi zmdi-youtube"></i></a><?php endif; ?>
                            <!--<a href="#" target="_blank"><i class="zmdi zmdi-pinterest"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="mgea-full-width">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-9">
                            <div class="logo">
                                <a href="/"><img src="<?php echo e(asset('assets')); ?>/images/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-8 hidden-sm hidden-xs" style="width: 55%;">
                            <div class="menu" >
                                <nav>
                                    <ul>
                                        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                        <li><a href="<?php echo e(route('about-us')); ?>">about</a></li>
                                        <?php echo $__env->make('home._category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <li><a href="<?php echo e(route('blog')); ?>">blog</a></li>
                                        <li><a href="<?php echo e(route('contact-us')); ?>">contact</a></li>
                                        <li><a href="<?php echo e(route('faq')); ?>">FAQ</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-3">
                            <div class="header-action-box" style="width: 330px;">

                                <?php if(auth()->guard()->check()): ?>
                                <div class="mini-cart" >
                                    <div class="cart-icon">
                                        <a href=""><i class="zmdi zmdi-account"></i><i style="font-size: small; padding-left: 8px; "><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></i></a>
                                    </div>
                                    <div class="mini-cart-box left" style=" width:160px;">
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href="<?php echo e(route('myprofile')); ?>" class="title"><i class="zmdi zmdi-account" style="padding-right: 5px"></i> Account</a>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href="<?php echo e(route('wishlist')); ?>" class="title">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" style="padding-right: 5px" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg> Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href="<?php echo e(route('user_appointment')); ?>" class="title">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="padding-right: 5px" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg> Appointments</a>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href="<?php echo e(route('myreviews')); ?>" class="title">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="padding-right: 5px" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify">
                                                        <line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line>
                                                    </svg> Reviews</a>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href="<?php echo e(route('myprofile')); ?>" class="title"><i class="zmdi zmdi-settings" style="padding-right: 5px"></i> Settings</a>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href=" <?php echo e(route('logout')); ?>" class="title">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" style="padding-right: 5px" width="16"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" >
                                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                        <polyline points="16 17 21 12 16 7"></polyline>
                                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                                    </svg> Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <div class="mini-cart" >
                                        <div  class="cart-icon">
                                            <a style="font-size: medium" href="/login" > Login</a><a style="font-size: medium" href="/register" >/ Register</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="search">
                                    <a href="#"><i class="zmdi zmdi-search"></i></a>
                                </div>
                            </div>
                            <div class="search-box">
                                <div class="search-form">
                                    <form action="<?php echo e(route('getservice')); ?>" method="post" id="search-form" >
                                        <?php echo csrf_field(); ?>
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search')->html();
} elseif ($_instance->childHasBeenRendered('F3L3vlx')) {
    $componentId = $_instance->getRenderedChildComponentId('F3L3vlx');
    $componentTag = $_instance->getRenderedChildComponentTagName('F3L3vlx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('F3L3vlx');
} else {
    $response = \Livewire\Livewire::mount('search');
    $html = $response->html();
    $_instance->logRenderedChild('F3L3vlx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                        <button type="submit" class="search-input">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                    <?php echo \Livewire\Livewire::scripts(); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile menu start -->
            <div class="mobile-menu-area hidden-lg hidden-md">
                <div class="container">
                    <div class="col-md-12">
                        <nav id="dropdown">
                            <ul>
                                <?php if(auth()->guard()->check()): ?> <li><a href="<?php echo e(route('myprofile')); ?>">Account</a></li> <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?> <li><a href="/login" > Login</a></li> <?php endif; ?>
                                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                <li><a href="<?php echo e(route('about-us')); ?>">about</a></li>
                                <?php echo $__env->make('home._category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <li><a href="<?php echo e(route('blog')); ?>">blog</a></li>
                                <li><a href="<?php echo e(route('contact-us')); ?>">contact</a></li>
                                <li><a href="<?php echo e(route('faq')); ?>">FAQ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Mobile menu end -->
        </div>
    </div>
    <!--header section end-->
    <!--header section end-->

<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/_header.blade.php ENDPATH**/ ?>