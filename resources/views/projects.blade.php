@extends('layouts.app')

@section('content')
    <section class="bg-[#FFFFFF] pt-28 pb-10 md:px-20 px-5 flex flex-col items-center">
        <div class="w-full flex flex-col gap-2 items-center justify-center">
            <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">Project portfolio</h1>
        </div>

        <div class="flex gap-8 pt-12">
            <p class="text-[#434343] md:text-base text-sm text-center category-btn cursor-pointer active">All projects</p>
            <p class="text-[#434343] md:text-base text-sm text-center category-btn cursor-pointer">Gas projects</p>
            <p class="text-[#434343] md:text-base text-sm text-center category-btn cursor-pointer">Power projects</p>
            <p class="text-[#434343] md:text-base text-sm text-center category-btn cursor-pointer">Other projects</p>
        </div>

        <div class="flex py-10 md:flex-row flex-col flex-wrap gap-6 justify-center">
            <div data-category="Gas projects"
                class="2xl:w-[438px] project 2xl:h-[435px] md:w-[350px] md:h-[355px] w-full relative overflow-hidden rounded-3xl"
                onmouseover="showDetails(this)" onmouseout="hideDetails(this)">
                <img class="hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/5e888929-4fca-4f66-928e-08bb18abcec8 1.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Installation of CNG DS and Construction of High-Pressure Piping at Manufacturing company at Sango
                        Ota, Ogun State.
                    </p>
                </div>
            </div>

            <div data-category="Power projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class=" 2xl:w-[438px] 2xl:h-[435px] project  md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 2.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Copper Bus Bar Panel installation at Data Centre at Oregun Lagos State
                    </p>
                </div>
            </div>


            <div data-category="Other projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 3.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Gas distribution pipeline connection at Plastic manufacturing factory at Oshodi-Apapa Expressway,
                        Lagos State
                    </p>
                </div>
            </div>

            <div data-category="Power projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 4.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Copper Bus Bar Panel installation at Data Centre at Oregun Lagos State
                    </p>
                </div>
            </div>

            <div data-category="Other projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 5.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Horizontal Directional Drilling (HDD) services for state-owned Electricity Distribution company in
                        Cotonou, Benin Republic
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 6.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Gas distribution pipeline connection at Plastic manufacturing factory at Oshodi-Apapa Expressway,
                        Lagos State
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 7.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Gas distribution pipeline connection at Plastic manufacturing factory at Oshodi-Apapa Expressway,
                        Lagos State
                    </p>
                </div>
            </div>

            <div data-category="Power projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 8.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Bus bar panel installation at Data Centre at Oregun Lagos State
                    </p>
                </div>
            </div>

            <div data-category="Other projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 9.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Horizontal Directional Drilling (HDD) services for state-owned Electricity Distribution company in
                        Cotonou, Benin Republic
                    </p>
                </div>
            </div>

            <div data-category="Power projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 10.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Bus bar panel installation at Data Centre at Oregun Lagos State
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 11.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Fabrication of High-Pressure Piping, Retrofit of Low-Pressure Piping, and Installation of PRMS at
                        FMCG manufacturing company at Amuwo Odofin, Lagos State
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 12.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Gas distribution pipeline connection at Hair and Cosmetics manufacturing company at Ikeja, Lagos
                        State
                    </p>
                </div>
            </div>

            <div data-category="Other projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 13.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Horizontal Directional Drilling (HDD) services for state-owned Electricity Distribution company in
                        Cotonou, Benin Republic
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 14.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Internal Piping Installation for Data Centre at Oregun, Lagos State.
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 15.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Installation of Backup CNG and Construction of High-Pressure Piping
                        at FMCG manufacturing company at Sagamu, Ogun State
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 16.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Installation of Backup CNG and Construction of High-Pressure Piping
                        at FMCG manufacturing company at Sagamu, Ogun State
                    </p>
                </div>
            </div>

            <div data-category="Other projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 17.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Gas distribution pipeline connection at Manufacturing company at Sagamu, Ogun State.
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 18.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Internal Piping Installation for Data Centre at Oregun, Lagos State.
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 19.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Horizontal Directional Drilling (HDD) services for state-owned Electricity Distribution company in
                        Cotonou, Benin Republic
                    </p>
                </div>
            </div>

            <div data-category="Other projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 20.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Gas distribution pipeline connection at Plastic manufacturing factory at Oshodi-Apapa Expressway,
                        Lagos State
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 21.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Internal Piping Installation for Data Centre at Oregun, Lagos State.
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/e15dcf1c-6b30-44f3-8dd8-7469d96857b2.png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Internal Piping Installation for Data Centre at Oregun, Lagos State.
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/ME_ PIC 5 (2).png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Gas distribution pipeline connection at Manufacturing company at Sagamu, Ogun State
                    </p>
                </div>
            </div>

            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/f62365e3-49f7-4db8-9dc9-fe891427251a (1).png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Internal Piping Installation for Data Centre at Oregun, Lagos State.
                    </p>
                </div>
            </div>


            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/replacement for cat pic 1 (1).png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Internal Piping Installation for Data Centre at Oregun, Lagos State.
                    </p>
                </div>
            </div>


            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/IMG_2916 1 (1).png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Horizontal Directional Drilling (HDD) services for state-owned Electricity Distribution company in
                        Cotonou, Benin Republic
                    </p>
                </div>
            </div>


            <div data-category="Gas projects" onmouseover="showDetails(this)" onmouseout="hideDetails(this)"
                class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/f3ea9dcb-16a9-4095-a6d0-95657844f8b7 (1).png') }}">
                <div
                    class="hidden cursor-pointer items-center w-full px-4 justify-center absolute bottom-5 details transition delay-[1]">
                    <p class="text-white bg-[#333333] bg-opacity-80 px-4 py-3 w-full rounded-lg text-xs">
                        Internal Piping Installation for Data Centre at Oregun, Lagos State.
                    </p>
                </div>
            </div>

        </div>
        </div>
    </section>

    @include('includes.call')
@endsection

@section('script')
    <script>
        function filterProjects(category) {
            const projects = document.querySelectorAll('.project');
            const buttons = document.querySelectorAll('.category-btn');

            projects.forEach(project => {
                const projectCategory = project.dataset.category;

                if (category === 'All projects' || projectCategory === category) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });

            buttons.forEach(button => {
                if (button.textContent.trim() === category) {
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
        }

        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.textContent.trim();
                filterProjects(category);
            });
        });
    </script>


    <script>
        function showDetails(element) {
            element.querySelector('.details').style.display = 'flex';
        }

        function hideDetails(element) {
            element.querySelector('.details').style.display = 'none';
        }
    </script>
@endsection
