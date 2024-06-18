@props(['job_types', 'regions', 'locations'])

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
        </select>

        {{-- <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search Laravel Gigs..."
            value="{{ request('search') }}"
          /> --}}

        <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
            Filter
        </button>
    </form>

    <h1 class="text-3xl font-bold text-center mb-6">Filter</h1>
</div>
