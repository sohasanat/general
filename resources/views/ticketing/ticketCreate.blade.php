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

  @include('header')

  <!--endheader-->

  <section class="px-4 mb-24 min-h ">
    <div class="container mx-auto max-w-screen-xl">

      <nav class="flex mb-5 border-y border-orange-200 py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
          <li class="inline-flex items-center">
            <a href="{{ route('main.company') }}" class="inline-flex items-center">
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
      <form action="{{ route('tiket.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-white rounded-lg flex flex-col  items-center justify-between border-1p px-6 py-6">
          <!-- start select -->
          <div class="flex gap-4  items-center w-full flex-wrap">

            <div class="flex-1 flex-100">
              <label class="font-semibold text-sm text-gray-600 pb-1 block" for="gender">گیرنده*</label>
              <select name="receiver" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full outlone-n" id='select-reciever'>
                <option id="1" value="other">انتخاب کنید</option>
                <option id="2" value="product1">نام محصول اول</option>
                <option id="3" value="product2">نام محصول دوم</option>
              </select>
            </div>
            <div class="flex-1 flex-100">
              <label class="font-semibold text-sm text-gray-600 pb-1 block" for="gender">بخش مربوطه*</label>
              <select name="section" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full outlone-n">
                <option id="1" value="other">انتخاب کنید</option>
                <option id="2" value="sale">فروش</option>
                <option id="3" value="technical">فنی</option>
                <option id="4" value="money">مالی</option>
                <option id="5" value="sugges">پیشنهاد</option>
              </select>
            </div>
            <div class="flex-1 flex-100">
              <label class="font-semibold text-sm text-gray-600 pb-1 block" for="gender">اولویت*</label>
              <select name="importent" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full outlone-n">
                <option id="1" value="other">انتخاب کنید</option>
                <option id="2" value="importent">مهم</option>
                <option id="3" value="normal">معمولی</option>
              </select>
            </div>

          </div>

          <!-- end select -->

          <input name="date" type="text" id="timeNow" value="" class="hidden">
          <div class="flex gap-4  items-center w-full flex-wrap">
            <input required type="text" name="title" placeholder="عنوان پیام" class="flex-1 flex-100 border-box input w-full  focus:outline-none placeholder:text-sm" />
            <input id="uploadInput" name="resume" alt="resume" type="file" class="hidden">



            <button id="uploadButton" class="flex-1 flex-100 btn font-YekanBakh-Regular text-white border-dash">بارگذاری فایل </button>
          </div>

          <textarea required name="storysuccess" placeholder="توضیحات" class="border-box textarea w-full mt-6  focus:outline-none placeholder:text-sm"></textarea>








          <div class="flex justify-end w-full">
            <button class="btn mt-5 bg-orange-200 px-7 text-white  text-sm text-center" type="submit" id='submitBtn'>ارسال رزومه</button>
          </div>
        </div>
      </form>

  </section>

















  <!--footer -->

  @include('footer')

  <!--endfooter -->

  <!-- 
<script src="../node_modules/swiper/swiper-bundle.min.js"></script>
<script src="../src/js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
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
        url: "{{ route('searchpro') }}",
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
      url: "{{ route('productsfilter') }}",
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

  <script>
    document.getElementById('submitBtn').addEventListener('click', function(event) {
      console.log("click");
      var selections = document.querySelectorAll('select');
      console.log(selections);
      var isValid = true;

      selections.forEach(function(select) {
        if (select.value === 'other') {
          isValid = false;
        }
      });

      if (!isValid) {
        alert('لطفا یک مورد معتبر برای هر یک از selection ها را انتخاب کنید.');
        event.preventDefault();
      }
    });
  </script>




</body>

</html>