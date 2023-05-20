@extends('layouts.app')
@section('title', 'Price Codes')

@section('content')
    <div class="mt-12 px-5 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-neutral-700 uppercase text-shadow">GIFTS FOR 2023</h1>
        <p class="text-2xl md:text-3xl font-bold text-zinc-500">85% OF OUR GIFTS COST $5.00 OR LESS!</p>
    </div>
    <div class="mt-12 border-b-[35px] border-green-900">
        <div class="md:w-4/5 max-w-5xl mx-auto px-5 pt-6 flex flex-col lg:flex-row justify-between">
            <div class="lg:w-1/3 flex items-end mb-4 md:mb-0 border-b-[16px] border-green-900 md:border-b-0">
                <div class="w-1/3 lg:w-full mx-auto">
                    <img decoding="async" width="500" height="605" src="/img/smilingchild.png"
                        alt="Smiling Child holding a gift" title="Smilingchild"
                        srcset="/img/smilingchild.png 500w, /img/smilingchild-480x581.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw"
                        class="lg:translate-y-[35px]">
                </div>
            </div>
            <div class="flex-1 px-14 text-black">
                <h2 class="text-center md:text-left text-3xl md:text-5xl font-bold uppercase mb-2">SANTA-APPROVED SCHOOL
                    HOLIDAY SHOP GIFTS</h2>
                <p class="text-base font-normal mb-4">
                    Are you looking for school holiday shop items that are high quality and priced within a child’s budget?
                    85% of our Santa shop gift are $5 or less. Lil’ Shopper’s Shoppe makes it easy! We supply your in-school
                    holiday shop with a large inventory of Santa shop merchandise and supplies. Your students will love
                    browsing our Santa-approved presents. <strong>For this season’s school Christmas shop ideas please check
                        out our festive gifts below.</strong>
                </p>
            </div>
        </div>
    </div>
    <div class="max-w-1400 mx-auto my-12 px-5">
        <div class="mb-28">
            <div class="border-b-2 border-b-gray-600 pb-3 mb-7">
                <h1 class="text-2xl md:text-4xl font-extrabold">MOM, GRANDMA & AUNT GIFTS</h1>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-14">
                @foreach ($monGifts as $gift)
                    <div class="flex flex-col">
                        <div class="mb-2 bg-white rounded-xl shadow-xl">
                            <a href="/img/gifts/{{ $gift['id'] }}.jpg" title="#1 MOM PVC KEYCHAIN">
                                <img decoding="async" width="500" height="500" src="/img/gifts/{{ $gift['id'] }}.jpg"
                                    alt="#1 MOM PVC KEYCHAIN" title="#1 MOM PVC KEYCHAIN"
                                    srcset="/img/gifts/{{ $gift['id'] }}.jpg 500w, /img/gifts/{{ $gift['id'] }}-480x480.jpg 480w"
                                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                            </a>
                        </div>
                        <div class="text-neutral-800 text-center mb-4">
                            <h4 class="text-xl font-bold">{{ $gift['type'] }}</h4>
                            <h3 class="text-2xl font-extrabold">{{ $gift['title'] }}</h3>
                        </div>
                        <div class="mt-auto">
                            <table class="w-full border-0 text-center">
                                <tbody>
                                    <tr class="border-0">
                                        <td class="border-b-2 border-b-black text-center">0%</td>
                                        <td class="border-b-2 border-b-black text-center">10%</td>
                                        <td class="border-b-2 border-b-black text-center">20%</td>
                                    </tr>
                                    <tr>
                                        @foreach ($gift['profits'] as $profit)
                                            <td>${{ $profit }}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-28">
            <div class="border-b-2 border-b-gray-600 pb-3 mb-7">
                <h1 class="text-2xl md:text-4xl font-extrabold">DAD, GRANDPA, UNCLE & TEACHER GIFTS</h1>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-14">
                @foreach ($dadGifts as $gift)
                    <div class="flex flex-col">
                        <div class="mb-2 bg-white rounded-xl shadow-xl">
                            <a href="/img/gifts/{{ $gift['id'] }}.jpg" title="#1 MOM PVC KEYCHAIN">
                                <img decoding="async" width="500" height="500" src="/img/gifts/{{ $gift['id'] }}.jpg"
                                    alt="#1 MOM PVC KEYCHAIN" title="#1 MOM PVC KEYCHAIN"
                                    srcset="/img/gifts/{{ $gift['id'] }}.jpg 500w, /img/gifts/{{ $gift['id'] }}-480x480.jpg 480w"
                                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                            </a>
                        </div>
                        <div class="text-neutral-800 text-center mb-4">
                            <h4 class="text-xl font-bold">{{ $gift['type'] }}</h4>
                            <h3 class="text-2xl font-extrabold">{{ $gift['title'] }}</h3>
                        </div>
                        <div class="mt-auto">
                            <table class="w-full border-0 text-center">
                                <tbody>
                                    <tr class="border-0">
                                        <td class="border-b-2 border-b-black text-center">0%</td>
                                        <td class="border-b-2 border-b-black text-center">10%</td>
                                        <td class="border-b-2 border-b-black text-center">20%</td>
                                    </tr>
                                    <tr>
                                        @foreach ($gift['profits'] as $profit)
                                            <td>${{ $profit }}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-28">
            <div class="border-b-2 border-b-gray-600 pb-3 mb-7">
                <h1 class="text-2xl md:text-4xl font-extrabold">CHILD GIFTS</h1>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-14">
                @foreach ($childGifts as $gift)
                    <div class="flex flex-col">
                        <div class="mb-2 bg-white rounded-xl shadow-xl">
                            <a href="/img/gifts/{{ $gift['id'] }}.jpg" title="#1 MOM PVC KEYCHAIN">
                                <img decoding="async" width="500" height="500"
                                    src="/img/gifts/{{ $gift['id'] }}.jpg" alt="#1 MOM PVC KEYCHAIN"
                                    title="#1 MOM PVC KEYCHAIN"
                                    srcset="/img/gifts/{{ $gift['id'] }}.jpg 500w, /img/gifts/{{ $gift['id'] }}-480x480.jpg 480w"
                                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                            </a>
                        </div>
                        <div class="text-neutral-800 text-center mb-4">
                            <h4 class="text-xl font-bold">{{ $gift['type'] }}</h4>
                            <h3 class="text-2xl font-extrabold">{{ $gift['title'] }}</h3>
                        </div>
                        <div class="mt-auto">
                            <table class="w-full border-0 text-center">
                                <tbody>
                                    <tr class="border-0">
                                        <td class="border-b-2 border-b-black text-center">0%</td>
                                        <td class="border-b-2 border-b-black text-center">10%</td>
                                        <td class="border-b-2 border-b-black text-center">20%</td>
                                    </tr>
                                    <tr>
                                        @foreach ($gift['profits'] as $profit)
                                            <td>${{ $profit }}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
