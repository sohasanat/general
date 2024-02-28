    <section class="px-4 static lightGreen2 text-gray">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-between items-center py-6">
                <div class="lg:hidden leading-none z-10">
                    <div class="drawer">
                        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                        <div class="drawer-content">
                            <!-- Page content here -->
                            <label for="my-drawer" class="drawer-button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-blackswap-off fill-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </label>
                        </div>
                        <div class="drawer-side">
                            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                            <ul class="menu p-4 w-80 min-h-full lightGreen2 text-base-content text-gray font-YekanBakh-SemiBold">
                                <div class="drawer-content text-left">
                                    <label for="my-drawer" class="swap swap-rotate drawer-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </label>
                                </div>
                                <!-- Sidebar content here -->
                                @php
                                $role = 'Customer'; // Replace 'Customer' with the actual role value you want to check
                                @endphp

                                @if(session('role') == $role)

                                <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('main.prof') }}">صفحه اصلی</a></li>
                                @else
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('main') }}">صفحه اصلی</a></li>
                                @endif

                                <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('allproducts') }}">محصولات</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('aboutus.us') }}">درباره ما</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('connect.us') }}">تماس با ما</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('jobs') }}">فرصت‌های شغلی</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('blogall.main') }}">وبلاگ</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-8">
                    <div class="w-22">
                        <a href="/" class="font-YekanBakh-ExtraBlack text-3xl color-green">
                            <img class="object-cover w-full" src="../assets/images/logomain.svg" alt="">
                        </a>
                    </div>

                </div>
                <div class="hidden lg:block">
                    <ul class="flex menu lg:menu-horizontal text-gray font-YekanBakh-SemiBold ">

                        @php
                        $role = 'Customer'; // Replace 'Customer' with the actual role value you want to check
                        @endphp

                        @if(session('role') == $role)

                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('main.prof') }}">صفحه اصلی</a></li>
                        @else
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('main') }}">صفحه اصلی</a></li>
                        @endif

                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('allproducts') }}">محصولات</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('aboutus.us') }}">درباره ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('connect.us') }}">تماس با ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('jobs') }}">فرصت‌های شغلی</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('blogall.main') }}">وبلاگ</a></li>




                    </ul>
                </div>
                <li>@if(isset($username->name))
                    @else
                    <div class="border bg-green text-white hover:text-white hover:bg-green duration-300 rounded-full hidden sm:block">
                        <a href="{{ route('login.view') }}" class="flex py-2.5 px-7 rounded-full font-YekanBakh-Regular">ورود | ثبت نام</a>
                    </div>
                    @endif
                    <ul class=" menu lg:menu-horizontal text-gray font-YekanBakh-SemiBold hidden sm:flex">
                        <li>@if(isset($username->name))

                            <details>
                                <summary><a>{{$username->name}}</a></summary>
                                <ul class="p-2 z-10 w-48 bg-[#f5f1e4] m-0 top-left">
                                    <!-- <li><a href="/blog-2.html">مشاهده حساب کاربری</a></li> -->
                                    <li><a href="{{ route('tiket.view') }}">تیکت ها</a></li>
                                    <li><a href="{{ route('user.logout') }}">خروج از حساب</a></li>
                                </ul>
                            </details>
                            <!-- <summary><a>نام کاربری طرف {{$username->name}}</a></summary> -->
                            @endif
                        </li>
                    </ul>

            </div>
        </div>
    </section>