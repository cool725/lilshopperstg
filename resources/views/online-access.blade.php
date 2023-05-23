@extends('layouts.app')
@section('title', 'Online access to your Chairperson Portal')

@section('content')
    <div class="py-7 bg-gradient-to-b from-yellow-600 to-yellow-200">
        <div class="max-w-3xl mx-auto my-7 text-center text-white">
            <p class="text-3xl lg:text-5xl font-bold font-league-script mb-5">
                Website location <br /> for all your information!
            </p>
            <h1 class="text-shadow text-4xl lg:text-6xl font-extrabold mb-5">
                Lil’ Shopper’s Shoppe <br /> Chairperson Portal
            </h1>
            <p class="text-lg lg:text-2xl font-bold">
                USER FRIENDLY <br />ONLINE ACCESS
            </p>
        </div>
        <div class="flex flex-col lg:flex-row px-2">
            <div class="lg:w-1/5 text-center lg:text-right pt-10">
                <div class="flex flex-col items-center lg:items-end mb-4 sm:mb-12 lg:border-b border-b-black">
                    <div class="invert mb-6">
                        <img decoding="async" width="40" height="40" src="/img/06-1.png" alt="06 1"
                            title="">
                    </div>
                    <h1 class="text-2xl text-black font-extrabold">
                        SCHOOL INFORMATION
                    </h1>
                    <p class="sm:my-10 text-base sm:text-lg font-normal text-neutral-800">
                        Complete access and visibility of all the details about your holiday shop!
                    </p>
                </div>
                <div class="flex flex-col items-center lg:items-end mb-7">
                    <div class="invert mb-6">
                        <img decoding="async" width="40" height="40" src="/img/06-1.png" alt="06 1"
                            title="">
                    </div>
                    <h1 class="text-2xl text-black font-extrabold">
                        CHAIRPERSON CONTROL
                    </h1>
                    <p class="sm:my-10 text-base sm:text-lg font-normal text-neutral-800">
                        You have the ability to: Create Reorders, check tracking, complete your invoice, and more!
                    </p>
                </div>
            </div>
            <div class="flex-1 px-12">
                <div data-aos="zoom-in" data-aos-mirror="true">
                    <img decoding="async" width="2000" height="1649" src="/img/LSS-Chairperson-Portal-Monitor-2000.png"
                        alt="Lil' Shopper's Shoppe Chairperson Portal" title=""
                        srcset="/img/LSS-Chairperson-Portal-Monitor-2000.png 2000w, /img/LSS-Chairperson-Portal-Monitor-2000-1280x1055.png 1280w, /img/LSS-Chairperson-Portal-Monitor-2000-980x808.png 980w, /img/LSS-Chairperson-Portal-Monitor-2000-480x396.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 2000px, 100vw">
                </div>
            </div>
            <div class="lg:w-1/5 pt-4 sm:pt-10">
                <div class="flex flex-col items-center lg:items-start mb-4 sm:mb-12 lg:border-b border-b-black">
                    <div class="invert mb-6">
                        <img decoding="async" width="40" height="40" src="/img/06-1.png" alt="06 1"
                            title="">
                    </div>
                    <h1 class="text-2xl text-black font-extrabold text-center lg:text-left">
                        GIFT CERTIFICATES AND CREDIT CARDS
                    </h1>
                    <p class="sm:my-10 text-base sm:text-lg font-normal text-neutral-800">
                        Purchases automatically show in real time! All sales will credit on your invoice.
                    </p>
                </div>
                <div class="flex flex-col items-center lg:items-start mb-7">
                    <div class="invert mb-6">
                        <img decoding="async" width="40" height="40" src="/img/06-1.png" alt="06 1"
                            title="">
                    </div>
                    <h1 class="text-2xl text-black font-extrabold">
                        SUPPORT MATERIALS
                    </h1>
                    <p class="sm:my-10 text-base sm:text-lg font-normal text-neutral-800">
                        Social media marketing posts. If needed, all chairperson materials are downloadable.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
