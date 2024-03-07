@extends('layouts.app')

@section('content')
    <section class="bg-[#FFFFFF] pt-28 pb-10 md:px-20 px-5">
        <div class="w-full flex flex-col gap-2 items-center justify-center">
            <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">Our services</h1>
            <p class="text-[#434343] md:w-[792px] w-full text-center text-sm md:text-[16px] leading-6">As a leading provider
                of integrated energy and engineering solutions, we are committed to achieving superior operational outcomes
                that bring our client’s projects to reality.</p>
        </div>

        <div class="pt-20 flex md:flex-row flex-col items-start justify-center gap-10">
            <div class="md:w-[400px] w-full">
                <img src="{{ asset('assets/replacement for cat pic 1 (1).png') }}" class="md:w-[400px] w-full">
                <h1 class="text-[#1D1D1D] text-2xl uppercase mt-6 mb-3 font-bold">Energy</h1>
                <ul class=" list-disc flex flex-col gap-2 pl-4">
                    <li class="text[#434343]">Oil & Gas pipeline construction, operations and maintenance</li>
                    <li class="text[#434343]">LPG Reticulation – construction, operations and maintenance</li>
                    <li class="text[#434343]">CNG Station construction, installation, operations and maintenance</li>
                    <li class="text[#434343]">Procurement and supply</li>
                </ul>
            </div>

            <div class="md:w-[400px] w-full">
                <img src="{{ asset('assets/keep this in project portfolio (1).png') }}" class="md:w-[400px] w-full">
                <h1 class="text-[#1D1D1D] text-2xl uppercase mt-6 mb-3 font-bold">Engineering</h1>
                <ul class=" list-disc flex flex-col gap-2 pl-4">
                    <li class="text[#434343]">Electricity distribution</li>
                    <li class="text[#434343]">Streetlighting installation operations and maintenance</li>
                    <li class="text[#434343]">Power generation, operations and maintenance</li>
                    <li class="text[#434343]">Procurement and supply</li>
                </ul>
            </div>


            <div class="md:w-[400px] w-full">
                <img src="{{ asset('assets/IMG_2915 1.png') }}" class="md:w-[400px] w-full">
                <h1 class="text-[#1D1D1D] text-2xl uppercase mt-6 mb-3 font-bold">Projects</h1>
                <ul class=" list-disc flex flex-col gap-2 pl-4">
                    <li class="text[#434343]">Horizontal directional drilling (HDD) and thrust-boring</li>
                    <li class="text[#434343]">Heavy duty equipment rental (Truck-mounted Crane, Manlift)</li>
                    <li class="text[#434343]">Fiber-optic cable laying</li>
                    <li class="text[#434343]">Consulting services</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="w-full md:px-20 px-5 md:py-24 py-16">
        <div class="w-full rounded-[40px] bg-[#000E4B] flex flex-col items-center justify-center h-80 md:gap-10 gap-5">
            <h1 class="text-white md:text-[40px] text-2xl uppercase font-medium text-center">Have any question about us?
            </h1>
            <div class="flex gap-2 items-center bg-[#F0F0FF] rounded-lg px-6 py-3">
                <img src="{{ asset('assets/fluent_call-24-regular.svg') }}"></img>
                <p class="text-[#434343] font-medium md:text-xl">+234 (0) 810 145 5810</p>
            </div>
        </div>
    </section>
@endsection
