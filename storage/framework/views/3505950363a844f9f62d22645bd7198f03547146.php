<?php $__env->startSection('title'); ?>TESTAPP | NOTE - <?php echo e($data->note_name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<main>
                <div class="content">
                    <h1><?php echo e($data->note_name); ?></h1>
                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(!empty($data)): ?>
                    <p class="noteReview"><?php echo e($data->note_text); ?></p>
                    <small>Author: <?php echo e($data->author); ?>&nbsp;|&nbsp;Last update: <?php echo e($data->updated_at); ?>&nbsp;|&nbsp;Created at: <?php echo e($data->created_at); ?></small>
                    <?php endif; ?>
                </div>
                <?php echo $__env->make('includes.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programs\OpenServer\domains\test-app\resources\views/note.blade.php ENDPATH**/ ?>