@props(['job_types', 'regions', 'locations'])

{{-- <div class="mt-9 md:flex md:px-12 md:py-6 md:justify-between items-center w-full gap-5 mx-auto md:flex-row md:space-x-6"> --}}
<div class="h-fit md:h-10 flex flex-col md:px-12 md:justify-between items-center gap-2 mx-auto md:flex-row md:space-x-2">
    <div class="hs-dropdown relative inline-flex">
        <button id="hs-dropdown-default" type="button"
            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            @php
                $selectedJobType = $job_types->firstWhere('id', request('job_type_id'));
            @endphp
            {{ $selectedJobType ? $selectedJobType->name : 'Category' }}
            <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
        </button>

        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
            aria-labelledby="hs-dropdown-default">
            @php
                $query = request()->all();
                unset($query['job_type_id']);
                $url = url()->current() . '?' . http_build_query($query);
            @endphp
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 {{ request('job_type_id') ? '' : 'bg-gray-200 dark:bg-neutral-600' }}" href="{{ $url }}">
                All
            </a>

            @foreach ($job_types as $item)
                @php
                    $query = request()->all();
                    $query['job_type_id'] = $item->id;
                    $url = url()->current() . '?' . http_build_query($query);
                @endphp

                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 {{ request('job_type_id') == $item->id ? 'bg-gray-200 dark:bg-neutral-600' : '' }}" href="{{ $url }}" {{-- href="?job_type_id={{ $item->id }}" --}}>
                    {{ $item->name }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="hs-dropdown relative inline-flex">
        <button id="hs-dropdown-default" type="button"
            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            @php
                $selectedRegion = $regions->firstWhere('id', request('region_id'));
            @endphp
            {{ $selectedRegion ? $selectedRegion->name : 'Region' }}
            <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
        </button>

        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
            aria-labelledby="hs-dropdown-default">
            @php
                $query = request()->all();
                unset($query['region_id']);
                $url = url()->current() . '?' . http_build_query($query);
            @endphp
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 {{ request('region_id') ? '' : 'bg-gray-200 dark:bg-neutral-600' }}" href="{{ $url }}">
                All
            </a>

            @foreach ($regions as $item)
                @php
                    $query = request()->all();
                    $query['region_id'] = $item->id;
                    $url = url()->current() . '?' . http_build_query($query);
                @endphp

                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 {{ request('region_id') == $item->id ? 'bg-gray-200 dark:bg-neutral-600' : '' }}"
                    href="{{ $url }}">
                    {{ $item->name }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="hs-dropdown relative inline-flex">
        <button id="hs-dropdown-default" type="button"
            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            @php
                $selectedLocation = $locations->firstWhere('id', request('location_id'));
            @endphp
            {{ $selectedLocation ? $selectedLocation->name : 'Location' }}
            <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
        </button>

        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
            aria-labelledby="hs-dropdown-default">
            @php
                $query = request()->all();
                unset($query['location_id']);
                $url = url()->current() . '?' . http_build_query($query);
            @endphp
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 {{ request('location_id') ? '' : 'bg-gray-200 dark:bg-neutral-600' }}" href="{{ $url }}">
                All
            </a>

            @foreach ($locations as $item)
                @php
                    $query = request()->all();
                    $query['location_id'] = $item->id;
                    $url = url()->current() . '?' . http_build_query($query);
                @endphp

                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 {{ request('location_id') == $item->id ? 'bg-gray-200 dark:bg-neutral-600' : '' }}"
                    href="{{ $url }}">
                    {{ $item->name }}
                </a>
            @endforeach
        </div>
    </div>

    {{-- <select name="job_type_id" id="job_type_id" class="py-[0.4rem] px-[1rem] text-black rounded-lg focus:outline-none">
        <option value="">--- Job Type ---</option>
        @foreach ($job_types as $item)
            <option {{ request('job_type_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                {{ $item->name }}
            </option>
        @endforeach
    </select>

    <select name="region_id" id="" class="py-[0.4rem] px-[1rem] text-black rounded-lg focus:outline-none">
        <option value="">--- Region ---</option>
        @foreach ($regions as $item)
            <option value="{{ $item->id }}" {{ request('region_id') == $item->id ? 'selected' : '' }}>
                {{ $item->name }}</option>
        @endforeach
    </select>

    <select name="location_id" class="py-[0.4rem] px-[1rem] text-black rounded-lg focus:outline-none">
        <option value="">--- Location ---</option>
        @foreach ($locations as $item)
            <option value="{{ $item->id }}" {{ request('location_id') == $item->id ? 'selected' : '' }}>
                {{ $item->name }}</option>
        @endforeach
    </select> --}}
</div>


{{-- @props(['job_types', 'regions', 'locations'])

<div class="mt-9 md:flex md:px-12 md:py-6 md:justify-between items-center w-full gap-5 mx-auto md:flex-row md:space-x-6">
    <form action="/"
        class="flex flex-col w-[200px] md:w-full space-y-4 md:space-y-0 mx-auto md:mx-0 mb-6 md:md-0 md:flex-row md:space-x-6">
        <select name="job_type_id" id="job_type_id"
            class="py-[0.4rem] px-[1rem] text-black border-2 border-brightRed rounded-lg focus:outline-none">
            <option value="">--- Job Type ---</option>
            @foreach ($job_types as $item)
                <option {{ request('job_type_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                    {{ $item->name }}
                </option>
            @endforeach
        </select>

        <select name="region_id" id=""
            class="py-[0.4rem] px-[1rem] text-black border-2 border-brightRed rounded-lg focus:outline-none">
            <option value="">--- Region ---</option>
            @foreach ($regions as $item)
                <option value="{{ $item->id }}" {{ request('region_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}</option>
            @endforeach
        </select>

        <select name="location_id"
            class="py-[0.4rem] px-[1rem] text-black border-2 border-brightRed rounded-lg focus:outline-none">
            <option value="">--- Location ---</option>
            @foreach ($locations as $item)
                <option value="{{ $item->id }}" {{ request('location_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}</option>
            @endforeach
        </select> --}}

{{-- <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search Laravel Gigs..."
            value="{{ request('search') }}"
          /> --}}

{{-- <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
            Filter
        </button>
    </form>

    <h1 class="text-3xl font-bold text-center mb-6">Filter</h1>
</div> --}}
