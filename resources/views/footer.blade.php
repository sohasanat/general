   <footer class="p-10 bg-stone-800 text-white">
       <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full bg-green text-white hover:text-white hover:bg-green duration-300">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
           </svg>

           <span class="sr-only">Go to top</span>
       </button>
       <div class="container mx-auto max-w-screen-xl">
           <div class="grid grid-cols-12 gap-4 leading-8">
               <div class="col-span-12 lg:col-span-5">
                   <div class="mb-4">
                       <div class="w-22">
                           <a href="/" class="font-YekanBakh-ExtraBlack text-3xl color-green">
                               <img class="object-cover w-full" src="../assets/images/logomain.svg" alt="">
                           </a>
                       </div>
                   </div>
                   <p class="md:textjustify">هدف اصلی مجموعه شرکت های سهاصنعت، تحت لیسانس و شریک توسعه گروه همکاران سیستم اشاعه ی هوشمندی و هوش محوری و در نتیجه افزایش بهره وری در صنایعِ مختلف علی الخصوص صنایعِ بالادستی است.</p>
               </div>
               <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:col-span-4 md:p-right-7 text-right">
                   <h3 class="font-IRANSansWeb_Bold text-white mb-4 text-base">دسترسی سریع</h3>
                   <ul>
                       <li><a href="index">صفحه اصلی</a></li>
                       <li><a href="/about-us">درباره ما</a></li>
                       <li><a href="{{ route('connect.us') }}">تماس با ما</a></li>
                       <li><a href="{{ route('allproducts') }}">محصولات</a></li>
                   </ul>
               </div>
               <div class="col-span-12 md:col-span-4 lg:col-span-3">

                   <div class="flex items-center">
                       <img src="../assets/images/enamad_logo.png" alt="">
                       <img src="../assets/images/samandehi_logo.png" alt="">
                   </div>
               </div>
           </div>
       </div>
   </footer>

   <footer class="footer footer-center p-4 bg-stone-700 text-white">
       <div>
           <p>تمامی حقوق مادی و معنوی این سایت متعلق به سهاصنعت می باشد و هرگونه کپی برداری غیرقانونی محسوب خواهد شد</p>
       </div>
   </footer>