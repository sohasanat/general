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
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
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
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12  md:col-span-3">
          <div class="flex flex-col ">
            <div class="w-full box-border mb-2">
              <p class="mb-6 p-filter">حوزه فعالیت</p>

              <ul class="overflow-h leading-10 filter">
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4" value="Warehouseandlogistics">
                  <label for="cat-35"> انبار و تدارکات </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4" value="Factorymanagement">
                  <label for="cat-2100"> مدیریت کارخانه </label>
                </li>
              </ul>
            </div>
            <div class="w-full box-border">
              <p class="mb-6 p-filter">صنعت</p>

              <ul class="overflow-h leading-10 filter">
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4" value="productive">
                  <label for="cat-35">
                    تولیدی
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4"
                    value="Productioncastingofbasicironsteel">
                  <label for="cat-35">
                    تولید و ریخته‌گری آهن و فولاد پایه
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4" value="Foodstuffs">
                  <label for="cat-35">
                    مواد غذایی
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4"
                    value="Medicinesandpharmaceuticalproducts">
                  <label for="cat-35">
                    دارو و فراورده های دارویی
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4"
                    value="Automobilestransportationequipmentandrelated">
                  <label for="cat-35">
                    خودرو، تجهیزات حمل و نقل و قطعات وابسته
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4" value="Basemetals">
                  <label for="cat-35">
                    فلزات پایه
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4"
                    value="Extractionofcrudeoilandnaturalgas,">
                  <label for="cat-35">
                    استخراج نفت خام و گاز طبیعی
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4"
                    value="Nonmetallicmineralscementplasterandlime">
                  <label for="cat-35">
                    مواد معدنی غیر فلزی- سیمان، گچ و آهک
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4"
                    value="Petrochemicalproductioncomplex">
                  <label for="cat-35">
                    مجتمع تولیدی پتروشیمی
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4"
                    value="Industrialmachineryroadconstructionandagriculture">
                  <label for="cat-35">
                    ماشین آلات صنعتی، راه سازی و کشاورزی
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4" value="Drillingandexploration">
                  <label for="cat-35">
                    حفاری و اکتشاف
                  </label>
                </li>
                <li>
                  <input type="checkbox" name="categories1" class="formInput ml-4" value="Petrochemicalprojects">
                  <label for="cat-35">
                    طرح های پتروشیمی
                  </label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-span-12  md:col-span-9">
          <div class="flex flex-col">
            <div class="mb-10 box-border">
              <div class="border1 flex">
                <input type="text" name="name" placeholder="عنوان مورد نظر خود را بنویسید"
                  class="input  w-full  focus:outline-none placeholder:text-sm" />
                <div class="flex justify-center items-center pl-5">
                  <img class="w-6 h-6" src="../assets/images/search.svg" alt="">
                </div>
              </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" id="viewProducts">



              @foreach($allproductsvar as $produts)

              <a href="{{ route('product.details', $produts->id) }}"
                class="bg-white border-box displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform product-show">
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



            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!--footer -->

  @include('footer')

  <!--endfooter -->


  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="../src/js/main.js"></script>
  <script>
    
    </script>

</body>

</html>