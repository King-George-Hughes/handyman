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

    @foreach ($query as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach
    <button type="submit"
        class="ml-[-28px] md:ml-[-70px] md:px-10 py-1.5 px-3.5 md:py-3.5 rounded-full text-white bg-brightRed hover:bg-brightRedLight">
        Search
    </button>
</form>