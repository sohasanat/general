<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>لیست کارجویان</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm ">

    <!--header -->

    @include('c-header')

    <!--endheader-->
    <div id="app">
        <div class="alo arr">
            <div class="gx ua wrapperTable">
                <div class="ari cfc ddh">
                    <div class="bxr cbi">
                        <div class="bzy">
                            <h1 class="avy awg awp axv">لیست کارجویان</h1>
                        </div>
                    </div>
                    <div class="lm ma">
                        <div class="gc gl adi buw cte">
                            <div class="lv ts arv avo cfc ddh">
                                <table class="ts acc ach">
                                    <thead>
                                        <tr class="bgm">
                                            <th scope="col" class="arf asa avk awa awg axv">ردیف</th>
                                            <th scope="col" class="asa atn auc avk awa awg axv cgi">نام</th>
                                            <th scope="col" class="asa atn auc avk awa awg axv cgi">پوزیشن</th>
                                            <th scope="col" class="asa atn auc avk awa awg axv cgi">شماره تلفن</th>
                                            <th scope="col" class="arf asa avk awa awg axv">ایمیل</th>
                                            <th scope="col" class="arf asa avk awa awg axv">تاریخ ارسال</th>
                                            <th scope="col" class="ab arf asa atm aue cgp ">
                                                <span class="t">رزومه</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="acc acg">


                                        @foreach($alljobsvar as $job)
                                        <tr class="bgm tablesRow">
                                            <td class="adm asc atn auc awa awe axv cgi">1</td>
                                            <td class="adm arf asc awa axr">{{$job->name}}</td>
                                            <td class="adm arf asc awa axr">{{$job->jobname}}</td>
                                            <td class="adm arf asc awa axr">{{$job->phone}}</td>
                                            <td class="adm arf asc awa axr">{{$job->email}}</td>
                                            <td id="dataTime" class="adm arf asc awa axr">{{$job->date}}</td>
                                            <td class="ab arf adm asc atm aue avm awa awe cgp">
                                                <a href="{{ route('resume.details', $job->resume) }}" class="ayh bli">مشاهده رزومه</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                        @if(session('message'))
                                        <div style="box-shadow: 0px 0px 22px 0px rgba(66, 68, 90, 1);" class="alert alert-success success-message fixed top-5 w-80 bg-white p-4 rounded-md flex gap-1 justify-between items-center slide-left">
                                            <p class="font-bold">{{ session('message') }}</p>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                                                <linearGradient id="I9GV0SozQFknxHSR6DCx5a" x1="9.858" x2="38.142" y1="9.858" y2="38.142" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#21ad64" />
                                                    <stop offset="1" stop-color="#088242" />
                                                </linearGradient>
                                                <path fill="url(#I9GV0SozQFknxHSR6DCx5a)" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z" />
                                                <path d="M32.172,16.172L22,26.344l-5.172-5.172c-0.781-0.781-2.047-0.781-2.828,0l-1.414,1.414	c-0.781,0.781-0.781,2.047,0,2.828l8,8c0.781,0.781,2.047,0.781,2.828,0l13-13c0.781-0.781,0.781-2.047,0-2.828L35,16.172	C34.219,15.391,32.953,15.391,32.172,16.172z" opacity=".05" />
                                                <path d="M20.939,33.061l-8-8c-0.586-0.586-0.586-1.536,0-2.121l1.414-1.414c0.586-0.586,1.536-0.586,2.121,0	L22,27.051l10.525-10.525c0.586-0.586,1.536-0.586,2.121,0l1.414,1.414c0.586,0.586,0.586,1.536,0,2.121l-13,13	C22.475,33.646,21.525,33.646,20.939,33.061z" opacity=".07" />
                                                <path fill="#fff" d="M21.293,32.707l-8-8c-0.391-0.391-0.391-1.024,0-1.414l1.414-1.414c0.391-0.391,1.024-0.391,1.414,0	L22,27.758l10.879-10.879c0.391-0.391,1.024-0.391,1.414,0l1.414,1.414c0.391,0.391,0.391,1.024,0,1.414l-13,13	C22.317,33.098,21.683,33.098,21.293,32.707z" />
                                            </svg>


                                        </div>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> -->
    <script>
        const element = document.querySelector("#dataTime")
        const time = new Date(element.innerHTML && "").toLocaleDateString("fa-ir")
        console.log(element.innerHTML)
        element.innerHTML = time
    </script>
    <script>
        const rows = document.getElementsByClassName("tablesRow")
        Array.from(rows).map((value, index) => {
            value.firstElementChild.textContent = index + 1
        })
    </script>
    <script>
        setTimeout(() => {
            document.querySelector(".alert").style.display = "none"
        }, 2000);
    </script>
</body>

</html>