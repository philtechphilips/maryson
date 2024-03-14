@extends('layouts.app')

@section('content')
    <section class="w-full  md:h-screen swiper">
        <div class="swiper-wrapper">
            <div class="w-full  swiper-slide md:h-screen h-[700px] py-44 md:py-0 flex flex-col md:gap-4 gap-2 px-5 items-center justify-center bg-center bg-cover bg-no-repeat"
                style="background-image: url('{{ asset('assets/04aeca0c-5239-4108-b3bf-5b5f2a115b13 1.png') }}')">

                <p class="text-white font-[Rubik] flex gap-2"><span
                        class="tracking-[-3px] hidden md:flex">____________________</span> Energy - Engineering -
                    Projects<span class="hidden md:block tracking-[-3px]">____________________</span></p>
                <h1
                    class="text-white font-bold md:text-5xl text-4xl swiper-animate-one uppercase text-center md:px-[400px] md:leading-[65px]">
                    Gas Delivery
                    Solutions</h1>
                <p class="text-white text-lg md:px-64 text-center swiper-animate-one">- Transporting energy via pipelines and
                    specialized
                    containers
                    providing improved cost efficiency.</p>
            </div>

            <div class="w-full  swiper-slide md:h-screen h-[700px] py-44 md:py-0 flex flex-col px-5 md:gap-4 gap-2 items-center justify-center bg-center bg-cover bg-no-repeat"
                style="background-image: url('{{ asset('assets/IMG_2806 1.png') }}')">

                <p class="text-white font-[Rubik] flex gap-2"><span
                        class="tracking-[-3px] hidden md:flex">____________________</span> Energy - Engineering -
                    Project<span class="hidden md:block tracking-[-3px]">____________________</span></p>
                <h1
                    class="text-white font-bold swiper-animate md:text-5xl text-4xl uppercase text-center md:px-[300px] md:leading-[65px]">
                    Power Infrastructure Development</h1>
                <p class="text-white text-lg md:px-64 text-center swiper-animate">- Building infrastructure to support
                    growing and
                    sustainable power distribution</p>
            </div>

            <div class="w-full  swiper-slide md:h-screen h-[700px] py-44 md:py-0 flex flex-col md:gap-4 gap-2 px-5 items-center justify-center bg-center bg-cover bg-no-repeat"
                style="background-image: url('{{ asset('assets/keep this in project portfolio.png') }}')">

                <p class="text-white font-[Rubik] flex gap-2"><span
                        class="tracking-[-3px] hidden md:flex">____________________</span> Energy - Engineering -
                    Project<span class="hidden md:block tracking-[-3px]">____________________</span></p>
                <h1
                    class="text-white font-bold md:text-5xl text-4xl swiper-animate-two uppercase text-center md:px-[200px] md:leading-[65px]">
                    Illuminating
                    the City and Directional Drilling Services</h1>
                <p class="text-white text-lg md:px-64 text-center swiper-animate-two">- Lighting our city roads through
                    renewable and
                    conventional power. Directional drilling for energy transportation and supply.</p>
            </div>
        </div>

        <div class="swiper-pagination"></div>
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
            <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">OUR SERVICES</h1>
            <p class="text-[#434343] text-center md:px-28 text-sm md:text-[16px] leading-6">As a leading provider of
                integrated energy and engineering
                solutions, we are committed to achieving superior operational outcomes that bring our client’s projects
                to reality. Our focused service areas are:</p>
        </div>

        <div class="py-24 flex md:flex-row flex-col gap-6 items-center justify-center">
            <div class="w-full md:w-[408px] h-[460px] bg-center bg-cover bg-no-repeat rounded-3xl relative  homepage-services-body-image"
                style="background-image: url('{{ asset('assets/04aeca0c-5239-4108-b3bf-5b5f2a115b13 1.png') }}">
                <h2 class="text-white absolute top-10 left-10 text-2xl font-bold">Energy</h2>
                <div class="homepage-services-body-image-img"></div>
                <a href="/services" onmouseover="changeIcon('icon-other-1', true)" onmouseout="changeIcon('icon-other-1', false)">
                    <p class="font-bold" style="color: #fff;">See more</p>
                    <i class="ri-arrow-right-double-fill icon-other" id="icon-other-1"></i>
                </a>
            </div>

            <div class="w-full md:w-[408px] h-[460px] bg-center bg-cover bg-no-repeat rounded-3xl relative  homepage-services-body-image"
                style="background-image: url('{{ asset('assets/keep this in project portfolio.png') }}">
                <h2 class="text-white absolute top-10 left-10 text-2xl font-bold">Engineering</h2>
                <div class="homepage-services-body-image-img"></div>
                <a href="/services" onmouseover="changeIcon('icon-other-2', true)" onmouseout="changeIcon('icon-other-2', false)">
                    <p class="font-bold" style="color: #fff;">See more</p>
                    <i class="ri-arrow-right-double-fill icon-other" id="icon-other-2"></i>
                </a>
            </div>

            <div class="w-full md:w-[408px] h-[460px] bg-center bg-cover bg-no-repeat rounded-3xl relative homepage-services-body-image"
                style="background-image: url('{{ asset('assets/IMG_2806 1.png') }}">
                <h2 class="text-white absolute top-10 left-10 text-2xl font-bold">Projects</h2>
                <div class="homepage-services-body-image-img"></div>
                <a href="/services" onmouseover="changeIcon('icon-other-3', true)" onmouseout="changeIcon('icon-other-3', false)">
                    <p class="font-bold" style="color: #fff;">See more</p>
                    <i class="ri-arrow-right-double-fill icon-other" id="icon-other-3"></i>
                </a>
            </div>
        </div>
    </section>

    @include('includes.call')
@endsection


@section('script')
<script>
    const changeIcon = (iconId, isHovering) => {
        const icon = document.getElementById(iconId);
        if (isHovering) {
            icon.classList.remove('ri-arrow-right-double-fill');
            icon.classList.add('ri-arrow-right-line');
        } else {
            icon.classList.remove('ri-arrow-right-line');
            icon.classList.add('ri-arrow-right-double-fill');
        }
    }
</script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 5000,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
            },


            navigation: {
                nextEl: '.swiper-pagination',
                prevEl: '.swiper-pagination',
            },

        });

        swiper.on('slideChange', function() {

            document.querySelectorAll('.swiper-animate').forEach(function(element) {
                element.classList.remove('animate');
            });

            document.querySelectorAll('.swiper-animate-one').forEach(function(element) {
                element.classList.remove('animate');
            });

            document.querySelectorAll('.swiper-animate-two').forEach(function(element) {
                element.classList.remove('animate');
            });

            var activeSlide = swiper.slides[swiper.activeIndex];

            activeSlide.querySelectorAll('.swiper-animate').forEach(function(element) {
                element.classList.add('animate');
            });

            activeSlide.querySelectorAll('.swiper-animate-one').forEach(function(element) {
                element.classList.add('animate');
            });

            activeSlide.querySelectorAll('.swiper-animate-two').forEach(function(element) {
                element.classList.add('animate');
            });
        });
    </script>
@endsection
