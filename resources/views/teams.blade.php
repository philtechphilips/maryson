@extends('layouts.app')

@section('content')
    <section class="bg-[#FFFFFF] pt-28 pb-10 md:px-20 px-5">
        <div class="w-full flex flex-col gap-2 items-center justify-center">
            <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">Get to know amazing people</h1>
            <p class="text-[#434343] md:w-[792px] w-full text-center text-sm md:text-[16px] leading-6">Meet the leadership Team</p>
        </div>

        <div class="pt-20 flex md:flex-row flex-col flex-wrap items-start justify-center gap-10">
            <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30">
                <img src="{{ asset("assets/Leader image component.png") }}" class="md:w-[340px] w-full">
                <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Dr. Ayokunle Iyanda</h1>
                <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Executive Director/CE</h1>
            </div>

            <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30">
                <img src="{{ asset("assets/team-2.png") }}" class="md:w-[340px] w-full">
                <h1 class="text-[#1D1D1D] text-lg text-center pb-8 mt-6 font-medium">Egnr Adewale Olabulo</h1>
                <h1 class="text-[#1D1D1D]  mb-12 text-center font-bold"></h1>
            </div>

            <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30">
                <img src="{{ asset("assets/team-3.png") }}" class="md:w-[340px] w-full">
                <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Abisola Shogbola</h1>
                <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Head, Operations</h1>
            </div>

            <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30">
                <img src="{{ asset("assets/team-4.png") }}" class="md:w-[340px] w-full">
                <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Seyi Osuntokun</h1>
                <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Technical Adviser, Gas & Power</h1>
            </div>

            <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30">
                <img src="{{ asset("assets/team-5.png") }}" class="md:w-[340px] w-full">
                <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Muiz Salaam</h1>
                <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Head, Gas Projects</h1>
            </div>

            <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30">
                <img src="{{ asset("assets/team-6.png") }}" class="md:w-[340px] w-full">
                <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Kazeem Gbolagade</h1>
                <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Head, Power Projects</h1>
            </div>
        </div>
    </section>


    @include("includes.call")
@endsection
