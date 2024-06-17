@props(['job_types', 'regions', 'locations'])

<div class="mt-9 md:flex md:px-12 md:py-6 md:justify-between items-center w-full gap-5 mx-auto md:flex-row md:space-x-6">
    <div
        class="flex flex-col w-[200px] md:w-full space-y-4 md:space-y-0 mx-auto md:mx-0 mb-6 md:md-0 md:flex-row md:space-x-6">
        <select name="" id=""
            class="py-[0.4rem] px-[1rem] text-black border-2 border-brightRed rounded-lg focus:outline-none">
            <option>--- Job Type ---</option>
            @foreach ($job_types as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>

        <select name="" id=""
            class="py-[0.4rem] px-[1rem] text-black border-2 border-brightRed rounded-lg focus:outline-none">
            <option>--- Region ---</option>
            @foreach ($regions as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <select class="py-[0.4rem] px-[1rem] text-black border-2 border-brightRed rounded-lg focus:outline-none">
            <option selected="">--- Location ---</option>
            @foreach ($locations as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <h1 class="text-3xl font-bold text-center mb-6">Filter</h1>
</div>
