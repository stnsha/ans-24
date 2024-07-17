<x-public-layout>
    <div class="flex flex-col mb-12">
        <span class="font-mono text-lg font-normal pb-4">Hi, I'm</span>
        <div class="flex justify-center items-center">
            <span class="font-mono text-5xl text-center md:text-9xl font-normal pb-4">{ ans }</span>
        </div>
        <span class="font-mono text-lg font-normal pb-4">from Malaysia and I'm a PHP web developer.</span>
        <div class="flex justify-center items-center my-8">
            <span class="font-inter text-xs font-normal">learn more about me <a href=""
                    class="underline font-semibold">here</a> or download my resume</span>
        </div>
        <div class="flex flex-row">
            <div class="mr-4">
                <img class="border-0 rounded-full w-24" src="{{ asset('img/me.jpg') }}" alt="">
            </div>
            <div class="flex flex-col w-full border border-[#BAA6A6] rounded-b-lg rounded-r-lg py-10 px-7">
                <div class="flex flex-row">
                    <span class="font-inter text-xs font-semibold pr-4">Siti Anasuha</span>
                    <span class="font-inter text-xs font-normal text-[#6D5F5F]">20:00</span>
                </div>
                <div
                    class="flex flex-row justify-between items-center bg-[#D9D9D9] border-0 rounded-lg mt-6 py-3.5 px-6">
                    <div class="flex flex-col">
                        <div class="flex flex-row justify-center items-center">
                            <img class="w-10 mr-2.5" src="{{ asset('img/pdf.png') }}" alt="">
                            <span class="font-inter text-xs font-semibold">siti_anasuha_resume_2024.pdf</span>
                        </div>
                        <span class="font-inter text-xs font-normal text-[#6D5F5F] pt-3">4 pages • 18 MB • PDF</span>
                    </div>
                    <div class="flex justify-center items-center">
                        <a href=""><img class="w-8" src="{{ asset('img/file.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end items-center mt-3.5">
            <span class="font-inter text-xs font-medium">psst! my resume is ats friendly 😜</span>
        </div>
    </div>
</x-public-layout>
