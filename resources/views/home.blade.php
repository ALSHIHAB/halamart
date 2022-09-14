<x-guest-layout>

@if(config('global.layout')==='basic')
    <x-home.slider />
    <x-home.about />
    <x-home.categories />
    <x-home.trending />
    {{-- <x-home.features /> --}}
    <x-home.products />
    <x-home.brands />
    <x-home.branches />
    <x-home.blog />
@else
    <x-home.slider />
    <x-home.trending />
    <x-home.about />    
    {{-- <x-home.features /> --}}
    <x-home.products />
     <x-home.categories />
    <x-home.brands />
@endif
    <!-- Swiper JS -->
    <script>
        var mainSwiper = new Swiper(".mainSwiper", {
            init: true,
            speed: 3000,
            // direction: 'horizontal',
            // loop: true,
            preloadImages: true,

            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            slidesPerView: 'auto'
        });
        mainSwiper.autoplay.start();

        var productsSwiper = new Swiper(".productsSwiper", {
            init: true,
            speed: 3000,
            // direction: 'horizontal',
            // loop: true,
            preloadImages: true,

            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            slidesPerView: 1,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 4,

                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 4,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 4,
                },
            }
        });
        productsSwiper.autoplay.start();
    </script>
</x-guest-layout>
