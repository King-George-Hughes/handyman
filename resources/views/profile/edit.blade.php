{{-- <x-app-layout> --}}
<x-layout.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg relative">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <div class="mt-10 lg:mt-0 mx-auto lg:mx-0 lg:absolute right-[10%] top-[25%] bg-brightRed w-[300px] h-[300px] rounded-full overflow-hidden">
                    <img src={{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/eyram.jpg') }} alt="avatar" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-layout.layout>
