<?php $__env->startSection('title'); ?>TESTAPP | REVIEW <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<main>
                <div class="content">
                    <h1>Review</h1>
                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
                    <table class="review">
                        <tbody>
                            <tr>
                                <th><a href="/review&order=id&mode=asc">Note ID</a></th>
                                <th><a href="/review&order=author&mode=asc">Author</a></th>
                                <th>Name</th>
                                <th>Note</th>
                                <th><a href="/review&order=dupdate&mode=asc">Date update</a></th>
                                <th><a href="/review&order=dadd&mode=asc">Date add</a></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tr>
                                <td class="func"><a href="<?php echo e(route('reviewById', $value->id)); ?>"><span class="info" title="open note"></span></a><a href="<?php echo e(route('findNote', $value->id)); ?>"><span class="edit" title="edit note"></span></a><a href="<?php echo e(route('findNoteForDelete', $value->id)); ?>"><span class="delete" title="delete note"></span></a><?php echo e($value->id); ?></td><td><?php echo e($value->author); ?></td><td><?php echo e($value->note_name); ?></td><td><?php echo e($value->note_text); ?></td><td><?php echo e($value->updated_at); ?></td><td><?php echo e($value->created_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></tbody>
                    </table>
                </div>
                <?php echo $__env->make('includes.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programs\OpenServer\domains\test-app\resources\views/review.blade.php ENDPATH**/ ?>