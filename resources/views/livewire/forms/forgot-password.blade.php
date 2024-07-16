<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="submit">
        <div class="flex flex-col mb-4">
            <span class="text-xs font-normal">Your Email</span>
            <input type="text" wire:model="email" id="email"
                class="bg-[#F7F0F0] border-0 rounded-[15px] shadow-md mt-2 py-2 focus:outline-[#D69595]">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <button type="submit"
                class="text-xs font-normal cursor-pointer border-0 rounded-[15px] bg-[#D69595] px-3 py-2 text-rose-950 hover:text-[#F7F0F0]">Send
                email</button>
            <a href="{{ route('auth.login') }}" class="text-xs font-normal pt-2 text-rose-950 hover:underline">Back to login</a>
        </div>
    </form>
</div>
