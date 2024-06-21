<x-layout.layout>
    <!-- Hero -->
    <div class="relative h-[300px] md:h-[400px]">
        <img class="absolute w-full md:h-[400px] h-[300px] object-cover" src="images/illustration-intro.jpg"
            alt="" />
        <div class="absolute w-full h-full flex justify-center items-center md:h-[400px] sm:h-[300px]">
            <div class="absolute flex space-x-2 justify-center">
                <form action="/" class="w-[70vw] flex border-2 rounded-full focus:outline-none">
                  <div class="absolute top-2 md:top-4 left-5">
                    <i class="fa fa-search text-brightRed z-20 hover:text-brightRedLight"></i>
                </div>
                    <input type="text" name="search" id="" value="{{ request('search') }}"
                        class="flex-1 py-1.5 px-12 md:py-3 border-0 rounded-full focus:outline-none text-black"
                        placeholder="Job..." />
                        @php
                            $query = request()->except('search');
                        @endphp
                        
                        @foreach($query as $key => $value)
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endforeach
                    <button type="submit"
                        class="ml-[-28px] md:ml-[-70px] md:px-10 py-1.5 px-3.5 md:py-3.5 rounded-full text-white bg-brightRed hover:bg-brightRedLight">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Filter -->
    <div class="retaltive w-full md:px-10 inline-flex items-center justify-between flex-col md:flex-row mt-10">
        <x-guest.filter :job_types="$job_types" :regions="$regions" :locations="$locations" />

        <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
            Search
        </button>
    </div>

    <!-- Cards -->
    <section id="cards" class="w-full md:px-6 gap-5 mt-20">
        <!-- Cards container -->
        <div class="w-full px-5 mx-auto md:flex-row md:space-x-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ($jobs as $job)
                    <x-guest.job-card :job="$job" />
                @endforeach
            </div>

            <div class="mt-6 p-5">
                {{ $jobs->links() }}
            </div>
        </div>
    </section>

</x-layout.layout>
