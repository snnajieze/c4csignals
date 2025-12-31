@extends('layouts/header-footer')

@section('title', 'Home')

@section('content')

        <section class="relative flex min-h-[100vh] w-full max-w-[100vw] flex-col overflow-hidden max-lg:p-4 max-md:mt-[50px]"
        >
            <div
                class="flex h-full min-h-[100vh] w-full flex-col place-content-center gap-6 p-[5%] max-xl:place-items-center"
            >
                <div
                    class="flex flex-col place-content-center items-center"
                >
                    <div
                        class="text-center text-6xl font-semibold uppercase leading-[80px] max-lg:text-4xl max-md:leading-snug max-md:text-3xl max-md:leading-snug"
                    >
                        <span> Win More Trades. Get Real-Time Crypto & Forex </span>
                        <br />
                        <span class="text-primary"> Signals That Work. </span>
                    </div>
                    <div
                        class="mt-10 max-w-[450px] p-2 text-center max-lg:max-w-full max-md:text-base"
                    >
                        Stop guessing. Start trading like a pro. Get highly accurate entry/exit signals delivered directly to your Telegram, powered by real market analysis and years of trading experience.
                    </div>

                    <div
                        class="mt-6 flex flex-wrap justify-center gap-4 p-2"
                    >
                        <a
                            class="btn transition-transform duration-[0.3s] hover:scale-x-[1.03]"
                            href="#pricing"
                        >
                            Start Receiving Signals Now
                        </a>
                        <a
                            class="btn !bg-[#c8cbf984] text-gray-500 transition-transform duration-[0.3s] hover:scale-x-[1.03]"
                            href="https://t.me/cash4coinssignals"
                            target="_blank"
                        >
                            <span>Join Our Free Channel</span>
                        </a>
                    </div>

                    <div
                        class="reveal mt-6 flex gap-4 text-2xl"
                    ></div>
                </div>

                <!-- <div
                    class="flex w-full place-content-center place-items-center overflow-hidden"
                >
                    <div
                        class="relative flex w-fit place-content-center place-items-center"
                    >
                        <div
                            class="w-full h-[400px] max-lg:h-[250px] overflow-hidden rounded-xl shadow-lg"
                        >
                                <iframe
                                    class="w-full h-full"
                                    allowfullscreen
                                    allow="clipboard-write"
                                    title="vimeo Video Player"
                                    src="https://player.vimeo.com/video/916494914?color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1&amp;h=80f10a5420#t="
                                ></iframe>
                            <img
                                src="./assets/images/dashboard/dashboard.png"
                                alt="dashboard"
                                class="h-full w-full object-cover max-lg:object-contain"
                            />
                        </div>
                    </div>
                </div> -->

            </div>
        </section>



        <div class="sm:flex items-center max-w-screen-xl">
            <div class="sm:w-1/2 p-10">
                <div class="image object-center text-center">
                    <img src="https://i.imgur.com/WbQnbas.png">
                </div>
            </div>
            <div class="sm:w-1/2 p-5">
                <div class="text">
                    <span class="text-gray-500 border-b-2 border-indigo-600 uppercase">The signal</span>
                    <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">How <span class="text-indigo-600">it works</span>
                    </h2>
                    <ul class="mt-8 space-y-3 font-medium">
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                <strong>Subscribe:</strong> Pick a plan that suits your goals
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                <strong>Receive Signals:</strong> Get precise entries, SL, TPs on crypto & forex pairs
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                <strong>Profit Smarter:</strong> Trade with confidence and grow your portfolio
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        


        <div class="lg:ml-6 lg:col-start-2 lg:max-w-2xl p-6 lg:p-8">
            <p class="text-base font-semibold leading-6 text-indigo-500 uppercase">
                The reason
            </p>
            <h4 class="mt-2 text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                Why Traders Trust Us
            </h4>

            <ul class="mt-8 space-y-3 font-medium">
                <li class="flex items-start lg:col-span-1">
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="ml-3 leading-5 text-gray-600">
                        <strong>7+ Years of Trading Experience</strong> —> in both crypto and forex markets
                    </p>
                </li>
                <li class="flex items-start lg:col-span-1">
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="ml-3 leading-5 text-gray-600">
                        <strong>Tested, Proven Signals</strong> —> with historical win-rate you can verify
                    </p>
                </li>
                <li class="flex items-start lg:col-span-1">
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="ml-3 leading-5 text-gray-600">
                        <strong>Real Analysts, Not Bots</strong> —> every signal backed by strategy & data
                    </p>
                </li>
                <li class="flex items-start lg:col-span-1">
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="ml-3 leading-5 text-gray-600">
                        <strong>Fast Delivery</strong> —> via Telegram within seconds
                    </p>
                </li>
            </ul>
        </div>



        
        <div class="bg-gray-50 p-6 lg:p-8">
            <section class="py-16 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <!-- Section Header -->
                    <div class="text-center mb-12">
                        
                        <h2 class="mt-2 text-3xl font-bold text-gray-900 sm:text-4xl">Our Key Features</h2>
                        <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                            Discover what makes our signals stand out from the competition.
                        </p>
                    </div>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Feature 1 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Entry & Exit Prices</h3>
                            <p class="text-gray-600">
                                Each signal includes a clear entry, stop-loss, and multiple take profit levels, so you never have to guess when to enter or exit.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Auto Trading</h3>
                            <p class="text-gray-600">
                                Our signals has Cornix integrated for automatic and copy-trading. So, you don't have to worry about manually following of the trades.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Real-Time Delivery</h3>
                            <p class="text-gray-600">
                                Signals are sent instantly via Telegram, no delays, no missed opportunities.
                            </p>
                        </div>

                        <!-- Feature 4 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-14 h-14 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">24/7 Support</h3>
                            <p class="text-gray-600">
                                Subscribers get access to private Telegram support and can ask questions, request analysis or talk strategy.
                            </p>
                        </div>

                        <!-- Feature 5 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-14 h-14 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Multi-Asset Coverage</h3>
                            <p class="text-gray-600">
                                Trade confidently across major Crypto coins and Forex pairs, all with a single subscription.
                            </p>
                        </div>

                        <!-- Feature 6 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="w-14 h-14 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Risk Management</h3>
                            <p class="text-gray-600">
                                Every trade is calculated with proper risk/reward ratios, ensuring you never overexpose your capital.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        

        <section class="p-6 lg:p-8 mt-5 flex w-full flex-col place-items-center p-[2%]">
            <h3
                class="text-3xl font-medium text-primary max-md:text-2xl"
            >
                What our clients say
            </h3>
            <!-- Testimonials -->
            <div
                class="mt-8 gap-10 space-y-8 max-md:columns-1 lg:columns-2 xl:columns-3"
            >
                <div
                    class="flex h-fit w-[350px] break-inside-avoid flex-col rounded-lg p-4 shadow-lg max-lg:w-[320px]"
                >
                    <div class="flex place-items-center gap-3">
                        <div
                            class="h-[50px] w-[50px] overflow-hidden rounded-full border-[2px] border-solid border-primary"
                        >
                            <img
                                src="./assets/images/people/test1.png"
                                class="h-full w-full object-cover"
                                alt="women"
                            />
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="font-semibold">Aysha M.</div>
                            <div class="text-[#4b4b4b]">Dubai</div>
                        </div>
                    </div>
                    <p class="mt-4 italic text-gray-600">
                        Honestly the best signal service I’ve used. I love the Telegram alerts and how quick the support responds. Their auto-trades are awesome.
                    </p>
                </div>
                <div
                    class="flex h-fit w-[350px] break-inside-avoid flex-col rounded-lg p-4 shadow-lg max-lg:w-[320px]"
                >
                    <div class="flex place-items-center gap-3">
                        <div
                            class="h-[50px] w-[50px] overflow-hidden rounded-full border-[2px] border-solid border-primary"
                        >
                            <img
                                src="./assets/images/people/test3.png"
                                class="h-full w-full object-cover"
                                alt="man"
                            />
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="font-semibold">Daniel K.</div>
                            <div class="text-[#4b4b4b]">America</div>
                        </div>
                    </div>
                    <p class="mt-4 italic text-gray-600">
                        Since joining, I’ve doubled my account in 6 weeks. The signals are super accurate and easy to follow.
                    </p>
                </div>
                <div
                    class="flex h-fit w-[350px] break-inside-avoid flex-col rounded-lg p-4 shadow-lg max-lg:w-[320px]"
                >
                    <div class="flex place-items-center gap-3">
                        <div
                            class="h-[50px] w-[50px] overflow-hidden rounded-full border-[2px] border-solid border-primary"
                        >
                            <img
                                src="./assets/images/people/test5.png"
                                class="h-full w-full object-cover"
                                alt="man"
                            />
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="font-semibold">Precious O.</div>
                            <div class="text-[#4b4b4b]">Malta</div>
                        </div>
                    </div>
                    <p class="mt-4 italic text-gray-600">
                        I knew nothing about trading before this. But your signals gave me confidence. I made $160 in my first week just following the instructions, no stress, no charts. Just results.
                    </p>
                </div>
                <div
                    class="flex h-fit w-[350px] break-inside-avoid flex-col rounded-lg p-4 shadow-lg max-lg:w-[320px]"
                >
                    <div class="flex place-items-center gap-3">
                        <div
                            class="h-[50px] w-[50px] overflow-hidden rounded-full border-[2px] border-solid border-primary"
                        >
                            <img
                                src="./assets/images/people/test2.png"
                                class="h-full w-full object-cover"
                                alt="man"
                            />
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="font-semibold">Samuel N.</div>
                            <div class="text-[#4b4b4b]">South Africa</div>
                        </div>
                    </div>
                    <p class="mt-4 italic text-gray-600">
                        I don’t have time to sit and analyze the market all day. This service changed everything, I get the signal, place the trade, and move on. I’ve made more in 3 months than I did in a year of trading alone.
                    </p>
                </div>
                <div
                    class="flex h-fit w-[350px] break-inside-avoid flex-col rounded-lg p-4 shadow-lg max-lg:w-[320px]"
                >
                    <div class="flex place-items-center gap-3">
                        <div
                            class="h-[50px] w-[50px] overflow-hidden rounded-full border-[2px] border-solid border-primary"
                        >
                            <img
                                src="./assets/images/people/test4.png"
                                class="h-full w-full object-cover"
                                alt="man"
                            />
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="font-semibold">Fola A.</div>
                            <div class="text-[#4b4b4b]">UK</div>
                        </div>
                    </div>
                    <p class="mt-4 italic text-gray-600">
                        I’ve tried a lot of signal groups, most are hype, little substance. But this one’s different. Real results. With Cornix Auto-trade too. I tripled my ETH stack last month alone.
                    </p>
                </div>
                <div
                    class="flex h-fit w-[350px] break-inside-avoid flex-col rounded-lg p-4 shadow-lg max-lg:w-[320px]"
                >
                    <div class="flex place-items-center gap-3">
                        <div
                            class="h-[50px] w-[50px] overflow-hidden rounded-full border-[2px] border-solid border-primary"
                        >
                            <img
                                src="./assets/images/people/test6.png"
                                class="h-full w-full object-cover"
                                alt="man"
                            />
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="font-semibold">Ahmed K.</div>
                            <div class="text-[#4b4b4b]">
                                UAE
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 italic text-gray-600">
                        At first, I didn’t believe it. Too many fake gurus out there. But this team delivers. The win rate is insane and risk management is always tight. I’ve seen consistent 70–150% ROI monthly.
                    </p>
                </div>
            </div>
        </section>

        
      @php
          $route = auth()->check() ? 'subscribe' : 'register';
      @endphp


        <div class="w-full max-w-7xl mx-auto p-6 lg:p-8" id="pricing">

            <!-- Pricing Header -->
            <div class="text-center mb-12 md:mb-16">
              <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Choose Your Perfect Plan</h2>
              <p class="max-w-2xl mx-auto text-gray-600 text-lg">Select the best signal option for your needs.</p>
              
              <!-- Billing Toggle -->
              <div class="inline-flex items-center mt-8 bg-gray-100 p-1 rounded-lg">
                <button class="px-4 py-2 rounded-md bg-white shadow text-gray-800 font-medium">Monthly</button>
                <button class="px-4 py-2 rounded-md text-gray-600 font-medium">Yearly <span class="text-xs font-normal text-primary-600 ml-1">Save 70%</span></button>
              </div>
            </div>

            <!-- Pricing Cards Container -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              
              <!-- Basic Plan -->
              <div class="pricing-card bg-white border border-gray-200 rounded-2xl shadow-sm transition-all duration-300 hover:shadow-lg hover:border-primary-300 hover:scale-105 hover:-translate-y-1">
                <div class="p-6 md:p-8">
                  <h3 class="text-xl font-bold text-gray-900 mb-2">Crypto Signals</h3>
                  <p class="text-gray-600 mb-6">3-6 Daily Crypto Signals</p>
                  
                  <div class="flex items-baseline mb-8">
                    <span class="text-4xl md:text-5xl font-extrabold text-gray-900">$70</span>
                    <span class="pricing-duration text-gray-500 font-medium ml-2">/ month</span>
                  </div>
                  
                  <a class="planButton" href="{{ route($route, ['plan' => 'plan1', 'cycle' => 'monthly', 'price' => 70]) }}">
                        <button class="w-full py-3 px-6 rounded-lg border border-primary-600 text-white font-medium transition-colors duration-300 bg-blue-600 hover:bg-blue-800 mb-6">Get Started</button>
                    </a>
                  
                  <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>3-6 Daily Crypto Signals</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Copytrading Supported</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Trading Bot Supported</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Crypto VIP Member</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Dedicated Assistance</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Real Time Alerts</span>
                    </li>
                    <li class="flex items-start opacity-50">
                      <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                      <span>Forex VIP Member</span>
                    </li>
                    <li class="flex items-start opacity-50">
                      <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                      <span>Risk Management Advice</span>
                    </li>
                    <li class="flex items-start opacity-50">
                      <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                      <span>24/7 Priority Support</span>
                    </li>
                  </ul>
                </div>
              </div>
              
              <!-- Pro Plan (Popular) -->
              <div class="pricing-card bg-gradient-to-br from-primary-600 to-primary-700 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-2xl hover:scale-105 hover:-translate-y-1">
                <div class="p-6 md:p-8">
                  <h3 class="text-xl font-bold mb-2">Forex Signals</h3>
                  <p class="text-primary-100 text-gray-600 mb-6">2-3 Daily Forex Signals</p>
                  
                  <div class="flex items-baseline mb-8">
                    <span class="text-4xl md:text-5xl font-extrabold">$50</span>
                    <span class="pricing-duration text-primary-100 font-medium text-gray-600 ml-2">/ month</span>
                  </div>
                  
                  <a class="planButton" href="{{ route($route, ['plan' => 'plan2', 'cycle' => 'monthly', 'price' => 50]) }}">
                        <button class="w-full py-3 px-6 rounded-lg border border-primary-600 text-white font-medium transition-colors duration-300 bg-blue-600 hover:bg-blue-800 mb-6">Get Started</button>
                    </a>
                  
                  <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>2-3 Daily Forex Signals</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Forex VIP Member</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Dedicated Assistance</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Real Time Alerts</span>
                    </li>
                    <li class="flex items-start opacity-50">
                      <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                      <span>Crypto VIP Member</span>
                    </li>
                    <li class="flex items-start opacity-50">
                      <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                      <span>Risk Management Advice</span>
                    </li>
                    <li class="flex items-start opacity-50">
                      <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                      <span>24/7 Priority Support</span>
                    </li>
                  </ul>
                </div>
              </div>
              
              <!-- Enterprise Plan -->
              <div class="pricing-card bg-white border border-gray-200 rounded-2xl shadow-sm transition-all duration-300 hover:shadow-lg hover:border-primary-300 hover:scale-105 hover:-translate-y-1">
                <div class="p-6 md:p-8">
                  <h3 class="text-xl font-bold text-gray-900 mb-2">Crypto & Forex Signals</h3>
                  <p class="text-gray-600 mb-6">Daily Crypto and Forex Signals</p>
                  
                  <div class="flex items-baseline mb-8">
                    <span class="text-4xl md:text-5xl font-extrabold text-gray-900">$100</span>
                    <span class="pricing-duration text-gray-500 font-medium ml-2">/ month</span>
                  </div>
                  
                    <a class="planButton" href="{{ route($route, ['plan' => 'plan3', 'cycle' => 'monthly', 'price' => 100]) }}">
                        <button class="w-full py-3 px-6 rounded-lg border border-primary-600 text-white font-medium transition-colors duration-300 bg-blue-600 hover:bg-blue-800 mb-6">Get Started</button>
                    </a>
                  
                  <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Daily Crypto & Forex Signals</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Copytrading Supported</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Trading Bot Supported</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Crypto & Forex VIP Member</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Dedicated Assistance</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Real Time Alerts</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>Risk Management Advice</span>
                    </li>
                    <li class="flex items-start">
                      <svg class="pricing-check w-5 h-5 text-primary-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span>24/7 Priority Support</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            
        </div>




        <div class="text-gray-900 pt-16 pb-24 px-6 w-full bg-gray-50 p-6 lg:p-8">
          <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6 text-gray-800">Our Impact </h2>
            <p class="text-lg text-gray-600 mb-16">Join hundreds who trust our signals </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
              <!-- User Count -->
              <div class="flex flex-col items-center p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div
                  class="mb-6 flex items-center justify-center w-28 h-28 rounded-full bg-gradient-to-r from-purple-500 to-pink-400 p-1">
                  <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12 h-12 text-gray-900"
                      viewBox="0 0 24 24">
                      <path
                        d="M12 5.5A3.5 3.5 0 0 1 15.5 9a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8.5 9A3.5 3.5 0 0 1 12 5.5M5 8c.56 0 1.08.15 1.53.42c-.15 1.43.27 2.85 1.13 3.96C7.16 13.34 6.16 14 5 14a3 3 0 0 1-3-3a3 3 0 0 1 3-3m14 0a3 3 0 0 1 3 3a3 3 0 0 1-3 3c-1.16 0-2.16-.66-2.66-1.62a5.54 5.54 0 0 0 1.13-3.96c.45-.27.97-.42 1.53-.42M5.5 18.25c0-2.07 2.91-3.75 6.5-3.75s6.5 1.68 6.5 3.75V20h-13zM0 20v-1.5c0-1.39 1.89-2.56 4.45-2.9c-.59.68-.95 1.62-.95 2.65V20zm24 0h-3.5v-1.75c0-1.03-.36-1.97-.95-2.65c2.56.34 4.45 1.51 4.45 2.9z">
                      </path>
                    </svg>
                  </div>
                </div>
                <div class="text-3xl font-extrabold text-gray-800">78% +</div>
                <div class="text-gray-500">Avg Monthly Win Rate</div>
              </div>
              <!-- Documents Count -->
              <div class="flex flex-col items-center p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div
                  class="mb-6 flex items-center justify-center w-28 h-28 rounded-full bg-gradient-to-r from-purple-500 to-pink-400 p-1">
                  <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12 h-12 text-gray-900"
                      viewBox="0 0 24 24">
                      <path
                        d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm0 2h7v5h5v11H6zm2 8v2h8v-2zm0 4v2h5v-2z">
                      </path>
                    </svg>
                  </div>
                </div>
                <div class="text-3xl font-extrabold text-gray-800">350 +</div>
                <div class="text-gray-500">Verified Trades Last Month</div>
              </div>
              <!-- Languages Supported -->
              <div class="flex flex-col items-center p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div
                  class="mb-6 flex items-center justify-center w-28 h-28 rounded-full bg-gradient-to-r from-purple-500 to-pink-400 p-1">
                  <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12 h-12 text-gray-900"
                      viewBox="0 0 24 24">
                      <path
                        d="M17.9 17.39c-.26-.8-1.01-1.39-1.9-1.39h-1v-3a1 1 0 0 0-1-1H8v-2h2a1 1 0 0 0 1-1V7h2a2 2 0 0 0 2-2v-.41a7.984 7.984 0 0 1 2.9 12.8M11 19.93c-3.95-.49-7-3.85-7-7.93c0-.62.08-1.22.21-1.79L9 15v1a2 2 0 0 0 2 2m1-16A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2">
                      </path>
                    </svg>
                  </div>
                </div>
                <div class="text-3xl font-extrabold text-gray-800">$70k +</div>
                <div class="text-gray-500">
                    In Total Subscriber Profits in {{ \Carbon\Carbon::now()->subMonth()->format('F') }}
                </div>

              </div>
            </div>
          </div>
        </div>





        


        <section class="bg-white py-12 text-center">
          <h2 class="text-3xl font-bold mb-4 text-primary">Don’t Miss the Next Big Pump</h2>
          <p class=" mb-6">
            Subscribe to the C4CSignals insider list and be the first to get early alpha.
          </p>

          <form id="newsletterForm" class="flex flex-col md:flex-row justify-center gap-3 max-w-md mx-auto">
            <input
              type="email"
              id="email"
              name="email"
              required
              placeholder="Enter your email address"
              class="w-full p-3 rounded-md text-gray-900 focus:ring-2 focus:ring-indigo-500"
            />
            <button
              type="submit"
              class="bg-indigo-600 px-6 text-white py-3 rounded-md font-semibold hover:bg-indigo-700 transition"
            >
              Subscribe
            </button>
          </form>

          <p id="successMessage" class="hidden mt-4 text-green-400 font-medium"></p>
        </section>



        <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16 px-4 w-full max-w-7xl mx-auto">
          <div class="container mx-auto max-w-4xl text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Trade Smarter?</h2>
            <p class="text-xl md:text-2xl text-blue-100 mb-10 max-w-3xl mx-auto">
              Join 300+ traders using our signals to profit in crypto and forex markets daily. You’re one click away from better trades.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
              <a href="#pricing" class="bg-white text-blue-700 hover:bg-blue-50 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 transform hover:scale-105 shadow-lg">
                Start Receiving Signals Now
              </a>
              <a href="https://t.me/cash4coinssignals" class="border-2 border-white text-white hover:bg-white hover:text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 transform hover:scale-105">
                Join Our Free Channel
              </a>
            </div>
            
        <div class="mt-12 flex flex-col sm:flex-row items-center justify-center sm:space-x-4 space-y-4 sm:space-y-0">
          <div class="flex -space-x-2">
            <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/12.jpg" alt="Customer">
            <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/43.jpg" alt="Customer">
            <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/34.jpg" alt="Customer">
          </div>
          <div class="text-center sm:text-left">
            <p class="text-sm text-blue-200">Trusted by 300+ Traders</p>
            <div class="flex items-center justify-center sm:justify-start">
              <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
              <span class="ml-2 text-white font-medium">4.9/5 from 250+ reviews</span>
            </div>
          </div>
        </div>
          </div>
        </section>

@endsection

        
