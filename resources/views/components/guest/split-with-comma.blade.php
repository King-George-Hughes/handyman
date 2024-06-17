@props(['itemsCsv'])

@php
    $items = explode(',', $itemsCsv);
@endphp

<ul class="list-disc">
    @foreach ($items as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
