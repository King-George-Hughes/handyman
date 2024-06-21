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

    <div class="hs-dropdown relative inline-flex">
      <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
        Actions
        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
      </button>
    
      <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" aria-labelledby="hs-dropdown-default">
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
          Newsletter
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
          Purchases
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
          Downloads
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
          Team Account
        </a>
      </div>
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