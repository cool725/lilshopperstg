@extends('layouts.app')
@section('title', 'Merchandise Guarantee')

@section('content')
    <div class="my-14">
        <div class="w-4/5 max-w-[800px] mx-auto mb-7">
            <div class="mb-6">
                <img class="-z-10 relative mx-auto" data-aos="fade-down" data-aos-mirror="true" decoding="async" width="500"
                    height="333" src="/img/GNT-Supplies-23-500.png" alt="100% Satisfaction Guaranteed on a gold starburst"
                    srcset="/img/GNT-Supplies-23-500.png 500w, /img/GNT-Supplies-23-500-480x320.png 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
            </div>
            <div class="text-center">
                <h1 class="text-3xl sm:text-5xl font-bold text-neutral-700 uppercase text-shadow mb-5">
                    FREE SHIPPING & SUPPLIES
                </h1>
                <p class="text-xl font-medium text-zinc-500">All reorders are shipped UPS – Next Day Air.</p>
                <p class="text-xl font-medium text-zinc-500">We provide everything you need.</p>
                <p class="text-xl font-medium text-zinc-500">Only pay for the cost of the gifts you sell!</p>
            </div>
        </div>
    </div>
    <div class="w-4/5 max-w-5xl mx-auto py-7">
        <h2 class="text-center text-2xl lg:text-4xl text-neutral-800 font-bold my-10">
            The Lil’ Shopper’s Shoppe provides everything you need at no cost to your school!
        </h2>
        <h3 class="mb-2 text-lg lg:text-2xl text-neutral-800 font-bold">
            We make set up as easy as possible:
        </h3>
        <p class="mb-4 text-lg text-zinc-500">Every box that arrives at the School will have its own packing slip on top
            so there is no need to share a master inventory sheet or wondering what is in the box. A chairperson last
            year said that we carry multiple “Rings” and that pictures would be helpful in recognizing the different
            items. Each packing inventory list has images of each item next to the description and quantity to make
            things easier. We have also added images to the Pre-Priced tent cards which correspond to the pricing you
            select when you sign up. (0% profit, 10% profit, 20% profit or Blank if you would like to set your own
            prices) With images now on our tent cards even a volunteer who only has an hour to help out can help with
            restocking by simply matching the pictures with the items. Year after year we try to think of new ways to
            make your job easier!
        </p>
    </div>
    <div class="bg-gray-100">
        <div
            class="h-[100px] bg-[url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyODAgMTQwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik0wIDUxLjc2YzM2LjIxLTIuMjUgNzcuNTctMy41OCAxMjYuNDItMy41OCAzMjAgMCAzMjAgNTcgNjQwIDU3IDI3MS4xNSAwIDMxMi41OC00MC45MSA1MTMuNTgtNTMuNFYwSDB6IiBmaWxsLW9wYWNpdHk9Ii4zIi8+PHBhdGggZD0iTTAgMjQuMzFjNDMuNDYtNS42OSA5NC41Ni05LjI1IDE1OC40Mi05LjI1IDMyMCAwIDMyMCA4OS4yNCA2NDAgODkuMjQgMjU2LjEzIDAgMzA3LjI4LTU3LjE2IDQ4MS41OC04MFYwSDB6IiBmaWxsLW9wYWNpdHk9Ii41Ii8+PHBhdGggZD0iTTAgMHYzLjRDMjguMiAxLjYgNTkuNC41OSA5NC40Mi41OWMzMjAgMCAzMjAgODQuMyA2NDAgODQuMyAyODUgMCAzMTYuMTctNjYuODUgNTQ1LjU4LTgxLjQ5VjB6Ii8+PC9nPjwvc3ZnPg==)]">
        </div>
        <div class="w-4/5 max-w-5xl mx-auto py-7 pb-40 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-7">
            <div class="text-center sm:text-left">
                <div>
                    <img decoding="async" width="500" height="647" src="/img/lss-how-to-manual-cover-500.jpg"
                        alt="Gifts 'N Things How To Manual Cover" title=""
                        srcset="/img/lss-how-to-manual-cover-500.jpg 500w, /img/lss-how-to-manual-cover-500-480x621.jpg 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                </div>
                <div class="flex justify-center sm:justify-start">
                    <img decoding="async" width="40" height="40" src="/img/round-checkmark.png" alt="Checkmark Icon"
                        title="">
                </div>
                <h1 class="my-6 text-2xl text-neutral-700 uppercase font-bold">
                    HOW TO MANUAL
                </h1>
                <p class="text-base font-normal">
                    Everything you need to know from A-to-Z to run your shop successfully!
                </p>
            </div>
            <div class="text-center sm:text-left">
                <div>
                    <img decoding="async" width="500" height="650" src="/img/budget-envelope-615-500-650.png"
                        alt="Sample of the budget envelope received" title=""
                        srcset="/img/budget-envelope-615-500-650.png 500w, /img/budget-envelope-615-500-650-480x624.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                </div>
                <div class="flex justify-center sm:justify-start">
                    <img decoding="async" width="40" height="40" src="/img/round-checkmark.png" alt="Checkmark Icon"
                        title="">
                </div>
                <h1 class="my-6 text-2xl text-neutral-700 uppercase font-bold">
                    BUDGET <br /> ENVELOPES
                </h1>
                <p class="text-base font-normal">
                    Perfect to manage the funds used for family members.
                </p>
            </div>
            <div class="text-center sm:text-left">
                <div>
                    <img decoding="async" width="500" height="650" src="/img/self-sealing-bags-red-blue-green-500.png"
                        alt="Blue and white snowflake bags in three different sizes" title=""
                        srcset="/img/self-sealing-bags-red-blue-green-500.png 500w, /img/self-sealing-bags-red-blue-green-500-480x624.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                </div>
                <div class="flex justify-center sm:justify-start">
                    <img decoding="async" width="40" height="40" src="/img/round-checkmark.png" alt="Checkmark Icon"
                        title="">
                </div>
                <h1 class="my-6 text-2xl text-neutral-700 uppercase font-bold">
                    SELF-SEALING <br /> GIFT BAGS
                </h1>
                <p class="text-base font-normal">
                    Convenient self-sealing gift bags in 3 different colors and sizes.
                </p>
            </div>
            <div class="text-center sm:text-left">
                <div>
                    <img decoding="async" width="500" height="650" src="/img/tablecloth-with-table-500-650.png"
                        alt="Decorative tablecloth with the phrase - Where Children Discover the Joy of Giving!"
                        title=""
                        srcset="/img/tablecloth-with-table-500-650.png 500w, /img/tablecloth-with-table-500-650-480x624.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                </div>
                <div class="flex justify-center sm:justify-start">
                    <img decoding="async" width="40" height="40" src="/img/round-checkmark.png" alt="Checkmark Icon"
                        title="">
                </div>
                <h1 class="my-6 text-2xl text-neutral-700 uppercase font-bold">
                    DECORATIVE TABLECLOTHS
                </h1>
                <p class="text-base font-normal">
                    Blue & White tablecloths decorated in a winter theme.
                </p>
            </div>
            <div class="text-center sm:text-left">
                <div>
                    <img decoding="async" width="500" height="650" src="/img/tent-cards-500-650.png"
                        alt="Example of the tent cards received in the toolbox" title=""
                        srcset="/img/tent-cards-500-650.png 500w, /img/tent-cards-500-650-480x624.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                </div>
                <div class="flex justify-center sm:justify-start">
                    <img decoding="async" width="40" height="40" src="/img/round-checkmark.png"
                        alt="Checkmark Icon" title="">
                </div>
                <h1 class="my-6 text-2xl text-neutral-700 uppercase font-bold">
                    PRE-PRICED
                    TENT CARDS
                </h1>
                <p class="text-base font-normal">
                    Product tent cards used to put next to each displayed item during your sale.
                </p>
            </div>
            <div class="text-center sm:text-left">
                <div>
                    <img decoding="async" width="500" height="650"
                        src="/img/lss-parent-letter-bilingual-615-500-600.png"
                        alt="Example of a Bilingual Lil' Shopper's Shoppe letter" title=""
                        srcset="/img/lss-parent-letter-bilingual-615-500-600.png 500w, /img/lss-parent-letter-bilingual-615-500-600-480x624.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                </div>
                <div class="flex justify-center sm:justify-start">
                    <img decoding="async" width="40" height="40" src="/img/round-checkmark.png"
                        alt="Checkmark Icon" title="">
                </div>
                <h1 class="my-6 text-2xl text-neutral-700 uppercase font-bold">
                    PRE-PRICED TENT CARDS
                </h1>
                <p class="text-base font-normal">
                    Product tent cards used to put next to each displayed item during your sale.
                </p>
            </div>
            <div class="text-center sm:text-left">
                <div>
                    <img decoding="async" width="500" height="650" src="/img/lss-hallway-poster-615-500-600.png"
                        alt="Example of our Coming Soon event posters" title=""
                        srcset="/img/lss-hallway-poster-615-500-600.png 500w, /img/lss-hallway-poster-615-500-600-480x624.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                </div>
                <div class="flex justify-center sm:justify-start">
                    <img decoding="async" width="40" height="40" src="/img/round-checkmark.png"
                        alt="Checkmark Icon" title="">
                </div>
                <h1 class="my-6 text-2xl text-neutral-700 uppercase font-bold">
                    COMING SOON EVENT POSTERS
                </h1>
                <p class="text-base font-normal">
                    Promote the Holiday Shop anywhere with the Lil’ Shopper’s Shoppe Posters.
                </p>
            </div>
            <div class="text-center sm:text-left">
                <div>
                    <img decoding="async" width="500" height="650" src="/img/ups-return-label-615-500-650.png"
                        alt="Sample of a UPS return label" title=""
                        srcset="/img/ups-return-label-615-500-650.png 500w, /img/ups-return-label-615-500-650-480x624.png 480w"
                        sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw">
                </div>
                <div class="flex justify-center sm:justify-start">
                    <img decoding="async" width="40" height="40" src="/img/round-checkmark.png"
                        alt="Checkmark Icon" title="">
                </div>
                <h1 class="my-6 text-2xl text-neutral-700 uppercase font-bold">
                    UPS RETURN LABELS
                </h1>
                <p class="text-base font-normal">
                    Return all of your left-over merchandise back to UPS with the included RS labels at no cost to you!
                </p>
            </div>
        </div>
    </div>
@endsection
