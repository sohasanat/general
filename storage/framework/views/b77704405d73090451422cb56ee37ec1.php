<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('../node_modules/swiper/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('build/style.css')); ?>">
    <title>درباره ما</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>

<body class="font-YekanBakh-Regular text-sm bg-[#f5f1e4]">

    <!--header -->

    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--endheader-->


    <section class="px-4 mb-24">
        <div class="container mx-auto max-w-screen-xl">
            <nav class="flex mb-5 border-y border-orange-200 py-3" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center">
                            خانه
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>

                            <a href="#" class="mr-1 text-sm font-medium">درباره ما</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="flex justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">دربـــــاره مـــــا</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">about</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-24">
                <div class="max-w-xl mx-auto p-8">
                    <div class="flow-root">
                        <ul class="-mb-8">


                            <?php $__currentLoopData = $allabouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-5 right-5 -ml-px h-full w-0.5 bg-stone-200" aria-hidden="true"></span>
                                    <div class="relative flex items-start space-x-3">
                                        <div>
                                            <div class="relative px-1">
                                                <div class="h-8 w-8 bg-stone-800 rounded-full ring-8 ring-white flex items-center justify-center">
                                                    <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="min-w-0 flex-1 py-0">
                                            <div class="text-md text-gray-500">
                                                <div>
                                                    <span class="font-medium text-gray-900 mr-2 font-YekanBakh-SemiBold"><?php echo e($about->title); ?></span>

                                                    <span class="my-0.5 relative inline-flex items-center bg-white rounded-full border border-gray-300 px-3 py-2 text-xs">

                                                        <div class="text-gray-900"><?php echo e($about->Date); ?></div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mt-2 text-gray-700">
                                                <p class="leading-8">
                                                    <?php echo e($about->Description); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                        </ul>
                    </div>
                </div>
                <div class="flex justify-center items-center py-3 sm:max-w-sm sm:mx-auto ">

                    <div class="relative  sm:rounded-3xl">

                        <div class="max-w-md mx-auto">
                            <img src="../assets/images/aboutus.svg" alt="">
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="px-4 py-14 bg-gradient-to-t from-orange-100">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">اعضــــــــــای تیم</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">team</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div>
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <?php $__currentLoopData = $allmembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="bg-white border-1p displayflex p-6 rounded-3xl gap-2 transform hover:-translate-y-1 duration-300 transition-transform cursor-pointer">
                    <div class=" mb-4 w-32">
                        <img class="rounded-2xl" src="<?php echo e($members->photo); ?>" alt="SVG Image">
                    </div>

                    <div class="flex items-center">
                        <h2 class="font-YekanBakh-ExtraBold text-center text-base mr-1 "><?php echo e($members->name); ?></h2></a>
                    </div>
                    <div>
                        <p class="text-center"><?php echo e($members->title); ?></p>
                    </div>
                    <!-- <div class="flex gap-2 items-center justify-center mt-2">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16ZM16.5734 11.8119C15.0171 12.4592 11.9068 13.7989 7.24252 15.8311C6.48511 16.1323 6.08834 16.427 6.05222 16.7151C5.99118 17.202 6.60095 17.3937 7.43129 17.6548C7.54424 17.6903 7.66127 17.7271 7.78125 17.7661C8.59818 18.0317 9.6971 18.3424 10.2684 18.3547C10.7866 18.3659 11.365 18.1523 12.0035 17.7138C16.3615 14.772 18.6112 13.2851 18.7524 13.253C18.8521 13.2304 18.9901 13.202 19.0837 13.2851C19.1772 13.3683 19.168 13.5258 19.1581 13.568C19.0977 13.8255 16.7042 16.0508 15.4655 17.2024C15.0793 17.5614 14.8054 17.816 14.7494 17.8742C14.624 18.0045 14.4962 18.1277 14.3733 18.2461C13.6144 18.9778 13.0452 19.5264 14.4048 20.4224C15.0582 20.8529 15.581 21.209 16.1026 21.5642C16.6722 21.9521 17.2404 22.339 17.9755 22.8209C18.1628 22.9437 18.3416 23.0712 18.5159 23.1954C19.1788 23.668 19.7743 24.0926 20.5101 24.0248C20.9377 23.9855 21.3793 23.5835 21.6036 22.3845C22.1336 19.5509 23.1755 13.4113 23.4163 10.8813C23.4374 10.6596 23.4108 10.376 23.3895 10.2514C23.3682 10.1269 23.3237 9.94948 23.1618 9.81813C22.9701 9.66258 22.6742 9.62978 22.5418 9.63211C21.94 9.64271 21.0167 9.96376 16.5734 11.8119Z" fill="#5ea19f" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 38 38" fill="none">
                                <path d="M25.6342 3.16675H12.3658C6.60249 3.16675 3.16666 6.60258 3.16666 12.3659V25.6184C3.16666 31.3976 6.60249 34.8334 12.3658 34.8334H25.6183C31.3817 34.8334 34.8175 31.3976 34.8175 25.6342V12.3659C34.8333 6.60258 31.3975 3.16675 25.6342 3.16675ZM19 25.1434C15.6117 25.1434 12.8567 22.3884 12.8567 19.0001C12.8567 15.6117 15.6117 12.8567 19 12.8567C22.3883 12.8567 25.1433 15.6117 25.1433 19.0001C25.1433 22.3884 22.3883 25.1434 19 25.1434ZM28.3733 10.8934C28.2942 11.0834 28.1833 11.2576 28.0408 11.4159C27.8825 11.5584 27.7083 11.6692 27.5183 11.7484C27.3283 11.8276 27.1225 11.8751 26.9167 11.8751C26.4892 11.8751 26.0933 11.7167 25.7925 11.4159C25.65 11.2576 25.5392 11.0834 25.46 10.8934C25.3808 10.7034 25.3333 10.4976 25.3333 10.2917C25.3333 10.0859 25.3808 9.88008 25.46 9.69008C25.5392 9.48425 25.65 9.32591 25.7925 9.16758C26.1567 8.80341 26.7108 8.62925 27.2175 8.74008C27.3283 8.75591 27.4233 8.78758 27.5183 8.83508C27.6133 8.86675 27.7083 8.91425 27.8033 8.97758C27.8825 9.02508 27.9617 9.10425 28.0408 9.16758C28.1833 9.32591 28.2942 9.48425 28.3733 9.69008C28.4525 9.88008 28.5 10.0859 28.5 10.2917C28.5 10.4976 28.4525 10.7034 28.3733 10.8934Z" fill="#5ea19f" />
                            </svg>
                        </a>
                    </div> -->
                </div>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>














            </div>
        </div>
    </section>

    <!--footer -->

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--endfooter -->



    <script src="<?php echo e(asset('node_modules/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('src/js/main.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\danesh\laravelprojectone\resources\views/about-us.blade.php ENDPATH**/ ?>