<div x-data="{ expandedMenu: false }">
    <button class="block lg:hidden w-16 h-16 fixed top-4 right-0 z-50 text-[#1C5B2E] hover:text-[#00B309] text-3xl"
        @click="expandedMenu = !expandedMenu">
        <i x-show="!expandedMenu" class="fa fa-bars" aria-hidden="true"></i>
        <i x-show="expandedMenu" class="fa fa-times" aria-hidden="true"></i>
    </button>
    <div x-cloak x-show="expandedMenu" x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="w-3/4 fixed z-50 left-0 top-0 bottom-0 shadow transition-all duration-500 linear bg-[url('/img/responsive-menu-background.jpg')] bg-cover">
        <div class="mb-4 py-6 px-[5%]">
            <img alt="LSS Logo NC" src="/img/LSS-Logo-NC-150.png" class="mx-auto">
        </div>
        <ul>
            <li x-cloak x-show="expandedMenu" x-transition:enter-start="-translate-x-56 opacity-0"
                x-transition:enter-end="translate-x-0 opacity-100"
                class="transition-all duration-500 delay-100 ease-in-out">
                <a href="/"
                    class="block bg-[#0C4F00]/80 border border-[#005707] text-white text-lg font-medium leading-10 px-[5%] hover:bg-[#0C4F00]/80 transition-all duration-300">Home</a>
            </li>
            <li x-data="{ expanded: false }" x-cloak x-show="expandedMenu"
                x-transition:enter-start="-translate-x-56 opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
                class="transition-all duration-500 delay-200 ease-in-out">
                <div
                    class="group relative bg-[#1C5B2E]/75 border border-[#005707] text-white text-lg font-medium leading-10 px-[5%] hover:bg-[#0C4F00] transition-all duration-300">
                    <a href="/holiday-shop-gifts" class="block">
                        View Our Gifts
                    </a>
                    <div @click.stop="expanded = !expanded" x-bind:class="expanded ? 'bg-[#047A0E]' : ''"
                        class="absolute top-0 bottom-0 right-0 w-10 h-10 border-l border-[#005707] text-center leading-10 cursor-pointer group-hover:bg-[#07A817]">
                        <span x-bind:class="expanded ? 'rotate-180' : 'rotate-0'" class="block">▼</span>
                    </div>
                </div>
                <ul x-cloak x-show="expanded" class="transition-all duration-500 ease-in-out">
                    <li>
                        <a href="/holiday-shop-gifts"
                            class="block text-sm font-medium leading-10 text-white bg-[#005707] pl-[10%] pr-[5%] transition-all duration-300 hover:border-[#005707] hover:bg-[#0E3300]">Holiday
                            Shop Gifts</a>
                    </li>
                    <li>
                        <a href="/price-codes"
                            class="block text-sm font-medium leading-10 text-white bg-[#005707] pl-[10%] pr-[5%] transition-all duration-300 hover:border-[#005707] hover:bg-[#0E3300]">Profit
                            &amp; Pre-Coded Gifts</a>
                    </li>
                    <li>
                        <a href="/merchandise-guarantee"
                            class="block text-sm font-medium leading-10 text-white bg-[#005707] pl-[10%] pr-[5%] transition-all duration-300 hover:border-[#005707] hover:bg-[#0E3300]">Merchandise
                            Guarantee</a>
                    </li>
                </ul>
            </li>
            <li x-data="{ expanded: false }" x-cloak x-show="expandedMenu"
                x-transition:enter-start="-translate-x-56 opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
                class="transition-all duration-500 delay-300 ease-in-out">
                <div
                    class="group relative bg-[#1C5B2E]/75 border border-[#005707] text-white text-lg font-medium leading-10 px-[5%] hover:bg-[#0C4F00] transition-all duration-300">
                    <a href="/online-access" class="block">
                        Online Access
                    </a>
                    <div @click.stop="expanded = !expanded" x-bind:class="expanded ? 'bg-[#047A0E]' : ''"
                        class="absolute top-0 bottom-0 right-0 w-10 h-10 border-l border-[#005707] text-center leading-10 cursor-pointer group-hover:bg-[#07A817]">
                        <span x-bind:class="expanded ? 'rotate-180' : 'rotate-0'" class="block">▼</span>
                    </div>
                </div>
                <ul x-cloak x-show="expanded">
                    <li>
                        <a href="/online-access"
                            class="block text-sm font-medium leading-10 text-white bg-[#005707] pl-[10%] pr-[5%] transition-all duration-300 hover:border-[#005707] hover:bg-[#0E3300]">Online
                            Access</a>
                    </li>
                    <li>
                        <a href="/cash-register-app"
                            class="block text-sm font-medium leading-10 text-white bg-[#005707] pl-[10%] pr-[5%] transition-all duration-300 hover:border-[#005707] hover:bg-[#0E3300]">Cash
                            Register App</a>
                    </li>
                </ul>
            </li>
            <li x-data="{ expanded: false }" x-cloak x-show="expandedMenu"
                x-transition:enter-start="-translate-x-56 opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
                class="transition-all duration-500 delay-[400ms] ease-in-out">
                <div
                    class="group relative bg-[#1C5B2E]/75 border border-[#005707] text-white text-lg font-medium leading-10 px-[5%] hover:bg-[#0C4F00] transition-all duration-300">
                    <a href="/sign-up-bonus" class="block">
                        Sign Up Bonus
                    </a>
                    <div @click.stop="expanded = !expanded" x-bind:class="expanded ? 'bg-[#047A0E]' : ''"
                        class="absolute top-0 bottom-0 right-0 w-10 h-10 border-l border-[#005707] text-center leading-10 cursor-pointer group-hover:bg-[#07A817]">
                        <span x-bind:class="expanded ? 'rotate-180' : 'rotate-0'" class="block">▼</span>
                    </div>
                </div>
                <ul x-cloak x-show="expanded">
                    <li>
                        <a href="/sign-up-bonus"
                            class="block text-sm font-medium leading-10 text-white bg-[#005707] pl-[10%] pr-[5%] transition-all duration-300 hover:border-[#005707] hover:bg-[#0E3300]">Sign
                            Up Bonus</a>
                    </li>
                    <li>
                        <a href="/steps-to-success"
                            class="block text-sm font-medium leading-10 text-white bg-[#005707] pl-[10%] pr-[5%] transition-all duration-300 hover:border-[#005707] hover:bg-[#0E3300]">Steps
                            to Success</a>
                    </li>
                    <li>
                        <a href="/free-supplies"
                            class="block text-sm font-medium leading-10 text-white bg-[#005707] pl-[10%] pr-[5%] transition-all duration-300 hover:border-[#005707] hover:bg-[#0E3300]">Free
                            Shipping &amp; Supplies</a>
                    </li>
                </ul>
            </li>
            <li x-cloak x-show="expandedMenu" x-transition:enter-start="-translate-x-56 opacity-0"
                x-transition:enter-end="translate-x-0 opacity-100"
                class="transition-all duration-500 delay-500 ease-in-out">
                <a href="/gift-certificates"
                    class="block bg-[#1C5B2E]/75 border border-[#005707] text-white text-lg font-medium leading-10 px-[5%] hover:bg-[#0C4F00] transition-all duration-300">Gift
                    Certificates</a>
            </li>
            <li x-cloak x-show="expandedMenu" x-transition:enter-start="-translate-x-56 opacity-0"
                x-transition:enter-end="translate-x-0 opacity-100"
                class="transition-all duration-500 delay-[600ms] ease-in-out">
                <a target="_blank" href="http://signup.holidayshop.org/signup/GNT"
                    class="block bg-[#1C5B2E]/75 border border-[#005707] text-white text-lg font-medium leading-10 px-[5%] hover:bg-[#0C4F00] transition-all duration-300">Sign
                    Up Now</a>
            </li>
            <li x-cloak x-show="expandedMenu" x-transition:enter-start="-translate-x-56 opacity-0"
                x-transition:enter-end="translate-x-0 opacity-100"
                class="transition-all duration-500 delay-700 ease-in-out">
                <a href="https://chairperson.holidayshop.org"
                    class="block bg-[#1C5B2E]/75 border border-[#005707] text-white text-lg font-medium leading-10 px-[5%] hover:bg-[#0C4F00] transition-all duration-300">Chairperson
                    Login</a>
            </li>
        </ul>
    </div>
</div>
