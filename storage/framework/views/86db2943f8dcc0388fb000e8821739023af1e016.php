<?php $__env->startSection('title'); ?>TESTAPP | ADD NOTES <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<main>
                <div class="content">
                    <h1>Add note</h1>
                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e(route('addnotesubmit')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        
                        <input type="text" name="author" id="author" placeholder="YOUR NAME" />
                        <input type="text" name="name" id="name" placeholder="NOTE NAME" />
                        <textarea name="text" id="text" rows="6" placeholder="TEXT"></textarea>
                        <button type="submit" id="submit" name="submit">ADD</button>
                    </form>
                </div>
                <?php echo $__env->make('includes.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programs\OpenServer\domains\test-app\resources\views/addnote.blade.php ENDPATH**/ ?>