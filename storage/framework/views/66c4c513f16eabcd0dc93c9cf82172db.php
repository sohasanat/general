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
      <form action="<?php echo e(route('job.request')); ?>" method="POST" enctype="multipart/form-data">
    <div class="bg-white rounded-lg flex flex-col  items-center justify-between border-1p px-6 py-6">
 <!-- start select -->
    <div class="flex gap-4  items-center w-full flex-wrap">

    <div class="flex-1 flex-100">
          <label
            class="font-semibold text-sm text-gray-600 pb-1 block"
            for="gender"
            >گیرنده*</label
          >
          <select
            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full outlone-n"
          >
          <option value="other">انتخاب کنید</option>
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

    </div>

     <!-- end select -->


     <div class="flex gap-4  items-center w-full flex-wrap">
            <input required type="text" name="name" placeholder="عنوان پیام" class="flex-1 flex-100 border-box input w-full  focus:outline-none placeholder:text-sm" />
            <input required id="uploadInput" name="resume" alt="resume" type="file" class="hidden">
            <input name="date" type="text" id="timeNow" value="" class="hidden">

            <button id="uploadButton" class="flex-1 flex-100 btn font-YekanBakh-Regular text-white border-dash">بارگذاری فایل </button>
          </div>
          
          <textarea name="storysuccess" placeholder="توضیحات" class="border-box textarea w-full mt-6  focus:outline-none placeholder:text-sm"></textarea>
          <div class="flex justify-end w-full">
         <button class="btn mt-5 bg-orange-200 px-7 text-white  text-sm text-center" type="submit">ارسال رزومه</button>
         </div>
        </div>
    </form>

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
    document.getElementById("uploadButton").addEventListener("click", () => {
      document.getElementById("uploadInput").click()
    })
  </script>
  <script>
    setTimeout(() => {
      document.querySelector(".success-message").style.display = "none"
    }, 5000)
  </script>

  <script>
    const date = new Date().toLocaleDateString("fa-ir")
    document.querySelector("#timeNow").value = date
  </script>
  <script>
    setTimeout(() => {
      document.querySelector(".alert").style.display = "none"
    }, 2000);
  </script>

</body>

</html><?php /**PATH D:\websiteSohaSanat\general\resources\views/ticketing/ticketCreate.blade.php ENDPATH**/ ?>