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
    <h1 class="mb-[10px] p-6 text-3xl font-bold text-center mt-10"><span class="text-brightRed">{{$user->name}}'s</span> profile</h1>

    <div class="w-full px-6">
        <div class="mt-5 mx-auto bg-brightRed w-[300px] h-[300px] rounded-full overflow-hidden">
            <img src={{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/eyram.jpg') }} alt="avatar" class="w-full h-full object-cover">
        </div>

        @php
            $interval = Carbon\Carbon::parse($user->created_at)->toFormattedDateString();
        @endphp

        <div class="w-full mx-auto text-center space-y-3 mt-10">
            <h4 class="text-2xl font-semibold text-blue-500">{{$user->email}}</h4>
            <h4 class="text-2xl font-semibold">{{$user->contact}}</h4>
            <h4 class="text-xl font-semibold"><span class="text-gray-500 text-md">Joined on:</span> <span class="text-brightRedLight underline">{{ $interval }}</span></h4>
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
