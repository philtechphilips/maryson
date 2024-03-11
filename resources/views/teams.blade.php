@extends('layouts.app')

@section('content')
    <section class="bg-[#FFFFFF] pt-28 pb-10 md:px-20 px-5">
        <div class="w-full flex flex-col gap-2 items-center justify-center">
            <h1 class="text-[#1d1d1d] md:text-4xl text-3xl font-bold uppercase text-center">Get to know amazing people</h1>
            <p class="text-[#434343] md:w-[792px] w-full text-center text-sm md:text-[16px] leading-6">Meet the leadership
                Team</p>
        </div>

        <div class="pt-20 flex md:flex-row flex-col flex-wrap items-start justify-center gap-10">
            <div class="team-details cursor-pointer" onmouseover="showSub(this)" onmouseout="hideSub(this)">
                <div class="md:w-[340px] w-full border-2 border-[rgb(210,210,210)] rounded-3xl border-opacity-30 main">
                    <img src="{{ asset('assets/Leader image component.png') }}" class="md:w-[340px] w-full">
                    <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Dr. Ayokunle Iyanda</h1>
                    <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Executive Director/CE</h1>
                </div>

                <div class="md:w-[340px] h-[475px] w-full shadow-md rounded-3xl border-opacity-30 sub">
                    <p class="text-[#777777] text-center pt-16 p-5">Ayokunle’s experience spans over 20 years of leading
                        business development, corporate finance, and strategy teams in reputable organizations, including
                        Seven Energy/Accugas, Oando Gas & Power, Leadway Assurance, and Sprint Corporation. He is a Nigerian
                        Institute of Management (Chartered) member and a Project Management Professional. He holds a
                        Bachelor’s in Business from Baldwin Wallace College, MBA in Finance from Indiana University-
                        Bloomington, and Doctorate in Business Administration from Walden University.</p>
                </div>
            </div>

            <div class="team-details cursor-pointer" onmouseover="showSub(this)" onmouseout="hideSub(this)">
                <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30 main">
                    <img src="{{ asset('assets/adewale.png') }}" class="md:w-[340px] w-full">
                    <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Egnr Adewale Olabulo</h1>
                    <h1 class="text-[#1D1D1D]  mb-12 text-center mt-2 font-bold">Director, Engineering</h1>
                </div>

                <div class="md:w-[340px] h-[475px] w-full shadow-md rounded-3xl border-opacity-30 sub">
                    <p class="text-[#777777] text-center pt-16 p-5">Adewale has over a decade of experience in the Oil and
                        Gas Industry. He brings experience across Opex Oil and Gas Resources, Oando Gas and Power Limited,
                        and Cakasa Oil and Gas Service Company. He holds a Bachelor in Engineering from the University of
                        Ilorin, and an MBA from Lagos State University. He is a COREN-registered member and an ISO-certified
                        Auditor. He is also a member of the Nigerian Institute of Chartered Management, the Nigerian Society
                        of Engineers, and the American Society of Mechanical Engineers (ASME).</p>
                </div>
            </div>

            <div class="team-details cursor-pointer" onmouseover="showSub(this)" onmouseout="hideSub(this)">
                <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30 main">
                    <img src="{{ asset('assets/team-3.png') }}" class="md:w-[340px] w-full">
                    <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Abisola Shogbola</h1>
                    <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Head, Operations</h1>
                </div>
                <div class="md:w-[340px] h-[475px] w-full shadow-md rounded-3xl border-opacity-30 sub">
                    <p class="text-[#777777] text-center pt-16 p-5">Abisola, a lawyer, has six years of experience in
                        operations and business development. She is well-versed in coordinating sales teams, negotiating
                        contract terms, and communicating with stakeholders. She holds an LLB in Law from Babcock
                        University, a BL from the Nigerian Law School. She is currently pursuing her MBA at Nexford
                        University and is a member of the Institute of Chartered Secretaries and Administrators of Nigeria.
                    </p>
                </div>
            </div>

            <div class="team-details cursor-pointer" onmouseover="showSub(this)" onmouseout="hideSub(this)">
                <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30 main">
                    <img src="{{ asset('assets/team-4.png') }}" class="md:w-[340px] w-full">
                    <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Seyi Osuntokun</h1>
                    <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Technical Adviser, Gas & Power</h1>
                </div>
                <div class="md:w-[340px] h-[475px] w-full shadow-md rounded-3xl border-opacity-30 sub">
                    <p class="text-[#777777] text-center pt-16 p-5">Seyi has over 20 years of engineering, design &
                        management experience in the Oil and Gas, Nuclear Power, and Manufacturing Industries in Canada and
                        America in organizations such as Colonial Pipeline, AREVA, Atomic Energy of Canada, Black &
                        McDonald, and United Wire & Cable. He is President of SONICS Services and Consulting, specializing
                        in Power Generation, Nuclear Power, and Software. He holds a Bachelor’s in Computer Science and
                        Physics from Dalhousie University and a Bachelor’s in Electrical Engineering from Ryerson
                        University. He’s also a member of the American Petroleum Institute, the American Association of Oil
                        Pipelines, and the Institute of Electrical and Electronic Engineers.</p>
                </div>
            </div>

            <div class="team-details cursor-pointer" onmouseover="showSub(this)" onmouseout="hideSub(this)">
                <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30 main">
                    <img src="{{ asset('assets/muiz.png') }}" class="md:w-[340px] w-full">
                    <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Muiz Salaam</h1>
                    <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Head, Energy Projects</h1>
                </div>
                <div class="md:w-[340px] h-[475px] w-full shadow-md rounded-3xl border-opacity-30 sub">
                    <p class="text-[#777777] text-center pt-16 p-5">Muiz has over 18 years of experience in Engineering
                        Management, Project management in facilities development in the real and energy sectors with UACN,
                        Oando Gas and Power, Oando Energy Resources, Oando Plc, Ledco Limited, and others. He holds a
                        Bachelor of Science degree from the University of Ibadan. He’s a Nigerian Society of Engineers
                        member, the Council for Regulation of Engineering in Nigeria, and the Project Management Institute.
                    </p>
                </div>
            </div>

            <div class="team-details cursor-pointer" onmouseover="showSub(this)" onmouseout="hideSub(this)">
                <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30 main">
                    <img src="{{ asset('assets/team-6.png') }}" class="md:w-[340px] w-full">
                    <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Kazeem Gbolagade</h1>
                    <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Head, Engineering Projects</h1>
                </div>
                <div class="md:w-[340px] h-[475px] w-full shadow-md rounded-3xl border-opacity-30 sub">
                    <p class="text-[#777777] text-center pt-16 p-5">Kazeem brings over ten years of experience in the Power
                        industry with the Lagos State Electricity Board (LSEB) as an Energy expert officer and Power systems
                        engineer. He has an HND in Electrical/Electronic Engineering from Lagos State Polytechnic and a PGD
                        in Electrical/Electronic Engineering from Ladoke Akintola University of Technology. He is a member
                        of the Nigerian Society of Engineers, the Chartered Institute of Environmental Health (CIEH), and a
                        member of the European Energy Sector.</p>
                </div>
            </div>

            <div class="team-details cursor-pointer" onmouseover="showSub(this)" onmouseout="hideSub(this)">
                <div class="md:w-[340px] w-full border-2 border-[#D2D2D2] rounded-3xl border-opacity-30 main">
                    <img src="{{ asset('assets/lydia.png') }}" class="md:w-[340px] w-full">
                    <h1 class="text-[#1D1D1D] text-lg text-center mt-6 font-medium">Idowu Lydia Folashade</h1>
                    <h1 class="text-[#1D1D1D] mt-2 mb-12 text-center font-bold">Head of Account</h1>
                </div>
                <div class="md:w-[340px] h-[475px] w-full shadow-md rounded-3xl border-opacity-30 sub">
                    <p class="text-[#777777] text-center pt-16 p-5">A member of the Association of Accounting Technicians
                        AAT, ACA. She is an Accounting Graduate of Yaba College of Technology. 5 years’ experience in
                        accounting. She is a highly organized Accounting Professional with a record of success helping
                        clients balance books and find discrepancies. She is also skilled in reconciling accounts and
                        lowering cost.</p>
                </div>
            </div>

        </div>
    </section>


    @include('includes.call')
@endsection

@section('script')
    <script>
        function showSub(element) {
            element.querySelector('.main').style.display = 'none';
            element.querySelector('.sub').style.display = 'block';
        }

        function hideSub(element) {
            element.querySelector('.sub').style.display = 'none';
            element.querySelector('.main').style.display = 'block';
        }
    </script>
@endsection
