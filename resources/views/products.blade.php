<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>محصولات</title><link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body class="font-YekanBakh-Regular text-sm bg-gradient-to-t">


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
                        
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="products">محصولات</a></li>

                        <!-- <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="faq">سوالات متداول</a></li> -->
                         <!-- <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="blog">وبلاگ</a></li> -->
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="about-us">درباره ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="contact-us">تماس با ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/job">فرصت‌های شغلی</a></li>
                        
                      </ul>
                    </div>
                  </div>
            </div>
              <div class="flex items-center gap-8">
                <div>
                    <a href="/" class="font-YekanBakh-ExtraBlack text-3xl color-green">سهاصنعت</a>
                </div>

              </div>
              <div class="hidden lg:block">
                    <ul class="flex menu lg:menu-horizontal">
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/">صفحه اصلی</a></li>
                         <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="products">محصولات</a></li>

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
                              
                            <a href="#" class="mr-1 text-sm font-medium">محصولات</a>
                        </div>
                    </li>
                </ol>
            </nav>  
            <div class="flex justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl"> محصــــــــــــــــولات</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">product</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div> 

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                
                <a href="/single-product" class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/icon1.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                           <h2 class="font-YekanBakh-ExtraBold text-base mr-1">شارژ بهینه ذوب</h2>
                    </div>
                    <div>
                        <p class="line3">یکی از نیازهای اساسی در صنایع فولاد و ریخته گری تهیه مذابی است که با ارزان ترین قیمت گرید آلیاژی مورد نظر را جهت ساخت محصول نهایی فراهم کند و به این ترتیب قیمت تمام شده مذاب پایین بیاید. بنابراین نیاز است محاسباتی انجام شود که با انتخاب بهینه مواد اولیه ارزان ترین شارژ را جهت استفاده در کوره ها پیشنهاد بدهد.</p>                          
                    </div>
</a>
                <a href="/single-product" class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/icon2.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                           <h2 class="font-YekanBakh-ExtraBold text-base mr-1">مدیریت ممیزی</h2>
                    </div>
                    <div>
                        <p class="line3"> این محصول فرایند ممیزی را از برنامه ریزی ممیزی، تا تهیه چک لیست ها و استاندارد ها، امکان ثبت اقدامات اصلاحی بر روی عدم انطباق های شناسایی شده و پیگیری اقدامات و گزارشات سیستمی نهایی جهت ارائه نتایج به مدیریت و تحلیل های مقایسه ای به صورت کامل پوشش می دهد.</p>
                    </div>
</a>
                <a href="/single-product" class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/icon3.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                           <h2 class="font-YekanBakh-ExtraBold text-base mr-1">مدیریت قراضه</h2>
                    </div>
                    <div>
                    <p class="line3">صنعت بازیافت فلزات اساسی، یک صنعت مهم و اساسی در کشور بشمار می آید که طی آن ضایعات و قراضه های آهن و فولاد جمع آوری و با ذوب و تبدیل به شمش، قابلیت استفاده در صنعت را پیدا می کنند.</p>
                    </div>
</a>
                <a href="/single-product" class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/icon4.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                           <h2 class="font-YekanBakh-ExtraBold text-base mr-1">ارزیابی تامین کننده</h2>
                    </div>
                    <div>
                    <p class="line3">این محصول راهکاری جهت تسهیل و بهبود ارزیابی تامین کنندگان شرکت های بزرگ ارائه می دهد. سیستم ارزیابی تامین کننده به منظور شفاف سازی و کمک به انتخاب تامین کنندگان برتر نسبت به پارامترهای تعریف شده سازمان و همچنین امکان انتخاب و ارزیابی دقیق تامین کنندگان براساس مستندات ثبت شده در سیستم تدارکات خرید در اختیار سازمان هایی که فرایند خرید در آنها صورت می پذیرد قرار می گیرد.</p>
                    </div>
</a>
                <a href="/single-product" class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/icon5.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                           <h2 class="font-YekanBakh-ExtraBold text-base mr-1">مدیریت کارگاه ساخت و غلتک</h2>
                    </div>
                    <div>
                    <p class="line3">صنایع مادر و در راس آن صنعت فولاد در روند تولید نیازمند بازبینی، تعمیرات و نگهداری تجهیزات به صورت دوره ای می باشند که در این امر مهم نیازمند مدیریت تجهیزات کارگاهی بوده تا با بررسی اطلاعات در سریع ترین زمان ممکن تصمیمات حساس مدیریتی اخذ گردد.</p>
                    </div>
</a>
                <a href="/single-product" class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/icon6.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                           <h2 class="font-YekanBakh-ExtraBold text-base mr-1">مدیریت حمل‌ونقل جاده‌ای بارابُن</h2>
                    </div>
                    <div>
                    <p class="line3">نرم افزار ما شامل چهار جزء اصلی می شود، مدیریت باربری، مدیریت حمل بار، مدیریت ناوگان و مدیریت تعمیر و نگه داری ناوگان که در کنار ماژول هوش تجاری مجموعه ای کامل از نرم افزارهای مورد استفاده در صنعت حمل و نقل را داراست که به صورت ساختار چندغرفه ای یا مالتی تننت پیاده سازی شده که قابلیت این را دارد با استفاده از ابزارهای تصمیم گیری مبتنی بر هوش مصنوعی و اینترنت اشیاء به عنوان یک سیستم عامل مدیریتی سرتاسری در حمل و نقل جاده ای به کار گرفته شود.</p>
                    </div>
                </a>


            </div>
        </div>
    </section>
      
      
    <footer class="p-10 bg-stone-800 text-white">
     <button id="to-top-button" onclick="goToTop()" title="Go To Top"
      class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full bg-green text-white hover:text-white hover:bg-green duration-300">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
        </svg>
      
       <span class="sr-only">Go to top</span>
     </button>
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-12 gap-4 leading-8">
                <div class="col-span-12 lg:col-span-5">
                <div class="mb-4">
                    <a href="/" class="font-YekanBakh-ExtraBlack text-3xl color-green">سهاصنعت</a>
                </div>
                    <p class="md:textjustify">هدف اصلی مجموعه شرکت های سهاصنعت، تحت لیسانس و شریک توسعه گروه همکاران سیستم اشاعه ی هوشمندی و هوش محوری و در نتیجه افزایش بهره وری در صنایعِ مختلف علی الخصوص صنایعِ بالادستی است.</p>
                </div>
                <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:col-span-4 text-right md:text-center">
                    <h3 class="font-IRANSansWeb_Bold text-white mb-4 text-base">دسترسی سریع</h3>
                    <ul>
                        <li><a href="index">صفحه اصلی</a></li>
                        <li><a href="/about-us">درباره ما</a></li>
                        <li><a href="/contact-us">تماس با ما</a></li>
                        <li><a href="/project">محصولات</a></li>
                    </ul>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-3">

                    <!-- <div class="flex items-center">
                      <img src="../assets/images/enamad_logo.png" alt="">
                      <img src="../assets/images/samandehi_logo.png" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
  
    <footer class="footer footer-center p-4 bg-stone-700 text-white">
     <div>
        <p class="line3">تمامی حقوق مادی و معنوی این سایت متعلق به سهاصنعت می باشد و هرگونه کپی برداری غیرقانونی محسوب خواهد شد</p>
     </div>
    </footer>

    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="../src/js/main.js"></script>
    </body>
    </html>