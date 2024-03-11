@extends('layouts.app')

@section('content')
    <section class="bg-[#FFFFFF] py-28 md:px-20 px-5">
        <div class="md:px-16 px-5 flex md:flex-row flex-col items-center justify-center gap-4 mb-6">
            <div class="flex flex-col gap-2 md:w-[480px] w-full">
                <h1 class="text-[#1d1d1d] md:text-[40px] text-3xl text-center md:text-left font-bold uppercase">About Us
                </h1>
                <p class="text-[#434343] text-sm md:text-[15px] leading-5 text-center md:text-left">Maryson Energy Limited is
                    an
                    indigenous integrated energy and engineering solutions company with operations primarily in Nigeria,
                    delivering value-adding services across the energy value chain. Our operation is driven by excellence
                    and technical capability underpinned by innovative, technology-based solutions that are efficient,
                    cost-effective, and sustainable.</p>
            </div>

            <div class="nd:ml-16">
                <img src="{{ asset('assets/d7e45fa1-4610-4de4-a50a-df3500e26b7e.png') }}" class="w-full md:w-[336px]">
            </div>

            <div class="nd:ml-10">
                <img src="{{ asset('assets/e15dcf1c-6b30-44f3-8dd8-7469d96857b2.png') }}" class="w-full md:w-[336px]">
            </div>
        </div>

        <div class="md:px-8 pt-10 flex md:flex-row flex-col items-start justify-center gap-14">
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


    <section class="bg-[#F2F2F2] py-28 flex md:flex-row flex-col justify-center gap-24 items-center md:px-40 px-5">
        <div class="md:w-[500px] w-full">
            <img src="{{ asset('assets/e15dcf1c-6b30-44f3-8dd8-7469d96857b2.png') }}" class="w-[500px]">
        </div>

        <div class="md:w-[431px] w-full pr-5">
            <h1 class="font-bold uppercase text-3xl text-[#1D1D1D]">Our core value follows the acronym PERFORM</h1>

            <div class="mt-6 flex flex-col gap-4">
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/charm_tick.svg') }}">
                    <p class="text-lg font-bold">Pragmatism</p>
                </div>

                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/charm_tick.svg') }}">
                    <p class="text-lg font-bold">Ethical</p>
                </div>

                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/charm_tick.svg') }}">
                    <p class="text-lg font-bold">Ressilence</p>
                </div>

                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/charm_tick.svg') }}">
                    <p class="text-lg font-bold">Flexibility</p>
                </div>

                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/charm_tick.svg') }}">
                    <p class="text-lg font-bold">Open Mindedness</p>
                </div>

                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/charm_tick.svg') }}">
                    <p class="text-lg font-bold">Respect</p>
                </div>

                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/charm_tick.svg') }}">
                    <p class="text-lg font-bold">Meticulous</p>
                </div>
            </div>
        </div>
    </section>

    @include("includes.call")
@endsection
