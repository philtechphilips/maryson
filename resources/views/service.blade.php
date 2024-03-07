@extends('layouts.app')

@section('content')
<section class="bg-[#FFFFFF] py-28 md:px-20 px-5">
    <div class="w-full flex flex-col gap-2 items-center justify-center">
        <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">Our services</h1>
        <p class="text-[#434343] text-center md:px-28 text-sm md:text-[16px] leading-6">As a leading provider of integrated energy and engineering solutions, we are committed to achieving superior operational outcomes that bring our client’s projects to reality.</p>
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