<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('../node_modules/swiper/swiper-bundle.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('build/style.css')); ?>">
  <title>ایجاد بلاگ</title>
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('../assets/images/favicon.ico')); ?>">

</head>

<body class="font-YekanBakh-Regular text-sm">


  <!--header -->

  <?php echo $__env->make('c-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--endheader-->


  <section class="px-4 mb-24 min-height-50">
    <div class="container mx-auto max-w-screen-xl">

      <div class="lightGreen2 mt-16 p-6 rounded-lg ">
        <form action="<?php echo e(route('blog.save')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="text-base text-gray-700 sm:text-lg leading-8 flex flex-col gap-6">
            <input required type="text" name="name" placeholder="نویسنده" class="input w-full  focus:outline-none placeholder:text-sm" />
            <input required type="text" name="title" placeholder=" عنوان بلاگ" class="input w-full  focus:outline-none placeholder:text-sm" />
            <input type="file" name="photo" accept="image/*, .pdf" required>
            <textarea required name="Description" placeholder="متن بلاگ" class="textarea w-full  focus:outline-none placeholder:text-sm">
</textarea>
          </div>
          <button class="btn mt-5 bg-green px-7 text-white  text-sm text-center" type="submit">ثبت بلاگ</button>
        </form>
      </div>

    </div>
  </section>
  <?php if(session('message')): ?>
  <div style="box-shadow: 0px 0px 22px 0px rgba(66, 68, 90, 1);" class="alert alert-success success-message fixed top-5 w-80 bg-white p-4 rounded-md flex gap-1 justify-between items-center slide-left">
    <p class="font-bold"><?php echo e(session('message')); ?></p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
      <linearGradient id="I9GV0SozQFknxHSR6DCx5a" x1="9.858" x2="38.142" y1="9.858" y2="38.142" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#21ad64" />
        <stop offset="1" stop-color="#088242" />
      </linearGradient>
      <path fill="url(#I9GV0SozQFknxHSR6DCx5a)" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z" />
      <path d="M32.172,16.172L22,26.344l-5.172-5.172c-0.781-0.781-2.047-0.781-2.828,0l-1.414,1.414	c-0.781,0.781-0.781,2.047,0,2.828l8,8c0.781,0.781,2.047,0.781,2.828,0l13-13c0.781-0.781,0.781-2.047,0-2.828L35,16.172	C34.219,15.391,32.953,15.391,32.172,16.172z" opacity=".05" />
      <path d="M20.939,33.061l-8-8c-0.586-0.586-0.586-1.536,0-2.121l1.414-1.414c0.586-0.586,1.536-0.586,2.121,0	L22,27.051l10.525-10.525c0.586-0.586,1.536-0.586,2.121,0l1.414,1.414c0.586,0.586,0.586,1.536,0,2.121l-13,13	C22.475,33.646,21.525,33.646,20.939,33.061z" opacity=".07" />
      <path fill="#fff" d="M21.293,32.707l-8-8c-0.391-0.391-0.391-1.024,0-1.414l1.414-1.414c0.391-0.391,1.024-0.391,1.414,0	L22,27.758l10.879-10.879c0.391-0.391,1.024-0.391,1.414,0l1.414,1.414c0.391,0.391,0.391,1.024,0,1.414l-13,13	C22.317,33.098,21.683,33.098,21.293,32.707z" />
    </svg>


  </div>
  <?php endif; ?>




  <script src="<?php echo e(asset('../node_modules/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('../src/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH D:\websiteSohaSanat\general\resources\views/createBlog.blade.php ENDPATH**/ ?>