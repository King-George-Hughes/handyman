<x-layout.layout>

    <!-- Hero -->
    <div class="relative h-[300px] md:h-[400px]">
        <img class="absolute w-full md:h-[400px] h-[300px] object-cover" src="images/illustration-intro.jpg"
            alt="" />
        <!-- Search container -->
        {{-- <div class="absolute w-full h-full flex justify-center items-center md:h-[500px] sm:h-[300px]"> --}}
            {{-- <div class="absolute flex space-x-2 justify-center"> --}}
                {{-- <div class="w-[70vw] flex border-2 rounded-full focus:outline-none"> --}}
                    <form action="/" class="absolute w-full max-w-[70vw] mx-auto h-full flex justify-center items-center md:h-[400px] sm:h-[300px]">
                        <div class="relative w-full border-2 border-brightRed m-4 h-52 md:h-fit rounded-lg outline-none focus:outline-none">
                          <div class="absolute top-4 left-3">
                            <i class="fa fa-search text-brightRed z-20 hover:text-brightRedLight"></i>
                          </div>
                          <input
                            type="text"
                            name="search"
                            class="h-14 w-full pl-10 pr-20 border-none rounded-lg z-0 outline-none focus:outline-none"
                            placeholder="Search job..."
                            value="{{ request('search') }}"
                          />
                          
                          <div class="absolute top-2 right-2 inline-flex flex-col md:flex-row">
                            <x-guest.filter :job_types="$job_types" :regions="$regions" :locations="$locations" />
                
                            <button
                              type="submit"
                              class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                            >
                              Search
                            </button>
                          </div>
                        </div>
                    </form>
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </div>

    <!-- Filter -->
    {{-- <form action="/" class="px-10 my-10 ">
        <div class="relative border-2 border-brightRed m-4 h-52 md:h-fit rounded-lg outline-none focus:outline-none">
          <div class="absolute top-4 left-3">
            <i class="fa fa-search text-brightRed z-20 hover:text-brightRedLight"></i>
          </div>
          <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 border-none rounded-lg z-0 outline-none focus:outline-none"
            placeholder="Search job..."
            value="{{ request('search') }}"
          />
          
          <div class="absolute top-2 right-2 inline-flex flex-col md:flex-row">
            <x-guest.filter :job_types="$job_types" :regions="$regions" :locations="$locations" />

            <button
              type="submit"
              class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
            >
              Search
            </button>
          </div>
        </div>
    </form> --}}
    

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
                {{$jobs->links()}}
            </div>
        </div>
    </section>

</x-layout.layout>