<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('../node_modules/swiper/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('build/style.css')}}">
  <title>جزئیات پروژه</title>
  <link rel="icon" type="image/x-icon" href="{{asset('../assets/images/favicon.ico')}}">

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
                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('main.company') }}">صفحه اصلی</a></li>
                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('allproducts') }}">محصولات</a></li>
                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('aboutus.us') }}">درباره ما</a></li>
                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('connect.us') }}">تماس با ما</a></li>
                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('jobs') }}">فرصت‌های شغلی</a></li>

              </ul>
            </div>
          </div>
        </div>
        <div class="flex items-center gap-8">
        <div class="mb-4">
                        <div class="w-22">
                            <a href="/" class="font-YekanBakh-ExtraBlack text-3xl color-green">
                                <img class="object-cover w-full rounded-xl" src="../assets/images/logomain2.svg" alt="">
                            </a>
                        </div>
                    </div>

        </div>
        <div class="hidden lg:block">
          <ul class="flex menu lg:menu-horizontal">
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('main.company') }}">صفحه اصلی</a></li>
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('allproducts') }}">محصولات</a></li>
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('aboutus.us') }}">درباره ما</a></li>
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('connect.us') }}">تماس با ما</a></li>
            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('jobs') }}">فرصت‌های شغلی</a></li>
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

              <a href="#" class="mr-1 text-sm font-medium">جزئیات محصول</a>
            </div>
          </li>
        </ol>
      </nav>
      <div class="flex flex-col items-center justify-center relative mb-8 mt-16">
        <h2 class="font-YekanBakh-ExtraBlack text-3xl">{{$productsvar->name}}</h2>

        <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>
      </div>

      <div class="max-w-4xl mx-auto">
        <div style="display: none; z-index: 9; background-color: rgba(0,0,0,0.7);" class="fixed top-0 left-0 bottom-0 right-0 flex justify-center items-center image-modal">
          <button class="absolute top-10 right-10 text-white close-modal">حذف</button>
          <img style="max-width: 90%;" src="../assets/images/imagesfra/g4.png" alt="" class="big-image">
        </div>
        <div class="mb-12">
          <div class="">
            <img class="rounded-xl cursor-pointer" src="{{$productsvar->photo}}" />
          </div>
          <div thumbsSlider="" class="swiper gall-project mt-4">
            <div class="swiper-wrapper">

              @foreach($productimg as $img)
              <div class="swiper-slide  overflow-y-h h-36">
                <img class="rounded-xl cursor-pointer min-height-9 images" src="{{$img->image}}" />
              </div>
              @endforeach


            </div>
          </div>
        </div>
        <div class="leading-8 mb-12">

          <!-- Tab Content -->
          <div class="p-4 pb-8  rounded-lg">
            <h2 class="font-YekanBakh-ExtraBold text-2xl mb-4 text-center">توضیحات</h2>
            <p>
              {{$productsvar->longDescreption}}
            <ul>
              <li>
                لیست امکانات و ویژگی های اصلی
              </li>
              @foreach($hintsvar as $hint)
              <li>
                {{$hint->Description}}
              </li>
              @endforeach

            </ul>
            </p>
          </div>
          <div class="  rounded-lg">
            <h2 class="font-YekanBakh-ExtraBold text-2xl mb-4 text-center">اطلاعات بیشتر</h2>
            <div class="grid gap-4">

              @foreach($informationvar as $infovar)
              <div class="bg-orange-200 rounded-lg flex items-center">
                <div class="bg-stone-900 text-white rounded-lg p-4 icongreen w-13">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.375 26.563">
                    <path id="_2175555261690015850" data-name="2175555261690015850" d="M39.8,12.405a2.292,2.292,0,0,1,3.271,0,2.366,2.366,0,0,1,.033,3.281L24.626,37.53a.79.79,0,0,1-.057.064,2.291,2.291,0,0,1-3.271,0L10.052,26.2a2.366,2.366,0,0,1,0-3.315,2.292,2.292,0,0,1,3.271,0l9.54,9.667L39.74,12.475A.771.771,0,0,1,39.8,12.405Z" transform="translate(-9.375 -11.719)" fill="#fff" />
                  </svg>

                </div>
                <div class="mr-2">{{$infovar->Description}}</div>
              </div>
              @endforeach






            </div>
          </div>

        </div>
        <div class="mb-12">
          <div class="flex items-center mb-6">

            <div class="mr-2">
              <span class="font-IRANSansWeb_Bold  rounded-full py-1 font-YekanBakh-SemiBold"> محصولات مرتبط</span>
            </div>
          </div>
          <div class="swiper sin-project">
            <div class="swiper-wrapper ease-linear">

              @foreach($reltionproductsvar as $relproduts)

              <div class="swiper-slide">
                <div class="group/item">
                  <a href="{{ route('product.details', $relproduts->id) }}" class="bg-white w-full displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform">
                    <div class="w-10 mb-4">
                      <img src="{{$relproduts->logo}}" alt="">
                    </div>

                    <div class="flex items-center mb-4">
                      <h2 class="font-YekanBakh-ExtraBold text-base mr-1">{{$relproduts->name}}</h2>
                    </div>
                    <div>
                      <p class="line3">{{$relproduts->Description}}</p>
                    </div>
                  </a>
                </div>
              </div>
              @endforeach








            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div>
          <div class="flex items-center mb-6">

            <div class="mr-2">
              <span class="font-IRANSansWeb_Bold rounded-full py-1 font-YekanBakh-SemiBold">نظرات</span>
              <p class="mt-2">شما با نام یاسمن وارد شده اید!!</p>
            </div>
          </div>
          <textarea class="textarea textarea-bordered w-full h-36 rounded-3xl" placeholder="نظر خود را بنویسید..."></textarea>
          <button class="btn bg-stone-800 w-36 hover:bg-stone-900 text-white mt-4 rounded-full">ارسال پیام</button>
        </div>
      </div>

    </div>
  </section>
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

  <script src="{{asset('../node_modules/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('../src/js/main.js')}}"></script>
  <script>
    const images = document.getElementsByClassName("images")
    Array.from(images).forEach((element) => {
      element.addEventListener("click", () => {
        console.log("ms vbxmc vmnc")
        const src = element.getAttribute("src")
        document.querySelector(".image-modal").style.display = "flex"
        document.querySelector(".big-image").setAttribute("src", src)
      })
    })

    document.querySelector(".close-modal").addEventListener("click", () => {
      document.querySelector(".image-modal").style.display = "none"
    })
  </script>
</body>

</html>