@extends('layouts.app')
@section('title', 'Price Codes')

@section('content')
    <div class="mt-12">
        <div class="w-4/5 max-w-5xl mx-auto py-6">
            <div>
                <img decoding="async" width="2000" height="1000" src="/img/ornaments_2000_code_1862224615.jpg" alt=""
                    title=""
                    srcset="/img/ornaments_2000_code_1862224615.jpg 2000w, /img/ornaments_2000_code_1862224615-1280x640.jpg 1280w, /img/ornaments_2000_code_1862224615-980x490.jpg 980w, /img/ornaments_2000_code_1862224615-480x240.jpg 480w"
                    sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 2000px, 100vw" >
            </div>
            <div class="text-center">
                <h1 class="text-3xl sm:text-5xl font-bold text-neutral-700 uppercase text-shadow">Pick Your Profit &amp; Pre-Coded Gifts
                </h1>
                <p class="text-xl font-medium text-zinc-500">Checkout Made Easy!</p>
            </div>
        </div>
    </div>
    <div class="mt-12">
        <div class="w-4/5 max-w-5xl mx-auto py-7">
            <div class="et_pb_text_inner">
                <p class="mb-4 text-base text-zinc-500">We are excited to offer your school a simple profit &amp; price
                    coding system that will make check out
                    FAST &amp; EASY!</p>
                <h2 class="text-3xl font-bold text-neutral-700 mb-2">Profit</h2>
                <p class="mb-4 text-base text-zinc-500">Select what profit your school would like to make on your sale. We
                    offer 0%, 10% and 20% profit. Schools
                    that run the sale as a service project tend to select 0% or 10% profit to keep the prices as low as
                    possible for the children. Schools that are looking to run the sale as a fundraiser select 20%
                    profit….the choice is yours. Based on which profit you select we will send in pre-priced tent cards to
                    put next to each item displaying the price based on the profit you selected and have our cash register
                    app programed to match. This makes setting up and running your sale super easy!</p>
                <h2 class="text-3xl font-bold text-neutral-700 mb-2">Pre-Coded Gifts</h2>
                <p class="mb-4 text-base text-zinc-500">No more memorizing the prices of over 100 items!</p>
                <p class="mb-4 text-base text-zinc-500">Over 90% of our merchandise will arrive coded with a number printed
                    on it. The number or code will
                    correspond to a specific retail price point. You will now only have to refer to the number on each item
                    to find out the price. The coding will work with whatever profit (0%, 10% &amp; 20%) you select and be
                    pre programed to match our cash register app. The important thing is, it will make it faster and simpler
                    for anyone to work checkout!</p>
                <p class="mb-4 text-base text-zinc-500">No more looking up the price of each different item over &amp; over
                    again!</p>

                <div class="my-11">
                    <table class="w-full text-center text-xl border border-gray-200">
                        <thead>
                            <tr>
                                <th class="py-2 px-6 bg-red-700" style="width: 15.3684%;" scope="col">
                                    <strong class="font-bold text-white uppercase">
                                        code
                                    </strong>
                                </th>
                                <th class="py-2 px-6 bg-red-700" style="width: 27.9356%;" scope="col">
                                    <strong class="font-bold text-white uppercase">
                                        0% PROFIT
                                    </strong>
                                </th>
                                <th class="py-2 px-6 bg-red-700" style="width: 27.8549%;" scope="col">
                                    <strong class="font-bold text-white uppercase">
                                        10% PROFIT
                                    </strong>
                                </th>
                                <th class="py-2 px-6 bg-red-700" style="width: 76.7349%;" scope="col">
                                    <strong class="font-bold text-white uppercase">
                                        20% PROFIT
                                    </strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>1</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$0.25</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$0.25</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$0.25</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>2</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$0.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$0.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$0.50</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>3</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$0.75</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$0.75</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$1.00</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>4</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$1.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$1.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$1.25</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>5</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$1.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$1.75</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$2.00</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>6</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$2.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$2.25</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$2.50</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>7</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$2.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$2.75</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$3.25</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>8</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$3.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$3.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$4.00</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>9</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$3.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$4.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$4.50</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>10</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$4.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$4.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$5.00</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>11</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$4.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$5.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$5.50</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>12</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$5.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$5.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$6.00</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>13</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$5.50</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$6.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$7.00</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>14</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$6.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$6.75</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$7.50</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>15</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$7.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$7.75</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$8.50</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>16</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$8.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$9.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$10.00</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>17</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$9.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$10.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$11.00</strong>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-6">
                                    <strong>18</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$10.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$11.00</strong>
                                </td>
                                <td class="py-2 px-6">
                                    <strong>$12.00</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
