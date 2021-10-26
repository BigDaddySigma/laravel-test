<?php $__env->startSection('title'); ?>TESTAPP | DELETE NOTES <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<main>
                <div class="content">
                    <h1>Delete note</h1>
                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(!empty($data)): ?>
                    <b><?php echo e($data->note_name); ?></b>
                    <p class="noteReview"><?php echo e($data->note_text); ?></p>
                    <small>Author: <?php echo e($data->author); ?>&nbsp;|&nbsp;Last update: <?php echo e($data->updated_at); ?>&nbsp;|&nbsp;Created at: <?php echo e($data->created_at); ?></small>
                    <br>
                    <br>
                    <p class="middleLinkBox">
                        <b>Do you want to delete this note?</b>
                        <a href="<?php echo e(route('deleteNote', $data->id)); ?>">Yes, delete</a>
                        <a href="/deletenote">No, cancel</a>
                    </p>
                    <?php else: ?>
                    <form action="<?php echo e(route('findNoteByIdForDelete')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        
                        <input type="text" name="id" id="id" placeholder="ENTER NOTE ID" />
                        <button type="submit" id="submit" name="submit">DELETE</button>
                    </form>
                    <?php endif; ?>
                </div>
                <?php echo $__env->make('includes.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programs\OpenServer\domains\test-app\resources\views/deletenote.blade.php ENDPATH**/ ?>