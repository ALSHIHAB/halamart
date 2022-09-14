<div class="hidden shadow bg-sky-700 sm:block font-droidBold"> <!-- bg-[#ed1c24] -->
    <div class="screen">
        <div class="flex flex-col pb-1">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="/" class="flex items-center flex-shrink-0">
                    <img class="block w-auto h-24" src="{{ asset('storage/'.config('global.logo_'.App::getLocale())) }}"
                        alt="{{ config('global.name_' . App::getLocale()) }}" />
                </a>

                <div class="flex items-center justify-center flex-1 px-2">
                    <div class="w-full max-w-lg mx-auto">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 flex items-center pointer-events-none rtl:left-0 ltr:right-0 rtl:pl-3 ltr:pr-3">
                                <!-- Heroicon name: solid/search -->
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="search" name="search" wire:model="search"
                                class="block w-full py-2 leading-5 placeholder-gray-500 bg-white border border-gray-300 rounded-md focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="{{ __('Search') }}" type="search">
                        </div>
                    </div>
                </div>

                <div class="flex space-x-1 rtl:space-x-reverse">
                    @auth
                        <a href="{{ route('favourites') }}" class="flex items-center p-2 -m-2 group">
                            <svg class="flex-shrink-0 w-6 h-6 text-white group-hover:text-gray-200" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            <span class="text-sm font-medium text-white rtl:mr-1 ltr:ml-1 group-hover:text-gray-200">
                                @livewire('favourites-count')
                            </span>
                            {{-- <span class="sr-only">items in cart, view bag</span> --}}
                        </a>
                    @endauth
                    <button x-on:click="cartOpen = ! cartOpen" class="flex items-center p-2 -m-2 group"
                        x-on:click.away="cartOpen = false" x-on:keyup.escape="cartOpen = false">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-100 group-hover:text-gray-200" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span class="text-sm font-medium text-white rtl:mr-1 ltr:ml-1 group-hover:text-gray-200">
                            @livewire('cart-count')
                        </span>
                        {{-- <span class="sr-only">items in cart, view bag</span> --}}
                    </button>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="grid w-full grid-cols-5 bg-white rounded-md rounded-b-none">

                    <a href="/" x-on:click="activeMenu = 0"
                        class="inline-flex items-center justify-center py-4 text-sm font-medium rounded-md ltr:border-r rtl:border-l ltr:rounded-r-none rtl:rounded-l-none hover:bg-gray-100"
                        :class="activeMenu === 0 ? activeMenuClass : inactiveMenuClass">
                        {{ __('Shop') }}
                    </a>

                    <a href="{{ route('categories') }}" x-on:click="activeMenu = 1"
                        class="inline-flex items-center justify-center py-4 text-sm font-medium ltr:border-r rtl:border-l hover:bg-gray-100"
                        :class="activeMenu === 1 ? activeMenuClass : inactiveMenuClass"> {{ __('Categories') }}
                    </a>
                    <a href="{{ route('brands') }}" x-on:click="activeMenu = 2"
                        class="inline-flex items-center justify-center py-4 text-sm font-medium ltr:border-r rtl:border-l hover:bg-gray-100"
                        :class="activeMenu === 2 ? activeMenuClass : inactiveMenuClass"> {{ __('Brands') }}
                    </a>
                    <a href="{{ route('products') }}" x-on:click="activeMenu = 3"
                        class="inline-flex items-center justify-center py-4 text-sm font-medium ltr:border-r rtl:border-l hover:bg-gray-100"
                        :class="activeMenu === 3 ? activeMenuClass : inactiveMenuClass"> {{ __('Products') }}
                    </a>
                     {{-- <a href="{{ route('featured') }}" x-on:click="activeMenu = 4"
                        class="inline-flex items-center justify-center py-4 text-sm font-medium ltr:border-r rtl:border-l hover:bg-gray-100"
                        :class="activeMenu === 4 ? activeMenuClass : inactiveMenuClass"> {{ __('Featured') }}
                    </a> --}}
                    <a href="{{ route('promotions') }}" x-on:click="activeMenu = 5"
                        class="inline-flex items-center justify-center py-4 text-sm font-medium rounded-md ltr:border-l rtl:border-r ltr:rounded-l-none rtl:rounded-r-none hover:bg-gray-100"
                        :class="activeMenu === 5 ? activeMenuClass : inactiveMenuClass"> {{ __('Promotions') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
