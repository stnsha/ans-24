<div>
    <div class="flex flex-row justify-end items-center mb-2">
        <button type="button"
            class="text-xs font-normal cursor-pointer border-0 rounded-md bg-[#D69595] px-3 py-1.5 text-rose-950 hover:text-[#F7F0F0]"
            data-hs-overlay="#hs-focus-management-modal">New
            Reference</button>

        @livewire('references.modal')
    </div>
    <livewire:references-table />
</div>
