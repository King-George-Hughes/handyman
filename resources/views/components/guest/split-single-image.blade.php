@props(['images'])

@php
    $image = explode(',', $images);
@endphp

{{-- <img class="rounded-md h-full object-contain" src={{ $images ? asset('storage/' . $image[0]) : asset('/images/george.jpg') }} alt="" /> --}}

<div class="owl-carousel owl-theme my-5">
    @foreach ($image as $img)
        <div class="wwp-container">
            <div class="w-full h-[400px] bg-gray-100 rounded-md">
                <img class="h-full object-contain"
                    src={{ $images ? asset('storage/' . $img) : asset('/images/george.jpg') }} alt="" />
            </div>

        </div>
    @endforeach
</div>
