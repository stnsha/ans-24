<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>

<body class="font-inter antialiased bg-[#F7F0F0]">
    <header class="flex-wrap justify-center md:justify-center md:flex md:flex-nowrap z-50 w-full text-sm py-4 mb-8">
        <nav
            class="mt-6 relative max-w-auto justify-between bg-[#D69595] border-0 rounded-[36px] mx-2 py-3 px-4 md:flex md:items-center md:justify-center md:py-3 md:px-6 lg:px-8 xl:mx-auto">
            <div class="flex items-center justify-between">
                <img src="{{ asset('img/logo.svg') }}" alt="" class="w-[95px] mx-8 block md:hidden">
                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full border-0 hover:text-[#F7F0F0] hover:bg-rose-950 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="navbar-collapse-with-animation"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
                <div class="flex flex-col md:flex-row md:items-center md:justify-end py-2 md:py-0 md:ps-7">
                    <a href="" class="py-2 px-3 md:mx-8 font-normal text-rose-950 hover:text-[#F7F0F0]">Home</a>
                    <a href="" class="py-2 px-3 md:mx-8 font-normal text-rose-950 hover:text-[#F7F0F0]">About</a>
                    <img src="{{ asset('img/logo.svg') }}" alt="" class="w-[95px] mx-8 hidden md:block">
                    <a href=""
                        class="py-2 px-3 md:mx-8 font-normal text-rose-950 hover:text-[#F7F0F0]">Project</a>
                    <a href=""
                        class="py-2 px-3 md:mx-8 font-normal text-rose-950 hover:text-[#F7F0F0]">Contact</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="max-w-sm mx-auto my-auto md:max-w-xl">
        {{ $slot }}
    </div>

    <script src="./node_modules/preline/dist/preline.js"></script>
    @livewireScripts
</body>

</html>
