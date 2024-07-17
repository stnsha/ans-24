<x-app-layout>
    <div class="flex flex-col justify-start">
        <span class="font-medium text-sm items-center mb-4">Welcome back,
            {{ auth()->user()->name }}!</span>
        <div class="flex flex-col md:flex-row justify-between items-start mb-4">
            <div class="flex flex-col justify-start bg-[#F7F0F0] border-0 rounded-lg py-4 px-3 mr-4 w-full mb-2 md:mb-0">
                <div class="flex flex-row justify-start items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    {{-- <span class="font-semibold text-lg pl-3">100</span>
                    <span class="font-normal text-xs">days left</span> --}}
                    <span class="font-semibold text-sm pl-3">Countdown</span>
                </div>
                <div class="flex flex-col mt-4">
                    <div class="flex flex-row justify-between px-3 py-1">
                        <span class="font-medium text-xs italic">Merisik</span>
                        <span class="font-medium text-xs">10 days left</span>
                    </div>
                    <div class="flex flex-row justify-between px-3 py-1">
                        <span class="font-medium text-xs">Engagement</span>
                        <span class="font-medium text-xs">10 days left</span>
                    </div>
                    <div class="flex flex-row justify-between px-3 py-1">
                        <span class="font-medium text-xs">Solemnization</span>
                        <span class="font-medium text-xs">10 days left</span>
                    </div>
                    <div class="flex flex-row justify-between px-3 py-1">
                        <span class="font-medium text-xs">Reception</span>
                        <span class="font-medium text-xs">10 days left</span>
                    </div>
                </div>
                <div class="flex justify-end px-3 pt-1.5">
                    <a href="" class="font-normal text-xs text-[#D69595] hover:underline">Edit details</a>
                </div>
            </div>
            <div
                class="flex flex-col justify-start bg-[#F7F0F0] border-0 rounded-lg py-4 px-3 mr-4 w-full mb-2 md:mb-0">
                <div class="flex flex-row justify-start items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    {{-- <span class="font-semibold text-lg pl-3">100</span>
                    <span class="font-normal text-xs">days left</span> --}}
                    <span class="font-semibold text-sm pl-3">Total Savings</span>
                </div>
                <div class="flex flex-row justify-start items-start mt-4">
                    <span class="font-medium text-xs pr-1.5">RM</span>
                    <span class="font-bold text-2xl">16,000.00</span>
                </div>
                <div class="flex justify-start items-center mt-2">
                    <span class="font-normal text-[10px] text-gray-500">as of {{ Date('d M Y') }}</span>
                </div>
                <div class="flex flex-col mt-2">
                    <div class="flex flex-row justify-between items-start">
                        <span class="font-medium text-xs mr-4">Groom</span>
                        <span class="font-normal text-xs text-green-500">RM 13,500</span>
                    </div>
                    <div class="flex flex-row justify-between items-start">
                        <span class="font-medium text-xs">Bride</span>
                        <span class="font-normal text-xs text-red-500">RM 12,500</span>
                    </div>
                </div>
                <div class="flex justify-end pl-3 pt-1.5">
                    <a href="" class="font-normal text-xs text-[#D69595] hover:underline">Edit details</a>
                </div>
            </div>
            <div
                class="flex flex-col justify-start bg-[#F7F0F0] border-0 rounded-lg py-4 px-3 mr-4 w-full mb-2 md:mb-0">
                <div class="flex flex-row justify-start items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    {{-- <span class="font-semibold text-lg pl-3">100</span>
                    <span class="font-normal text-xs">days left</span> --}}
                    <span class="font-semibold text-sm pl-3">Total Spendings</span>
                </div>
                <div class="flex flex-row justify-start items-start mt-4">
                    <span class="font-medium text-xs pr-1.5">RM</span>
                    <span class="font-bold text-2xl">16,000.00</span>
                </div>
                <div class="flex justify-start items-center mt-2">
                    <span class="font-normal text-[10px] text-gray-500">as of {{ Date('d M Y') }}</span>
                </div>
                <div class="flex flex-col mt-2">
                    <div class="flex flex-row justify-between items-start pb-0.5">
                        <span class="font-medium text-xs mr-4">Venue</span>
                        <span class="font-normal text-xs text-red-500">RM 13,500.00</span>
                    </div>
                    <div class="flex flex-row justify-between items-start pb-0.5">
                        <span class="font-medium text-xs">Photographer</span>
                        <span class="font-normal text-xs text-red-500">RM 7,500.00</span>
                    </div>
                    <div class="flex flex-row justify-between items-start pb-0.5">
                        <span class="font-medium text-xs">Doorgifts</span>
                        <span class="font-normal text-xs text-red-500">RM 1,500.00</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex flex-col md:flex-row justify-between items-start mb-4">
            <div
                class="flex flex-col justify-start bg-[#F7F0F0] border-0 rounded-lg py-4 px-3 mr-4 w-full mb-2 md:mb-0">
                <div class="flex flex-row justify-start items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                    <span class="font-semibold text-sm pl-3">Important Dates</span>
                </div>
                <div
                    class="flex flex-row justify-between items-center py-4 px-3 bg-white border-l-8 border-l-red-500 rounded-lg mb-4">
                    <div class="flex flex-col">
                        <div class="flex flex-row mb-2">
                            <span
                                class="justify-center inline-flex items-center gap-x-1.5 py-0.5 px-3 rounded-full font-normal text-[10px] bg-green-100 text-green-800 mr-1.5">Reception</span>
                            <span
                                class="inline-flex items-center gap-x-1.5 py-0.5 px-3 rounded-full text-[10px] font-medium bg-red-100 text-red-800">
                                <span class="size-1.5 inline-block rounded-full bg-red-800"></span>
                                High Priority
                            </span>
                        </div>
                        <span class="font-semibold text-xs pb-1.5">Payment 3 of Rumah Abang Jamil</span>
                        <span class="font-normal text-xs pb-1.5">RM 4,500.00</span>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="font-medium text-slate-700 text-sm pb-0.5">20 April 2025</span>
                        <span class="font-normal text-red-500 text-xs pb-0.5 italic">10 days left</span>
                    </div>
                </div>
                <div
                    class="flex flex-row justify-between items-center py-4 px-3 bg-white border-l-8 border-l-yellow-500 rounded-lg mb-4">
                    <div class="flex flex-col">
                        <div class="flex flex-row mb-2">
                            <span
                                class="justify-center inline-flex items-center gap-x-1.5 py-0.5 px-3 rounded-full font-normal text-[10px] bg-green-100 text-green-800 mr-1.5">Reception</span>
                            <span
                                class="inline-flex items-center gap-x-1.5 py-0.5 px-3 rounded-full text-[10px] font-medium bg-yellow-100 text-yellow-800">
                                <span class="size-1.5 inline-block rounded-full bg-yellow-800"></span>
                                Neutral
                            </span>
                        </div>
                        <span class="font-semibold text-xs pb-1.5">Groom Stylist</span>
                        <span class="font-normal text-xs pb-1.5">RM 250.00</span>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="font-medium text-slate-700 text-sm pb-0.5">31 May 2025</span>
                        <span class="font-normal text-yellow-500 text-xs pb-0.5 italic">45 days left</span>
                    </div>
                </div>

            </div>
            <div
                class="flex flex-col justify-start bg-[#F7F0F0] border-0 rounded-lg py-4 px-3 mr-4 w-full mb-2 md:mb-0">
                <div class="flex flex-row justify-start items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <span class="font-semibold text-sm pl-3">To-do List</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
