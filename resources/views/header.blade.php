    <section class="px-4 static bg-green">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-between items-center py-6">
                <div class="lg:hidden leading-none z-10">
                    <div class="drawer">
                        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                        <div class="drawer-content">
                            <!-- Page content here -->
                            <label for="my-drawer" class="drawer-button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black swap-off fill-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </label>
                        </div>
                        <div class="drawer-side">
                            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                            <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content text-white">
                                <div class="drawer-content text-left">
                                    <label for="my-drawer" class="swap swap-rotate drawer-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </label>
                                </div>
                                <!-- Sidebar content here -->
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('main.company') }}">صفحه اصلی</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('allproducts') }}">محصولات</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('aboutus.us') }}">درباره ما</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('connect.us') }}">تماس با ما</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('jobs') }}">فرصت‌های شغلی</a></li>
                                <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('blog.all') }}"> وبلاگ</a></li>
                                <!-- <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('blog.list') }}"> cms</a></li> -->

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
                    <ul class="flex menu lg:menu-horizontal text-white">
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('main.company') }}">صفحه اصلی</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('allproducts') }}">محصولات</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('aboutus.us') }}">درباره ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('connect.us') }}">تماس با ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('jobs') }}">فرصت‌های شغلی</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('blog.all') }}">وبلاگ</a></li>
                        <!-- <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="{{ route('blog.list') }}"> cms</a></li> -->


                    </ul>
                </div>
                <div class="border bg-green text-white hover:text-white hover:bg-green duration-300 rounded-full">
                    <a href="login" class="flex py-2.5 px-7 rounded-full font-YekanBakh-Regular">ورود | ثبت نام</a>
                </div>

            </div>
        </div>
    </section>