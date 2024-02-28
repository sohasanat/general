<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('../node_modules/swiper/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('build/style.css')}}">
  <title>تیکت‌ها</title>
  <link rel="icon" type="image/x-icon" href=" {{asset('../assets/images/favicon.ico')}}">

</head>

<body class="font-YekanBakh-Regular text-sm bg-gradient-to-t">



  <!--header -->

  @include('header')

  <!--endheader-->

  <section class="px-4 mb-24 min-h ">
    <div class="container mx-auto max-w-screen-xl">
      <div class="bg-white rounded-lg flex flex-col  items-center justify-between border-1p px-6 mt-5">



        <div class="w-full text-center my-6">
          <h2 class="font-YekanBakh-ExtraBold text-base my-6">عنوان پیام</h2>

          <div class="flex gap-x-2 justify-center">
            <div class="flex gap-x-2 flex-wrap justify-center">
              <span class="font-YekanBakh-SemiBold">گیرنده: </span>
              <span> {{$tiket->receiver}}</span>
            </div>
            <div class="flex brBetween2 ">
              <span>{{$tiket->date}}</span>
            </div>
            <div class="flex gap-x-2 flex-wrap justify-center">
              <span class="font-YekanBakh-SemiBold">بخش مربوطه: </span>
              <span>{{$tiket->section}}</span>
            </div>

          </div>


          <div class="border btn-w bg-orange-200 text-white hover:text-white hover:bg-green duration-300 rounded-lg text-center">
            <a href="{{ route('history.tiket',$tiket->idtiket) }}" class="rounded-lg font-YekanBakh-Regular text-center  py-2.5 w-full">تاریخچه ی کاربر</a>

          </div>
        </div>
        <div class="bg-white rounded-lg flex flex-col  items-center justify-between border-1p px-6 py-6 w-full">



          <div class=" py-6 px-3 w-full wrapperMessage-h">

            @foreach($messages as $message)
            @if($message->from === $username->id)
            <div class="flex justify-start relative mt-4">
              <div class="grayC  p-4 pb-1 fit-content rounded-lg leading-6">
                <p class="p-break">
                  {{$message->Description}}
                </p>
                <div class="flex justify-end  mt-2">
                  20:21
                </div>
              </div>
              <img class="absolute message-r" src="../../../assets/images/plygonGrayRight.svg" alt="plygonGrayRight">
            </div>

            @else
            <div class="flex justify-end relative  mt-4  text-white">
              <div class="greenC p-4 fit-content pb-1 rounded-lg leading-6">
                <p class="p-break">
                  {{$message->Description}}
                </p>
                <div class="flex justify-start mt-2">
                  20:45
                </div>
              </div>
              <img class="absolute message-l" src="../../../assets/images/plygonGrayleft.svg" alt="plygonGrayRight">
            </div>
            @endif
            @endforeach
          </div>

          <!-- rightMessage
          <div class="flex flex-start relative mt-4">
            <div class="grayC p-4 pb-1  rounded-lg leading-6">

              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت

              </p>
              <div class="flex justify-end  mt-2">
                20:21
              </div>
            </div>

            <img class="absolute message-r" src="../../../assets/images/plygonGrayRight.svg" alt="plygonGrayRight">
          </div>

          leftMessage -->




          <!-- <div class="flex flex-start relative  mt-4  text-white">
            <div class="greenC p-4 pb-1 rounded-lg leading-6">
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت

              </p>
              <div class="flex justify-start mt-2">
                20:45
              </div>
            </div>

            <img class="absolute message-l" src="../../../assets/images/plygonGrayleft.svg" alt="plygonGrayRight">
          </div>
        </div> -->







        </div>


        <form class="w-full" action="{{ route('cmsmessege.save') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="flex flex-col justify-between py-6 w-full">
            <span class=" text-base">نوشتن پیام:

            </span>
            <textarea name="Description" placeholder="توضیحات" class="border-box textarea w-full mt-4  focus:outline-none placeholder:text-sm"></textarea>
            <div class="flex justify-between items-center flex-wrap w-full mt-4 gap-x-2 leading-10">

              <div class="justify-center flex sm:justify-between gap-x-2 flex-wrap w-full gap-y-5">
                <div class="flex-1 w-300 flex">
                  <input id="uploadInput" name="file" alt="resume" type="file" class="hidden">
                  <input name="from" type="text" value="{{$username->id}}" class="hidden">
                  <input name="tiket_id" type="text" value="{{$tiket->id}}" class="hidden">

                  <button id="uploadButton" class="flex-1 btn font-YekanBakh-Regular border-dash w-52">بارگذاری فایل </button>
                </div>
                <button class="flex-1 w-300 btn bg-orange-200 px-7 text-white  text-sm text-center" type="submit">ارسال </button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>

    <form class="w-full" action="{{ route('job.request') }}" method="POST" enctype="multipart/form-data">

    <div class="flex flex-col justify-between py-6 w-full">
    <span class=" text-base">نوشتن پیام:
               
               </span>
          <textarea name="storysuccess" placeholder="توضیحات" class="border-box textarea w-full mt-4  focus:outline-none placeholder:text-sm"></textarea>
          <div class="flex justify-between items-center flex-wrap w-full mt-4 gap-x-2 leading-10">

<div class="justify-center flex sm:justify-between gap-x-2 flex-wrap w-full gap-y-5">
<div class="flex-1 w-300 flex">
<input required id="uploadInput" name="resume" alt="resume" type="file" class="hidden">
            <input name="date" type="text" id="timeNow" value="" class="hidden">

            <button id="uploadButton" class="flex-1 btn font-YekanBakh-Regular border-dash w-52">بارگذاری فایل </button>
</div>
         <button class="flex-1 w-300 btn bg-orange-200 px-7 text-white  text-sm text-center" type="submit">ارسال </button>
</div>
         </div>
        </div>
    </form>


</div> 
</div>
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

</body>

</html>