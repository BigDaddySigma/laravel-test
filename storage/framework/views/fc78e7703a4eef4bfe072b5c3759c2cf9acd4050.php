<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link href="css/app.css" rel="stylesheet">
        <script src="js/app.js" defer></script>
    </head>
    <body>
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="wrapper">
            <?php echo $__env->yieldContent('main'); ?>
            <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </body>
</html><?php /**PATH D:\programs\OpenServer\domains\test-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>