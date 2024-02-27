<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="build/style.css">
  <title>فراموشی رمز عبور</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm bg-[#f5f1e4]">

  <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-sm sm:mx-auto">
      <div class="absolute inset-0 bg-stone-900 transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
      </div>
      <div class="relative px-4 py-10 bg-gradient-to-t from-orange-100 to-[#f5f1e4] sm:rounded-3xl sm:p-14">

        <form action="{{ route('user.losstpasvrify') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="max-w-md mx-auto">
            <div>
              <h1 class="text-xl text-center font-YekanBakh-Bold">فراموشی رمز عبور</h1>
            </div>
            <div class="divide-y divide-gray-200">
              <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <p class="text-xs text-gray-600 text-center leading-8">
                  ایمیل خود را وارد کنید. یک لینک برای ساختن گذرواژه جدید در ایمیل خود دریافت خواهید کرد.
                </p>
                <input name="email" type="email" placeholder="پست الکترونیکی:" class="input w-full rounded-full focus:outline-none placeholder:text-sm" />
                <button class="btn bg-stone-800 w-full hover:bg-stone-900 text-white rounded-full text-sm" type="submit">
                  بازیابی گذرواژه

                </button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="../src/js/main.js"></script>
</body>

</html>