<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('../node_modules/swiper/swiper-bundle.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('build/style.css')); ?>">
  <title>جزئیات محصول</title>
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('../assets/images/favicon.ico')); ?>">

</head>

<body class="font-YekanBakh-Regular text-sm bg-gradient-to-t">

  <!--header -->

  <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--endheader-->
  <section class="px-4 mb-24">
    <!-- moshavere-->
    <div style="display: none; z-index: 9; background-color: rgba(0,0,0,0.7);" class="fixed top-0 left-0 bottom-0 right-0 flex justify-center items-center" id="modalProduct2">
      <div class="px-6 flex flex-wrap gap-8 modalProduct p-10">
        <button class="absolute top-1 left-1 close-modal w-6" id="closemode2">
          <img class="w-full" src="../assets/images/close.svg" alt="">
        </button>
        <div>
          <p class="font-YekanBakh-Bold text-base mb-2">ایمیــل:</p>
          <a class="text-orange-500 leading-relaxed">info@sohasanat.net</a>
        </div>
        <div>
          <p class="font-YekanBakh-Bold text-base mb-2">تمـاس:</p>
          <p class="leading-relaxed">031-91099120 | 09131862984</p>
        </div>
      </div>
    </div>

    <!-- demo-->
    <div style="display: none; z-index: 9; background-color: rgba(0,0,0,0.7);" class="fixed top-0 left-0 bottom-0 right-0 flex justify-center items-center" id="modalProduct1">
      <div class="px-6 flex flex-col gap-2 modalProduct p-10">
        <button class="absolute top-1 left-1 close-modal w-6" id="closemode1">
          <img class="w-full" src="../assets/images/close.svg" alt="">
        </button>
        <form action="<?php echo e(route('product.demo')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <input required name="fullname" type="text" placeholder="نام و نام‌خانوادگی:" class="mb-4 border-box input w-full rounded-full focus:outline-none placeholder:text-sm" />
          <input required name="phone" type="text" placeholder="شماره تماس:" class="mb-4 border-box input w-full rounded-full focus:outline-none placeholder:text-sm" />
          <input required name="company" type="text" placeholder="شرکت:" class="mb-4 border-box input w-full rounded-full focus:outline-none placeholder:text-sm" />
          <input required name="post" type="text" placeholder="سمت شغلی:" class="mb-4 border-box input w-full rounded-full focus:outline-none placeholder:text-sm" />
          <input required type="email" name="email" placeholder="ایمیل(اختیاری):" class="mb-4 border-box input w-full rounded-full focus:outline-none placeholder:text-sm" />
          <div>
            <input type="checkbox" name="demo" value="zahra" class="formInput ml-4" id="cat-35">
            <label for="cat-35"> درخواست دمو </label>
          </div>
          <div>
            <input type="checkbox" name="broshor" value="zahra" class="formInput ml-4" id="cat-38">
            <label for="cat-38"> درخواست بروشور </label>
          </div>
          <button class="btn bg-stone-800 hover:bg-stone-900 text-white mt-4 rounded-full w-full" tyoe="submit">ثبت درخواست </button>
        </form>


      </div>
    </div>

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


    <div class="container mx-auto max-w-screen-xl">
      <nav class="flex mb-5 border-y border-orange-200 py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
          <li class="inline-flex items-center">
            <a href="<?php echo e(route('main.company')); ?>" class="inline-flex items-center">
              خانه
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>

              <a href="#" class="mr-1 text-sm font-medium">جزئیات محصول</a>
            </div>
          </li>
        </ol>
      </nav>
      <div class="flex flex-col items-center justify-center relative mb-12 mt-12">
        <h2 class="font-YekanBakh-ExtraBlack text-3xl"><?php echo e($productsvar->name); ?></h2>

        <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>
      </div>

      <div class="max-w-4xl mx-auto">
        <div style="display: none; z-index: 9; background-color: rgba(0,0,0,0.7);" class="fixed top-0 left-0 bottom-0 right-0 flex justify-center items-center image-modal">
          <button id="closemode3" class="absolute top-10 right-10 text-white ">بستن</button>
          <img style="max-width: 90%;" src="../assets/images/imagesfra/g4.png" alt="" class="big-image">
        </div>
        <div class="mb-12">
          <div class="">
            <img class="rounded-xl cursor-pointer" src="<?php echo e($productsvar->photo); ?>" />
          </div>
          <div thumbsSlider="" class="swiper gall-project mt-4">
            <div class="swiper-wrapper">

              <?php $__currentLoopData = $productimg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="swiper-slide slidr-product">
                <img class="rounded-xl cursor-pointer images" src="<?php echo e($img->image); ?>" />
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
          </div>
        </div>
        <div class="rounded-lg  mb-12 order flex-wrap gap-2 justify-center sm:justify-between">
          <h3 class="font-YekanBakh-ExtraBlack text-xl">خوشــــــــــت اومده نـــــه؟! </h3>
          <img class="hidden sm:block" src="../assets/images/arrow.svg" alt="">

          <div class="flex flex-wrap gap-4 items-center">
            <button class="w-auto inline-block py-2 px-7 bg-green text-white font-YekanBakh-SemiBold rounded-lg " id="btn-modal1">درخواست دمو / بروشور</button>
            <button class="w-auto inline-block py-2 px-7 bg-green text-white font-YekanBakh-SemiBold rounded-lg" id="btn-modal2">مشاوره</button>
          </div>


        </div>
        <div class="leading-8 mb-12 box-border min-h">
          <div class="p-2 mb-4">
            <div class="flex justify-between gap-2 flex-wrap">
              <button class="px-3 py-1 gray btn-tab tab-button" onclick="showTab('tab1')">توضیحات</button>
              <button class="px-3 py-1 gray btn-tab tab-button" onclick="showTab('tab2')">نگارش‌ها</button>
              <button class="px-3 py-1 gray btn-tab tab-button" onclick="showTab('tab3')">نظرات</button>
              <button class="px-3 py-1 gray btn-tab tab-button" onclick="showTab('tab4')">داستان موفقیت</button>
            </div>
          </div>
          <!-- Tab Content -->
          <div id="tab1" class="tab-content p-4 pb-8  rounded-lg">
            <p>
              <?php echo e($productsvar->longDescreption); ?>

            <ul>
              <li>
                لیست امکانات و ویژگی های اصلی
              </li>
              <?php $__currentLoopData = $hintsvar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <?php echo e($hint->Description); ?>

              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
            </p>
          </div>
          <div id="tab2" class="tab-content p-4 pb-8  rounded-lg">
            <div class="grid gap-4">

              <?php $__currentLoopData = $informationvar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infovar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class=" rounded-lg flex items-center">
                <div class="p-2 rounded-lg flex justify-center items-center icongreen w-8 h-8">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.375 26.563">
                    <path id="_2175555261690015850" data-name="2175555261690015850" d="M39.8,12.405a2.292,2.292,0,0,1,3.271,0,2.366,2.366,0,0,1,.033,3.281L24.626,37.53a.79.79,0,0,1-.057.064,2.291,2.291,0,0,1-3.271,0L10.052,26.2a2.366,2.366,0,0,1,0-3.315,2.292,2.292,0,0,1,3.271,0l9.54,9.667L39.74,12.475A.771.771,0,0,1,39.8,12.405Z" transform="translate(-9.375 -11.719)" fill="#d13c41" />
                  </svg>

                </div>
                <div class="mr-2"><?php echo e($infovar->Description); ?></div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






            </div>
          </div>
          <div id="tab3" class="tab-content p-4 pb-8  rounded-lg">
            <p class="text-center rounded-2xl p-4">نظری برای این محصول ثبت نشده است</p>
            <div>
              <div class="flex items-center mb-4">

                <div class="mr-2">
                  <span class="font-IRANSansWeb_Bold rounded-full py-1 font-YekanBakh-SemiBold">نظر شما</span>
                </div>
              </div>
              <form action="<?php echo e(route('product.comment')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="param_name" value="<?php echo e($productsvar->id); ?>">
                <input required type="text" name="name" placeholder="نام:" class="border-box mb-5 input w-full rounded-full focus:outline-none placeholder:text-sm" />
                <input required type="email" name="email" placeholder="ایمیل:" class=" border-box mb-5 input w-full rounded-full focus:outline-none placeholder:text-sm" />
                <textarea name="Description" class="textarea border-box mb-5 w-full h-36 rounded-3xl" placeholder="نظر خود را بنویسید..."></textarea>
                <button class="btn bg-stone-800 w-36 hover:bg-stone-900 text-white mt-4 rounded-full" type="submit">ارسال پیام</button>

              </form>


            </div>
          </div>
          <div id="tab4" class="tab-content p-4 pb-8  rounded-lg">
            <p class="text-center rounded-2xl p-4">
              داستان موفقیتی برای این محصول ایجاد نشده است
            </p>
          </div>
        </div>
        <?php
        if (count($reltionproductsvar) != 1) {
        ?>
          <div class="mb-12">
            <div class="flex items-center mb-6">

              <div class="mr-2">
                <span class="font-IRANSansWeb_Bold  rounded-full py-1 font-YekanBakh-SemiBold"> محصولات مرتبط</span>
              </div>
            </div>
            <div class="swiper sin-project">
              <div class="swiper-wrapper ease-linear">

                <?php $__currentLoopData = $reltionproductsvar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relproduts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                if ($relproduts->id != $productsvar->id) {
                ?>
                  <div class="swiper-slide">
                    <div class="group/item">
                      <a href="<?php echo e(route('product.details', $relproduts->id)); ?>" class="bg-white border-1p w-full displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                        <div class="w-10 mb-4">
                          <img src="<?php echo e($relproduts->logo); ?>" alt="">
                        </div>

                        <div class="flex items-center mb-4">
                          <h2 class="font-YekanBakh-ExtraBold text-base mr-1"><?php echo e($relproduts->name); ?></h2>
                        </div>
                        <div>
                          <p class="line3"><?php echo e($relproduts->Description); ?></p>
                        </div>
                      </a>
                    </div>
                  </div>
                <?php
                }
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        <?php
        }
        ?>

      </div>

    </div>
  </section>
  <!--footer -->

  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--endfooter -->


  <script src="<?php echo e(asset('../node_modules/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('../src/js/main.js')); ?>"></script>
  <script>
    const images = document.getElementsByClassName("images")
    Array.from(images).forEach((element) => {
      element.addEventListener("click", () => {
        const src = element.getAttribute("src")
        document.querySelector(".image-modal").style.display = "flex"
        document.querySelector(".big-image").setAttribute("src", src);
      })
    })

    document.getElementById("closemode3").addEventListener("click", () => {
      document.querySelector(".image-modal").style.display = "none";

    })



    const btnmodal2 = document.getElementById("btn-modal2")
    btnmodal2.addEventListener("click", () => {
      document.getElementById("modalProduct2").style.display = "flex"

    })
    document.getElementById("closemode2").addEventListener("click", () => {
      document.getElementById("modalProduct2").style.display = "none"
    })


    const btnmodal1 = document.getElementById("btn-modal1")
    btnmodal1.addEventListener("click", () => {

      document.getElementById("modalProduct1").style.display = "flex"
    })
    document.getElementById("closemode1").addEventListener("click", () => {
      document.getElementById("modalProduct1").style.display = "none"
    })
  </script>




</body>

</html><?php /**PATH C:\Users\danesh\laravelprojectone\resources\views/single-product.blade.php ENDPATH**/ ?>