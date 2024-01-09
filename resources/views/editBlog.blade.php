</html>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('../node_modules/swiper/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('build/style.css')}}">
  <title>ایجاد بلاگ</title>
  <link rel="icon" type="image/x-icon" href="{{asset('../assets/images/favicon.ico')}}">

</head>

<body class="font-YekanBakh-Regular text-sm">


  <!--header -->

  @include('header')

  <!--endheader-->


  <section class="px-4 mb-24 min-height-50">
    <div class="container mx-auto max-w-screen-xl">

      <div class="lightGreen2 mt-4 p-6 rounded-lg ">
        <form action="{{ route('blog.editsave',$blogidvar->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="text-base text-gray-700 sm:text-lg leading-8 flex flex-col gap-6">
            <input required type="text" name="name" placeholder="نویسنده" value="{{$blogidvar->name}}" class="input w-full focus:outline-none placeholder:text-sm" />

            <input required type="text" name="title" placeholder=" عنوان بلاگ" value="{{$blogidvar->title}}" class="input w-full  focus:outline-none placeholder:text-sm" />
            <img src="{{$blogidvar->photo}}" class="imgT" />
            <input type="file" name="photo" value="{{$blogidvar->photo}}" accept="image/*, .pdf" required>
            <textarea name="Description" required placeholder="متن بلاگ" class="textarea w-full   focus:outline-none placeholder:text-sm">
            {{$blogidvar->Description}}
            </textarea>
          </div>
          <button class="btn mt-5 bg-green px-7 text-white  text-sm text-center" type="submit">ثبت تغییرات</button>
        </form>
      </div>

    </div>
  </section>





  <script src="{{asset('../node_modules/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('../src/js/main.js')}}"></script>

</body>

</html>