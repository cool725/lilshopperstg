@extends('layouts.app')
@section('title', 'Steps to Success')

@section('content')
    <div class="steps-to-success-container">
        <div class="w-4/5 max-w-5xl mx-auto my-14">
            <div
                class="p-7 lg:p-0 lg:pt-14 lg:pb-12 mb-20 flex flex-col lg:flex-row bg-rose-700 border border-black text-white">
                <div class="lg:w-1/2 mb-7 lg:mb-0 lg:mr-12">
                    <div class="lg:-ml-[20%]">
                        <div class="shadow-lg rounded-lg overflow-hidden border border-black">
                            <img decoding="async" width="600" height="327" src="/img/blurb-step1-sign-up.jpg"
                                alt="" title=""
                                srcset="/img/blurb-step1-sign-up.jpg 600w, /img/blurb-step1-sign-up-480x262.jpg 480w"
                                sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 600px, 100vw"
                                class="w-full">
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <h1 class="text-4xl lg:text-6xl text-center lg:text-left font-bold uppercase mb-2">
                        STEP ONE
                    </h1>
                    <div class="flex">
                        <a class="text-gray-700 hover:text-white text-base sm:text-lg font-bold uppercase leading-7 tracking-widest py-2 lg:py-4 px-4 lg:px-7 bg-white hover:bg-green-800 rounded-3xl shadow-lg transition-all duration-300 ease-in"
                            href="http://signup.holidayshop.org/signup/?cID=GNT" target="_blank">
                            Sign Up
                        </a>
                    </div>
                    <p class="font-bold text-base my-2">
                        SIGN UP ONLINE OR CONTACT US:
                    </p>
                    <ul class="list-disc ml-4 lg:ml-0">
                        <li class="text-base">
                            Select your dates, profit, and early sign up bonus
                        </li>
                        <li class="text-base">
                            Most schools run 3 to 5 days
                        </li>
                        <li class="text-base">
                            We offer 0%, 10% or 20% profit
                        </li>
                        <li class="text-base">
                            We are the only supplier who designs 100% of our gifts & packaging
                        </li>
                        <li class="text-base">
                            Risk Free – All merchandise is on consignment! Return unsold merchandise, only pay for what you
                            sell!
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="p-7 lg:p-0 lg:pt-14 lg:pb-12 lg:pl-7 mb-20 flex flex-col-reverse lg:flex-row bg-rose-700 border border-black text-white">
                <div class="flex-1">
                    <h1 class="text-4xl lg:text-6xl text-center lg:text-left font-bold uppercase mb-2">
                        STEP TWO
                    </h1>
                    <p class="font-bold text-base my-2">
                        CHAIRPERSON KIT ARRIVES:
                    </p>
                    <ul class="list-disc ml-4">
                        <li class="text-base">
                            Everything you need to promote your shoppe will arrive 4 weeks before your sale
                        </li>
                        <li class="text-base">
                            Full color parent letters, budget envelopes, and posters.
                        </li>
                        <li class="text-base">
                            Easy to follow “How To” manual
                        </li>
                        <li class="text-base">
                            User friendly chairperson portal
                        </li>
                    </ul>
                </div>
                <div class="lg:w-1/2 mb-7 lg:mb-0 lg:ml-12">
                    <div class="lg:-mr-[20%]">
                        <div class="shadow-lg rounded-lg overflow-hidden border border-black">
                            <img decoding="async" width="600" height="327" src="/img/blurb-step2-chairperson-kit.jpg"
                                alt="" title=""
                                srcset="/img/blurb-step2-chairperson-kit.jpg 600w, /img/blurb-step2-chairperson-kit-480x262.jpg 480w"
                                sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 600px, 100vw"
                                class="w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="p-7 lg:p-0 lg:pt-14 lg:pb-12 mb-20 flex flex-col lg:flex-row bg-rose-700 border border-black text-white">
                <div class="lg:w-1/2 mb-7 lg:mb-0 lg:mr-12">
                    <div class="lg:-ml-[20%]">
                        <div class="shadow-lg rounded-lg overflow-hidden border border-black">
                            <img decoding="async" width="600" height="327" src="/img/blurb-step3-gifts-arrives.jpg"
                                alt="" title=""
                                srcset="/img/blurb-step3-gifts-arrives.jpg 600w, /img/blurb-step3-gifts-arrives-480x262.jpg 480w"
                                sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 600px, 100vw"
                                class="w-full">
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <h1 class="text-4xl lg:text-6xl text-center lg:text-left font-bold uppercase mb-2">
                        STEP THREE
                    </h1>
                    <p class="font-bold text-base my-2">
                        GIFTS ARRIVE:
                    </p>
                    <ul class="list-disc ml-4 lg:ml-0">
                        <li class="text-base">
                            Pre-priced tent cards with pictures of each gift makes setup easy
                        </li>
                        <li class="text-base">
                            Cash Register App makes checkout fast and easy with pre-coded gifts
                        </li>
                        <li class="text-base">
                            Self-sealing gift bags and tablecloths
                        </li>
                        <li class="text-base">
                            Free UPS Next Day Air delivery on all reorders
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="p-7 lg:p-0 lg:pt-14 lg:pb-12 lg:pl-7 mb-20 flex flex-col-reverse lg:flex-row bg-rose-700 border border-black text-white">
                <div class="flex-1">
                    <h1 class="text-4xl lg:text-6xl text-center lg:text-left font-bold uppercase mb-2">
                        STEP FOUR
                    </h1>
                    <p class="font-bold text-base my-2">
                        SEND IT BACK:
                    </p>
                    <ul class="list-disc ml-4">
                        <li class="text-base">
                            No need to count inventory
                        </li>
                        <li class="text-base">
                            Keep track of your daily cash sales
                        </li>
                        <li class="text-base">
                            Self-service invoicing through your Chairperson Portal
                        </li>
                        <li class="text-base">
                            Prepaid UPS labels provided for easy returns
                        </li>
                    </ul>
                </div>
                <div class="lg:w-1/2 mb-7 lg:mb-0 lg:ml-12">
                    <div class="lg:-mr-[20%]">
                        <div class="shadow-lg rounded-lg overflow-hidden border border-black">
                            <img decoding="async" width="600" height="327" src="/img/blurb-step4-pack-it-send-it.jpg"
                                alt="" title=""
                                srcset="/img/blurb-step4-pack-it-send-it.jpg 600w, /img/blurb-step4-pack-it-send-it-480x262.jpg 480w"
                                sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 600px, 100vw"
                                class="w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white w-4/5 max-w-5xl mx-auto py-5 mb-10 text-center">
        <h3 class="mb-2 text-2xl text-neutral-700 font-bold">
            Did you know?
        </h3>
        <p class="mb-3 text-base">
            We are the only supplier who designs 100% of our items & packaging.
        </p>
        <p>
            Risk Free – All merchandise is on consignment! Return unsold merchandise, only pay for what you sell!
        </p>
    </div>
@endsection
