<?php $__env->startSection('title'); ?>TESTAPP | REVIEW <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<main>
                <div class="content">
                    <h1>Review</h1>
                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <table>
                        <tbody>
                            <tr>
                                <th>Note ID</th><th>Author</th><th>Note</th><th>Date update</th><th>Date add</th>
                            </tr>
                            <tr>
                                <td>1</td><td>123</td><td>321</td><td>123</td><td>123</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php echo $__env->make('includes.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programs\OpenServer\domains\test-app\resources\views//review.blade.php ENDPATH**/ ?>