<div>
    <form id="general_settings_form" class="relative" wire:submit.prevent="saveGeneral">
        <div class="max-w-sm mt-4">
            <h1 class="py-2">{{ __('Logo') }}</h1>
            <x-upload-image :image="$this->logo" :name="'logo'" :width="'full'" />
        </div>
        <div class="max-w-sm mt-4">
            <h1 class="py-2">{{ __('Icon') }}</h1>
            <x-upload-image :image="$this->icon" :name="'icon'" />
        </div>
        <div class="grid grid-cols-1 gap-2 divide-x-2 lg:grid-cols-3 rtl:divide-x-reverse">
            <!-- Contact form -->
            <div class="mt-6 lg:col-span-2">
                <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                    <div class="sm:col-span-2">
                        <label for="name_en"
                            class="block text-sm font-medium text-gray-700">{{ __('Name') }}&nbsp;{{ __('English') }}</label>
                        <div>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input type="text" wire:model.defer="settings.name_en" required
                                    class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Name" aria-describedby="name_en">
                                <div
                                    class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                    <span class="text-gray-500 sm:text-xs" id="name_en">
                                        {{ __('Required') }}
                                    </span>
                                </div>
                            </div>
                            @error('settings.name')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name_ar"
                            class="block text-sm font-medium text-gray-700">{{ __('Name') }}&nbsp;{{ __('Arabic') }}</label>
                        <div>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input type="text" wire:model.defer="settings.name_ar" required
                                    class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="{{ __('Name') }}" aria-describedby="name_ar">
                                <div
                                    class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                    <span class="text-gray-500 sm:text-xs" id="name_ar">
                                        {{ __('Required') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @error('settings.name_ar')
                            <p class="mt-2 text-xs text-red-600">{{ __($message) }}</p>
                        @enderror
                    </div>

                    <div x-cloak class="sm:col-span-2">
                        <div class="flex justify-between">
                            <label for="description_en" class="block text-sm font-medium text-gray-700">
                                {{ __('Description') }} {{ __('English') }}
                            </label>
                            <p class="text-xs text-gray-500 peer-optional:hidden">{{ __('Required') }}</p>
                        </div>
                        <div>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <textarea rows="3" wire:model.defer="settings.description_en" required
                                    class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="{{ __('Short Description') }}" aria-describedby="description_en">
                                </textarea>
                            </div>
                            @error('settings.description_en')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div x-cloak class="sm:col-span-2">
                        <div class="flex justify-between">
                            <label for="description_ar" class="block text-sm font-medium text-gray-700">
                                {{ __('Description') }} {{ __('Arabic') }}
                            </label>
                            <p class="text-xs text-gray-500 peer-optional:hidden">{{ __('Required') }}</p>
                        </div>

                        <div>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <textarea rows="3" wire:model.defer="settings.description_ar" required
                                    class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="{{ __('Short Description') }}" aria-describedby="description_ar">
                                </textarea>
                            </div>

                            @error('settings.description_ar')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div x-cloak class="sm:col-span-2">
                        <div class="flex justify-between">
                            <label for="keywords_en" class="block text-sm font-medium text-gray-700">{{ __('Keywords') }}
                                {{ __('English') }}
                                <span class="text-xs text-gray-500">({{ __('Separated by comma') }})

                                </span>
                            </label>
                            <p class="text-xs text-gray-500 peer-optional:hidden">{{ __('Required') }}</p>
                        </div>
                        <div>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <textarea rows="3" wire:model.defer="settings.keywords_en" required
                                    class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="{{ __('Halamart, store, wholesale') }}" aria-describedby="tags_en">
                                </textarea>
                            </div>
                            @error('settings.tags_en')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div x-cloak class="sm:col-span-2">
                        <div class="flex justify-between">
                            <label for="keywords_ar" class="block text-sm font-medium text-gray-700">{{ __('Keywords') }}
                                {{ __('Arabic') }}
                                <span class="text-xs text-gray-500">
                                    ({{ __('Separated by comma') }})
                                </span>
                            </label>
                            <p class="text-xs text-gray-500 peer-optional:hidden">{{ __('Required') }}</p>
                        </div>
                        <div>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <textarea rows="3" wire:model.defer="settings.keywords_ar" required
                                    class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="{{ __('Halamart, store, wholesale') }}" aria-describedby="tags_ar">
                                </textarea>
                            </div>
                            @error('settings.tags_ar')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="contact"
                            class="block text-sm font-medium text-gray-700">{{ __('Contact Number') }}</label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <input type="number" wire:model.defer="settings.contact"
                                class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="0097671175643" aria-describedby="contact">
                            <div
                                class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                <span class="text-gray-500 sm:text-xs" id="contact">
                                    {{ __('Required') }}
                                </span>
                            </div>
                        </div>
                        @error('settings.contact')
                            <p class="mt-2 text-xs text-red-600">{{ __($message) }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email"
                            class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <input type="email" wire:model.defer="settings.email"
                                class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="example@halamart.net" aria-describedby="email">
                            <div
                                class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                <span class="text-gray-500 sm:text-xs" id="email">
                                    {{ __('Required') }}
                                </span>
                            </div>
                        </div>
                        @error('settings.email')
                            <p class="mt-2 text-xs text-red-600">{{ __($message) }}</p>
                        @enderror
                    </div>
                    <!-- Address English -->
                    <div class="sm:col-span-2">
                        <h2>{{ __('Address') }} {{ __('English') }}</h2>
                        <div class="grid sm:grid-cols-3 sm:gap-3">
                            <div>
                                <label for="country_en" class="block text-sm font-medium text-gray-700">Country
                                </label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="text" wire:model.defer="settings.country_en"
                                        class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Yemen" aria-describedby="country_en">
                                    <div
                                        class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                        <span class="text-gray-500 sm:text-xs" id="country_en">
                                            {{ __('Required') }}
                                        </span>
                                    </div>
                                </div>
                                @error('settings.country_en')
                                    <p class="mt-2 text-xs text-red-600">{{ __($message) }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="city_en" class="block text-sm font-medium text-gray-700">City
                                </label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="text" wire:model.defer="settings.city_en"
                                        class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Taiz" aria-describedby="city_en">
                                    <div
                                        class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                        <span class="text-gray-500 sm:text-xs" id="city_en">
                                            {{ __('Required') }}
                                        </span>
                                    </div>
                                </div>
                                @error('settings.city_en')
                                    <p class="mt-2 text-xs text-red-600">{{ __($message) }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="post_code"
                                    class="block text-sm font-medium text-gray-700">{{ __('Post Code') }}
                                </label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="text" wire:model.defer="settings.post_code"
                                        class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="53000" aria-describedby="post_code">
                                    <div
                                        class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                        <span class="text-gray-500 sm:text-xs" id="post_code">
                                            {{ __('Required') }}
                                        </span>
                                    </div>
                                </div>
                                @error('settings.post_code')
                                    <p class="mt-2 text-xs text-red-600">{{ __($message) }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Address Arabic -->
                    <div class="sm:col-span-2">
                        <h2>{{ __('Address') }} {{ __('Arabic') }}</h2>
                        <div class="grid gap-3 sm:grid-cols-2">
                            <div>
                                <label for="country_ar"
                                    class="block text-sm font-medium text-gray-700">{{ __('Country') }}
                                </label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="text" wire:model.defer="settings.country_ar"
                                        class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="اليمن" aria-describedby="country_ar">
                                    <div
                                        class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                        <span class="text-gray-500 sm:text-xs" id="country_ar">
                                            {{ __('Required') }}
                                        </span>
                                    </div>
                                </div>
                                @error('settings.country_ar')
                                    <p class="mt-2 text-xs text-red-600">{{ __($message) }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="city_ar"
                                    class="block text-sm font-medium text-gray-700">{{ __('City') }}
                                </label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="text" wire:model.defer="settings.city_ar"
                                        class="block w-full border-gray-300 rounded-md peer read-only:bg-gray-100 placeholder:text-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="تعز" aria-describedby="city_ar">
                                    <div
                                        class="absolute inset-y-0 flex items-center px-2 m-1 bg-gray-100 pointer-events-none peer-optional:hidden ltr:right-0 rtl:left-0">
                                        <span class="text-gray-500 sm:text-xs" id="city_ar">
                                            {{ __('Required') }}
                                        </span>
                                    </div>
                                </div>
                                @error('settings.city_ar')
                                    <p class="mt-2 text-xs text-red-600">{{ __($message) }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-2 mt-4 border-t sm:col-span-2 sm:flex sm:justify-end">
            <div class="flex justify-end">
                <x-session-msg2 />
                {{-- <button type="button" class="btn-cancel">
                    {{ __('Cancel') }}
                </button> --}}
                <button type="submit" class="ltr:ml-3 rtl:mr-3 btn">
                    {{ __('Save') }}
                </button>
            </div>
        </div>
    </form>
</div>
