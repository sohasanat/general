<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo e(asset('node_modules/swiper/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('build/style.css')); ?>">
    <title>صفحه اصلی</title>
</head>
<body class="font-YekanBakh-Regular text-sm bg-[#f5f1e4]">

 

    
                <!-- heder - start -->
                <?php echo $__env->make('heder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- heder - end  -->     
                
                
                <!-- body - start -->
                
                <?php echo $__env->yieldContent('content'); ?>

                <!-- body - end  -->    
      
                <!-- footer - start -->
                <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- footer - end  -->     

    <script src="<?php echo e(asset('node_modules/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('src/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\danesh\laravelprojectone\resources\views/index.blade.php ENDPATH**/ ?>