<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('../node_modules/swiper/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('build/style.css')}}">
  <title>جزئیات محصول</title>
  <link rel="icon" type="image/x-icon" href="{{asset('../assets/images/favicon.ico')}}">

</head>

<body class="font-YekanBakh-Regular text-sm bg-gradient-to-t">

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
          <button class="absolute top-10 right-10 text-white close-modal">بستن</button>
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
        <div class="rounded-lg mb-12 order">
          <h3 class="font-YekanBakh-ExtraBlack text-xl">خوشــــــــــت اومده نـــــه؟!&nbsp; &nbsp; بــخــرش</h3>
          <img src="../assets/images/arrow.svg" alt="">

          <a href="{{$productsvar->link  }}" class="w-auto inline-block py-2 px-7 rounded-full bg-green text-white font-YekanBakh-SemiBold rounded-lg">خرید محصول</a>

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
        <?php
        if (count($reltionproductsvar) != 1) {
        ?>
          <div class="mb-12">
            <div class="flex items-center mb-6">

              <div class="mr-2">
                <span class="font-IRANSansWeb_Bold  rounded-full py-1 font-YekanBakh-SemiBold"> محصولات مرتبط</span>
              </div>
            </div>
            <div class="swiper sin-project">
              <div class="swiper-wrapper ease-linear">

                @foreach($reltionproductsvar as $relproduts)
                <?php
                if ($relproduts->id != $productsvar->id) {
                ?>
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
                <?php
                }
                ?>
                @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        <?php
        }
        ?>
        <div>
          <div class="flex items-center mb-6">

            <div class="mr-2">
              <span class="font-IRANSansWeb_Bold rounded-full py-1 font-YekanBakh-SemiBold">نظرات</span>
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