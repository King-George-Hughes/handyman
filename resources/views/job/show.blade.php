<x-layout.layout>
    <!-- Hero -->
    <div class="relative h-[300px] md:h-[500px]">
        <img class="absolute w-full md:h-[500px] h-[300px] object-cover"
            src={{ asset('/images/illustration-intro.jpg') }} alt="" />
        <!-- Search container -->
        <div class="absolute w-full h-full flex justify-center items-center md:h-[500px] sm:h-[300px]">
            <div class="absolute flex space-x-2 justify-center">
                <div class="w-[70vw] flex border-2 rounded-full focus:outline-none">
                    <input type="text" name="" id=""
                        class="flex-1 py-1.5 px-3.5 md:py-3 border-0 rounded-full focus:outline-none text-black"
                        placeholder="Job..." />
                    <button
                        class="ml-[-28px] md:ml-[-70px] md:px-10 py-1.5 px-3.5 md:py-3.5 rounded-full text-white bg-brightRed hover:bg-brightRedLight">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Details Page -->
    <h1 class="mb-[10px] p-6 text-3xl font-bold text-center">Details</h1>

    <div class="w-full grid grid-cols-6 px-6 gap-5">
        <div class="w-full col-span-6 md:col-span-4">
            {{-- <x-guest.split-single-image :images="$job->images" /> --}}
            <div>
                <h2 class="text-2xl font-bold">
                    {{ $job->job_type->name }},
                    <span class="underline">{{ $job->user->name }}</span>
                </h2>

                <span class="text-sm p-1 font-bold">
                    <i class="fa-solid fa-location-dot fa-1x mt-5"></i> {{ $job->region->name }},
                    {{ $job->location->name }}
                </span>
            </div>


            {{-- Owl Carousel Start --}}
            <div class="mt-4">
                <x-guest.split-single-image :images="$job->images" />
            </div>
            {{-- Owl Carousel End --}}
        </div>

        <div class="w-full col-span-6 md:col-span-2 flex-col md:justify-center">
            <div class="md:mt-0 md:p-5 md:border-[1px] h-fit rounded-md">
                <div class="sm:space-x-4 flex flex-col md:space-y-[10px] items-center">
                    <button class="bg-brightRedLight rounded-full px-20 py-2 text-white md:px-12">
                        <span><i class="fa-solid fa-envelope"></i>
                            <a href="mailto:{{ $job->user->email }}">{{ $job->user->email }}</a></span>
                    </button>
                    <a href="tel:{{ $job->user->contact }}"
                        class="bg-brightRed rounded-full px-14 py-2 text-white md:px-12">
                        <span class=""><i class="fa-solid fa-phone"></i> {{ $job->user->contact }}</span>
                    </a>
                </div>
            </div>
            <div class="mt-7 p-5 bg-darkGrayishBlue col-span-6 md:col-span-2 rounded-md">
                <p>
                    {{ $job->description }}
                </p>
            </div>
            <div class="mt-7 p-5 col-span-6 rounded-md border-[1px]">
                <h2 class="text-center font-bold">Safety Tips</h2>
                <ul class="list-disc p-5">
                    <li>Avoid paying inspection fees</li>
                    <li>If possible, go for viewing with friends</li>
                    <li>
                        Check everything carefully to make sure it's what you need
                    </li>
                    <li>Don't pay in advance if it's impossible to meet in person</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Map -->

    <div class="sm:mt-20 md:mt-10 w-full sm:h-96 md:h-[500px] p-6">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.680653713216!2d-0.2740382899723366!3d5.614089233040443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf997517d77cc7%3A0xd52c054ea61e55d!2sLapaz%20Race-course%20Last-stop%20Station!5e0!3m2!1sen!2sgh!4v1718121864149!5m2!1sen!2sgh"
            width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</x-layout.layout>
