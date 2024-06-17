@props(['job'])

<a href="/job/{{$job->id}}/detail" class="flex flex-col items-center rounded-xl overflow-hidden sm:mb-[1rem] w-full shadow-lg group">
    <img src="images/eyram.jpg" class="w-full h-[300px] object-cover group-hover:scale-105 duration-300" alt="" />
    <div class="w-full p-2">
        <h2 class="text-lg font-bold space-x-2 mt-3">{{$job->title}}</h2>
        <h5 class="text-lg font-bold space-x-2 mt-3">
            <span
                class="rounded-md bg-brightRed hover:bg-brightRedLight px-3 text-white inline-block">{{$job->job_type->name}}</span><span>{{$job->user->name}}</span>
        </h5>
        <p class="text-sm p-1">
            {{trim($job->description)}}
        </p>
        <span class="text-sm p-1">
            <i class="fa-solid fa-location-dot fa-1x"></i> {{$job->region->name}}, {{$job->location->name}}
        </span>
    </div>
</a>
