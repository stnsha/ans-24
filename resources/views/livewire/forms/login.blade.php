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
                class="bg-[#F7F0F0] border-0 rounded-[15px] shadow-md mt-2 py-2 pr-10 pl-4 focus:outline-[#D69595]">
            @error('email')
                <span class="text-red-500 text-xs pt-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <div x-data="{ show: false }" class="flex flex-col mb-4">
                <span class="text-xs font-normal">Your Password</span>
                <div class="relative">
                    <input :type="show ? 'text' : 'password'" wire:model="password" id="password"
                        class="bg-[#F7F0F0] border-0 rounded-[15px] shadow-md mt-2 py-2 pr-10 pl-4 focus:outline-[#D69595]">
                    <button type="button" @click="show = !show" class="absolute top-0 end-0 px-3 py-5 rounded-e-md">
                        <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="#D69595" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                        <svg x-show="show" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="#D69595" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
                @error('password')
                    <span class="text-red-500 text-xs pt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="flex flex-col mb-4">
            @error('login')
                <span class="text-red-500 text-xs pb-2">{{ $message }}</span>
            @enderror
            <button type="submit"
                class="text-xs font-normal cursor-pointer border-0 rounded-[15px] bg-[#D69595] px-3 py-2 text-rose-950 hover:text-[#F7F0F0]">Let's
                go!</button>
            <a href="{{ route('auth.forgot_password') }}"
                class="text-xs font-normal pt-2 text-rose-950 hover:underline">or do you forget your
                password?</a>
        </div>
    </form>
</div>
