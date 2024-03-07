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


    @include("includes.call")
@endsection
