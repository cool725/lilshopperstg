@extends('layouts.app')
@section('title', 'Merchandise Guarantee')

@section('content')
    <div class="relative py-14 bg-[url(/img/shutterstock_confetti_trans_1187801125.png)]">
        <div class="absolute inset-0 overflow-auto ">
            <div class="bg-[url(/img/123rf_xmas_126209840.jpg)]"></div>
        </div>
        <div class="w-4/5 max-w-[950px] mx-auto flex flex-col lg:flex-row rounded-lg shadow-lg relative z-10 bg-green-800 py-7">
            <div class="lg:w-[175px]" data-aos="zoom-in" data-aos-mirror="true">
                <div class="w-[275px] mx-auto lg:-translate-x-28">
                    <img decoding="async" width="300" height="450" src="/img/boyjumping_336092294_300w.png"
                        alt="Young boy jumping for joy" title=""
                        srcset="/img/boyjumping_336092294_300w.png 300w, /img/boyjumping_336092294_300w-200x300.png 200w"
                        sizes="(max-width: 300px) 100vw, 300px">
                </div>
            </div>
            <div class="flex-1 text-center text-white px-10">
                <h1 class="text-shadow text-2xl md:text-5xl font-bold text-yellow-300 mb-6">
                    EARLY SIGN-UP BONUS
                </h1>
                <h2 class="text-lg md:text-3xl font-bold mb-2">
                    Sign up by July 4th and receive: $300 Carnival Kit, Cash Register APP and choose a Bonus!
                </h2>
                <ul class="text-base md:text-lg font-semibold text-left list-disc my-7">
                    <li>
                        $200 Lil’ Shopper’s Shoppe Dollars
                    </li>
                    <li>
                        5% Additional Profit on your Shop
                    </li>
                </ul>
                <p class="text-lg font-semibold">
                    DON’T MISS OUT!
                </p>
                <div class="flex justify-center mt-12 mb-6">
                    <a class="group flex items-center text-gray-500 hover:text-white text-base sm:text-xl leading-7 py-1 px-4 bg-white hover:bg-[#E02B20] border-2 border-white rounded-3xl shadow transition-all duration-300 ease-in"
                        href="http://signup.holidayshop.org/signup/?cID=GNT" target="_blank">
                        Sign Up Now
                        <span
                            class="w-0 group-hover:w-auto opacity-0 -translate-x-full group-hover:opacity-100 group-hover:translate-x-0 text-base sm:text-[32px] transition-all duration-200 ml-2">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="my-14 px-9 lg:px-0 max-w-7xl lg:w-4/5 mx-auto flex flex-col">
        <div
            class="flex flex-col items-center p-5 mb-10 overflow-hidden rounded-lg bg-cover bg-center bg-[url(/img/123rf_xmas_126209840.jpg)]">
            <div data-aos="fade-down" class="mb-8 shadow-lg shadow-neutral-500">
                <img decoding="async" width="600" height="342" src="/img/200-lss-bucks.jpg" alt="$150 LSS Bucks"
                    srcset="/img/200-lss-bucks.jpg 600w, /img/200-lss-bucks-480x274.jpg 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 600px, 100vw">
            </div>
            <h4 class="mb-2 font-bold text-xl text-neutral-900">
                Free Shop Bucks
            </h4>
            <p class="text-base text-neutral-500">
                Receive $200 Lil’ Shoppers Shoppe Dollars to hand out to children in need.
            </p>
        </div>
        <div
            class="flex flex-col items-center p-5 mb-10 overflow-hidden rounded-lg bg-cover bg-center bg-[url(/img/123rf_xmas_126209840.jpg)]">
            <div data-aos="fade-down" class="mb-8 shadow-lg shadow-neutral-500">
                <img decoding="async" width="600" height="342" src="/img/profit-lss-bag.jpg"
                    alt="Lil' Shoppers Shoppe bag with increasing money icon"
                    srcset="/img/profit-lss-bag.jpg 600w, /img/profit-lss-bag-480x274.jpg 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 600px, 100vw">
            </div>
            <h4 class="mb-2 font-bold text-xl text-neutral-900">
                Additional Profit
            </h4>
            <p class="text-base text-neutral-500">
                Get 5% Additional profit on your holiday shop.
            </p>
        </div>
        <div
            class="flex flex-col items-center p-5 mb-10 overflow-hidden rounded-lg bg-cover bg-center bg-[url(/img/123rf_xmas_126209840.jpg)]">
            <div data-aos="fade-down" class="mb-8 shadow-lg shadow-neutral-500">
                <img decoding="async" width="600" height="342" src="/img/carnival-kit-img.jpg"
                    alt="Example of toys encluded in the Carnival Kit"
                    srcset="/img/carnival-kit-img.jpg 600w, /img/carnival-kit-img-480x274.jpg 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 600px, 100vw">
            </div>
            <h4 class="mb-2 font-bold text-xl text-neutral-900">
                Carnival Kit
            </h4>
            <p class="text-base text-neutral-500">
                Gifts for your events, treasure chest, or a child in need – worth approx. $300.
            </p>
        </div>
    </div>
@endsection
