<?php $__env->startSection('title', $setting->title. ' | Service Detail'); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>


<?php $__env->startSection('content'); ?>

<div class="wrapper white-bg">
    <!-- product details start -->
    <div class="product-details-area  ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="zoomWrapper clearfix">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="<?php echo e(Storage::url($data->image)); ?>" data-zoom-image="<?php echo e(Storage::url($data->image)); ?>" alt="big-1">
                            </a>
                        </div>
                        <div class="product-thumb">
                            <ul class="details-slider" id="gallery_01">
                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="elevatezoom-gallery" href="#" data-image="<?php echo e(Storage::url($image->image)); ?>" data-zoom-image="<?php echo e(Storage::url($image->image)); ?>"><img src="<?php echo e(Storage::url($image->image)); ?>" alt=""></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="product-detail single-product-info">
                        <h3><?php echo e($data->title); ?></h3>
                        <?php
                            $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                            $countreviews = \App\Http\Controllers\HomeController::countreviews($data->id);
                        ?>
                        <div class="rating-review">
                            <div class="single-rating-review">
                                <i class=" <?php if($avgrev<1): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                <i class=" <?php if($avgrev<2): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                <i class=" <?php if($avgrev<3): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                <i class=" <?php if($avgrev<4): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                <i class=" <?php if($avgrev<5): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                <p>(<?php echo e($countreviews); ?>)</p>
                            </div>
                        </div>
                        <h4>$ <?php echo e($data->price); ?></h4>
                        <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                        <h5 class="overview">OVERVIEW:</h5>
                        <p><?php echo e($data->description); ?></p>


                        <div class="categories-size mt-20">
                            <p class="size">Day:</p>
                            <a href="#">50gm </a>
                            <a href="#">100gm </a>
                            <a href="#">150gm </a>
                            <a href="#" class="hidden-xs">200gm </a>
                        </div>
                        <div class="shop-buttons">
                            <p>Quantity:</p>
                            <div id="quantity-wanted-p">
                                <input type="number" value="0" class="cart-plus-minus-box">
                                <div class="dec qtybutton">-</div>
                                <div class="inc qtybutton">+</div>
                                <span class="clearfix"></span>
                            </div>
                        </div>
                        <ul class="product-action">
                            <li><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                            <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                        </ul>
                        <div class="share mt-30">
                            <p>share:</p>
                            <ul>
                                <li class="facebook"><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="product-description-tab mt-60">
                            <div class="description-tab-menu">
                                <ul class="clearfix" role="tablist">
                                    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                    <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">information</a></li>
                                    <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews(<?php echo e($countreviews); ?>)</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <?php echo $data->detail; ?>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="specification">
                                    <p>Veniam quasi voluptatem facere nesciunt laborum, quibusdam amet totam fugit, blanditiis doloribus alias eveniet dolore pariatur dolores aliquid!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex consectetur minima quod officiis magni, aspernatur. Ea consectetur ab in, consequatur alias, quo sit. Optio vitae cupiditate, consectetur veritatis cumque odio magnam voluptates voluptas eligendi, minima tenetur voluptatum dolor autem, doloribus expedita obcaecati.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="review">
                                    <div class="review-wrapper fix">
                                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="sin-review">
                                            <div class="review-details fix">
                                                <div class="review-author float-left">
                                                    <h3><?php echo e(substr($rs->user->name,0,4)); ?>****</h3>
                                                    <div class="review-star float-left">
                                                        <i class=" <?php if($rs->rate<1): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                                        <i class=" <?php if($rs->rate<2): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                                        <i class=" <?php if($rs->rate<3): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                                        <i class=" <?php if($rs->rate<4): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                                        <i class=" <?php if($rs->rate<5): ?> zmdi zmdi-star-outline <?php else: ?> zmdi zmdi-star <?php endif; ?>"></i>
                                                    </div>
                                                    <span><?php echo e($rs->created_at); ?></span>
                                                </div>
                                                <div>
                                                    <h6><strong><?php echo e($rs->subject); ?></strong></h6>
                                                    <p><?php echo e($rs->review); ?></p>
                                                </div>

                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="review-form-wrapper fix">
                                        <h3>write a review</h3>
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('review', ['id'=>$data->id])->html();
} elseif ($_instance->childHasBeenRendered('phl60UH')) {
    $componentId = $_instance->getRenderedChildComponentId('phl60UH');
    $componentTag = $_instance->getRenderedChildComponentTagName('phl60UH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('phl60UH');
} else {
    $response = \Livewire\Livewire::mount('review', ['id'=>$data->id]);
    $html = $response->html();
    $_instance->logRenderedChild('phl60UH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Related products start-->
        <div class="related-products mt-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h2>Related product</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="related-product-list">
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="single-feature text-center">
                                <div class="feature-img">
                                    <img src="<?php echo e(Storage::url($service->image)); ?>" alt="">
                                </div>
                                <div class="feature-desc">
                                    <h3><a href="#"><?php echo e($service->title); ?></a></h3>
                                    <p>$<?php echo e($service->price); ?></p>
                                    <a href="<?php echo e(route('service',['id'=>$service->id])); ?>">Book now</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--Related products end-->
    </div>
    <!-- product details end -->
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/service_detail.blade.php ENDPATH**/ ?>