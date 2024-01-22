<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>تماس با ما</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm">

    <div class=" bg-gradient-to-t">

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
                                    <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('main.company')); ?>">صفحه اصلی</a></li>
                                    <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('allproducts')); ?>">محصولات</a></li>
                                    <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('aboutus.us')); ?>">درباره ما</a></li>
                                    <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('connect.us')); ?>">تماس با ما</a></li>
                                    <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('jobs')); ?>">فرصت‌های شغلی</a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-8">
                        <div class="w-22">
                            <a href="/" class="font-YekanBakh-ExtraBlack text-3xl color-green">
                                <img class="object-cover w-full rounded-xl" src="../assets/images/logomain.svg" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="hidden lg:block">
                        <ul class="flex menu lg:menu-horizontal">
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('main.company')); ?>">صفحه اصلی</a></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('allproducts')); ?>">محصولات</a></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('aboutus.us')); ?>">درباره ما</a></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('connect.us')); ?>">تماس با ما</a></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="<?php echo e(route('jobs')); ?>">فرصت‌های شغلی</a></li>
                        </ul>
                    </div>
                    <div class="border bg-green text-white hover:text-white hover:bg-green duration-300 rounded-full">
                        <a href="login" class="flex py-2.5 px-7 rounded-full font-YekanBakh-Regular">ورود | ثبت نام</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="px-4 pb-8">
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

                                <a href="#" class="mr-1 text-sm font-medium">تماس با ما</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="flex justify-center relative my-16">
                    <h2 class="font-YekanBakh-ExtraBlack text-3xl">تمــــــاس بــــا مــــا</h2>
                    <div class="absolute -top-6">
                        <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">contact</span>

                    </div>
                    <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

                </div>

                <div class="relative">
                    <div class="px-5 mx-auto flex sm:flex-nowrap flex-wrap">
                        <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full mt-8 md:mt-0 mb-8 md:mb-0">
                            <div class="mr-2">
                                <p class="font-YekanBakh-Bold text-base mb-2">پیغــام خــود را بـــا مـــا در میـــان بگذاریــــد...</p>
                                <p class="mb-4 text-xs leading-6">جهت ارتباط با ما و ارسال نظرات و پیشنهادات خود می توانید از فرم زیر استفاده نمایید.</p>
                            </div>
                            <form action="<?php echo e(route('connect.us.comment')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-control w-full flex flex-col gap-y-5">
                                    <input required type="text" name="title" placeholder="موضوع پیام" class="input w-full rounded-full focus:outline-none placeholder:text-sm" />
                                    <input required type="email" name="email" placeholder="پست الکترونیکی:" class="input w-full rounded-full focus:outline-none placeholder:text-sm" />
                                    <textarea class="textarea w-full h-32 rounded-3xl focus:outline-none placeholder:text-sm" name="Description" placeholder="متن پیام را بنویسید..."></textarea>
                                    <button class="btn bg-stone-800 w-32 hover:bg-stone-900 text-white rounded-full text-sm">ارسال پیام</button>
                                </div>
                            </form>
                        </div>
                        <div class="lg:w-2/3 md:w-1/2 rounded-3xl overflow-hidden sm:mr-10 p-10 hidden md:flex items-end justify-start relative">
                            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" style="filter: contrast(1.2) opacity(0.7);" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1258.3920220984826!2d51.70158335846726!3d32.64603791291042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sde!4v1703419123037!5m2!1sen!2sde" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="bg-white relative flex flex-wrap py-6 rounded-2xl mx-8">
                                <div class="lg:w-1/2 px-6">
                                    <p class="font-YekanBakh-Bold text-base mb-2">مکـــان:</p>
                                    <p class="mb-4 text-xs leading-6">اصفهان - خیابان 22بهمن - روبه‌روی بانک سپه - پلاک 205</p>
                                </div>
                                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                                    <p class="font-YekanBakh-Bold text-base mb-2">ایمیــل:</p>
                                    <a class="text-orange-500 leading-relaxed">info@sohasanat.net</a>
                                    <p class="font-YekanBakh-Bold text-base mb-2">تمـاس:</p>
                                    <p class="leading-relaxed">031-91099120 | 09131862984</p>
                                </div>
                            </div>
                        </div>
                    </div>
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

        </section>
    </div>

    <footer class="p-10 bg-stone-800 text-white">
        <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full bg-green text-white hover:text-white hover:bg-green duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
            </svg>

            <span class="sr-only">Go to top</span>
        </button>
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-12 gap-4 leading-8">
                <div class="col-span-12 lg:col-span-5">
                    <div class="mb-4">
                        <div class="w-22">
                            <a href="/" class="font-YekanBakh-ExtraBlack text-3xl color-green">
                                <img class="object-cover w-full rounded-xl" src="../assets/images/logomain2.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <p class="md:textjustify">هدف اصلی مجموعه شرکت های سهاصنعت، تحت لیسانس و شریک توسعه گروه همکاران سیستم اشاعه ی هوشمندی و هوش محوری و در نتیجه افزایش بهره وری در صنایعِ مختلف علی الخصوص صنایعِ بالادستی است.</p>
                </div>
                <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:col-span-4 md:p-right-7 text-right">
                    <h3 class="font-IRANSansWeb_Bold text-white mb-4 text-base">دسترسی سریع</h3>
                    <ul>
                        <li><a href="index">صفحه اصلی</a></li>
                        <li><a href="/about-us">درباره ما</a></li>
                        <li><a href="<?php echo e(route('connect.us')); ?>">تماس با ما</a></li>
                        <li><a href="<?php echo e(route('allproducts')); ?>">محصولات</a></li>
                    </ul>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-3">

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
            <p>تمامی حقوق مادی و معنوی این سایت متعلق به سهاصنعت می باشد و هرگونه کپی برداری غیرقانونی محسوب خواهد شد</p>
        </div>
    </footer>

    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="../src/js/main.js"></script>
    <script>
        setTimeout(() => {
            document.querySelector(".success-message").style.display = "none"
        }, 5000)
    </script>
</body>

</html><?php /**PATH C:\Users\danesh\laravelprojectone\resources\views/contact-us.blade.php ENDPATH**/ ?>