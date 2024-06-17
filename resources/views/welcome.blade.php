<x-layout.layout>

    <!-- Hero -->
    <div class="relative h-[300px] md:h-[500px]">
        <img class="absolute w-full md:h-[500px] h-[300px] object-cover" src="images/illustration-intro.jpg"
            alt="" />
        <!-- Search container -->
        <div class="absolute w-full h-full flex justify-center items-center md:h-[500px] sm:h-[300px]">
            <div class="absolute flex space-x-2 justify-center">
                <div class="w-[70vw] flex border-2 rounded-full focus:outline-none">
                    <input type="text" name="" id=""
                        class="flex-1 py-1.5 px-3.5 md:py-3 border-0 rounded-full focus:outline-none text-black"
                        placeholder="Job..." />
                    <button
                        class="ml-[-28px] md:ml-[-70px] md:px-10 py-1.5 px-3.5 md:py-3.5 rounded-full text-white bg-brightRed hover:bg-brightRedLight">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter -->
    <x-guest.filter />
    

    <!-- Cards -->
    <section id="cards">
        <!-- Cards container -->
        <div class="max-w-6xl px-5 mx-auto md:flex-row md:space-x-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ($jobs as $job)
                    <x-guest.job-card :job="$job" />    
                @endforeach
                
                {{-- <x-guest.job-card />
                <x-guest.job-card />
                <x-guest.job-card />
                <x-guest.job-card />
                <x-guest.job-card /> --}}
            </div>
        </div>
    </section>

</x-layout.layout>