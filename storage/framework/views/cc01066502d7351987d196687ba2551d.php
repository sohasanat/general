<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="build/style.css">
  <title>تیکت‌ها</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

</head>

<body class="font-YekanBakh-Regular text-sm bg-gradient-to-t">



  <!--header -->

  <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--endheader-->

  <section class="px-4 mb-24 min-h ">
  <div class="container mx-auto max-w-screen-xl">
      <!-- demo-->
      <div style="display: none; z-index: 9; background-color: rgba(0,0,0,0.7);" class="fixed top-0 left-0 bottom-0 right-0 flex justify-center items-center" id="modalProduct1">
      <div class="px-6  flex flex-col gap-2 modalProduct p-10">
        <button class="absolute top-1 left-1 close-modal w-6" id="closemode1">
          <img class="w-full" src="../assets/images/close.svg" alt="">
        </button>
        <form class="maxw-25" action="<?php echo e(route('product.demo')); ?>" method="POST" enctype="multipart/form-data">

        <div class="flex-1 flex-100">
          <label
            class="font-semibold text-sm text-gray-600 pb-1 block"
            for="gender"
            >گیرنده*</label
          >
         
          <select
            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full outlone-n" onfocus='this.size=3;' onblur='this.size=1;'
        onchange='this.size=1; this.blur();'
          >
          <option value="other">انتخاب کنید</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="other">انتخاب کنید</option>
            <option value="male">نام محصول اول</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>
            <option value="female">نام محصول دوم</option>
            <option value="male">نام محصول اول</option>

            <option value="female">نام محصول دوم</option>
            
          </select>

        </div>
    <div class="flex-1 flex-100">
          <label
            class="font-semibold text-sm text-gray-600 pb-1 block"
            for="gender"
            >بخش مربوطه*</label
          >
          <select
            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full outlone-n"
          >
          <option value="other">انتخاب کنید</option>
            <option value="male">فروش</option>
            <option value="female">فنی</option>
            <option value="female">مالی</option>
            <option value="female">پیشنهاد</option>
          </select>
        </div>
        <div class="flex-1 flex-100">
          <label
            class="font-semibold text-sm text-gray-600 pb-1 block"
            for="gender"
            >اولویت*</label
          >
          <select
            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full outlone-n"
          >
          <option value="other">انتخاب کنید</option>
            <option value="male">مهم</option>
            <option value="female">معمولی</option>
          </select>
        </div>
        <div class="flex-1 flex-100">
          <label
            class="font-semibold text-sm text-gray-600 pb-1 block"
            for="gender"
            >وضعیت*</label
          >
          <select
            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full outlone-n"
          >
          <option value="other">انتخاب کنید</option>
            <option value="male">پاسخ داده شده </option>
            <option value="female">پاسخ داده نشده </option>
          </select>
        </div>
<div class="flex gap-x-2 flex-wrap ">
<button class="mt-2 bg-stone-800 text-white rounded-lg font-YekanBakh-Regular text-center  py-2.5 w-full border btn-w hover:text-white hover:bg-green duration-300" tyoe="submit">ثبت </button>
</div>
        </form>


      </div>
    </div>


  <nav class="flex mb-5 border-y border-orange-200 py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
          <li class="inline-flex items-center">
            <a href="<?php echo e(route('main.company')); ?>" class="inline-flex items-center">
              خانه
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>

              <a href="#" class="mr-1 text-sm font-medium">لیست تیکت‌ها</a>
            </div>
          </li>
        </ol>
      </nav>
    <div class="bg-white rounded-lg flex flex-col  items-center justify-between border-1p px-6 py-6">

    <div class="flex justify-between items-center w-full grayC p-4 rounded-lg gap-x-2">
    <input type="text" name="search" id="search" placeholder="عنوان مورد نظر خود را بنویسید" class="input  w-full border1 focus:outline-none placeholder:text-sm" />

    <div class="border btn-w bg-orange-200 text-white hover:text-white hover:bg-green duration-300 rounded-lg text-center">
    <button class="rounded-lg font-YekanBakh-Regular text-center  py-2.5 w-full" id="btn-modal1">فیلتر</button>

          </div>

    </div>

<div class="grid  grid-cols-1 md:grid-cols-2 gap-6  mt-10 w-full">



<a href="/c-ticketDetail"><div class="bg-white rounded-lg px-4 box-ticket mt-3">
<div class="flex border-b py-3 justify-between gap-x-2">
<div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span>در حال بررسی</span></div> 
<div>1401/02/05</div> 
</div>
<div class="py-3 flex">
    <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
    <p class="line1 flex-1 text-grayC">پوووولمو نداد</p>
    <div class="flex flex-end mt-3 w-5 mr-3"><img src="../../assets/images/DoubleCheck.svg" alt=""></div>
</div>
</div></a>

<a href="/c-ticketDetail"><div class="bg-white rounded-lg px-4 box-ticket mt-3">
<div class="flex border-b py-3 justify-between gap-x-2">
<div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span>در حال بررسی</span></div> 
<div>1401/02/05</div> 
</div>
<div class="py-3 flex">
    <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
    <p class="line1 flex-1 text-grayC">پوووولمو نداد</p>
</div>
</div></a>


<a href="/c-ticketDetail"><div class="bg-white rounded-lg px-4 box-ticket mt-3 border-red">
<div class="flex border-b py-3 justify-between gap-x-2">
<div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span class="text-grayC">در حال بررسی</span></div> 
<div>1401/02/05</div> 
</div>
<div class="py-3 flex">
    <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
    <p class="line1 flex-1 text-grayC">پوووولمو نداد</p>
    <div class="flex flex-end mt-3 w-5 mr-3"><img src="../../assets/images/DoubleCheck.svg" alt=""></div>
</div>
</div></a>

<a href="/c-ticketDetail"><div class="bg-white rounded-lg px-4 box-ticket mt-3">
<div class="flex border-b py-3 justify-between gap-x-2">
<div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span class="text-grayC">در حال بررسی</span></div> 
<div>1401/02/05</div> 
</div>
<div class="py-3 flex">
    <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
    <p class="line1 flex-1 text-grayC">پوووولمو نداد</p>
    <div class="flex flex-end mt-3 w-5 mr-3"><img src="../../assets/images/DoubleCheck.svg" alt=""></div>
</div>
</div></a>



</div>

  </section>















  

   <!--footer -->

   <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--endfooter -->

<!-- 
<script src="../node_modules/swiper/swiper-bundle.min.js"></script>
<script src="../src/js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
    }
  })
</script>

<script>
  //   import axios from "axios"
  $(document).ready(function() {
    $('#search').on('keyup', function() {
      var $value = $(this).val();
      console.log($value)
      $.ajax({
        type: 'get',
        url: "<?php echo e(route('searchpro')); ?>",
        method: "GET",
        data: {
          'search': $value
        },
        success: function(data) {
          $('.mycard').html(data);
        }
      });
      // axios.get("searchpro?search=" + encodeURIComponent($value)).then(res => {
      //     console.log(res)

    });
  });
</script>

<script>
  $('input[name="categories1"]').change(function() {
    var categories = $('input[name="categories1"]:checked')
      .map(function() {
        return this.value;
      })

      .get();

    $.ajax({
      url: "<?php echo e(route('productsfilter')); ?>",
      method: 'GET',
      data: {
        categories: categories
      },
      success: function(data) {

        $('.myfillcard').html(data);
      }
    });
  });
</script> -->

<script>
  const btnmodal1 = document.getElementById("btn-modal1")
    btnmodal1.addEventListener("click", () => {

      document.getElementById("modalProduct1").style.display = "flex"
    })
    document.getElementById("closemode1").addEventListener("click", () => {
      document.getElementById("modalProduct1").style.display = "none"
    })
    </script>

</body>

</html><?php /**PATH D:\websiteSohaSanat\general\resources\views/ticketing/c-ticketList.blade.php ENDPATH**/ ?>