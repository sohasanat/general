<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="build/style.css">
  <title>مسابقه</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

</head>

<body class="font-YekanBakh-Regular text-sm ">



  <!--header -->

  <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--endheader-->

  <section class="px-4 mb-24 ">
    <div class="container mx-auto max-w-screen-xl">
      <nav class="flex mb-5 border-y border-orange-200 py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
          <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center">
              خانه
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>

              <a href="#" class="mr-1 text-sm font-medium">مسابقه</a>
            </div>
          </li>
       </ol>
      </nav>
      


      
<div class="maxWith1000 bg-white rounded-lg flex flex-col  items-center justify-between border-1p p-10 mt-5">
<video width="100%" height="240" controls>
  <source src="../../assets/images/competition/movie.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<p class="py-10 text-justify leading-8">
    اگرفارغ التحصیل و یا دانشجوی رشته های مهندسی صنایع، مهندسی کامپیوتر و یا مهندسی برق هستین، یا کلا برنامه نویسین و رشته تحصیلیتون یه زمینه دیگه بوده این ویدیو برای شماست
اگه می خواین یه حرفه ای رو یاد بگیرین که علاوه بر خودِ همکاران سیستم توی بیش از 80000 شرکت و سازمان و مجموعه ی کارخونه ای و تولیدی توی سراسر کشور خواهان داره این ویدیو واسه شماست
مدرسه ی فرایار یه فضای استارتاپ طوری و یه مدرسه ی تحصیلات تکمیلیه که هدف اصلی ش اینه که شما رو با صنایع مختلف آشنا کنه، بهتون یاد بده چه جوری توی محیط توسعه ی راهکاران محصولات مورد نیاز صنایع رو طراحی و تولید کنید و روش های تحلیل بازار و مارکتینگ و بازارسازی و  قیمت گذاری محصول رو یاد بگیرید
محصول تولید کنید و از فروش، توسعه و استقرار محصولتون کسب درآمد داشته باشین
فقط کافیه برای یه دونه سوال توی لینک جواب پیدا کنید
نه روشش مهمه نه سبک پیاده سازی ش فقط کافیه روشتون و برنامه تون کار بده
    </p>
    <div class="lightGreen2 mt-4 p-6 rounded-lg w-full">
        <form action="<?php echo e(route('job.request')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="param_name" value="">
          <div class="text-base leading-6 text-gray-700 sm:text-lg sm:leading-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <input required type="text" name="name" placeholder="نام و نام‌خانوادگی" class="input w-full  focus:outline-none placeholder:text-sm" />
            <input required type="text" name="phone" placeholder="تلفن همراه" class="input w-full  focus:outline-none placeholder:text-sm" />
            <input required type="email" name="email" placeholder="ایمیل" class="input w-full  focus:outline-none placeholder:text-sm" />
            <input required id="uploadInput" name="resume" alt="resume" type="file" class="hidden" multiple>
            <input name="date" type="text" id="timeNow" value="" class="hidden">

            <button id="uploadButton" class="flex-1 flex-100 btn font-YekanBakh-Regular text-white border-dash "> فایل رزومه و پاسخ سوال را بارگذاری کنید</button>
          </div>
          <div class="flex justify-end w-full">
          <button class="btn mt-5 bg-green px-7 text-white  text-sm text-center" type="submit">ارسال </button>
</div>
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

  <?php if(session('message1')): ?>
  <div style="box-shadow: 0px 0px 22px 0px rgba(66, 68, 90, 1);" class="alert alert-success success-message fixed top-5 w-80 bg-white p-4 rounded-md flex gap-1 justify-between items-center slide-left">
    <p class="font-bold"><?php echo e(session('message1')); ?></p>

    <svg width="48px" height="48px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
      <defs>
        <style>
          .cls-1 {
            fill: #fac100;
          }

          .cls-2 {
            fill: #ff9500;
          }

          .cls-3 {
            fill: #2d4a60;
          }

          .cls-4 {
            fill: #263f52;
          }
        </style>
      </defs>
      <title>Crisis</title>
      <path class="cls-1" d="M44.5,34.5,28.33,6.5a5,5,0,0,0-8.66,0L3.5,34.5A5,5,0,0,0,7.834,42H40.166a5,5,0,0,0,4.33-7.5Z" />
      <path class="cls-2" d="M34,37A24.006,24.006,0,0,1,11.344,20.921L3.5,34.5A5,5,0,0,0,7.834,42H40.166a5,5,0,0,0,4.364-7.431A23.9,23.9,0,0,1,34,37Z" />
      <path class="cls-3" d="M24,30A2.1,2.1,0,0,0,26.1,28.1l1.18-11.8A3,3,0,0,0,24.29,13h-.58a3,3,0,0,0-2.985,3.3L21.905,28.1A2.1,2.1,0,0,0,24,30Z" />
      <circle class="cls-3" cx="24" cy="34.5" r="3.5" />
      <path class="cls-4" d="M24,38a3.5,3.5,0,0,0,3.154-2.009,23.838,23.838,0,0,1-6.326-2.949A3.46,3.46,0,0,0,20.5,34.5,3.5,3.5,0,0,0,24,38Z" />
    </svg>

  </div>
  <?php endif; ?>






</div>




</div>
</sevtion>

  <!--footer -->

  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--endfooter -->

  <script src="<?php echo e(asset('../node_modules/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('../src/js/main.js')); ?>"></script>
  <script>
    document.getElementById("uploadButton").addEventListener("click", () => {
      document.getElementById("uploadInput").click()
    })
  </script>
  <script>
    setTimeout(() => {
      document.querySelector(".success-message").style.display = "none"
    }, 5000)
  </script>

  <script>
    const date = new Date().toLocaleDateString("fa-ir")
    document.querySelector("#timeNow").value = date
  </script>
  <script>
    setTimeout(() => {
      document.querySelector(".alert").style.display = "none"
    }, 2000);
  </script>


</body>

</html><?php /**PATH D:\websiteSohaSanat\general\resources\views/competition/competition1.blade.php ENDPATH**/ ?>