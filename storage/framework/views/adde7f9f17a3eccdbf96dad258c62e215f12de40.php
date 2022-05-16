<?php ($setting = App\Http\Controllers\HomeController::getsetting()); ?>


<?php $__env->startSection('title', $setting->title. ' | User Profile'); ?>
<?php $__env->startSection('breadcrumbs', 'User Reviews'); ?>
<?php $__env->startSection('Reviews_status', 'color: #6bc513'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('home._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="shop-page ptb-100">
        <div class="container" >
            <div class="row">
                <?php echo $__env->make('home.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="col-md-10" >
                    <div class="table-responsive">
                        <?php echo $__env->make('home.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table class="table table-bordered  table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Service</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($rs->id); ?></th>
                                    <td> <?php if($rs->service_id): ?> <a href="<?php echo e(route('service', ['id'=>$rs->service_id])); ?>" target="_blank"><?php echo e($rs->service->title); ?></a> <?php else: ?> NO SERVICE! <?php endif; ?></td>
                                    <td><?php echo e($rs->subject); ?></td>
                                    <td><?php echo e($rs->review); ?></td>
                                    <td><?php echo e($rs->rate); ?></td>
                                    <td>
                                        <?php if($rs->status == 'True'): ?>
                                            <i style="color: #6bc513">Published</i>
                                        <?php elseif($rs->status == 'False'): ?>
                                            <i style="color: #FF9F43">Rejected</i>
                                        <?php else: ?>
                                            <i style="color: #00CFE8">Under Review</i>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($rs->created_at); ?></td>
                                    <td><a href="<?php echo e(route('destroyreview', ['id'=>$rs->id])); ?>" onclick="return confirm('Delete! are you sure?')">Delete</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/user_reviews.blade.php ENDPATH**/ ?>