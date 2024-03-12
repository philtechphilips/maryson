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
            <div data-category="Gas projects" class="2xl:w-[438px] project 2xl:h-[435px]  md:w-[350px] md:h-[355px] w-full relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/5e888929-4fca-4f66-928e-08bb18abcec8 1.png') }}">
            </div>

            <div  data-category="Power projects" class=" 2xl:w-[438px] 2xl:h-[435px] project  md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px]  md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 2.png') }}">
            </div>


            <div  data-category="Other projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 3.png') }}">
            </div>

            <div  data-category="Power projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 4.png') }}">
            </div>

            <div  data-category="Other projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 5.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 6.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 7.png') }}">
            </div>

            <div  data-category="Power projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 8.png') }}">
            </div>

            <div  data-category="Other projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 9.png') }}">
            </div>

            <div  data-category="Power projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 10.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 11.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 12.png') }}">
            </div>

            <div  data-category="Other projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 13.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 14.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 15.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 16.png') }}">
            </div>

            <div  data-category="Other projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 17.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 18.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 19.png') }}">
            </div>

            <div  data-category="Other projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 20.png') }}">
            </div>

            <div  data-category="Gas projects" class="w-full 2xl:w-[438px] 2xl:h-[435px] project md:w-[350px] md:h-[355px] relative overflow-hidden rounded-3xl">
                <img class=" hover:scale-110 transition-[300ms] w-full 2xl:w-[438px] 2xl:h-[435px] md:w-[350px] md:h-[435px]"
                    src="{{ asset('assets/project 21.png') }}">
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
