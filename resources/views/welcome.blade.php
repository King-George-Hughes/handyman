<x-layout.layout>
    <!-- Hero -->
    <div class="relative h-[300px] md:h-[400px]">
        <img class="absolute w-full md:h-[400px] h-[300px] object-cover" src="images/illustration-intro.jpg"
            alt="" />
        <div class="absolute w-full h-full flex justify-center items-center md:h-[400px] sm:h-[300px]">
            <div class="absolute flex space-x-2 justify-center">
                <x-guest.search />
            </div>
        </div>
    </div>

    <!-- Filter -->
    <div class="retaltive w-full md:px-12 inline-flex items-center justify-between flex-col md:flex-row mt-10">
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
