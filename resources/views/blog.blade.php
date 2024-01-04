<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>وبلاگ</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm bg-gradient-to-t">

    <!--header -->

    @include('header')

    <!--endheader-->

    <section class="px-4 mb-24  pb-8">
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">




                @foreach($blogvar as $blog)

                <div class="bg-white overflow-hidden rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform  shadow-lg">
                    <div class="p-6">
                        <div class="flex items-center mb-4 border-b border-dashed pb-4">
                            <div class="avatar ml-2">
                                <div class="w-14 rounded-full">
                                    <img src="{{$blog->photo}}" />
                                </div>
                            </div>
                            <div class="flex flex-col mt-1">
                                <h3 class="font-YekanBakh-Bold text-slate-800 text-sm mb-2">{{$blog->name}}</h3>
                                <p class="text-xs">{{$blog->point}}</p>
                            </div>

                        </div>
                        <div class="leading-8">
                            <div class="flex items-center mb-2">
                                <a href="/single-page">
                                    <h2 class="font-YekanBakh-ExtraBold text-base mr-1">{{$blog->title}}</h2>
                                </a>
                            </div>
                            <p class="line3">{{$blog->Description}}</p>
                        </div>
                    </div>
                    <div>
                        <a href="/single-page"><img class="rounded-b-lg" src="../assets/images/blog-9.jpg" alt=""></a>
                    </div>

                </div>




                @endforeach



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