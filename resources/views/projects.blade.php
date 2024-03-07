@extends('layouts.app')

@section('content')
    <section class="bg-[#FFFFFF] pt-28 pb-10 md:px-20 px-5 flex flex-col items-center">
        <div class="w-full flex flex-col gap-2 items-center justify-center">
            <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">Project portfolio</h1>
        </div>

        <div class="flex gap-8 pt-12">
            <p class="text-[#434343] md:text-base text-sm text-center">All project</p>
            <p class="text-[#434343] md:text-base text-sm text-center">Gas projects</p>
            <p class="text-[#434343] md:text-base text-sm text-center">Power project</p>
            <p class="text-[#434343] md:text-base text-sm text-center">Other project</p>
        </div>

        <div class="flex py-10 md:flex-row flex-col flex-wrap gap-6 justify-center">
            <div class="2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[355px] w-full relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/5e888929-4fca-4f66-928e-08bb18abcec8 1.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    Project</p>
            </div>

            <div class=" 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/5e888929-4fca-4f66-928e-08bb18abcec8 1.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    Project</p>
            </div>


            <div class="w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/5e888929-4fca-4f66-928e-08bb18abcec8 1.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    Project</p>
            </div>
        </div>
        </div>
    </section>

    @include('includes.call')
@endsection
