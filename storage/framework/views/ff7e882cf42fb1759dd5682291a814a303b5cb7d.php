<?php if($errors->any()): ?><div class="errorCode">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
<?php endif; ?>
<?php if(session('success')): ?><div class="successCode">
                        <p><?php echo e(session('success')); ?></p>
                </div>
<?php endif; ?>
<?php if(session('error')): ?><div class="errorCode">
                        <p><?php echo e(session('error')); ?></p>
                </div>
<?php endif; ?><?php /**PATH D:\programs\OpenServer\domains\test-app\resources\views/includes/messages.blade.php ENDPATH**/ ?>