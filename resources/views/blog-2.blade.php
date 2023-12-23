<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>وبلاگ - دمو دوم</title>
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
                              
                            <a href="#" class="mr-1 text-sm font-medium">وبلاگ</a>
                        </div>
                    </li>
                </ol>
            </nav>  
            <div class="flex justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">وبـــــــــلاگ</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">blog</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div> 

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white rounded-3xl p-6 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M13.98 5.31999L10.77 8.52999L8.79999 10.49C7.96999 11.32 7.96999 12.67 8.79999 13.5L13.98 18.68C14.66 19.36 15.82 18.87 15.82 17.92V12.31V6.07999C15.82 5.11999 14.66 4.63999 13.98 5.31999Z" fill="#b9a158"/>
                              </svg>
                              <a href="single-page.html"><h2 class="font-YekanBakh-ExtraBold text-base mr-1">پرفروش ترین مبل ایران</h2></a>
                        </div>
                        <div>
                            <a class="flex items-center text-xs bg-orange-200 rounded-md py-1 px-3" href="single-page.html">
                                
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                      </svg>
                                </div>
                                <div class="mr-1">
                                    ادامه...
                                </div>
                                  
                            </a>
                        </div>
                    </div>
                    <div class="leading-8 mt-4 text-stone-700">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                    </div>
                </div>
                <div class="bg-white rounded-3xl p-6 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M13.98 5.31999L10.77 8.52999L8.79999 10.49C7.96999 11.32 7.96999 12.67 8.79999 13.5L13.98 18.68C14.66 19.36 15.82 18.87 15.82 17.92V12.31V6.07999C15.82 5.11999 14.66 4.63999 13.98 5.31999Z" fill="#b9a158"/>
                              </svg>
                              <a href="single-page.html"><h2 class="font-YekanBakh-ExtraBold text-base mr-1">جذاب ترین صندلی مینیمال</h2></a>
                        </div>
                        <div>
                            <a class="flex items-center text-xs bg-orange-200 rounded-md py-1 px-3" href="single-page.html">
                                
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                      </svg>
                                </div>
                                <div class="mr-1">
                                    ادامه...
                                </div>
                                  
                            </a>
                        </div>
                    </div>
                    <div class="leading-8 mt-4 text-stone-700">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                    </div>
                </div>
                <div class="bg-white rounded-3xl p-6 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M13.98 5.31999L10.77 8.52999L8.79999 10.49C7.96999 11.32 7.96999 12.67 8.79999 13.5L13.98 18.68C14.66 19.36 15.82 18.87 15.82 17.92V12.31V6.07999C15.82 5.11999 14.66 4.63999 13.98 5.31999Z" fill="#b9a158"/>
                              </svg>
                              <a href="single-page.html"><h2 class="font-YekanBakh-ExtraBold text-base mr-1">نکات مهم هنگام خرید صندلی</h2></a>
                        </div>
                        <div>
                            <a class="flex items-center text-xs bg-orange-200 rounded-md py-1 px-3" href="single-page.html">
                                
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                      </svg>
                                </div>
                                <div class="mr-1">
                                    ادامه...
                                </div>
                                  
                            </a>
                        </div>
                    </div>
                    <div class="leading-8 mt-4 text-stone-700">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                    </div>
                </div>
                <div class="bg-white rounded-3xl p-6 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M13.98 5.31999L10.77 8.52999L8.79999 10.49C7.96999 11.32 7.96999 12.67 8.79999 13.5L13.98 18.68C14.66 19.36 15.82 18.87 15.82 17.92V12.31V6.07999C15.82 5.11999 14.66 4.63999 13.98 5.31999Z" fill="#b9a158"/>
                              </svg>
                              <a href="single-page.html"><h2 class="font-YekanBakh-ExtraBold text-base mr-1">صندلی های مینیمال اداری</h2></a>
                        </div>
                        <div>
                            <a class="flex items-center text-xs bg-orange-200 rounded-md py-1 px-3" href="single-page.html">
                                
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                      </svg>
                                </div>
                                <div class="mr-1">
                                    ادامه...
                                </div>
                                  
                            </a>
                        </div>
                    </div>
                    <div class="leading-8 mt-4 text-stone-700">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
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