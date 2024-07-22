<div>
    <div id="hs-focus-management-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-semibold text-sm text-gray-800">
                        New Reference
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-focus-management-modal">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="p-4 overflow-y-auto">
                        <label for="input-label" class="block text-sm font-medium mb-2">Description <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="input-label" wire:model="description"
                            class="py-3 px-4 block w-full bg-slate-50 border-gray-500 rounded-lg text-sm focus:border-[#D69595] focus:ring-[#D69595]"
                            autofocus="">
                        <div>
                            @error('description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="p-4 overflow-y-auto">
                        <label for="input-label" class="block text-sm font-medium mb-2">Category <span
                                class="text-red-500">*</span></label>
                        <select wire:model="parent_id" id="parent_id"
                            class="py-2 px-3 pe-9 block w-full bg-slate-50 border-gray-500 rounded-lg text-sm focus:border-[#D69595] focus:ring-[#D69595] disabled:opacity-50 disabled:pointer-events-none">
                            <option value="0" selected>I'm creating a new category</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->description }}</option>
                            @endforeach
                        </select>
                        <div>
                            @error('parent_id')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-normal rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-focus-management-modal">
                            Close
                        </button>
                        <button type="submit"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-normal rounded-lg border border-transparent bg-[#D69595] text-[#F7F0F0] hover:text-rose-950 disabled:opacity-50 disabled:pointer-events-none">
                            Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
