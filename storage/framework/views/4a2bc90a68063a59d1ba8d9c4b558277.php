<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="build/style.css">
  <title>ورود</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm bg-[#f5f1e4]">

  <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-sm sm:mx-auto">
      <div class="absolute inset-0 bg-stone-900 transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
      </div>
      <div class="relative px-4 py-10 bg-gradient-to-t from-orange-100 to-[#f5f1e4] sm:rounded-3xl sm:p-14">

        <div class="max-w-md mx-auto">
          <div>
            <h1 class="text-xl text-center font-YekanBakh-Bold">ورود</h1>
          </div>
          <form action="<?php echo e(route('loginuser')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="divide-y divide-gray-200">
              <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <input name="email" type="email" placeholder="پست الکترونیکی:" class="input w-full rounded-full focus:outline-none placeholder:text-sm" />
                <input name="password" type="password" placeholder="رمز عبور:" class="input w-full rounded-full focus:outline-none placeholder:text-sm" />
                <button class="btn bg-stone-800 w-full hover:bg-stone-900 text-white rounded-full text-sm" type="submit">ورود</button>
                <p class="mt-6 text-xs text-gray-600 text-center leading-8">
                  رمز عبور خود را فراموش کرده اید؟
                  <a href="<?php echo e(route('user.losstpas')); ?>" class="border-b border-gray-500 border-dotted">
                    کلیک کنید.
                  </a>
                  <br>
                  اگر اکانت ندارید
                  <a href="<?php echo e(route('signup.view')); ?>" class="border-b border-gray-500 border-dotted">
                    ثبت نام کنید
                  </a>
                </p>
              </div>
            </div>
          </form>
        </div>
        <!--       
            <div class="w-full flex justify-center">
              <button class="flex items-center bg-white rounded-full px-6 py-2 text-sm font-medium text-gray-800 hover:bg-orange-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:duration-300">
                <span class="mr-2">Continue with Google</span>
                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="-0.5 0 48 48" version="1.1"> <title>Google-color</title><link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico"> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-401.000000, -860.000000)"> <g id="Google" transform="translate(401.000000, 860.000000)"> <path d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24" id="Fill-1" fill="#FBBC05"> </path> <path d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333" id="Fill-2" fill="#EB4335"> </path> <path d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667" id="Fill-3" fill="#34A853"> </path> <path d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24" id="Fill-4" fill="#4285F4"> </path> </g> </g> </g> </svg>
              </button>
            </div> -->

      </div>
    </div>
  </div>

  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="../src/js/main.js"></script>
</body>

</html><?php /**PATH C:\Users\danesh\laravelprojectone\resources\views/login.blade.php ENDPATH**/ ?>