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
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('main') }}">صفحه اصلی</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('allproducts') }}">محصولات</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('blogall.main') }}"> وبلاگ</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('aboutus.us') }}">درباره ما</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('connect.us') }}">تماس با ما</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('jobs') }}">فرصت‌های شغلی</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('login.view') }}"> مشاهده حساب کاربری</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('login.view') }}"> تیکت ها</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('login.view') }}"> خروج از حساب</a></li>
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
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('main') }}">صفحه اصلی</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('allproducts') }}">محصولات</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('aboutus.us') }}">درباره ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('connect.us') }}">تماس با ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('jobs') }}">فرصت‌های شغلی</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 border-black duration-300" href="{{ route('blogall.main') }}">وبلاگ</a></li>




                    </ul>
                </div>
                <div class="border bg-green text-white hover:text-white hover:bg-green duration-300 rounded-full hidden sm:block">
                    <a href="{{ route('login.view') }}" class="flex py-2.5 px-7 rounded-full font-YekanBakh-Regular">ورود | ثبت نام</a>
                </div>
                <ul class=" menu lg:menu-horizontal text-gray font-YekanBakh-SemiBold hidden sm:flex">
                    <li><details>
                            <summary><a href="#">نام کاربری طرف</a></summary>
                            <ul class="p-2 z-10 w-48 bg-[#f5f1e4] m-0 top-left">
                              <li><a href="/blog-2.html">مشاهده حساب کاربری</a></li>
                              <li><a href="/ticketList">تیکت ها</a></li>
                              <li><a>خروج از حساب</a></li>
                            </ul>
                        </details></li>
                        </ul>

            </div>
        </div>
    </section>