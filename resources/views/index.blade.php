<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('node_modules/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/style.css')}}">
    <title>صفحه اصلی</title>
</head>
<body class="font-YekanBakh-Regular text-sm bg-[#f5f1e4]">

 

    
                <!-- heder - start -->
                @include('heder')

                <!-- heder - end  -->     
                
                
                <!-- body - start -->
                
                @yield('content')

                <!-- body - end  -->    
      
                <!-- footer - start -->
                @include('footer')

                <!-- footer - end  -->     

    <script src="{{asset('node_modules/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('src/js/main.js')}}"></script>
</body>
</html>