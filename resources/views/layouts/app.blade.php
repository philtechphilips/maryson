<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ getenv('APP_NAME') }} | Gas Energy - Power Energy - Others</title>
    <meta name="description"
        content="We power the world with energy and innovation by embracing a future with clean energy, efficiency, and progress to illuminate a brighter tomorrow.">
    <meta name="keywords"
        content="Maryson Energy, Exceptional energy solutions, Gas Energy, Power Energy, Maryson, Energy, Power.">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <link rel="stylesheet" href="{{ asset('styles/global.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/icon.png') }}" sizes="any">
    @vite('resources/css/app.css')
    <style>
        *,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,[type=button],[type=reset],[type=submit]{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.left-0{left:0}.left-10{left:2.5rem}.right-10{right:2.5rem}.right-5{right:1.25rem}.top-0{top:0}.top-10{top:2.5rem}.top-5{top:1.25rem}.z-50{z-index:50}.z-\[1000\]{z-index:1000}.mb-12{margin-bottom:3rem}.mb-20{margin-bottom:5rem}.mb-3{margin-bottom:.75rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-\[2px\]{margin-bottom:2px}.mt-2{margin-top:.5rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.block{display:block}.flex{display:flex}.hidden{display:none}.h-10{height:2.5rem}.h-80{height:20rem}.h-\[1px\]{height:1px}.h-\[460px\]{height:460px}.h-\[475px\]{height:475px}.h-\[700px\]{height:700px}.h-screen{height:100vh}.w-10{width:2.5rem}.w-32{width:8rem}.w-4{width:1rem}.w-40{width:10rem}.w-8{width:2rem}.w-\[14px\]{width:14px}.w-\[500px\]{width:500px}.w-full{width:100%}.translate-x-\[500px\]{--tw-translate-x: 500px;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.list-disc{list-style-type:disc}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-start{align-items:flex-start}.items-center{align-items:center}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-10{gap:2.5rem}.gap-14{gap:3.5rem}.gap-2{gap:.5rem}.gap-24{gap:6rem}.gap-4{gap:1rem}.gap-5{gap:1.25rem}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.overflow-hidden{overflow:hidden}.rounded-3xl{border-radius:1.5rem}.rounded-\[40px\]{border-radius:40px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.border{border-width:1px}.border-2{border-width:2px}.border-t-2{border-top-width:2px}.border-\[\#000\]{--tw-border-opacity: 1;border-color:rgb(0 0 0 / var(--tw-border-opacity))}.border-\[\#D2D2D2\]{--tw-border-opacity: 1;border-color:rgb(210 210 210 / var(--tw-border-opacity))}.border-\[\#E5E5E5\]{--tw-border-opacity: 1;border-color:rgb(229 229 229 / var(--tw-border-opacity))}.border-\[rgb\(210\,210\,210\)\]{--tw-border-opacity: 1;border-color:rgb(210 210 210 / var(--tw-border-opacity))}.border-opacity-30{--tw-border-opacity: .3}.bg-\[\#000E4B\]{--tw-bg-opacity: 1;background-color:rgb(0 14 75 / var(--tw-bg-opacity))}.bg-\[\#333333\]{--tw-bg-opacity: 1;background-color:rgb(51 51 51 / var(--tw-bg-opacity))}.bg-\[\#434343\]{--tw-bg-opacity: 1;background-color:rgb(67 67 67 / var(--tw-bg-opacity))}.bg-\[\#F0F0FF\]{--tw-bg-opacity: 1;background-color:rgb(240 240 255 / var(--tw-bg-opacity))}.bg-\[\#F2F2F2\]{--tw-bg-opacity: 1;background-color:rgb(242 242 242 / var(--tw-bg-opacity))}.bg-\[\#FFFFFF\],.bg-\[\#FFF\]{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-\[\#e5e5fd\]{--tw-bg-opacity: 1;background-color:rgb(229 229 253 / var(--tw-bg-opacity))}.bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-opacity-50{--tw-bg-opacity: .5}.bg-cover{background-size:cover}.bg-center{background-position:center}.bg-no-repeat{background-repeat:no-repeat}.p-10{padding:2.5rem}.p-5{padding:1.25rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.py-24{padding-top:6rem;padding-bottom:6rem}.py-28{padding-top:7rem;padding-bottom:7rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.py-44{padding-top:11rem;padding-bottom:11rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.pb-10{padding-bottom:2.5rem}.pl-4{padding-left:1rem}.pr-10{padding-right:2.5rem}.pr-5{padding-right:1.25rem}.pt-10{padding-top:2.5rem}.pt-12{padding-top:3rem}.pt-16{padding-top:4rem}.pt-2{padding-top:.5rem}.pt-20{padding-top:5rem}.pt-28{padding-top:7rem}.pt-4{padding-top:1rem}.pt-5{padding-top:1.25rem}.text-center{text-align:center}.font-\[\#434343\]{font-family:#434343}.font-\[Rubik\]{font-family:Rubik}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.uppercase{text-transform:uppercase}.leading-5{line-height:1.25rem}.leading-6{line-height:1.5rem}.tracking-\[-3px\]{letter-spacing:-3px}.text-\[\#1D1D1D\],.text-\[\#1d1d1d\]{--tw-text-opacity: 1;color:rgb(29 29 29 / var(--tw-text-opacity))}.text-\[\#434343\]{--tw-text-opacity: 1;color:rgb(67 67 67 / var(--tw-text-opacity))}.text-\[\#777777\]{--tw-text-opacity: 1;color:rgb(119 119 119 / var(--tw-text-opacity))}.text-\[\#8E8E8E\]{--tw-text-opacity: 1;color:rgb(142 142 142 / var(--tw-text-opacity))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.shadow-md{--tw-shadow: 0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1);--tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.transition-\[300ms\]{transition-property:.3s;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-\[300ms\]{transition-duration:.3s}.ease-in{transition-timing-function:cubic-bezier(.4,0,1,1)}.homepage-services-body-image-img{position:absolute;top:0;left:0;width:100%;height:100%;border:solid 2px transparent;transition:.3s;border-radius:24px}.homepage-services-body-image:hover .homepage-services-body-image-img{transform:scale(.94);border:solid 2px #fff}.homepage-services-body-image-see-more{position:absolute}.homepage-services-body-image a{color:#fff;display:flex;justify-content:space-between;width:100px;position:absolute;bottom:20px;right:20px}.homepage-services-body-image a p{color:#fff}.header-shadow{box-shadow:0 4px 8px #0000001a}.swiper .swiper-pagination-bullet{width:8px!important;height:8px!important;background-color:#fff!important;opacity:1!important}.swiper .swiper-pagination-bullet-active{width:24px!important;height:8px!important;border-radius:8px;background-color:#5555fe!important}.swiper-animate{opacity:0;transform:translateY(-50px);transition:opacity .5s ease,transform .5s ease}.swiper-animate.animate{opacity:1;transform:translateY(0)}.swiper-animate-two{opacity:0;transform:translateY(50px);transition:opacity .5s ease,transform .5s ease}.swiper-animate-two.animate{opacity:1;transform:translateY(0)}.swiper-animate-one{opacity:0;transition:opacity 3s}.swiper-animate-one.animate{opacity:1}.category-btn.active{color:#0000fe!important}.sub{display:none}.hover-icon{display:none!important}.hover\:scale-110:hover{--tw-scale-x: 1.1;--tw-scale-y: 1.1;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}@media (min-width: 768px){.md\:block{display:block}.md\:flex{display:flex}.md\:hidden{display:none}.md\:h-\[355px\]{height:355px}.md\:h-\[435px\]{height:435px}.md\:h-screen{height:100vh}.md\:w-36{width:9rem}.md\:w-\[153px\]{width:153px}.md\:w-\[300px\]{width:300px}.md\:w-\[304px\]{width:304px}.md\:w-\[336px\]{width:336px}.md\:w-\[340px\]{width:340px}.md\:w-\[350px\]{width:350px}.md\:w-\[400px\]{width:400px}.md\:w-\[406px\]{width:406px}.md\:w-\[408px\]{width:408px}.md\:w-\[431px\]{width:431px}.md\:w-\[480px\]{width:480px}.md\:w-\[500px\]{width:500px}.md\:w-\[792px\]{width:792px}.md\:w-fit{width:-moz-fit-content;width:fit-content}.md\:flex-row{flex-direction:row}.md\:gap-10{gap:2.5rem}.md\:gap-4{gap:1rem}.md\:px-10{padding-left:2.5rem;padding-right:2.5rem}.md\:px-16{padding-left:4rem;padding-right:4rem}.md\:px-20{padding-left:5rem;padding-right:5rem}.md\:px-28{padding-left:7rem;padding-right:7rem}.md\:px-40{padding-left:10rem;padding-right:10rem}.md\:px-64{padding-left:16rem;padding-right:16rem}.md\:px-8{padding-left:2rem;padding-right:2rem}.md\:px-\[200px\]{padding-left:200px;padding-right:200px}.md\:px-\[300px\]{padding-left:300px;padding-right:300px}.md\:px-\[400px\]{padding-left:400px;padding-right:400px}.md\:py-0{padding-top:0;padding-bottom:0}.md\:py-24{padding-top:6rem;padding-bottom:6rem}.md\:pr-4{padding-right:1rem}.md\:text-left{text-align:left}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}.md\:text-5xl{font-size:3rem;line-height:1}.md\:text-\[15px\]{font-size:15px}.md\:text-\[16px\]{font-size:16px}.md\:text-\[40px\]{font-size:40px}.md\:text-base{font-size:1rem;line-height:1.5rem}.md\:text-xl{font-size:1.25rem;line-height:1.75rem}.md\:leading-\[65px\]{line-height:65px}}@media (min-width: 1536px){.\32xl\:h-\[435px\]{height:435px}.\32xl\:w-\[438px\]{width:438px}}
    </style>
    <!-- Styles -->
</head>

<body>
    <div id="app">
        <main class="">
            @include('includes.navbar')
            @yield('content')
            @include('includes.footer')
        </main>
    </div>

    {{-- Active Page --}}
    <script>
        var currentPage = window.location.pathname;

        document.querySelectorAll('.list li').forEach(function(li) {

            var link = li.querySelector('a');
            console.log(link)
            if (link.getAttribute('href') === currentPage) {
                li.querySelector('div').style.display = 'block';
            } else {
                li.querySelector('div').style.display = 'none';
            }
        });
    </script>
    {{-- Active Page --}}

    {{-- Toggle Desktop Sidebar  --}}
    <script>
        const toggleButtons = document.querySelectorAll('.toggleButton');
        const hiddenDiv = document.getElementById('hiddenDiv');
        const sideBar = document.getElementById('sideBar');
    
        toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            hiddenDiv.classList.toggle('hidden');
            // sideBar.classList.toggle('hidden');
            sideBar.classList.toggle('translate-x-[500px]'); 
        })
    });
    </script>    
    {{-- Toggle Desktop Sidebar --}}

      {{-- Toggle Mobile Navigation  --}}
      <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');
    
        toggleButton.forEach(function(button) {
        button.addEventListener('click', function() {
            menu.classList.toggle('translate-x-[500px]'); 
        })
    });
    </script>    
    {{-- Toggle Mobile Navigation --}}

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    {{-- Swiper JS --}}
    @yield('script')
</body>

</html>
