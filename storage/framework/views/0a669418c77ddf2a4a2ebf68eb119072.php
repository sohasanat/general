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
  <div class="bg-white rounded-lg flex flex-col  items-center justify-between border-1p px-6 py-8 mt-5">



  <div class="w-full text-center mb-10">
<h2 class="font-YekanBakh-ExtraBold text-base">عنوان پیام</h2>

</div>
    <div class="bg-white rounded-lg flex flex-col  items-center justify-between border-1p px-6 py-6 w-full">

    
    <div class="flex gap-x-2">
        <div class="flex gap-x-2">
            <span class="font-YekanBakh-SemiBold">گیرنده: </span>
            <span>فلان</span>
        </div>
        <div class="flex brBetween2 ">
            <span>یکشنبه 05 شهریور 1402</span>
        </div>
        <div class="flex gap-x-2">
            <span class="font-YekanBakh-SemiBold">بخش مربوطه: </span>
            <span>مالی</span>
        </div>
 
    </div>
    </div>

    <form class="w-full" action="<?php echo e(route('job.request')); ?>" method="POST" enctype="multipart/form-data">
    <div class="flex flex-col items-center justify-betweenpx-6 py-6 w-full">

          <textarea name="storysuccess" placeholder="توضیحات" class="border-box textarea w-full mt-6  focus:outline-none placeholder:text-sm"></textarea>
          <div class="flex justify-between w-full mt-4">
<div>
<input required id="uploadInput" name="resume" alt="resume" type="file" class="hidden">
            <input name="date" type="text" id="timeNow" value="" class="hidden">

            <button id="uploadButton" class="flex-1 flex-100 btn font-YekanBakh-Regular text-white border-dash w-52">بارگذاری فایل </button>
</div>
<div class="flex justify-end w-full">
         <button class="btn bg-orange-200 px-7 text-white  text-sm text-center" type="submit">ارسال </button>
</div>
         </div>
        </div>
    </form>


</div>
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

</html><?php /**PATH D:\websiteSohaSanat\general\resources\views/ticketing/ticketDetail.blade.php ENDPATH**/ ?>