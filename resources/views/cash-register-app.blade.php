@extends('layouts.app')
@section('title', 'Cash Register App')

@section('content')
    <div class="sm:mt-14 md:mt-36 pb-8 md:pb-24 pt-12 bg-[url(/img/mobile-app_85.png)] bg-[center_top] bg-cover bg-[#eab450]">
        <div class="py-6 w-4/5 mx-auto flex flex-col lg:flex-row">
            <div class="flex-1 mr-12 relative">
                <div class="relative top-[6vw] -left-[28%] mb-[5%] w-1/2">
                    <img decoding="async" width="571" height="1196" src="/img/LSS-iPhoneX-03.png" alt=""
                        title="LSS IPhoneX 03" srcset="/img/LSS-iPhoneX-03.png 571w, /img/LSS-iPhoneX-03-480x1005.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 571px, 100vw">
                </div>
                <div class="absolute z-10 -top-[28%] right-0 mb-[5%] w-3/5">
                    <img decoding="async" width="571" height="1196" src="/img/LSS-iPhoneX-01.png" alt=""
                        title="LSS IPhoneX 01" srcset="/img/LSS-iPhoneX-01.png 571w, /img/LSS-iPhoneX-01-480x1005.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 571px, 100vw">
                </div>
                <div class="absolute -top-[5%] left-[15%] w-5/12">
                    <img decoding="async" width="571" height="1196" src="/img/LSS-iPhoneX-02.png" alt=""
                        title="LSS IPhoneX 02" srcset="/img/LSS-iPhoneX-02.png 571w, /img/LSS-iPhoneX-02-480x1005.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 571px, 100vw">
                </div>
            </div>
            <div class="flex-1 pt-[8vw] text-white">
                <h1 class="text-shadow text-3xl sm:text-6xl lg:text-8xl leading-tight font-bold mb-2">
                    FREE
                </h1>
                <h2 class="text-shadow text-xl sm:text-3xl lg:text-4xl font-bold mb-2">
                    Holiday Shop Cash Register APP
                </h2>
                <p class="text-base sm:text-lg lg:text-xl leading-loose mb-10">
                    The easiest APP that helps you checkout 3x quicker!
                </p>
                <p class="text-base sm:text-lg lg:text-xl">
                    Physical cash registers are a thing of the past.
                    Use our newly re-designed Cash Register APP!
                    Visa/Mastercard is now available for both iPhone & Android devices.
                </p>
                <div class="flex justify-center mt-12">
                    <a class="rounded-lg text-base font-bold text-center bg-black py-4 px-8 shadow-lg shadow-neutral-600 min-w-[320px] transition-all duration-300 ease-linear leading-relaxed hover:tracking-widest"
                        href="https://apps.apple.com/us/app/holiday-shop-cash-register/id474619986">
                        Download for Apple
                        <span class="text-xl">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="flex justify-center mt-12">
                    <a class="rounded-lg text-base font-bold text-center bg-black py-4 px-8 shadow-lg shadow-neutral-600 min-w-[320px] transition-all duration-300 ease-linear leading-relaxed hover:tracking-widest"
                        href="https://play.google.com/store/apps/details?id=com.gntinc.holidayshoppe">
                        Download for Android
                        <span class="text-xl">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="my-14 flex flex-col lg:flex-row">
        <div class="flex-1">
            <div data-aos="fade">
                <img decoding="async" width="2000" height="833"
                    src="/img/iPhone_Tap-to-Pay-on-iPhone_Hands_Horizontal.jpg" alt="Iphone Tap To Pay"
                    title="Iphone Tap To Pay On Iphone Hands Horizontal"
                    srcset="/img/iPhone_Tap-to-Pay-on-iPhone_Hands_Horizontal.jpg 2000w, /img/iPhone_Tap-to-Pay-on-iPhone_Hands_Horizontal-1280x533.jpg 1280w, /img/iPhone_Tap-to-Pay-on-iPhone_Hands_Horizontal-980x408.jpg 980w, /img/iPhone_Tap-to-Pay-on-iPhone_Hands_Horizontal-480x200.jpg 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 2000px, 100vw">
            </div>
        </div>
        <div class="lg:w-2/5 p-10 text-center">
            <h2 class="text-3xl text-neutral-800 font-extrabold mb-5">
                ACCEPT CONTACTLESS PAYMENTS WITH ONLY AN IPHONE.
            </h2>
            <h3 class="text-xl text-neutral-800 font-bold mb-2">
                Tap to Pay on iPhone is now available in the Holiday Shop Cash Register app.
            </h3>
            <p class="text-base md:text-lg mb-5">
                To use Tap to Pay on iPhone, simply download the Holiday Shop Cash Register app, select Credit Card Payment
                and Tap to Pay to start accepting in-person contactless payments right on your iPhone. No extra terminals or
                hardware needed.
            </p>
            <p class="text-base md:text-lg mb-14">
                If you don’t have an iPhone or don’t want to use Tap to Pay, our app will accept credit cards without using
                this function.
            </p>
            <div>
                <a href="" class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                        class="fill-green-900 w-16 mr-5">
                        <g>
                            <path
                                d="M443.86,196.919L141.46,10.514C119.582-2.955,93.131-3.515,70.702,9.016c-22.429,12.529-35.819,35.35-35.819,61.041  v371.112c0,38.846,31.3,70.619,69.77,70.829c0.105,0,0.21,0.001,0.313,0.001c12.022-0.001,24.55-3.769,36.251-10.909 c9.413-5.743,12.388-18.029,6.645-27.441c-5.743-9.414-18.031-12.388-27.441-6.645c-5.473,3.338-10.818,5.065-15.553,5.064 c-14.515-0.079-30.056-12.513-30.056-30.898V70.058c0-11.021,5.744-20.808,15.364-26.183c9.621-5.375,20.966-5.135,30.339,0.636 l302.401,186.405c9.089,5.596,14.29,14.927,14.268,25.601c-0.022,10.673-5.261,19.983-14.4,25.56L204.147,415.945 c-9.404,5.758-12.36,18.049-6.602,27.452c5.757,9.404,18.048,12.36,27.452,6.602l218.611-133.852  c20.931-12.769,33.457-35.029,33.507-59.55C477.165,232.079,464.729,209.767,443.86,196.919z">
                            </path>
                        </g>
                    </svg>
                    <span class="text-xl font-bold">Watch Demo</span>
                </a>
            </div>
        </div>
    </div>
    <div class="mt-14 mb-24 max-w-7xl lg:w-4/5 mx-auto px-8 lg:px-0">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-14">
            <div
                class="p-8 rounded-xl shadow-2xl shadow-blue-100 transition-transform duration-300 hover:scale-105 cursor-pointer">
                <h3 class="text-xl font-bold text-neutral-800 mb-2">
                    Profit Percent
                </h3>
                <p class="text-base text-neutral-600">
                    The profit amount your school signed up for will automatically be loaded for your convenience.
                </p>
            </div>
            <div
                class="p-8 rounded-xl shadow-2xl shadow-blue-100 transition-transform duration-300 hover:scale-105 cursor-pointer">
                <h3 class="text-xl font-bold text-neutral-800 mb-2">
                    Price Codes
                </h3>
                <p class="text-base text-neutral-600">
                    Each product has a price code number. Just enter the code to populate the price.
                </p>
            </div>
            <div
                class="p-8 rounded-xl shadow-2xl shadow-blue-100 transition-transform duration-300 hover:scale-105 cursor-pointer">
                <h3 class="text-xl font-bold text-neutral-800 mb-2">
                    Remove Item
                </h3>
                <p class="text-base text-neutral-600">
                    Hit a code by accident? No problem! A new feature added to remove an item without any hassle.
                </p>
            </div>
            <div
                class="p-8 rounded-xl shadow-2xl shadow-blue-100 transition-transform duration-300 hover:scale-105 cursor-pointer">
                <h3 class="text-xl font-bold text-neutral-800 mb-2">
                    Chairperson Portal
                </h3>
                <p class="text-base text-neutral-600">
                    Easily access your Chairperson Portal directly from the Cash Register APP to access your information.
                </p>
            </div>
            <div
                class="p-8 rounded-xl shadow-2xl shadow-blue-100 transition-transform duration-300 hover:scale-105 cursor-pointer">
                <h3 class="text-xl font-bold text-neutral-800 mb-2">
                    Current Totals
                </h3>
                <p class="text-base text-neutral-600">
                    As each code is selected, the total amount will update in large print in the upper left corner of the
                    screen.
                </p>
            </div>
            <div
                class="p-8 rounded-xl shadow-2xl shadow-blue-100 transition-transform duration-300 hover:scale-105 cursor-pointer">
                <h3 class="text-xl font-bold text-neutral-800 mb-2">
                    Code Quantities
                </h3>
                <p class="text-base text-neutral-600">
                    As each code is selected, a red circle with a number will keep track of the quantity.
                </p>
            </div>
            <div
                class="p-8 rounded-xl shadow-2xl shadow-blue-100 transition-transform duration-300 hover:scale-105 cursor-pointer">
                <h3 class="text-xl font-bold text-neutral-800 mb-2">
                    Cash or Credit
                </h3>
                <p class="text-base text-neutral-600">
                    Now features the ability to do a Visa or Mastercard Credit Card sale using any internet connection.
                </p>
            </div>
            <div
                class="p-8 rounded-xl shadow-2xl shadow-blue-100 transition-transform duration-300 hover:scale-105 cursor-pointer">
                <h3 class="text-xl font-bold text-neutral-800 mb-2">
                    Tap to Pay
                </h3>
                <p class="text-base text-neutral-600">
                    Use our newest feature of tapping to pay with your favorite credit card. Only available on iPhone.
                </p>
            </div>
        </div>
    </div>
    <div class="relative my-24 max-w-7xl lg:w-4/5 mx-auto px-8 lg:px-0">
        <div class="p-8 flex flex-col sm:flex-row items-center sm:items-start shadow-lg shadow-neutral-300">
            <div
                class="absolute -top-7 left-1/2 -translate-x-7 w-14 h-14 border-4 border-neutral-600 rounded-full text-3xl flex justify-center items-center">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
            </div>

            <div class="w-[90px] h-[90px] mb-5 sm:mb-0 sm:mr-8 rounded-full border bg-cover bg-[url(/img/teacher-053122.png)]">
            </div>

            <div class="flex-1">
                <h2 class="text-xl md:text-3xl font-bold text-neutral-800 mb-2">
                    Q: Our school has poor cell phone service and wifi can we still use the Cash Register app?
                </h2>
                <p class="text-sm md:text-lg">
                    A: Not a problem, once the App is downloaded onto your Apple or Android phone or tablet you
                    can unlock it with your password. Once it is unlocked it does not need cell services or wifi to
                    operate! The only function that won’t be available is credit card processing.
                </p>
            </div>
        </div>
    </div>
    <div class="my-14 px-9 lg:px-0 max-w-7xl lg:w-4/5 mx-auto">
        <div class="mb-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-14">
            <div data-aos="flip-down">
                <img decoding="async" width="571" height="1196" src="/img/LSS-iPhoneX-01.png"
                    alt="LSS iPhone Cash Register APP" title=""
                    srcset="/img/LSS-iPhoneX-01.png 571w, /img/LSS-iPhoneX-01-480x1005.png 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 571px, 100vw">
            </div>
            <div data-aos="flip-down">
                <img decoding="async" width="571" height="1196" src="/img/LSS-iPhoneX-02.png"
                    alt="LSS iPhone Cash Register APP" title=""
                    srcset="/img/LSS-iPhoneX-02.png 571w, /img/LSS-iPhoneX-02-480x1005.png 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 571px, 100vw">
            </div>
            <div data-aos="flip-down">
                <img decoding="async" width="571" height="1196" src="/img/LSS-iPhoneX-03.png"
                    alt="LSS iPhone Cash Register APP" title=""
                    srcset="/img/LSS-iPhoneX-03.png 571w, /img/LSS-iPhoneX-03-480x1005.png 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 571px, 100vw">
            </div>
            <div data-aos="flip-down">
                <img decoding="async" width="571" height="1196" src="/img/LSS-iPhoneX-04.png"
                    alt="LSS iPhone Cash Register APP" title=""
                    srcset="/img/LSS-iPhoneX-04.png 571w, /img/LSS-iPhoneX-04-480x1005.png 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 571px, 100vw">
            </div>
        </div>
        <p class="text-center text-xl mb-4">
            The Cash Register App allows you to simply push the button on the app that corresponds to a Price Code found on
            each item. The App automatically adds up each item – making check out Fast & Easy!
        </p>
        <p class="text-center text-xl mb-4">
            Once you are logged in, the App will automatically be programmed with the profit % you set your holiday shop to
            when you signed up and can be changed if needed.
        </p>
        <p class="text-center text-xl mb-4">
            The App can also be used for Credit Card Processing on both Apple & Android devices!
        </p>
    </div>
    <div class="my-14 px-8 lg:px-0 max-w-7xl lg:w-4/5 mx-auto">
        <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-10 mb-10">
            <div class="flex-1 flex justify-center md:justify-end">
                <img decoding="async" loading="lazy" width="256" height="256" src="/img/LSS-AppleAppLogoHigh.png"
                    alt="Lil' Shopper's Shoppe App Icon" title=""
                    srcset="/img/LSS-AppleAppLogoHigh.png 256w, /img/LSS-AppleAppLogoHigh-150x150.png 150w"
                    sizes="(max-width: 256px) 100vw, 256px" />
            </div>
            <div class="flex-1">
                <div class="mb-8">
                    <img decoding="async" loading="lazy" width="1516" height="404" src="/img/applogos.png"
                        alt=""
                        srcset="/img/applogos.png 1516w, /img/applogos-1280x341.png 1280w, /img/applogos-980x261.png 980w, /img/applogos-480x128.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 1516px, 100vw"
                        class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-264424 et-animated">
                </div>
                <p class="text-lg lg:text-2xl text-center">
                    You can also search the APP Stores for “<strong>Holiday Shoppe Cash Register</strong>” and look for our
                    APP Icon.
                </p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-center">
            <a class="text-center text-white text-base sm:text-xl py-2 px-4 bg-green-900 hover:bg-green-700 border-2 border-white rounded-3xl shadow transition-all duration-300 ease-in"
                href="https://apps.apple.com/us/app/holiday-shop-cash-register/id474619986" target="_blank">
                Download for Apple Devices
            </a>
            <a class="text-center text-white text-base sm:text-xl py-2 px-4 bg-green-900 hover:bg-green-700 border-2 border-white rounded-3xl shadow transition-all duration-300 ease-in"
                href="https://play.google.com/store/apps/details?id=com.gntinc.holidayshoppe" target="_blank">
                Download for Android Devices
            </a>
        </div>
    </div>
    <div class="my-14 pt-14 px-8 lg:px-0 max-w-7xl lg:w-4/5 mx-auto border-t border-t-red-500 flex flex-col lg:flex-row">
        <div class="lg:mr-12">
            <img decoding="async" loading="lazy" width="300" height="362" src="/img/casio-pcr-t275.jpg"
                alt="" title="" srcset="/img/casio-pcr-t275.jpg 300w, /img/casio-pcr-t275-249x300.jpg 249w"
                sizes="(max-width: 300px) 100vw, 300px" class="mx-auto">
        </div>
        <div class="flex-1">
            <h1 class="text-3xl text-center font-bold text-neutral-800 mb-3">
                Why use the App and not a Cash Register?
            </h1>
            <p class="text-base mb-4">
                The “Old School” thought process was to use a cash register. The problem is with 30 students waiting in
                line, it’s like a retail store with not enough check-out lanes open. Some of our competitors paint a picture
                that the cash register makes it easy, however they send you a cash register that is not pre-programmed, not
                pre-programmed with the prices you charge, or a register that has so few pre-programmable keys that your
                cashier finds it confusing and frustrating. We still have cash registers available but very few schools use
                them anymore.
            </p>
            <p class="text-base">
                Most of our groups found that they could check out students faster with 2 or 3 volunteers, a cash box, and
                our “Price Code” sheet. A volunteer joked that we should create “an App for that” – and we listened! That
                was in 2011, now many versions later you can have our “Cash Register App” on as many devices as you like,
                accept credit cards, place your reorders, track gift certificates, and more. Most importantly, speeding up
                check out like never before!
            </p>
        </div>
    </div>
@endsection
