@props(['images'])

@php
    $image = explode(',', $images);
@endphp

<img class="rounded-md" src={{ $images ? asset('storage/' . $image[0]) : asset('/images/george.jpg') }} alt="" />
