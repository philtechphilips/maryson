@extends('layouts.app')

@section('content')
    <section class="bg-[#FFFFFF] pt-28 pb-10 md:px-20 px-5 flex flex-col items-center">
        <div class="w-full flex flex-col gap-2 items-center justify-center">
            <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">Project portfolio</h1>
        </div>

        <div class="flex gap-8 pt-12">
            <p class="text-[#434343] md:text-base text-sm text-center category-btn cursor-pointer active">All projects</p>
            <p class="text-[#434343] md:text-base text-sm text-center category-btn cursor-pointer">Gas projects</p>
            <p class="text-[#434343] md:text-base text-sm text-center category-btn cursor-pointer">Power project</p>
            <p class="text-[#434343] md:text-base text-sm text-center category-btn cursor-pointer">Other project</p>
        </div>

        <div class="flex py-10 md:flex-row flex-col flex-wrap gap-6 justify-center">
            <div data-category="Gas projects" class="2xl:w-[438px] project 2xl:h-[435px]  md:w-[350px] md:h-[355px] w-full relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/5e888929-4fca-4f66-928e-08bb18abcec8 1.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Power project" class=" 2xl:w-[438px] 2xl:h-[435px] project  md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 2.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Power
                    project</p>
            </div>


            <div  data-category="Other project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 3.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Other
                    project</p>
            </div>

            <div  data-category="Power project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 4.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Power
                    project</p>
            </div>

            <div  data-category="Other project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 5.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Other
                    project</p>
            </div>

            <div  data-category="Gas project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 6.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Gas project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 7.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Power project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 8.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Power
                    project</p>
            </div>

            <div  data-category="Other project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 9.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Other
                    project</p>
            </div>

            <div  data-category="Power project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 10.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Power
                    project</p>
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 11.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 12.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Other project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 13.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Other
                    project</p>
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 14.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 15.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 16.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Other project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 17.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Other
                    project</p>
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 18.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 19.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
            </div>

            <div  data-category="Other project" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 20.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Other
                    project</p>
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 21.png') }}">
                <p class="absolute text-white bg-[#333333] px-2 rounded-full z-50 top-5 right-5 text-sm font-medium">Gas
                    project</p>
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
@endsection
