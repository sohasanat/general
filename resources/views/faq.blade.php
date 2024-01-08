<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="build/style.css">
  <title>سوالات متداول</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm bg-[#f5f1e4]">

  <section class="px-4 static bg-orange-200 ">
    <div class="container mx-auto max-w-screen-xl">
      <div class="flex justify-between items-center py-6">
        <div class="lg:hidden leading-none z-10">
          <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
              <!-- Page content here -->
              <label for="my-drawer" class="drawer-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black swap-off fill-current">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </label>
            </div>
            <div class="drawer-side">
              <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
              <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                <div class="drawer-content text-left">
                  <label for="my-drawer" class="swap swap-rotate drawer-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </label>
                </div>
                <!-- Sidebar content here -->
                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/">صفحه اصلی</a></li>

                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('allproducts') }}">محصولات</a></li>


              </ul>
            </div>
          </div>
        </div>
        <div class="flex items-center gap-8">
          <div class="w-22">
            <a href="/" class="font-YekanBakh-ExtraBlack text-3xl color-green">
              <img class="object-cover w-full" src="../assets/images/logomain.svg" alt="">
            </a>
          </div>

        </div>
        <div class="hidden lg:block">
          <ul class="flex menu lg:menu-horizontal">
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/">صفحه اصلی</a></li>
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('allproducts') }}">محصولات</a></li>

            <!-- <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="blog">وبلاگ</a></li> -->
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="about-us">درباره ما</a></li>
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="contact-us">تماس با ما</a></li>
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/job">فرصت‌های شغلی</a></li>
          </ul>
        </div>
        <div class="border bg-green text-white hover:text-white hover:bg-green duration-300 rounded-full">
          <a href="login" class="flex py-2.5 px-7 rounded-full font-YekanBakh-Regular">ورود | ثبت نام</a>
        </div>

      </div>
    </div>
  </section>

  <section class="px-4 mb-24">
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

              <a href="#" class="mr-1 text-sm font-medium">سوالات متداول</a>
            </div>
          </li>
        </ol>
      </nav>
      <div class="flex justify-center relative my-16">
        <h2 class="font-YekanBakh-ExtraBlack text-3xl">ســــــــوالات مــــتـــــداول</h2>
        <div class="absolute -top-6">
          <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">questions</span>

        </div>
        <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

      </div>

      <div class="max-w-4xl mx-auto">
        <div class="collapse collapse-plus bg-white rounded-3xl my-4">
          <input type="radio" name="my-accordion-3" checked="checked" />
          <div class="collapse-title text-base font-YekanBakh-Bold">
            فرم ها را چگونه می توانم دانلود کنم؟
          </div>
          <div class="collapse-content leading-8">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white rounded-3xl my-4">
          <input type="radio" name="my-accordion-3" checked="checked" />
          <div class="collapse-title text-base font-YekanBakh-Bold">
            آیا پس از عضویت نیاز به تایید ایمیل است؟
          </div>
          <div class="collapse-content leading-8">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white rounded-3xl my-4">
          <input type="radio" name="my-accordion-3" checked="checked" />
          <div class="collapse-title text-base font-YekanBakh-Bold">
            چگونه اکانت خود را بازیابی کنیم؟
          </div>
          <div class="collapse-content leading-8">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white rounded-3xl my-4">
          <input type="radio" name="my-accordion-3" checked="checked" />
          <div class="collapse-title text-base font-YekanBakh-Bold">
            آیا برای سفارش خدمات تماس بگیریم؟
          </div>
          <div class="collapse-content leading-8">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white rounded-3xl my-4">
          <input type="radio" name="my-accordion-3" checked="checked" />
          <div class="collapse-title text-base font-YekanBakh-Bold">
            چگونه مشاوره رایگان دریافت کنیم؟
          </div>
          <div class="collapse-content leading-8">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="p-10 bg-stone-800 text-white">
    <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full bg-stone-900 hover:bg-orange-200 text-orange-200 hover:text-stone-900 duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
      </svg>

      <span class="sr-only">Go to top</span>
    </button>
    <div class="container mx-auto max-w-screen-xl">
      <div class="grid grid-cols-12 gap-4 leading-8">
        <div class="col-span-12 lg:col-span-5">
          <img class="mb-4" src="../assets/images/logo-footer.png" alt="">
          <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده است.</p>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 text-right md:text-center">
          <h3 class="font-IRANSansWeb_Bold text-white mb-4 text-base">دسترسی سریع</h3>
          <ul>
            <li><a href="index.html">صفحه اصلی</a></li>
            <li><a href="about-us.html">درباره ما</a></li>
            <li><a href="contact-us.html">تماس با ما</a></li>
            <li><a href="project.html">پروژه ها</a></li>
            <li><a href="products.html">خدمات ما</a></li>
          </ul>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 text-right md:text-center">
          <h3 class="font-IRANSansWeb_Bold text-white mb-4 text-base">خدمات شرکت</h3>
          <ul>
            <li><a href="/single-page">جزئیات وبلاگ</a></li>
            <li><a href="single-project.html">جزئیات پروژه</a></li>
            <li><a href="manager.html">مدیران</a></li>
            <li><a href="faq.html">سوالات متداول</a></li>
            <li><a href="404.html">404</a></li>
          </ul>
        </div>
        <div class="col-span-12 md:col-span-4 lg:col-span-3">
          <h3 class="font-IRANSansWeb_Bold text-white mb-4 text-base">عضویت در خبرنامه</h3>
          <div class="flex items-center">
            <img src="../assets/images/enamad_logo.png" alt="">
            <img src="../assets/images/samandehi_logo.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <footer class="footer footer-center p-4 bg-stone-700 text-white">
    <div>
      <p>Copyright © 2023 - تمامی حقوق برای راست چین محفوظ می باشد</p>
    </div>
  </footer>

  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="../src/js/main.js"></script>
</body>

</html>