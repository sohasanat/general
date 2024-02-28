<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('../node_modules/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/style.css')}}">
    <title>جزئیات وبلاگ</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm bg-[#f5f1e4]">

    <!--header -->

    @include('header')

    <!--endheader-->
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

                            <a href="#" class="mr-1 text-sm font-medium">جزئیات وبلاگ</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="flex flex-col items-center justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">{{$blog->title}}</h2>

                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>
                <p class="mt-4">{{$blog->point}}</p>
            </div>

            <div class="max-w-4xl mx-auto">

                <div>
                    <img src="../assets/images/blogimages/{{$blog->photo}}" />
                </div>

                <div class="leading-8 mb-12 textjustify">
                    <p class="mt-4">
                        {{$blog->Description}}
                    </p>
                </div>
                <div class="mb-12">



                    @foreach($blogvar as $blog1)

                    @if($blogvar->id = $blog->id)
                    <div class="mr-2">
                        <a href="{{ route('blog.single', $blog1->id) }}">
                            <h2 class="font-YekanBakh-ExtraBold text-base">{{$blog1->title}}</h2>
                        </a>
                        <p class="mt-2">{{$blog1->point}}</p>
                    </div>



                    @endif
                    @endforeach








                    <div class="flex items-center mb-6">

                        <div class="mr-2">
                            <span class="font-IRANSansWeb_Bold rounded-full py-1">مقالات مشابه</span>
                            <p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <div class="w-32">
                                <a href="#"><img class="rounded-xl" src="../assets/images/blog-9.jpg" alt="" srcset=""></a>
                            </div>
                            <div class="mr-2">
                                <a href="#">
                                    <h2 class="font-YekanBakh-ExtraBold text-base">جذاب ترین صندلی مینیمال</h2>
                                </a>
                                <p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-32">
                                <a href="#"><img class="rounded-xl" src="../assets/images/blog-9.jpg" alt="" srcset=""></a>
                            </div>
                            <div class="mr-2">
                                <a href="#">
                                    <h2 class="font-YekanBakh-ExtraBold text-base">جذاب ترین صندلی مینیمال</h2>
                                </a>
                                <p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center mb-6">

                        <div class="mr-2">
                            <span class="font-IRANSansWeb_Bold rounded-fullpy-1">نظرات</span>
                        </div>
                    </div>
                    <textarea class="textarea textarea-bordered w-full h-36 rounded-3xl" placeholder="نظر خود را بنویسید..."></textarea>
                    <button class="btn bg-stone-800 w-36 hover:bg-stone-900 text-white mt-4 rounded-full">ارسال پیام</button>
                </div>
            </div>

        </div>
    </section>


    <!--footer -->

    @include('footer')

    <!--endfooter -->
    <script>
        setTimeout(() => {
            document.querySelector(".alert").style.display = "none"
        }, 2000);
    </script>

    <script src="{{asset('node_modules/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('src/js/main.js')}}"></script>
</body>

</html>