@extends('layouts.app')

@section('content')
    <div class="">
        <section class="w-full  h-screen flex flex-col gap-4 items-center justify-center bg-center bg-cover bg-no-repeat"
            style="background-image: url('{{ asset('assets/04aeca0c-5239-4108-b3bf-5b5f2a115b13 1.png') }}')">

            <p class="text-white font-[Rubik] flex gap-2"><span
                    class="tracking-[-3px] hidden md:flex">______________________</span> Energy - Engineering - Project<span
                    class="hidden md:block tracking-[-3px]">______________________</span></p>
            <h1 class="text-white font-bold text-5xl uppercase text-center md:px-[400px] leading-[65px]">Gas Delivery
                Solutions</h1>
            <p class="text-white text-lg md:px-64 text-center">- Transporting energy via pipelines and specialized containers
                providing improved cost efficiency.</p>
        </section>

        <section class="bg-[#FFFFFF] py-28 md:px-20 px-5">
            <div class="w-full flex flex-col gap-2 items-center justify-center">
                <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">About Maryson Energy Limited
                </h1>
                <p class="text-[#434343] text-center md:px-20 text-sm md:text-[16px] leading-6">Maryson Energy Limited is an
                    indigenous integrated energy and engineering solutions company with operations primarily in Nigeria,
                    delivering value-adding services across the energy value chain. Our operation is driven by excellence
                    and technical capability underpinned by innovative, technology-based solutions that are efficient,
                    cost-effective, and sustainable.</p>
            </div>

            <div class="md:px-10 pt-10 flex md:flex-row flex-col items-start justify-between gap-14">
                <div class="flex flex-col gap-2 px-6 py-10 border border-[#E5E5E5] rounded-3xl md:w-[300px] w-full">
                    <img src="{{ asset('assets/fluent_target-arrow-16-regular.svg') }}" class="mb-4 w-8">
                    <h1 class="uppercase font-bold text-2xl text-[#1D1D1D]">Our mission</h1>
                    <p class="font-[#434343]">To become the leading integrated engineering and energy solutions service
                        provider in Sub-Saharan Africa.</p>
                </div>

                <div class="flex flex-col gap-2 px-6 py-10 border border-[#E5E5E5] rounded-3xl md:w-[300px] w-full">
                    <img src="{{ asset('assets/mdi_television-ambient-light.svg') }}" class="mb-4 w-8">
                    <h1 class="uppercase font-bold text-2xl text-[#1D1D1D]">Our vision</h1>
                    <p class="font-[#434343]">To consistently deliver the highest quality service in project delivery and
                        meet the technical needs of our clients.</p>
                </div>


                <div class="flex flex-col gap-2 px-6 py-10 border border-[#E5E5E5] rounded-3xl md:w-[300px] w-full">
                    <img src="{{ asset('assets/ri_focus-2-line.svg') }}" class="mb-4 w-8">
                    <h1 class="uppercase font-bold text-2xl text-[#1D1D1D]">Strategic focus</h1>
                    <p class="font-[#434343] md:pr-4">Profitably expand our market footprint
                        Broaden our service offerings
                        Diversify our client base</p>
                </div>
            </div>
        </section>

        <section class="bg-[#F2F2F2] py-28 md:px-20 px-5">
            <div class="w-full flex flex-col gap-2 items-center justify-center">
                <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">OUR SERVICE</h1>
                <p class="text-[#434343] text-center md:px-28 text-sm md:text-[16px] leading-6">As a leading provider of
                    integrated energy and engineering
                    solutions, we are committed to achieving superior operational outcomes that bring our client’s projects
                    to reality. Our focused service areas are:</p>
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
    </div>
@endsection
