<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>درباره ما</title>
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
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="services">خدمات</a></li>
                        <li><details>
                            <summary><a href="project"> محصولات</a></summary>
                            <ul class="p-2 z-10 w-48 bg-[#f5f1e4] m-0">
                              <li><a href="blog-2">وبلاگ دمو دوم</a></li>
                              <li><a> پروژه</a></li>
                              <li>
                                <details>
                                  <summary>زیر منوی اول</summary>
                                  <ul>
                                    <li><a>آیتم شماره یک</a></li>
                                    <li><a>آیتم شماره دوم</a></li>
                                  </ul>
                                </details>
                              </li>
                            </ul>
                        </details></li>
                        <!-- <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="faq">سوالات متداول</a></li> -->
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="blog">وبلاگ</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="about-us">درباره ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="contact-us">تماس با ما</a></li>
                        
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
                        <li><details>
                            <summary><a href="project">محصولات</a></summary>
                            <ul class="p-2 z-10 w-48 bg-[#f5f1e4] m-0">
                              <li><a href="blog-2">وبلاگ دمو دوم</a></li>
                              <li><a>جزئیات پروژه</a></li>
                              <li>
                                <details>
                                  <summary>زیر منوی اول</summary>
                                  <ul>
                                    <li><a>آیتم شماره یک</a></li>
                                    <li><a>آیتم شماره دوم</a></li>
                                  </ul>
                                </details>
                              </li>
                            </ul>
                        </details></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="blog">وبلاگ</a></li>
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
                              
                            <a href="#" class="mr-1 text-sm font-medium">درباره ما</a>
                        </div>
                    </li>
                </ol>
            </nav>  
            <div class="flex justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">دربـــــاره مـــــا</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">about</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div> 

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-24">
              <div class="max-w-xl mx-auto p-8">
                <div class="flow-root">
                  <ul class="-mb-8">
            
                    <li>
                      <div class="relative pb-8">
                        <span class="absolute top-5 right-5 -ml-px h-full w-0.5 bg-stone-200" aria-hidden="true"></span>
                        <div class="relative flex items-start space-x-3">
                          <div>
                            <div class="relative px-1">
                              <div class="h-8 w-8 bg-stone-800 rounded-full ring-8 ring-white flex items-center justify-center">
                                <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                  stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="min-w-0 flex-1 py-0">
                            <div class="text-md text-gray-500">
                              <div>
                                <span class="font-medium text-gray-900 mr-2">فرایار سهاصنعت</span>
            
                                <span class="my-0.5 relative inline-flex items-center bg-white rounded-full border border-gray-300 px-3 py-2 text-xs">
                                  
                                  <div class="text-gray-900">3 خرداد 1399</div>
                                </span>
                              </div>
                            </div>
                            <div class="mt-2 text-gray-700">
                              <p class="leading-8">
                             شرکت فرایارسهاصنعت، تحت لیسانس همکاران سیستم، ارائه دهنده خدمات استقرار و متناسب سازی نرم افزارهای گروه همکاران سیستم اهم از نرم افزار مدیریت منابع سازمانی راهکاران است.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="relative pb-8">
                        <span class="absolute top-5 right-5 -ml-px h-full w-0.5 bg-stone-200" aria-hidden="true"></span>
                        <div class="relative flex items-start space-x-3">
                          <div>
                            <div class="relative px-1">
                              <div class="h-8 w-8 bg-stone-800 rounded-full ring-8 ring-white flex items-center justify-center">
                                <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                  stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="min-w-0 flex-1 py-0">
                            <div class="text-md text-gray-500">
                              <div>
                                <span class="font-medium text-gray-900 mr-2">بازاریار سهاصنعت</span>
            
                                <span class="my-0.5 relative inline-flex items-center bg-white rounded-full border border-gray-300 px-3 py-2 text-xs">
                                  
                                  <div class="text-gray-900">22 تیر 1401</div>
                                </span>
                              </div>
                            </div>
                            <div class="mt-2 text-gray-700">
                              <p class="leading-8">
                              شرکت بازاریار سهاصنعت، شریک توسعه گروه همکاران سیستم، ارائه دهنده ی محصولات و ماژول هایی در زمینه ی هوشمندی صنایع و هوشمندی سازمانی روی نرم افزار راهکاران است.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
            
                    <li>
                      <div class="relative pb-8">
                        <span class="absolute top-5 right-5 -ml-px h-full w-0.5 bg-stone-200" aria-hidden="true"></span>
                        <div class="relative flex items-start space-x-3">
                          <div>
                            <div class="relative px-1">
                              <div class="h-8 w-8 bg-stone-800 rounded-full ring-8 ring-white flex items-center justify-center">
                                <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                  stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="min-w-0 flex-1 py-0">
                            <div class="text-md text-gray-500">
                              <div>
                                <span class="font-medium text-gray-900 mr-2">فرایند سهاصنعت</span>
            
                                <span class="my-0.5 relative inline-flex items-center bg-white rounded-full border border-gray-300 px-3 py-2 text-xs">
                                  
                                  <div class="text-gray-900">24 آبان 1402</div>
                                </span>
                              </div>
                            </div>
                            <div class="mt-2 text-gray-700">
                              <p class="leading-8">
                              شرکت فرایند سهاصنعت ارائه دهنده ی انواع راهکار در زمینه ی هوشمندی صنایع است. از جمله محصولات این شرکت سیستم عامل جامع حمل و نقل جاده ای بارابن است.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
            
                  </ul>
                </div>
              </div>
              <div class="relative py-3 sm:max-w-sm sm:mx-auto">
                <div
                  class="absolute inset-0 bg-stone-900 transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative bg-gradient-to-t from-orange-100 to-[#f5f1e4] sm:rounded-3xl">
            
                  <div class="max-w-md mx-auto">
                    <img src="../assets/images/business-woman.png" alt="">
                  </div>
            
                  
                </div>
              </div>
            </div>

        </div>
    </section>
    <section class="px-4 py-14 bg-gradient-to-t from-orange-100">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-center relative mb-14">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">اعضـــــای تیم</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">team</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/farayar.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">رضا طاهریان</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مدیر عامل فرایار سهاصنعت</p>                          
                    </div>
                </div>

                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">معصومه رفیع</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مدیر عامل بازاریار سهاصنعت</p>                          
                    </div>
                </div>

                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/fraiand.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">خدیجه رفیع</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مدیر عامل فرایند سهاصنعت</p>                          
                    </div>
                </div>
        
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">مسعود طولابی</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مدیر توسعه</p>                          
                    </div>
                </div>

                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/fraiand.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">غلامرضا مرادی</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مدیر فروش فرایار سهاصنعت</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">پویا کبیرزاده</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مدیر پروژه استقرار</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">سپیده روشن‌ضمیر</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مدیر پروژه استقرار</p>                          
                    </div>
                </div>

                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/fraiand.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">الهام خوانچه‌بمهر</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مدیر پروژه استقرار و هوشمندی</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">هادی رئیسی </h2></a>
                    </div>
                    <div>
                        <p class="text-center">رهبر فنی بک‌اند</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1"> محمد عابدیان</h2></a>
                    </div>
                    <div>
                        <p class="text-center">کارشناس استقرار</p>                          
                    </div>
                </div>

                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/fraiand.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">زهرا خسروی</h2></a>
                    </div>
                    <div>
                        <p class="text-center">طراح محصول</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">حمید شعبانی</h2></a>
                    </div>
                    <div>
                        <p class="text-center">کارشناس محصول</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">امیرحسین آقانقی</h2></a>
                    </div>
                    <div>
                        <p class="text-center">توسعه دهنده فرانت‌اند</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">مهسا موسوی</h2></a>
                    </div>
                    <div>
                        <p class="text-center">کارشناس استقرار</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">محدثه رضایی‌نیا</h2></a>
                    </div>
                    <div>
                        <p class="text-center">مهندس فروش</p>                          
                    </div>
                </div>
                <div class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/bazaryar.png" alt="">  
                    </div>
                    
                    <div class="flex text-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">سعید مختاری</h2></a>
                    </div>
                    <div>
                        <p class="text-center">کارشناس استقرار</p>                          
                    </div>
                </div>
            </div>
        </div>
    </section>   
    <footer class="p-10 bg-stone-800 text-white">
      <button id="to-top-button" onclick="goToTop()" title="Go To Top"
      class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full bg-stone-900 hover:bg-orange-200 text-orange-200 hover:text-stone-900 duration-300">
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
                          <li><a href="services.html">خدمات ما</a></li>
                      </ul>
                  </div>
                  <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 text-right md:text-center">
                      <h3 class="font-IRANSansWeb_Bold text-white mb-4 text-base">خدمات شرکت</h3>
                      <ul>
                          <li><a href="single-page.html">جزئیات وبلاگ</a></li>
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