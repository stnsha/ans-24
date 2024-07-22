<x-app-layout>
    <div class="flex flex-col justify-start border-0 shadow-md rounded-lg bg-[#F7F0F0] py-4 px-3 mb-4">
        <span class="font-semibold text-xl mb-4 border-b-2 border-orange-500 w-fit">References</span>
        <ol class="flex items-center whitespace-nowrap mb-4">
            <li class="inline-flex items-center">
                <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                    href="#">
                    Dashboard
                </a>
                <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>
            <li class="inline-flex items-center">
                <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                    href="#">
                    References
                    <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-xs font-semibold text-gray-800 truncate" aria-current="page">
                All
            </li>
        </ol>
        <div class="flex flex-row justify-start items-center mb-2">
            <button type="button"
                class="text-xs font-normal cursor-pointer border-0 rounded-md bg-[#D69595] px-3 py-1.5 text-rose-950 hover:text-[#F7F0F0]"
                data-hs-overlay="#hs-focus-management-modal">New
                Reference</button>

            @livewire('references.modal')
        </div>
    </div>
    <div>
        @livewire('references.all-references')
    </div>
</x-app-layout>
