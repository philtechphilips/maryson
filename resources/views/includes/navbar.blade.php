<header class="w-full bg-white py-3 md:px-20 px-5">
    <nav class="w-full flex items-center justify-between">
        <img src="{{ asset('assets/logo.png') }}" class="w-40"></img>

        <ul class="md:flex hidden gap-10 items-center list">
            <li>
                <a href="/" class="uppercase font-medium text-sm text-[#434343] leading-6 py-2"> Home</a>
                <div class="w-full h-[1px] bg-[#434343]"></div>
            </li>

            <li>
                <a href="/about-us" class="uppercase font-medium text-sm text-[#434343] leading-6 py-2"> About</a>
                <div class="w-full h-[1px] bg-[#434343]"></div>
            </li>

            <li>
                <a href="/services" class="uppercase font-medium text-sm text-[#434343] leading-6 py-2"> Services</a>
                <div class="w-full h-[1px] bg-[#434343]"></div>
            </li>

            <li>
                <a href="/projects" class="uppercase font-medium text-sm text-[#434343] leading-6 py-2"> Projects </a>
                <div class="w-full h-[1px] bg-[#434343]"></div>
            </li>

            <li>
                <a href="/teams" class="uppercase font-medium text-sm text-[#434343] leading-6 py-2"> Our Team</a>
                <div class="w-full h-[1px] bg-[#434343]"></div>
            </li>
        </ul>

        <img class="w-8 cursor-pointer toggleButton"
            src="{{ asset('assets/streamline_interface-setting-menu-parallel-hamburger-circle-navigation-parallel-hamburger-buttonmenu-circle.png') }}">
    </nav>
</header>


<div id="hiddenDiv" class="w-full hidden toggleButton fixed top-0 bg-black bg-opacity-50 z-50 h-screen left-0"></div>
<div id="sideBar" class="w-full md:w-[406px] bg-white z-[1000] fixed top-0 rounded-3xl right-10 p-10 h-screen  translate-x-[500px] duration-[300ms] ease-in transform">
    <div class="cursor-pointer pb-10 flex justify-end">
        <img src=" {{ asset('assets/streamline_interface-setting-menu-parallel-hamburger-circle-navigation-parallel-hamburger-buttonmenu-circle.svg') }}"
            class="w-8 toggleButton">
    </div>
    <img src=" {{ asset('assets/logo.png') }}" class="w-32">
    <p class="text-sm text-[#434343] pt-4 pr-10">Maryson Energy Limited is an indigenous integrated energy and
        engineering solutions company in Nigeria, delivering value-adding services across the energy value chain.</p>

    <h1 class="text-2xl font-bold text-[#1D1D1D] pt-4 uppercase">
        Contacts
    </h1>
    <div class="mt-4 flex flex-col gap-2">
        <div class="flex gap-2 items-start">
            <img src="{{ asset('assets/fluent_call-24-regular.svg') }}" class="w-4"></img>
            <p class="text-[#434343] text-sm">+234 (0) 810 145 5810</p>
        </div>

        <div class="flex gap-2 items-start">
            <img src="{{ asset('assets/mdi-light_email.svg') }}" class="w-4"></img>
            <div>
                <p class="text-[#434343] text-sm">info@maryson-ng.com</p>
                <p class="text-[#434343] text-sm pt-2">www.maryson-ng.com</p>
            </div>
        </div>

        <div class="flex gap-2 items-start">
            <img src="{{ asset('assets/basil_linkedin-outline.svg') }}" class="w-4"></img>
            <p class="text-[#434343] text-sm">www.maryson-ng.com</p>
        </div>


        <div class="flex gap-2 items-start">
            <img src="{{ asset('assets/location.svg') }}" class="w-[14px]"></img>
            <div>
                <p class="text-[#434343] text-sm">
                    Suite 207, AHCN
                </p>
                <p class="text-[#434343] text-sm"> Towers, 26, CIPM Avenue, CBD, Alausa, </p>
                <p class="text-[#434343] text-sm">Ikeja, Lagos</p>
            </div>
        </div>
    </div>
</div>
