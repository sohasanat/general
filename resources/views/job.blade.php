<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="build/style.css">
  <title>جزئیات پروژه</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

</head>

<body class="font-YekanBakh-Regular text-sm">


  <!--header -->

  @include('header')

  <!--endheader-->


  <section class="px-4 pb-25 min-height-50 bg-gradient-to-t ">
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

              <a href="#" class="mr-1 text-sm font-medium">فرصت‌های شغلی</a>
            </div>
          </li>
        </ol>
      </nav>
      <div class="flex flex-col items-center justify-center relative mt-16">
        <h2 class="font-YekanBakh-ExtraBlack text-3xl">فرصت‌های شغلی</h2>

        <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-16">

        @foreach($jobsvar as $jobs)

        <div class="bg-white rounded-lg flex items-center justify-between border-1p h-10 px-4">
          <div class="flex items-center">
            <div class="lightGreen text-white rounded-lg p-2 icongreen w-14 h-14">
              <img src="{{$jobs->photo}}" class="w-full" />
            </div>
            <div class="mr-2 gap-2 flex flex-col ">
              <h2 class="font-YekanBakh-Bold text-base">{{$jobs->title}}</h2></a>
              <p>{{$jobs->Description}}</p>
            </div>
          </div>
          <div class="border bg-green text-white hover:text-white hover:bg-green duration-300 rounded-lg">
            <a href="{{ route('job.deails', $jobs->id) }}" class="flex py-2.5 px-7 rounded-lg font-YekanBakh-Regular">ارسال رزومه</a>
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