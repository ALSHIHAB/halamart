<x-guest-layout>
    <!-- About -->
    <!-- Hero section -->
    <div class="relative">
        <div class="absolute inset-x-0 bottom-0 bg-gray-100 h-1/2"></div>
        <div class="w-full">
            <div class="relative shadow-xl sm:overflow-hidden">
                <div class="absolute inset-0">
                    <img class="object-cover w-full h-full"
                        src="{{ asset('storage/yemen-socotra.jpg') }}"
                        alt="Yemen Socotra island">
                    <div class="absolute inset-0 bg-gradient-to-r from-sky-800 to-sky-700 mix-blend-multiply">
                    </div>
                </div>
                <div class="relative px-4 py-16 sm:px-6 sm:py-32 lg:py-44 lg:px-8">
                    <h1 class="text-2xl font-bold tracking-tight text-center sm:text-3xl lg:text-4xl">
                    <span class="block text-white">{{config('global.name_' . App::getLocale(), 'Bintaha') }}</span>
                        <span
                            class="block text-indigo-200">{{ __('A leading company in importing & distributing various foodstuffs') }}
                        </span>
                    </h1>
                    <p class="max-w-lg mx-auto mt-6 text-xl text-center text-indigo-200 sm:max-w-3xl">
                        {{ __('The company distributes its diversified products through partial and wholesales.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <x-home.features />
    <!-- Our branches -->
    <x-home.branches />
    <!-- Brands -->
    <x-home.brands />
</x-guest-layout>
