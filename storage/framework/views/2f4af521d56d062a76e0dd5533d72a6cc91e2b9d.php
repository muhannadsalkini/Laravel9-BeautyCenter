<?php $__env->startSection('title', $setting->title. ' | Services'); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>
<?php $__env->startSection('breadcrumbs', 'Services'); ?>


<?php $__env->startSection('content'); ?>

    <div class="wrapper white-bg">

        <!--Breadcrumbs start-->
        <?php echo $__env->make('home._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--Breadcrumbs end-->
        <!--shop page start-->
        <div class="shop-page ptb-100">
            <div class="container">
                <div class="row">
                    <!--shop sidebar start-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="shop sidebar">
                            <aside class="widget categories grey-bg mb-30">
                                <div class="widget-title">
                                    <h3>categories</h3>
                                </div>
                                <div class="widget-categories">
                                    <!--Accordion item 1-->
                                    <h6>Face treatment</h6>
                                    <ul>
                                        <li><a href="#">Face wash</a></li>
                                        <li><a href="#">Cream</a></li>
                                    </ul>
                                    <!--Accordion item 1 end-->

                                    <!--Accordion item 2 start-->
                                    <h6>Nail treatment</h6>
                                    <ul>
                                        <li><a href="#">Nail tratment 1</a></li>
                                        <li><a href="#">Nail tratment 2</a></li>
                                    </ul>
                                    <!--Accordion item 2 end-->

                                    <!--Accordion item 3 start-->
                                    <h6>Hair treatment</h6>
                                    <ul>
                                        <li><a href="#">Hair cut</a></li>
                                        <li><a href="#">Hair shampo</a></li>
                                    </ul>
                                    <!--Accordion item 3 end-->

                                    <!--Accordion item 4 start-->
                                    <h6 class="open">Body treatment</h6>
                                    <ul>
                                        <li><a href="#">Oil message</a></li>
                                        <li><a href="#">Stone message</a></li>
                                    </ul>
                                    <!--Accordion item 4 end-->

                                </div>
                            </aside>
                            <aside class="widget filter grey-bg mb-30">
                                <div class="widget-title">
                                    <h3>filter by price</h3>
                                </div>
                                <div class="widget-filter">
                                    <div class="price-filter">
                                        <div id="slider-range"></div>
                                        <div class="price-slider-amount">
                                            <div class="slider-values">
                                                <label>Range</label>
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget video mb-30">
                                <div class="widget-video">
                                    <img src="<?php echo e(asset('assets')); ?>/images/blog/widget-video.jpg" alt="">
                                    <div class="widget-video-icon">
                                        <a href="https://www.youtube.com/watch?v=E6ZgAyx8kWU">
                                            <i class="zmdi zmdi-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget flicker grey-bg mb-30 hidden-sm fix">
                                <div class="widget-title">
                                    <h3>Flicker Widget</h3>
                                </div>
                                <div class="widget-filcker fix">
                                    <ul>
                                        <li><a href="#"><img src="<?php echo e(asset('assets')); ?>/images/blog/widget-flicker-1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo e(asset('assets')); ?>/images/blog/widget-flicker-2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo e(asset('assets')); ?>/images/blog/widget-flicker-3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo e(asset('assets')); ?>/images/blog/widget-flicker-4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo e(asset('assets')); ?>/images/blog/widget-flicker-5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo e(asset('assets')); ?>/images/blog/widget-flicker-6.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="widget offer mb-30 hidden-sm">
                                <div class="widget-offer-discount">
                                    <div class="widget-img">
                                        <img src="<?php echo e(asset('assets')); ?>/images/blog/wiget-discount.jpg" alt="">
                                        <div class="widget-discount-text">
                                            <h1>50%</h1>
                                            <h2>off</h2>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget tag mb-30 grey-bg">
                                <div class="widget-title">
                                    <h3>popular tag</h3>
                                </div>
                                <div class="widget-tag">
                                    <ul>
                                        <li><a href="#">Message</a></li>
                                        <li><a href="#">Life</a></li>
                                        <li><a href="#">spa</a></li>
                                        <li><a href="#">skin care</a></li>
                                        <li><a href="#">nail care</a></li>
                                        <li><a href="#">Body care</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="widget newsletter grey-bg">
                                <div class="widget-title">
                                    <h3>Subscribe</h3>
                                </div>
                                <div class="widget-newsletter">
                                    <p>Lorem ipsum dolor sit amet, love dost   consectetur adipisicing elit, </p>
                                    <form action="#">
                                        <input type="text" placeholder="Enter Your email">
                                        <button type="submit">Send</button>
                                    </form>
                                </div>
                            </aside>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="shop-item-filter">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="shop-tab clearfix">
                                            <!-- Nav tabs -->
                                            <ul role="tablist">
                                                <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="#grid"><i class="zmdi zmdi-apps"></i></a></li>
                                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list" class="list-view" href="#list"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-3  hidden-xs">
                                        <div class="show text-center">
                                            <p>show: 16 items</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6  col-xs-12">
                                        <div class="filter-by">
                                            <div class="filter-title">
                                                <p>Sort by: </p>
                                            </div>
                                            <!-- sorting -->
                                            <div class="filter-form">
                                                <form action="#">
                                                    <select>
                                                        <option selected="selected" value="">Newest items</option>
                                                        <option value="trending">Trending items</option>
                                                        <option value="sales">Best sellers</option>
                                                        <option value="rating">Best rated</option>
                                                        <option value="price-asc">Price: low to high</option>
                                                        <option value="price-desc">Price: high to low</option>
                                                    </select>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="grid" class="tab-pane active" role="tabpanel">
                                <div class="row">
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-feature text-center">
                                            <div class="feature-img">
                                                <img src="<?php echo e(Storage::url($rs->image)); ?>" alt="">
                                            </div>
                                            <div class="feature-desc">
                                                <h3><a href="<?php echo e(route('service',['id'=>$rs->id])); ?>"><?php echo e($rs->title); ?></a></h3>
                                                <p>$ <?php echo e($rs->price); ?></p>
                                                <a href="<?php echo e(route('service',['id'=>$rs->id])); ?>">Book now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!--pagintaion-->
                                <div class="pagination-box text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pagination-inner">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-caret-left"></i></a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li>3</li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-caret-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--pagintaion end-->
                            </div>

                            <div id="list" class="tab-pane" role="tabpanel">
                                <div class="row">
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="shop-product-list col-md-12">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#"><img src="<?php echo e(Storage::url($rs->image)); ?>" alt=""></a>
                                            </div>
                                            <div class="single-product-info">
                                                <h3><a href="#"><?php echo e($rs->title); ?></a></h3>
                                                <h4>$ <?php echo e($rs->price); ?></h4>
                                                <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                                <div class="singe-product-desc">
                                                    <p><?php echo e($rs->description); ?></p>
                                                </div>
                                                <ul class="product-action">
                                                    <li><a href="<?php echo e(route('service',['id'=>$rs->id])); ?>" class="add-to-cart">Book now</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!--pagintaion-->
                                <div class="pagination-box text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pagination-inner">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-caret-left"></i></a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li>3</li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-caret-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--pagintaion end-->
                            </div>
                        </div>
                    </div>
                    <!--shop sidebar end-->
                </div>
            </div>
        </div>
        <!--shop page end-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/category_services.blade.php ENDPATH**/ ?>