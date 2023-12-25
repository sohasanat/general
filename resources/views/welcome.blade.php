<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public')
    <link rel="stylesheet" href="{{asset('node_modules/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/style.css')}}">
    <title>سهاصنعت</title>
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
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/products">محصولات</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/about-us">درباره ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/contact-us">تماس با ما</a></li>
                        
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
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="about-us">درباره ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="contact-us">تماس با ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="#">فرصت‌های شغلی</a></li>
                    </ul>
                </div>
                <div class="border bg-green text-white hover:text-white hover:bg-green duration-300 rounded-full">
                    <a href="login" class="flex py-2.5 px-7 rounded-full font-YekanBakh-Regular">ورود | ثبت نام</a>
                </div>
        
            </div>
        </div>
    </section>

    <section class="px-4 mb-24">
     <div class="container mx-auto max-w-screen-xl relative pt-5 lg:pt-10 ">
        <div class="grid grid-cols-12 gap-8">
        <div class="col-span-12 lg:col-span-5 order-2 lg:order-1">
            <div class="leading-8 mt-8 text-center md:textjustify">
                <span class="font-YekanBakh-Bold  py-1"> سهاصنعت، تحت لیسانس و شریک توسعه همکاران سیستم</span>
                <h2 class="font-YekanBakh-ExtraBlack text-4xl my-6">هوشمنــــــــــدی صنـــــایـع</h2>
                <p class="break-words">هدف اصلی مجموعه شرکت های سهاصنعت، تحت لیسانس و شریک توسعه گروه همکاران سیستم اشاعه ی هوشمندی و هوش محوری و در نتیجه افزایش بهره وری در صنایعِ مختلف علی الخصوص صنایعِ بالادستی است.</p>
                <div class="flex justify-center md:justify-start ">
                <a href="about-us" class="mt-4 py-1 px-7 rounded-full bg-orange-200 hover:duration-300 font-YekanBakh-SemiBold">بیشتر بخوانید...</a>
                <!-- <div class="absolute bottom-0 lg:bottom-2 right-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="74" height="68" viewBox="0 0 109 78" fill="none">
                        <path d="M36.0266 66.768C40.3387 75.6038 51.9952 81.3138 60.8919 75.5938C67.5514 71.2493 70.4477 62.336 68.0942 54.8302C65.2375 46.0433 56.4003 40.4115 47.4782 39.5612C44.3548 39.2999 41.2098 39.53 38.1576 40.243L38.2775 39.8231C38.6511 38.4786 39.1418 36.8393 39.6446 35.5246C40.6743 32.6897 41.9597 29.9547 43.4849 27.3534C50.7521 14.6662 63.6009 5.64893 78.0733 3.41599C87.7236 1.80126 97.6351 3.0113 106.616 6.90071C106.898 7.02838 107.219 7.03886 107.508 6.92976C107.797 6.82066 108.031 6.60095 108.159 6.31899C108.286 6.03703 108.297 5.71589 108.188 5.42623C108.079 5.13658 107.859 4.90212 107.577 4.77445C102.919 2.66878 97.9808 1.24812 92.9165 0.556455C91.0181 0.30588 89.108 0.155134 87.1939 0.10487C76.3232 -0.231216 65.3439 2.82574 56.2945 8.90015C45.21 16.4576 37.1356 28.3169 34.1714 41.4154C30.8272 42.6224 27.6508 44.2519 24.719 46.2645C17.2668 51.3381 11.5767 58.3123 6.25754 65.3874L4.32513 55.5442C4.21348 54.9687 4.04118 54.5036 3.58733 54.1174C3.1603 53.7631 2.61237 53.589 2.0595 53.632C1.03476 53.7667 -0.0751006 54.7492 0.152237 55.9018L3.4667 72.7802C3.59858 73.4554 3.83724 73.9674 4.42905 74.3496C4.93432 74.6769 5.70826 74.866 6.28082 74.5693C8.28406 73.5306 10.3861 72.6951 12.5555 72.0754C13.0841 71.9248 13.616 71.7895 14.1505 71.6618C14.16 71.6602 14.1697 71.6594 14.1795 71.6593L14.1949 71.658L14.6197 71.5689C14.8744 71.5178 15.1293 71.4687 15.3866 71.4252C16.5252 71.2236 17.6736 71.0816 18.8271 70.9997C19.9208 70.9196 20.8808 69.8485 20.7345 68.7318C20.6774 68.1816 20.4094 67.6749 19.9868 67.3183C19.5643 66.9617 19.0202 66.783 18.4689 66.8197C16.059 66.9973 13.6732 67.418 11.3479 68.0755C17.3553 59.8941 24.1387 51.7672 33.1518 47.4745C32.4431 54.0238 32.9999 60.8392 36.0266 66.768ZM37.0777 45.8938C38.14 45.5436 39.2203 45.2505 40.3139 45.0158C44.7557 44.091 49.3392 44.3652 53.5171 46.1349C57.5542 47.7841 61.2045 50.8297 63.0637 54.7952C66.8271 62.3421 61.7607 73.8441 52.6583 73.6178C48.3381 73.5745 44.0947 71.0869 41.3971 67.7257C39.2731 65.0564 37.9645 61.7653 37.2881 58.4181C36.4777 54.3256 36.5125 50.0496 37.0777 45.8938Z" fill="#1E1E1E"/>
                      </svg>
                </div> -->
            </div>
            </div>
        </div>
        <div class="hidden col-span-12 lg:col-span-7 order-1 lg:order-2  sm:block">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <img class="object-cover w-full rounded-xl" src="../assets/images/slider-1.jpg" alt="">
                        </div>
                    <div class="swiper-slide">
                    <img class="object-cover w-full rounded-xl" src="../assets/images/slider-2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                    <img class="object-cover w-full rounded-xl" src="../assets/images/slider-3.jpg" alt="">
                    </div> 
                    <div class="swiper-slide">
                    <img class="object-cover w-full rounded-xl" src="../assets/images/slider-4.jpg" alt="">
                    </div>                    
                    <div class="swiper-slide">
                    <img class="object-cover w-full rounded-xl" src="../assets/images/slider-5.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-next after:text-2xl after:text-stone-900 mx-2"></div>
                <div class="swiper-button-prev after:text-2xl after:text-stone-900 mx-2"></div>
            </div>
        </div>
        </div>
     </div>
    </section>
    
    <section class="px-4 py-14 bg-gradient-to-t from-orange-100">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-center relative mb-14">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">شـــــــرکـــت‌ها </h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">companies</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/farayar.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                           <h2 class="font-YekanBakh-ExtraBold text-base mr-1">فرایار سهاصنعت</h2>
                    </div>
                    <div>
                        <p class="text-center ">شرکت فرایارسهاصنعت، تحت لیسانس همکاران سیستم، ارائه دهنده خدمات استقرار و متناسب سازی نرم افزارهای گروه همکاران سیستم اهم از نرم افزار مدیریت منابع سازمانی راهکاران است.</p>                          
                    </div>
                </div>

                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                          <h2 class="font-YekanBakh-ExtraBold text-base mr-1">بازاریار سهاصنعت</h2>
                    </div>
                    <div>
                        <p class="text-center">شرکت بازاریار سهاصنعت، شریک توسعه گروه همکاران سیستم، ارائه دهنده ی محصولات و ماژول هایی در زمینه ی هوشمندی صنایع و هوشمندی سازمانی روی نرم افزار راهکاران است.</p>                          
                    </div>
                </div>

                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/fraiand.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                       <h2 class="font-YekanBakh-ExtraBold text-base mr-1">فرایند سهاصنعت</h2>
                    </div>
                    <div>
                        <p class="text-center">شرکت فرایند سهاصنعت ارائه دهنده ی انواع راهکار در زمینه ی هوشمندی صنایع است. از جمله محصولات این شرکت سیستم عامل جامع حمل و نقل جاده ای بارابن است.</p>                          
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section class="pt-20 mb-10 px-4 py-14">
        <div class="container mx-auto max-w-screen-xl">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-center relative mb-14">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">خـــــدمــــات </h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">services</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div>
            <div class="grid grid-cols-3 sm:grid-cols-3 gap-4">
                <!-- image - start -->
                <div
                    class="group relative flex justify-center h-48 items-end overflow-hidden rounded-lg shadow-lg md:h-72 green">
                    <img src="../assets/images/rah1.svg" loading="lazy" alt="Photo by Minh Pham" class="absolute h-full object-center transition duration-300 group-hover:scale-110" />
    
                    <div
                        class="pointer-events-none absolute inset-0 from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
    
                    <span class="relative mb-4 flex justify-center text-base text-center">
                    راهکارهای صنعتی و خدماتی
                    </span>
                </div>
                <!-- image - end -->
    
                <!-- image - start -->
                <div
                    class="group relative flex justify-center h-48 items-end overflow-hidden rounded-lg shadow-lg md:col-span-2 md:h-72 green">
                    <img src="../assets/images/bi2.svg" loading="lazy" alt="Photo by Magicle" class="absolute h-full object-center transition duration-300 group-hover:scale-110" />
    
                    <div
                        class="pointer-events-none absolute inset-0 from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                    <span class="relative mb-4 flex justify-center text-base text-center">
                    هوش تجاری و تصمیم‌گیری کلان هوش‌محور
                    </span>
                </div>
                <!-- image - end -->
    
                <!-- image - start -->
                <div
                    class="group relative flex justify-center h-48 items-end overflow-hidden rounded-lg  shadow-lg md:col-span-2 md:h-72 green">
                    <img src="../assets/images/product3.svg" loading="lazy" alt="Photo by Martin Sanchez" class="absolute h-full object-center transition duration-300 group-hover:scale-110" />
    
                    <div
                        class="pointer-events-none absolute inset-0 from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                          
                    <span class="relative mb-4 flex justify-center text-base text-center">
                    محصولات اکوسیستم بازار گروه همکاران سیستم
                    </span>
                </div>
                <!-- image - end -->
    
                <!-- image - start -->
                <div class="group relative flex justify-center h-48 items-end overflow-hidden rounded-lg shadow-lg md:h-72 green">
                    <img src="../assets/images/st4.svg" class="absolute h-full object-center transition duration-300 group-hover:scale-110" />
    
                    <div
                        class="pointer-events-none absolute inset-0 from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
    
                    <span class="relative mb-4 flex justify-center text-base text-center ">استقرار، متناسب سازی و شخصی سازی محصولات گروه همکاران سیستم</span>
                </div>
                <!-- image - end -->
            </div>
           
        </div>
    </section>

    <section class="px-4 py-20 mb-16 bg-gradient-to-t from-orange-100">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-center relative mb-14">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">نظــــــرات مشتریــــــان</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">customer</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div>
              <div class="grid grid-cols-12 gap-8">
                 <div class="col-span-12 md:col-span-5 flex items-center ">
                     <div class="flex justify-start gap-6">
                        <h2 class="font-YekanBakh-ExtraBlack text-3xl my-4">از زبان مشتریان ما بشنوید...</h2> 
                        <div class="rotate-0 md:rotate-45">
                        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="68" viewBox="0 0 109 78" fill="none">
                            <path d="M36.0266 66.768C40.3387 75.6038 51.9952 81.3138 60.8919 75.5938C67.5514 71.2493 70.4477 62.336 68.0942 54.8302C65.2375 46.0433 56.4003 40.4115 47.4782 39.5612C44.3548 39.2999 41.2098 39.53 38.1576 40.243L38.2775 39.8231C38.6511 38.4786 39.1418 36.8393 39.6446 35.5246C40.6743 32.6897 41.9597 29.9547 43.4849 27.3534C50.7521 14.6662 63.6009 5.64893 78.0733 3.41599C87.7236 1.80126 97.6351 3.0113 106.616 6.90071C106.898 7.02838 107.219 7.03886 107.508 6.92976C107.797 6.82066 108.031 6.60095 108.159 6.31899C108.286 6.03703 108.297 5.71589 108.188 5.42623C108.079 5.13658 107.859 4.90212 107.577 4.77445C102.919 2.66878 97.9808 1.24812 92.9165 0.556455C91.0181 0.30588 89.108 0.155134 87.1939 0.10487C76.3232 -0.231216 65.3439 2.82574 56.2945 8.90015C45.21 16.4576 37.1356 28.3169 34.1714 41.4154C30.8272 42.6224 27.6508 44.2519 24.719 46.2645C17.2668 51.3381 11.5767 58.3123 6.25754 65.3874L4.32513 55.5442C4.21348 54.9687 4.04118 54.5036 3.58733 54.1174C3.1603 53.7631 2.61237 53.589 2.0595 53.632C1.03476 53.7667 -0.0751006 54.7492 0.152237 55.9018L3.4667 72.7802C3.59858 73.4554 3.83724 73.9674 4.42905 74.3496C4.93432 74.6769 5.70826 74.866 6.28082 74.5693C8.28406 73.5306 10.3861 72.6951 12.5555 72.0754C13.0841 71.9248 13.616 71.7895 14.1505 71.6618C14.16 71.6602 14.1697 71.6594 14.1795 71.6593L14.1949 71.658L14.6197 71.5689C14.8744 71.5178 15.1293 71.4687 15.3866 71.4252C16.5252 71.2236 17.6736 71.0816 18.8271 70.9997C19.9208 70.9196 20.8808 69.8485 20.7345 68.7318C20.6774 68.1816 20.4094 67.6749 19.9868 67.3183C19.5643 66.9617 19.0202 66.783 18.4689 66.8197C16.059 66.9973 13.6732 67.418 11.3479 68.0755C17.3553 59.8941 24.1387 51.7672 33.1518 47.4745C32.4431 54.0238 32.9999 60.8392 36.0266 66.768ZM37.0777 45.8938C38.14 45.5436 39.2203 45.2505 40.3139 45.0158C44.7557 44.091 49.3392 44.3652 53.5171 46.1349C57.5542 47.7841 61.2045 50.8297 63.0637 54.7952C66.8271 62.3421 61.7607 73.8441 52.6583 73.6178C48.3381 73.5745 44.0947 71.0869 41.3971 67.7257C39.2731 65.0564 37.9645 61.7653 37.2881 58.4181C36.4777 54.3256 36.5125 50.0496 37.0777 45.8938Z" fill="#129996"/>
                          </svg>
                  </div>                   
                     </div>
                  </div>
  
                 <div class="col-span-12 md:col-span-6 ">
                    <div class="swiper customer">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="bg-white p-6 leading-8 rounded-3xl">
                                <div class="flex items-center mb-4">
                                    <div class="avatar ml-4">
                                        <div class="w-20 rounded-full">
                                            <img src="../assets/images/user.png" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">مهندس عظیما</h3>
                                        <p>مدیر تدارکات</p>
                                    </div>
        
                                </div>
                                <p>اینجانب اقای عظیما به نمایندگی از شرکت اخشان ، از پشتیبانی و خدمات دهی در خصوص نرم افزار ارزیابی ، رضایت کامل را دارم و از پیگیری سرکار خانم مهندس خوانچه بمهر نیز کمال تقدیر و تشکر را داریم همچنین از نرم افزار فوق با توجه به پوشش دهی مورد نیاز شرکت رضایت داریم</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="bg-white p-6 leading-8 rounded-3xl">
                                <div class="flex items-center mb-4">
                                    <div class="avatar ml-4">
                                        <div class="w-20 rounded-full">
                                            <img src="../assets/images/user.png" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">مهندس عظیما</h3>
                                        <p>مدیر تدارکات</p>
                                    </div>
        
                                </div>
                                <p>اینجانب اقای عظیما به نمایندگی از شرکت اخشان ، از پشتیبانی و خدمات دهی در خصوص نرم افزار ارزیابی ، رضایت کامل را دارم و از پیگیری سرکار خانم مهندس خوانچه بمهر نیز کمال تقدیر و تشکر را داریم همچنین از نرم افزار فوق با توجه به پوشش دهی مورد نیاز شرکت رضایت داریم</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="bg-white p-6 leading-8 rounded-3xl">
                                <div class="flex items-center mb-4">
                                    <div class="avatar ml-4">
                                        <div class="w-20 rounded-full">
                                            <img src="../assets/images/user.png" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">مهندس عظیما</h3>
                                        <p>مدیر تدارکات</p>
                                    </div>
        
                                </div>
                                <p>اینجانب اقای عظیما به نمایندگی از شرکت اخشان ، از پشتیبانی و خدمات دهی در خصوص نرم افزار ارزیابی ، رضایت کامل را دارم و از پیگیری سرکار خانم مهندس خوانچه بمهر نیز کمال تقدیر و تشکر را داریم همچنین از نرم افزار فوق با توجه به پوشش دهی مورد نیاز شرکت رضایت داریم</p>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-pagination"></div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-0 mb-32">

        <div class="relative pt-20">
            <div aria-hidden="true" class="hidden sm:block">
                <svg class="absolute top-8 left-1/2 -ml-8" width="404" height="392" fill="none" viewBox="0 0 404 392">
                    <defs>
                        <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                        </pattern>
                    </defs>
                    <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)"></rect>
                </svg>
            </div>
            <div class="mx-auto px-4 lg:px-0 max-w-md sm:max-w-3xl lg:max-w-7xl">
                <div class="relative rounded-3xl px-6 py-10 bg-stone-800 overflow-hidden shadow-xl sm:px-12 sm:py-16">
                    <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0"><svg
                            class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                            <path class="text-stone-700 text-opacity-40" fill="currentColor"
                                d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z"></path>
                            <path class="text-stone-900 text-opacity-40" fill="currentColor"
                                d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z"></path>
                        </svg>
                    </div>
                    <div class="relative flex flex-col">
                        <div class="sm:text-center">
                            <h2 class="font-YekanBakh-ExtraBlack text-4xl text-white">با مشـــاوران مـــا در ارتبـــاط باشیــــد...</h2>
                            <p class="mt-6 mx-auto max-w-2xl text-base text-gray-100">در صورت نیاز به مشاوره جهت هوشمند سازی سازمان یا مجموعه صنعتی خود </p>
                        </div>
                        <a href="contact-us" class="w-auto inline-block mt-5 mx-auto py-2 px-7 rounded-full bg-orange-200 hover:duration-300 font-YekanBakh-SemiBold">تماس بگیرید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="px-4 pb-20 bg-gradient-to-t from-orange-100">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-center relative mb-14">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">وبـــــــــلاگ</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">blog</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white overflow-hidden rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="p-6">
                        <div class="flex items-center mb-4 border-b border-dashed pb-4">
                            <div class="avatar ml-2">
                                <div class="w-14 rounded-full">
                                    <img src="../assets/images/avatar-1.jpg" />
                                </div>
                            </div>
                            <div class="flex flex-col mt-1">
                                <h3 class="font-YekanBakh-Bold text-slate-800 text-sm mb-2">نوید محمودی</h3>
                                <p class="text-xs">طراح گرافیک</p>
                            </div>
    
                        </div>
                        <div class="leading-8">
                        <div class="flex items-center mb-2">
                                <a href="single-page">  <h2 class="font-YekanBakh-ExtraBold text-base mr-1">جذاب ترین صندلی مینیمال</h2></a>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و ...</p>
                        </div>
                    </div>
                    <div>
                        <a href="single-page"><img class="rounded-b-lg" src="../assets/images/blog-9.jpg" alt=""></a>
                    </div>

                </div>
                <div class="bg-white overflow-hidden rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="p-6">
                        <div class="flex items-center mb-4 border-b border-dashed pb-4">
                            <div class="avatar ml-2">
                                <div class="w-14 rounded-full">
                                    <img src="../assets/images/avatar-2.jpg" />
                                </div>
                            </div>
                            <div class="flex flex-col mt-1">
                                <h3 class="font-YekanBakh-Bold text-slate-800 text-sm mb-2">سهیلا صادقی</h3>
                                <p class="text-xs">طراح گرافیک</p>
                            </div>
    
                        </div>
                        <div class="leading-8">
                        <div class="flex items-center mb-2">
                                <a href="single-page">  <h2 class="font-YekanBakh-ExtraBold text-base mr-1">پرفروش ترین مبل ایران</h2></a>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و ...</p>
                        </div>
                    </div>
                    <div>
                        <a href="single-page"><img class="rounded-b-lg" src="../assets/images/blog-3.jpg" alt=""></a>
                    </div>

                </div>
                <div class="bg-white overflow-hidden rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="p-6">
                        <div class="flex items-center mb-4 border-b border-dashed pb-4">
                            <div class="avatar ml-2">
                                <div class="w-14 rounded-full">
                                    <img src="../assets/images/avatar-3.jpg" />
                                </div>
                            </div>
                            <div class="flex flex-col mt-1">
                                <h3 class="font-YekanBakh-Bold text-slate-800 text-sm mb-2">سارا توحیدی</h3>
                                <p class="text-xs">طراح گرافیک</p>
                            </div>
    
                        </div>
                        <div class="leading-8">
                        <div class="flex items-center mb-2">
                                <a href="single-page">  <h2 class="font-YekanBakh-ExtraBold text-base mr-1">نکات مهم هنگام خرید صندلی</h2></a>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و ...</p>
                        </div>
                    </div>
                    <div>
                        <a href="single-page"><img class="rounded-b-lg" src="../assets/images/blog-10.jpg" alt=""></a>
                    </div>

                </div>
                <div class="bg-white overflow-hidden rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="p-6">
                        <div class="flex items-center mb-4 border-b border-dashed pb-4">
                            <div class="avatar ml-2">
                                <div class="w-14 rounded-full">
                                    <img src="../assets/images/avatar-4.jpg" />
                                </div>
                            </div>
                            <div class="flex flex-col mt-1">
                                <h3 class="font-YekanBakh-Bold text-slate-800 text-sm mb-2">فرهاد یاسری</h3>
                                <p class="text-xs">طراح گرافیک</p>
                            </div>
    
                        </div>
                        <div class="leading-8">
                        <div class="flex items-center mb-2">
                                <a href="single-page">  <h2 class="font-YekanBakh-ExtraBold text-base mr-1">صندلی های مینیمال اداری</h2></a>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و ...</p>
                        </div>
                    </div>
                    <div>
                        <a href="single-page"><img class="rounded-b-lg" src="../assets/images/blog-12.jpg" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
    </section> -->

    <section class="px-4 pb-20 pt-10 bg-orange-100">
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-5">
                    <div class="flex flex-col md:flex-row items-center gap-x-16">
                        <div class="leading-8 text-center md:text-right">
                            <h2 class="font-YekanBakh-ExtraBlack text-3xl my-4">تجربـــه هـــای همکــاری</h2>
                            <p class="font-YekanBakh-Bold text-2xl my-4">افتخــــار همکـــــاری داشتـــــه ایـــــم</p>
                        </div>
                        <div class="rotate-0 md:rotate-45 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="74" height="68" viewBox="0 0 109 78" fill="none">
                                <path d="M36.0266 66.768C40.3387 75.6038 51.9952 81.3138 60.8919 75.5938C67.5514 71.2493 70.4477 62.336 68.0942 54.8302C65.2375 46.0433 56.4003 40.4115 47.4782 39.5612C44.3548 39.2999 41.2098 39.53 38.1576 40.243L38.2775 39.8231C38.6511 38.4786 39.1418 36.8393 39.6446 35.5246C40.6743 32.6897 41.9597 29.9547 43.4849 27.3534C50.7521 14.6662 63.6009 5.64893 78.0733 3.41599C87.7236 1.80126 97.6351 3.0113 106.616 6.90071C106.898 7.02838 107.219 7.03886 107.508 6.92976C107.797 6.82066 108.031 6.60095 108.159 6.31899C108.286 6.03703 108.297 5.71589 108.188 5.42623C108.079 5.13658 107.859 4.90212 107.577 4.77445C102.919 2.66878 97.9808 1.24812 92.9165 0.556455C91.0181 0.30588 89.108 0.155134 87.1939 0.10487C76.3232 -0.231216 65.3439 2.82574 56.2945 8.90015C45.21 16.4576 37.1356 28.3169 34.1714 41.4154C30.8272 42.6224 27.6508 44.2519 24.719 46.2645C17.2668 51.3381 11.5767 58.3123 6.25754 65.3874L4.32513 55.5442C4.21348 54.9687 4.04118 54.5036 3.58733 54.1174C3.1603 53.7631 2.61237 53.589 2.0595 53.632C1.03476 53.7667 -0.0751006 54.7492 0.152237 55.9018L3.4667 72.7802C3.59858 73.4554 3.83724 73.9674 4.42905 74.3496C4.93432 74.6769 5.70826 74.866 6.28082 74.5693C8.28406 73.5306 10.3861 72.6951 12.5555 72.0754C13.0841 71.9248 13.616 71.7895 14.1505 71.6618C14.16 71.6602 14.1697 71.6594 14.1795 71.6593L14.1949 71.658L14.6197 71.5689C14.8744 71.5178 15.1293 71.4687 15.3866 71.4252C16.5252 71.2236 17.6736 71.0816 18.8271 70.9997C19.9208 70.9196 20.8808 69.8485 20.7345 68.7318C20.6774 68.1816 20.4094 67.6749 19.9868 67.3183C19.5643 66.9617 19.0202 66.783 18.4689 66.8197C16.059 66.9973 13.6732 67.418 11.3479 68.0755C17.3553 59.8941 24.1387 51.7672 33.1518 47.4745C32.4431 54.0238 32.9999 60.8392 36.0266 66.768ZM37.0777 45.8938C38.14 45.5436 39.2203 45.2505 40.3139 45.0158C44.7557 44.091 49.3392 44.3652 53.5171 46.1349C57.5542 47.7841 61.2045 50.8297 63.0637 54.7952C66.8271 62.3421 61.7607 73.8441 52.6583 73.6178C48.3381 73.5745 44.0947 71.0869 41.3971 67.7257C39.2731 65.0564 37.9645 61.7653 37.2881 58.4181C36.4777 54.3256 36.5125 50.0496 37.0777 45.8938Z" fill="#129996"/>
                              </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-7">
                    <div class="swiper partners">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="flex justify-center">
                                    <img class="grayscale hover:grayscale-0 duration-300" src="../assets/images/logo-8.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex justify-center">
                                    <img class="grayscale hover:grayscale-0 duration-300" src="../assets/images/logo-9.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex justify-center">
                                    <img class="grayscale hover:grayscale-0 duration-300" src="../assets/images/logo-10.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex justify-center">
                                    <img class="grayscale hover:grayscale-0 duration-300" src="../assets/images/logo-11.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex justify-center">
                                    <img class="grayscale hover:grayscale-0 duration-300" src="../assets/images/logo-13.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex justify-center">
                                    <img class="grayscale hover:grayscale-0 duration-300" src="../assets/images/logo-14.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex justify-center">
                                    <img class="grayscale hover:grayscale-0 duration-300" src="../assets/images/logo-15.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex justify-center">
                                    <img class="grayscale hover:grayscale-0 duration-300" src="../assets/images/logo-16.png" alt="">
                                </div>
                            </div>

            
                          </div>
                        </div>
                </div>
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
        <p>تمامی حقوق مادی و معنوی این سایت متعلق به سهاصنعت می باشد و هرگونه کپی برداری غیرقانونی محسوب خواهد شد</p>
     </div>
    </footer>
    
    <script src="{{asset('node_modules/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('src/js/main.js')}}"></script>
</body>
</html>