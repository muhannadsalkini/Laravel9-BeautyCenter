<div>
    
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>

    <div class="review-form">
        <form wire:submit.prevent="store">
            <?php if(auth()->guard()->check()): ?>
            <div class="star-box fix">
                <h4>your Rating</h4>
                <select wire:model="rate">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="input-box-2 fix">
                <div class="input-box float-left">
                    <input wire:model="subject" placeholder="Subject" type="text">
                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="input-box review-box fix">
                <textarea wire:model="review" placeholder="Write your review"></textarea>
                <?php $__errorArgs = ['review'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="input-box submit-box fix">
                <input value="submit review" type="submit">
            </div>
            <?php else: ?>
                <div class="input-box submit-box fix">
                    <a href="/login" ><input value="Login for review"></a>
                </div>
            <?php endif; ?>
        </form>
    </div>

</div>
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/livewire/review.blade.php ENDPATH**/ ?>