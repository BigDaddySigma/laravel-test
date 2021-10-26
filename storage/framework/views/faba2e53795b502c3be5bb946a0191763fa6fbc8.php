<?php $__env->startSection('title'); ?>TESTAPP | EDIT NOTES <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<main>
                <div class="content">
                    <h1>Edit note</h1>
                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(!empty($data)): ?>
                    <b>You editing note: <?php echo e($data->note_name); ?></b>
                    <p class="noteReview"><?php echo e($data->note_text); ?></p>
                    <small>Author: <?php echo e($data->author); ?>&nbsp;|&nbsp;Last update: <?php echo e($data->updated_at); ?>&nbsp;|&nbsp;Created at: <?php echo e($data->created_at); ?></small>
                    <br>
                    <br>
                    <h1>Enter a new values</h1>
                    <form action="<?php echo e(route('editNote', $data->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        
                        <input type="text" name="name" id="name" value="<?php echo e($data->note_name); ?>" />
                        <textarea name="text" id="text" rows="6"><?php echo e($data->note_text); ?></textarea>
                        <button type="submit" id="submit" name="submit">EDIT</button>
                    </form>
                    <?php else: ?>
                    <form action="<?php echo e(route('findNoteById')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        
                        <input type="text" name="id" id="id" placeholder="ENTER NOTE ID" />
                        <button type="submit" id="submit" name="submit">FIND</button>
                    </form>
                    <?php endif; ?>
                </div>
                <?php echo $__env->make('includes.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programs\OpenServer\domains\test-app\resources\views/editnote.blade.php ENDPATH**/ ?>