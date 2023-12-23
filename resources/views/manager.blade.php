<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>مدیران</title>
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
                              
                            <a href="#" class="mr-1 text-sm font-medium">مدیران</a>
                        </div>
                    </li>
                </ol>
            </nav>  
            <div class="flex justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">کــــــــارمــــنــــــــــــــدان</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">manager</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div> 

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                <div class="text-center bg-white rounded-3xl overflow-hidden transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <img class="w-100" src="../assets/images/avatar-1.jpg">
                    <div class="p-6">
                        <div class="flex flex-col items-center leading-8">
                            <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">نوید محمودی</h3>
                            <p class="text-gray-500">طراح گرافیک</p>
                        </div>
                        <div class="flex gap-2 items-center justify-center mt-2">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16ZM16.5734 11.8119C15.0171 12.4592 11.9068 13.7989 7.24252 15.8311C6.48511 16.1323 6.08834 16.427 6.05222 16.7151C5.99118 17.202 6.60095 17.3937 7.43129 17.6548C7.54424 17.6903 7.66127 17.7271 7.78125 17.7661C8.59818 18.0317 9.6971 18.3424 10.2684 18.3547C10.7866 18.3659 11.365 18.1523 12.0035 17.7138C16.3615 14.772 18.6112 13.2851 18.7524 13.253C18.8521 13.2304 18.9901 13.202 19.0837 13.2851C19.1772 13.3683 19.168 13.5258 19.1581 13.568C19.0977 13.8255 16.7042 16.0508 15.4655 17.2024C15.0793 17.5614 14.8054 17.816 14.7494 17.8742C14.624 18.0045 14.4962 18.1277 14.3733 18.2461C13.6144 18.9778 13.0452 19.5264 14.4048 20.4224C15.0582 20.8529 15.581 21.209 16.1026 21.5642C16.6722 21.9521 17.2404 22.339 17.9755 22.8209C18.1628 22.9437 18.3416 23.0712 18.5159 23.1954C19.1788 23.668 19.7743 24.0926 20.5101 24.0248C20.9377 23.9855 21.3793 23.5835 21.6036 22.3845C22.1336 19.5509 23.1755 13.4113 23.4163 10.8813C23.4374 10.6596 23.4108 10.376 23.3895 10.2514C23.3682 10.1269 23.3237 9.94948 23.1618 9.81813C22.9701 9.66258 22.6742 9.62978 22.5418 9.63211C21.94 9.64271 21.0167 9.96376 16.5734 11.8119Z" fill="#282828"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 38 38" fill="none">
                                    <path d="M25.6342 3.16675H12.3658C6.60249 3.16675 3.16666 6.60258 3.16666 12.3659V25.6184C3.16666 31.3976 6.60249 34.8334 12.3658 34.8334H25.6183C31.3817 34.8334 34.8175 31.3976 34.8175 25.6342V12.3659C34.8333 6.60258 31.3975 3.16675 25.6342 3.16675ZM19 25.1434C15.6117 25.1434 12.8567 22.3884 12.8567 19.0001C12.8567 15.6117 15.6117 12.8567 19 12.8567C22.3883 12.8567 25.1433 15.6117 25.1433 19.0001C25.1433 22.3884 22.3883 25.1434 19 25.1434ZM28.3733 10.8934C28.2942 11.0834 28.1833 11.2576 28.0408 11.4159C27.8825 11.5584 27.7083 11.6692 27.5183 11.7484C27.3283 11.8276 27.1225 11.8751 26.9167 11.8751C26.4892 11.8751 26.0933 11.7167 25.7925 11.4159C25.65 11.2576 25.5392 11.0834 25.46 10.8934C25.3808 10.7034 25.3333 10.4976 25.3333 10.2917C25.3333 10.0859 25.3808 9.88008 25.46 9.69008C25.5392 9.48425 25.65 9.32591 25.7925 9.16758C26.1567 8.80341 26.7108 8.62925 27.2175 8.74008C27.3283 8.75591 27.4233 8.78758 27.5183 8.83508C27.6133 8.86675 27.7083 8.91425 27.8033 8.97758C27.8825 9.02508 27.9617 9.10425 28.0408 9.16758C28.1833 9.32591 28.2942 9.48425 28.3733 9.69008C28.4525 9.88008 28.5 10.0859 28.5 10.2917C28.5 10.4976 28.4525 10.7034 28.3733 10.8934Z" fill="#282828"/>
                                </svg>
                            </a>
                        </div>
                    </div>
    
                </div>
                <div class="text-center bg-white rounded-3xl overflow-hidden transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <img class="w-100" src="../assets/images/avatar-2.jpg">
                    <div class="p-6">
                        <div class="flex flex-col items-center leading-8">
                            <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">سهیلا صادقی</h3>
                            <p class="text-gray-500">طراح گرافیک</p>
                        </div>
                        <div class="flex gap-2 items-center justify-center mt-2">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16ZM16.5734 11.8119C15.0171 12.4592 11.9068 13.7989 7.24252 15.8311C6.48511 16.1323 6.08834 16.427 6.05222 16.7151C5.99118 17.202 6.60095 17.3937 7.43129 17.6548C7.54424 17.6903 7.66127 17.7271 7.78125 17.7661C8.59818 18.0317 9.6971 18.3424 10.2684 18.3547C10.7866 18.3659 11.365 18.1523 12.0035 17.7138C16.3615 14.772 18.6112 13.2851 18.7524 13.253C18.8521 13.2304 18.9901 13.202 19.0837 13.2851C19.1772 13.3683 19.168 13.5258 19.1581 13.568C19.0977 13.8255 16.7042 16.0508 15.4655 17.2024C15.0793 17.5614 14.8054 17.816 14.7494 17.8742C14.624 18.0045 14.4962 18.1277 14.3733 18.2461C13.6144 18.9778 13.0452 19.5264 14.4048 20.4224C15.0582 20.8529 15.581 21.209 16.1026 21.5642C16.6722 21.9521 17.2404 22.339 17.9755 22.8209C18.1628 22.9437 18.3416 23.0712 18.5159 23.1954C19.1788 23.668 19.7743 24.0926 20.5101 24.0248C20.9377 23.9855 21.3793 23.5835 21.6036 22.3845C22.1336 19.5509 23.1755 13.4113 23.4163 10.8813C23.4374 10.6596 23.4108 10.376 23.3895 10.2514C23.3682 10.1269 23.3237 9.94948 23.1618 9.81813C22.9701 9.66258 22.6742 9.62978 22.5418 9.63211C21.94 9.64271 21.0167 9.96376 16.5734 11.8119Z" fill="#282828"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 38 38" fill="none">
                                    <path d="M25.6342 3.16675H12.3658C6.60249 3.16675 3.16666 6.60258 3.16666 12.3659V25.6184C3.16666 31.3976 6.60249 34.8334 12.3658 34.8334H25.6183C31.3817 34.8334 34.8175 31.3976 34.8175 25.6342V12.3659C34.8333 6.60258 31.3975 3.16675 25.6342 3.16675ZM19 25.1434C15.6117 25.1434 12.8567 22.3884 12.8567 19.0001C12.8567 15.6117 15.6117 12.8567 19 12.8567C22.3883 12.8567 25.1433 15.6117 25.1433 19.0001C25.1433 22.3884 22.3883 25.1434 19 25.1434ZM28.3733 10.8934C28.2942 11.0834 28.1833 11.2576 28.0408 11.4159C27.8825 11.5584 27.7083 11.6692 27.5183 11.7484C27.3283 11.8276 27.1225 11.8751 26.9167 11.8751C26.4892 11.8751 26.0933 11.7167 25.7925 11.4159C25.65 11.2576 25.5392 11.0834 25.46 10.8934C25.3808 10.7034 25.3333 10.4976 25.3333 10.2917C25.3333 10.0859 25.3808 9.88008 25.46 9.69008C25.5392 9.48425 25.65 9.32591 25.7925 9.16758C26.1567 8.80341 26.7108 8.62925 27.2175 8.74008C27.3283 8.75591 27.4233 8.78758 27.5183 8.83508C27.6133 8.86675 27.7083 8.91425 27.8033 8.97758C27.8825 9.02508 27.9617 9.10425 28.0408 9.16758C28.1833 9.32591 28.2942 9.48425 28.3733 9.69008C28.4525 9.88008 28.5 10.0859 28.5 10.2917C28.5 10.4976 28.4525 10.7034 28.3733 10.8934Z" fill="#282828"/>
                                </svg>
                            </a>
                        </div>
                    </div>
    
                </div>
                <div class="text-center bg-white rounded-3xl overflow-hidden transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <img class="w-100" src="../assets/images/avatar-3.jpg">
                    <div class="p-6">
                        <div class="flex flex-col items-center leading-8">
                            <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">سارا توحیدی</h3>
                            <p class="text-gray-500">طراح گرافیک</p>
                        </div>
                        <div class="flex gap-2 items-center justify-center mt-2">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16ZM16.5734 11.8119C15.0171 12.4592 11.9068 13.7989 7.24252 15.8311C6.48511 16.1323 6.08834 16.427 6.05222 16.7151C5.99118 17.202 6.60095 17.3937 7.43129 17.6548C7.54424 17.6903 7.66127 17.7271 7.78125 17.7661C8.59818 18.0317 9.6971 18.3424 10.2684 18.3547C10.7866 18.3659 11.365 18.1523 12.0035 17.7138C16.3615 14.772 18.6112 13.2851 18.7524 13.253C18.8521 13.2304 18.9901 13.202 19.0837 13.2851C19.1772 13.3683 19.168 13.5258 19.1581 13.568C19.0977 13.8255 16.7042 16.0508 15.4655 17.2024C15.0793 17.5614 14.8054 17.816 14.7494 17.8742C14.624 18.0045 14.4962 18.1277 14.3733 18.2461C13.6144 18.9778 13.0452 19.5264 14.4048 20.4224C15.0582 20.8529 15.581 21.209 16.1026 21.5642C16.6722 21.9521 17.2404 22.339 17.9755 22.8209C18.1628 22.9437 18.3416 23.0712 18.5159 23.1954C19.1788 23.668 19.7743 24.0926 20.5101 24.0248C20.9377 23.9855 21.3793 23.5835 21.6036 22.3845C22.1336 19.5509 23.1755 13.4113 23.4163 10.8813C23.4374 10.6596 23.4108 10.376 23.3895 10.2514C23.3682 10.1269 23.3237 9.94948 23.1618 9.81813C22.9701 9.66258 22.6742 9.62978 22.5418 9.63211C21.94 9.64271 21.0167 9.96376 16.5734 11.8119Z" fill="#282828"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 38 38" fill="none">
                                    <path d="M25.6342 3.16675H12.3658C6.60249 3.16675 3.16666 6.60258 3.16666 12.3659V25.6184C3.16666 31.3976 6.60249 34.8334 12.3658 34.8334H25.6183C31.3817 34.8334 34.8175 31.3976 34.8175 25.6342V12.3659C34.8333 6.60258 31.3975 3.16675 25.6342 3.16675ZM19 25.1434C15.6117 25.1434 12.8567 22.3884 12.8567 19.0001C12.8567 15.6117 15.6117 12.8567 19 12.8567C22.3883 12.8567 25.1433 15.6117 25.1433 19.0001C25.1433 22.3884 22.3883 25.1434 19 25.1434ZM28.3733 10.8934C28.2942 11.0834 28.1833 11.2576 28.0408 11.4159C27.8825 11.5584 27.7083 11.6692 27.5183 11.7484C27.3283 11.8276 27.1225 11.8751 26.9167 11.8751C26.4892 11.8751 26.0933 11.7167 25.7925 11.4159C25.65 11.2576 25.5392 11.0834 25.46 10.8934C25.3808 10.7034 25.3333 10.4976 25.3333 10.2917C25.3333 10.0859 25.3808 9.88008 25.46 9.69008C25.5392 9.48425 25.65 9.32591 25.7925 9.16758C26.1567 8.80341 26.7108 8.62925 27.2175 8.74008C27.3283 8.75591 27.4233 8.78758 27.5183 8.83508C27.6133 8.86675 27.7083 8.91425 27.8033 8.97758C27.8825 9.02508 27.9617 9.10425 28.0408 9.16758C28.1833 9.32591 28.2942 9.48425 28.3733 9.69008C28.4525 9.88008 28.5 10.0859 28.5 10.2917C28.5 10.4976 28.4525 10.7034 28.3733 10.8934Z" fill="#282828"/>
                                </svg>
                            </a>
                        </div>
                    </div>
    
                </div>
                <div class="text-center bg-white rounded-3xl overflow-hidden transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <img class="w-100" src="../assets/images/avatar-4.jpg">
                    <div class="p-6">
                        <div class="flex flex-col items-center leading-8">
                            <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">فرهاد یاسری</h3>
                            <p class="text-gray-500">طراح گرافیک</p>
                        </div>
                        <div class="flex gap-2 items-center justify-center mt-2">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16ZM16.5734 11.8119C15.0171 12.4592 11.9068 13.7989 7.24252 15.8311C6.48511 16.1323 6.08834 16.427 6.05222 16.7151C5.99118 17.202 6.60095 17.3937 7.43129 17.6548C7.54424 17.6903 7.66127 17.7271 7.78125 17.7661C8.59818 18.0317 9.6971 18.3424 10.2684 18.3547C10.7866 18.3659 11.365 18.1523 12.0035 17.7138C16.3615 14.772 18.6112 13.2851 18.7524 13.253C18.8521 13.2304 18.9901 13.202 19.0837 13.2851C19.1772 13.3683 19.168 13.5258 19.1581 13.568C19.0977 13.8255 16.7042 16.0508 15.4655 17.2024C15.0793 17.5614 14.8054 17.816 14.7494 17.8742C14.624 18.0045 14.4962 18.1277 14.3733 18.2461C13.6144 18.9778 13.0452 19.5264 14.4048 20.4224C15.0582 20.8529 15.581 21.209 16.1026 21.5642C16.6722 21.9521 17.2404 22.339 17.9755 22.8209C18.1628 22.9437 18.3416 23.0712 18.5159 23.1954C19.1788 23.668 19.7743 24.0926 20.5101 24.0248C20.9377 23.9855 21.3793 23.5835 21.6036 22.3845C22.1336 19.5509 23.1755 13.4113 23.4163 10.8813C23.4374 10.6596 23.4108 10.376 23.3895 10.2514C23.3682 10.1269 23.3237 9.94948 23.1618 9.81813C22.9701 9.66258 22.6742 9.62978 22.5418 9.63211C21.94 9.64271 21.0167 9.96376 16.5734 11.8119Z" fill="#282828"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 38 38" fill="none">
                                    <path d="M25.6342 3.16675H12.3658C6.60249 3.16675 3.16666 6.60258 3.16666 12.3659V25.6184C3.16666 31.3976 6.60249 34.8334 12.3658 34.8334H25.6183C31.3817 34.8334 34.8175 31.3976 34.8175 25.6342V12.3659C34.8333 6.60258 31.3975 3.16675 25.6342 3.16675ZM19 25.1434C15.6117 25.1434 12.8567 22.3884 12.8567 19.0001C12.8567 15.6117 15.6117 12.8567 19 12.8567C22.3883 12.8567 25.1433 15.6117 25.1433 19.0001C25.1433 22.3884 22.3883 25.1434 19 25.1434ZM28.3733 10.8934C28.2942 11.0834 28.1833 11.2576 28.0408 11.4159C27.8825 11.5584 27.7083 11.6692 27.5183 11.7484C27.3283 11.8276 27.1225 11.8751 26.9167 11.8751C26.4892 11.8751 26.0933 11.7167 25.7925 11.4159C25.65 11.2576 25.5392 11.0834 25.46 10.8934C25.3808 10.7034 25.3333 10.4976 25.3333 10.2917C25.3333 10.0859 25.3808 9.88008 25.46 9.69008C25.5392 9.48425 25.65 9.32591 25.7925 9.16758C26.1567 8.80341 26.7108 8.62925 27.2175 8.74008C27.3283 8.75591 27.4233 8.78758 27.5183 8.83508C27.6133 8.86675 27.7083 8.91425 27.8033 8.97758C27.8825 9.02508 27.9617 9.10425 28.0408 9.16758C28.1833 9.32591 28.2942 9.48425 28.3733 9.69008C28.4525 9.88008 28.5 10.0859 28.5 10.2917C28.5 10.4976 28.4525 10.7034 28.3733 10.8934Z" fill="#282828"/>
                                </svg>
                            </a>
                        </div>
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