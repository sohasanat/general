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
      <div class="bg-white rounded-lg flex flex-col  items-center justify-between border-1p px-6 py-6">

        <div class="justify-center flex sm:justify-between gap-y-5  gap-x-2 items-center w-full flex-wrap">
          <span class="font-YekanBakh-ExtraBold text-base mr-1">لیست پیام‌ها

          </span>
          <div class="rounded-full bg-orange-200 hover:duration-300 font-YekanBakh-SemiBold text-white">
            <a href="/ticketCreate" class="flex py-2.5 px-7 rounded-full font-YekanBakh-Regular">ارسال پیام</a>
          </div>
        </div>

        <div class="grid  grid-cols-1 md:grid-cols-2 gap-6  mt-10 w-full">

          <!-- , $message->id -->



          <?php $__currentLoopData = $alltiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($message->importent === "importent"): ?>
          <a href="<?php echo e(route('massage.view', $message->id)); ?>">

            <div class=" bg-white rounded-lg px-4 box-ticket mt-3 border-red">
              <div class="flex border-b py-3 justify-between gap-x-2">
                <div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span><?php echo e($message->status); ?></span></div>
                <div><?php echo e($message->date); ?></div>
              </div>
              <div class="py-3 flex">
                <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
                <p class="line1 flex-1"><?php echo e($message->title); ?></p>
                <div class="flex flex-end mt-3 w-5 mr-3"><img src="../../assets/images/DoubleCheck.svg" alt=""></div>

              </div>
            </div>
          </a>
          <?php else: ?>
          <a href="/ticketDetail">
            <div class="bg-white rounded-lg px-4 box-ticket mt-3">
              <div class="flex border-b py-3 justify-between gap-x-2">
                <div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span><?php echo e($message->status); ?></span></div>
                <div><?php echo e($message->date); ?></div>
              </div>
              <div class="py-3 flex">
                <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
                <p class="line1 flex-1"><?php echo e($message->title); ?></p>
                <div class="flex flex-end mt-3 w-5 mr-3"><img src="../../assets/images/DoubleCheck.svg" alt=""></div>

              </div>
            </div>
          </a>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




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




</body>

</html><?php /**PATH D:\websiteSohaSanat\general\resources\views/ticketing/ticketList.blade.php ENDPATH**/ ?>