<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>محصولات</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm bg-gradient-to-t">



    <!--header -->

    @include('header')

    <!--endheader-->

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



                @foreach($allproductsvar as $produts)

                <a href="{{ route('product.details', $produts->id) }}" class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="{{$produts->logo}}" alt="">
                    </div>

                    <div class="flex items-center mb-4">
                        <h2 class="font-YekanBakh-ExtraBold text-base mr-1">{{$produts->name}}</h2>
                    </div>
                    <div>
                        <p class="line3">{{$produts->Description}}</p>
                    </div>
                </a>

                @endforeach

                <!------------ barabon --------------->
                <!-- <a href="/single-product" class="bg-white displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                        <img src="../assets/images/icon6.png" alt="">  
                    </div>
                    
                    <div class="flex items-center mb-4">
                           <h2 class="font-YekanBakh-ExtraBold text-base mr-1">مدیریت حمل‌ونقل جاده‌ای بارابُن</h2>
                    </div>
                    <div>
                    <p class="line3">نرم افزار ما شامل چهار جزء اصلی می شود، مدیریت باربری، مدیریت حمل بار، مدیریت ناوگان و مدیریت تعمیر و نگه داری ناوگان که در کنار ماژول هوش تجاری مجموعه ای کامل از نرم افزارهای مورد استفاده در صنعت حمل و نقل را داراست که به صورت ساختار چندغرفه ای یا مالتی تننت پیاده سازی شده که قابلیت این را دارد با استفاده از ابزارهای تصمیم گیری مبتنی بر هوش مصنوعی و اینترنت اشیاء به عنوان یک سیستم عامل مدیریتی سرتاسری در حمل و نقل جاده ای به کار گرفته شود.</p>
                    </div>
                </a> -->


            </div>
        </div>
    </section>


    <!--footer -->

    @include('footer')

    <!--endfooter -->


    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="../src/js/main.js"></script>
</body>

</html>