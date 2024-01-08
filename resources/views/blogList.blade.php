<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>لیست وبلگ</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body class="font-YekanBakh-Regular text-sm ">
    
    <!--header -->

    @include('header')

    <!--endheader-->
<div id="app">
    <div class="alo arr">
        <div class="gx ua wrapperTable">
            <div class="ari cfc ddh">
                <div class="bxr cbi">
                    <div class="bzy">
                        <h1 class="avy awg awp axv">لیست بلاگ</h1>
                    </div>
                    <div class="lh bwf bwv bzz">
                        <button type="button" class="lu adu ajr arf arv avl awa awg bah bbn bis boy boz bpb bpk">ایجاد بلاگ</button>
                    </div>
                </div>
                <div class="lm ma"><div class="gc gl adi buw cte">
                    <div class="lv ts arv avo cfc ddh">
                        <table class="ts acc ach">
                            <thead>
                                <tr  class="bgm">
                                    <th scope="col" class="arf asa avk awa awg axv">ردیف</th>
                                    <th scope="col" class="asa atn auc avk awa awg axv cgi">عکس</th>
                                    <th scope="col" class="arf asa avk awa awg axv">عنوان</th>
                                    <th scope="col" class="arf asa avk awa awg axv">نویسنده</th>
                                    <th scope="col" class="ab arf asa atm aue cgp ">
                                        <span class="t">عملیات</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="acc acg">
                            @foreach($blogvar as $blog)
                                <tr  class="bgm">
                                    <td class="adm asc atn auc awa awe axv cgi">{{$blog->id}}</td>
                                    <td class="adm arf asc awa axr"><img class="imgB" src="../assets/images/slider-1.jpg" alt=""></td>
                                    <td class="adm arf asc awa axr">{{$blog->title}}</td>
                                    <td class="adm arf asc awa axr">{{$blog->name}}</td>
                                    <td class="ab arf adm asc atm aue avm awa awe cgp">
                                        <a href="{{route('blog.edit',$blog->id) }}" class="ayh bli edit">ویرایش</a>
                                        <a href="#" class="ayh bli">حذف</a>
                                    </td>
                                </tr>
                            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>