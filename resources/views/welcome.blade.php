<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <main>
        <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
            <!-- Mobile menu -->

            <div x-show="open" class="relative z-40 lg:hidden"
                x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
                aria-modal="true">

                <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
                    class="fixed inset-0 bg-black bg-opacity-25"></div>


                <div class="fixed inset-0 z-40 flex">

                    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in-out duration-300 transform"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                        x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                        class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl"
                        @click.away="open = false">
                        <div class="flex px-4 pb-2 pt-5">
                            <button type="button"
                                class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400"
                                @click="open = false">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <!-- Links -->
                        <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick"
                            @tab-keydown.window="onTabKeydown">
                            <div class="border-b border-gray-200">
                                <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                                    <button id="tabs-1-tab-1"
                                        class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium"
                                        x-state:on="Selected" x-state:off="Not Selected"
                                        :class="{
                                            'border-indigo-600 text-indigo-600': selected,
                                            'border-transparent text-gray-900':
                                                !(selected)
                                        }"
                                        x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab"
                                        x-init="init()" @click="onClick" @keydown="onKeydown"
                                        @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                        :aria-selected="selected ? 'true' : 'false'" type="button">Women</button>
                                    <button id="tabs-1-tab-2"
                                        class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium"
                                        x-state:on="Selected" x-state:off="Not Selected"
                                        :class="{
                                            'border-indigo-600 text-indigo-600': selected,
                                            'border-transparent text-gray-900':
                                                !(selected)
                                        }"
                                        x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab"
                                        x-init="init()" @click="onClick" @keydown="onKeydown"
                                        @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                        :aria-selected="selected ? 'true' : 'false'" type="button">Men</button>

                                </div>
                            </div>

                            <div id="tabs-1-panel-1" class="space-y-12 px-4 pb-6 pt-10"
                                x-description="'Women' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)"
                                aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected"
                                @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                                <div class="grid grid-cols-1 items-start gap-x-6 gap-y-10">
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                                        <div>
                                            <p id="mobile-featured-heading-0" class="font-medium text-gray-900">Featured
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-featured-heading-0"
                                                class="mt-6 space-y-6">
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Sleep</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Swimwear</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Underwear</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <p id="mobile-categories-heading" class="font-medium text-gray-900">
                                                Categories</p>
                                            <ul role="list" aria-labelledby="mobile-categories-heading"
                                                class="mt-6 space-y-6">
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Basic Tees</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Artwork Tees</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Bottoms</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Underwear</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Accessories</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                                        <div>
                                            <p id="mobile-collection-heading" class="font-medium text-gray-900">
                                                Collection</p>
                                            <ul role="list" aria-labelledby="mobile-collection-heading"
                                                class="mt-6 space-y-6">
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Everything</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Core</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">New Arrivals</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Sale</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div>
                                            <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                                            <ul role="list" aria-labelledby="mobile-brand-heading"
                                                class="mt-6 space-y-6">
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Full Nelson</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">My Way</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Re-Arranged</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Counterfeit</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Significant Other</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs-1-panel-2" class="space-y-12 px-4 pb-6 pt-10"
                                x-description="'Men' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)"
                                aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected"
                                @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                                <div class="grid grid-cols-1 items-start gap-x-6 gap-y-10">
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                                        <div>
                                            <p id="mobile-featured-heading-1" class="font-medium text-gray-900">
                                                Featured</p>
                                            <ul role="list" aria-labelledby="mobile-featured-heading-1"
                                                class="mt-6 space-y-6">
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Casual</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Boxers</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Outdoor</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <p id="mobile-categories-heading" class="font-medium text-gray-900">
                                                Categories</p>
                                            <ul role="list" aria-labelledby="mobile-categories-heading"
                                                class="mt-6 space-y-6">
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Artwork Tees</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Pants</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Accessories</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Boxers</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Basic Tees</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                                        <div>
                                            <p id="mobile-collection-heading" class="font-medium text-gray-900">
                                                Collection</p>
                                            <ul role="list" aria-labelledby="mobile-collection-heading"
                                                class="mt-6 space-y-6">
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Everything</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Core</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">New Arrivals</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Sale</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div>
                                            <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                                            <ul role="list" aria-labelledby="mobile-brand-heading"
                                                class="mt-6 space-y-6">
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Significant Other</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">My Way</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Counterfeit</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Re-Arranged</a>
                                                </li>
                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">Full Nelson</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                            <div class="flow-root">
                                <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                            </div>
                            <div class="flow-root">
                                <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                            </div>

                        </div>

                        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                            @if (Route::has('login'))
                                <livewire:welcome.navigation />
                            @endif
                        </div>

                        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                            <!-- Currency selector -->
                            <form>
                                <div class="inline-block">
                                    <label for="mobile-currency" class="sr-only">Currency</label>
                                    <div
                                        class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                                        <select id="mobile-currency" name="currency"
                                            class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                                            <option>CAD</option>
                                            <option>USD</option>
                                            <option>AUD</option>
                                            <option>EUR</option>
                                            <option>GBP</option>

                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


            <header class="bg-white sticky top-0 w-full z-10">
                <nav aria-label="Top">
                    <div class="bg-gray-100">
                        <div class="mx-auto flex h-10 items-center justify-end px-4 sm:px-6 lg:px-8">
                            <div class="space-x-10 flex text-center text-sm font-thin lg:flex-none">
                                <a href="#"
                                    class=" text-gray-500 hover:text-gray-700 hover:font-semibold">Blog</a>
                                <a href="#"
                                    class=" text-gray-500 hover:text-gray-700 hover:font-semibold">Mitra</a>
                                <a href="#" class=" text-gray-500 hover:text-gray-700 hover:font-semibold">Pusat
                                    Informasi</a>
                                <a href="#"
                                    class=" text-gray-500 hover:text-gray-700 hover:font-semibold">Kerjasama</a>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary navigation -->
                    <div class="mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex h-14 items-center justify-between">
                            <div class="hidden lg:flex lg:items-center">
                                <a href="#">
                                    <span class="sr-only">Your Company</span>
                                    <img class="h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
                                        alt="">
                                </a>
                            </div>

                            <!-- Logo (lg-) -->
                            <a href="#" class="lg:hidden">
                                <span class="sr-only">Your Company</span>
                                <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
                                    alt="" class="h-8 w-auto">
                            </a>

                            <div class="flex flex-1 items-center ml-8">
                                <div class="w-full">
                                    {{-- <label for="search" class="sr-only">Search</label> --}}
                                    <div class="relative">
                                        <input id="search" name="search"
                                            class="block h-11 w-full rounded-md border-0 bg-white py-1.5 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                                            placeholder="Cari produk atau jasa" type="search">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <span class="h-6 w-px bg-gray-300 space-x-10 ml-8" aria-hidden="true"></span>

                            <div class="flex items-center justify-end ml-8">
                                @if (Route::has('login'))
                                    <livewire:welcome.navigation />
                                @endif
                            </div>
                        </div>
                    </div>
                    <div style="position: relative; z-index: 1;">
                        <div class="isolate z-50 shadow" x-data="{ isCategory: false }" @keydown.escape="onEscape"
                            @close-popover-group.window="onClosePopoverGroup">
                            <div class="bg-white py-1">
                                <div class="flex mx-auto px-6 lg:px-8 justify-between">
                                    <button type="button"
                                        class="inline-flex items-center gap-x-1 font-semibold text-gray-500 hover:text-gray-700"
                                        @mouseenter="isCategory=true" @mouseleave="isCategory=false"
                                        aria-expanded="false" :aria-expanded="isCategory.toString()">
                                        Kategori
                                    </button>

                                    <p class="text-sm text-gray-500">Lokasi anda : <span
                                            class="font-bold text-black">Tanjung Redeb</span></p>

                                </div>
                            </div>

                            <div class="relative border-t border-gray-200">
                                <div x-show="isCategory" x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-1"
                                    x-description="'Product' flyout menu, show/hide based on flyout menu state."
                                    class="absolute inset-x-0 top-0 -z-10 bg-white shadow-lg ring-1 ring-gray-900/5"
                                    x-ref="panel" @mouseenter="isCategory=true" @mouseleave="isCategory=false">

                                    <div class="py-4 border-b border-gray-200">
                                        <livewire:welcome.menu />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <main class="mt-5">
                <div class="mx-auto lg:max-w-7xl">
                    <div class="flex">
                        <div class="w-full lg:w-2/3 p-4">
                            <div class="bg-gray-200 h-96 rounded-lg shadow-lg flex items-center justify-center">
                                <!-- Isi Image Carousel di sini -->
                                <!-- Misalnya: -->
                                <img src="https://www.shutterstock.com/shutterstock/photos/2254551075/display_1500/stock-vector-special-promo-d-editable-vector-text-style-effect-suitable-for-promotion-product-name-2254551075.jpg"
                                    alt="Carousel Image" class="h-full w-full object-cover rounded-lg">
                            </div>
                        </div>

                        <div class="hidden lg:w-1/3 p-4 lg:flex flex-col justify-between">
                            <div class="bg-blue-500 h-44 rounded-lg shadow-lg mb-4">
                                <img src="https://t4.ftcdn.net/jpg/01/15/04/39/360_F_115043913_g00I2WhOKYresf7JId9GTTnNy50FBDRi.jpg"
                                    alt="Image 1" class="h-full w-full object-cover rounded-lg">
                            </div>

                            <div class="bg-red-500 h-44 rounded-lg shadow-lg">
                                <img src="https://png.pngtree.com/png-clipart/20230627/original/pngtree-images-of-special-promo-banner-shape-red-yellow-vector-png-image_9229685.png"
                                    alt="Image 2" class="h-full w-full object-cover rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trending products -->
                <section aria-labelledby="trending-heading" class="bg-white">
                    <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
                        <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                            <h2 id="trending-heading" class="text-2xl font-bold tracking-tight text-gray-900">Trending
                                products</h2>
                            <a href="#"
                                class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                                See everything
                                <span aria-hidden="true"> →</span>
                            </a>
                        </div>

                        <div class="relative mt-8">
                            <div class="relative w-full overflow-x-auto">
                                <ul role="list"
                                    class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                                    <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                        <div class="group relative">
                                            <div
                                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg"
                                                    alt="Black machined steel pen with hexagonal grip and small white logo at top."
                                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                            <div class="mt-6">
                                                <p class="text-sm text-gray-500">Black</p>
                                                <h3 class="mt-1 font-semibold text-gray-900">
                                                    <a href="#">
                                                        <span class="absolute inset-0"></span>
                                                        Machined Pen
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-gray-900">$35</p>
                                            </div>
                                        </div>

                                        <h4 class="sr-only">Available colors</h4>
                                        <ul role="list"
                                            class="mt-auto flex items-center justify-center space-x-3 pt-6">
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#111827">
                                                <span class="sr-only">Black</span>
                                            </li>
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#FDE68A">
                                                <span class="sr-only">Brass</span>
                                            </li>
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#E5E7EB">
                                                <span class="sr-only">Chrome</span>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                        <div class="group relative">
                                            <div
                                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-02.jpg"
                                                    alt="Black porcelain mug with modern square handle and natural clay accents on rim and bottom."
                                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                            <div class="mt-6">
                                                <p class="text-sm text-gray-500">Matte Black</p>
                                                <h3 class="mt-1 font-semibold text-gray-900">
                                                    <a href="#">
                                                        <span class="absolute inset-0"></span>
                                                        Earthen Mug
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-gray-900">$28</p>
                                            </div>
                                        </div>

                                        <h4 class="sr-only">Available colors</h4>
                                        <ul role="list"
                                            class="mt-auto flex items-center justify-center space-x-3 pt-6">
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#4B5563">
                                                <span class="sr-only">Matte Black</span>
                                            </li>
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#FEF3C7">
                                                <span class="sr-only">Natural</span>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                        <div class="group relative">
                                            <div
                                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-03.jpg"
                                                    alt="Natural leather journal with brass disc binding and three paper refill sets."
                                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                            <div class="mt-6">
                                                <p class="text-sm text-gray-500">Natural</p>
                                                <h3 class="mt-1 font-semibold text-gray-900">
                                                    <a href="#">
                                                        <span class="absolute inset-0"></span>
                                                        Leatherbound Daily Journal Set
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-gray-900">$50</p>
                                            </div>
                                        </div>

                                        <h4 class="sr-only">Available colors</h4>
                                        <ul role="list"
                                            class="mt-auto flex items-center justify-center space-x-3 pt-6">
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#FEF3C7">
                                                <span class="sr-only">Natural</span>
                                            </li>
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#1F2937">
                                                <span class="sr-only">Black</span>
                                            </li>
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#7C2D12">
                                                <span class="sr-only">Brown</span>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                        <div class="group relative">
                                            <div
                                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-04.jpg"
                                                    alt="Black leather journal with brass disc binding."
                                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                            <div class="mt-6">
                                                <p class="text-sm text-gray-500">Black</p>
                                                <h3 class="mt-1 font-semibold text-gray-900">
                                                    <a href="#">
                                                        <span class="absolute inset-0"></span>
                                                        Leatherbound Daily Journal
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-gray-900">$50</p>
                                            </div>
                                        </div>

                                        <h4 class="sr-only">Available colors</h4>
                                        <ul role="list"
                                            class="mt-auto flex items-center justify-center space-x-3 pt-6">
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#111827">
                                                <span class="sr-only">Black</span>
                                            </li>
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#7C2D12">
                                                <span class="sr-only">Brown</span>
                                            </li>
                                            <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                                style="background-color:#FEF3C7">
                                                <span class="sr-only">Natural</span>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="mt-12 px-4 sm:hidden">
                            <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                                See everything
                                <span aria-hidden="true"> →</span>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Collections -->
                <section aria-labelledby="collections-heading" class="bg-gray-100">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                            <h2 id="collections-heading" class="text-2xl font-bold text-gray-900">Collections</h2>

                            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                                <div class="group relative">
                                    <div
                                        class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
                                            alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <h3 class="mt-6 text-sm text-gray-500">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Desk and Office
                                        </a>
                                    </h3>
                                    <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                                </div>
                                <div class="group relative">
                                    <div
                                        class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg"
                                            alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <h3 class="mt-6 text-sm text-gray-500">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Self-Improvement
                                        </a>
                                    </h3>
                                    <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                                </div>
                                <div class="group relative">
                                    <div
                                        class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg"
                                            alt="Collection of four insulated travel bottles on wooden shelf."
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <h3 class="mt-6 text-sm text-gray-500">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Travel
                                        </a>
                                    </h3>
                                    <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- Sale and testimonials -->
                <div class="relative overflow-hidden">
                    <!-- Decorative background image and gradient -->
                    <div aria-hidden="true" class="absolute inset-0">
                        <div class="absolute inset-0 mx-auto max-w-7xl overflow-hidden xl:px-8">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-sale-full-width.jpg"
                                alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
                    </div>

                    <!-- Sale -->
                    <section aria-labelledby="sale-heading"
                        class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 text-center sm:px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:max-w-none">
                            <h2 id="sale-heading"
                                class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Get 25%
                                off during our one-time sale</h2>
                            <p class="mx-auto mt-4 max-w-xl text-xl text-gray-600">Most of our products are limited
                                releases that won't come back. Get your favorite items while they're in stock.</p>
                            <a href="#"
                                class="mt-6 inline-block w-full rounded-md border border-transparent bg-gray-900 px-8 py-3 font-medium text-white hover:bg-gray-800 sm:w-auto">Get
                                access to our one-time sale</a>
                        </div>
                    </section>

                    <!-- Testimonials -->
                    <section aria-labelledby="testimonial-heading"
                        class="relative mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
                        <div class="mx-auto max-w-2xl lg:max-w-none">
                            <h2 id="testimonial-heading" class="text-2xl font-bold tracking-tight text-gray-900">What
                                are people saying?</h2>

                            <div class="mt-16 space-y-16 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                                <blockquote class="sm:flex lg:block">
                                    <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true"
                                        class="flex-shrink-0 text-gray-300">
                                        <path
                                            d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
                                        <p class="text-lg text-gray-600">My order arrived super quickly. The product is
                                            even better than I hoped it would be. Very happy customer over here!</p>
                                        <cite class="mt-4 block font-semibold not-italic text-gray-900">Sarah Peters,
                                            New Orleans</cite>
                                    </div>
                                </blockquote>
                                <blockquote class="sm:flex lg:block">
                                    <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true"
                                        class="flex-shrink-0 text-gray-300">
                                        <path
                                            d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
                                        <p class="text-lg text-gray-600">I had to return a purchase that didn’t fit.
                                            The whole process was so simple that I ended up ordering two new items!</p>
                                        <cite class="mt-4 block font-semibold not-italic text-gray-900">Kelly
                                            McPherson, Chicago</cite>
                                    </div>
                                </blockquote>
                                <blockquote class="sm:flex lg:block">
                                    <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true"
                                        class="flex-shrink-0 text-gray-300">
                                        <path
                                            d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
                                        <p class="text-lg text-gray-600">Now that I’m on holiday for the summer, I’ll
                                            probably order a few more shirts. It’s just so convenient, and I know the
                                            quality will always be there.</p>
                                        <cite class="mt-4 block font-semibold not-italic text-gray-900">Chris Paul,
                                            Phoenix</cite>
                                    </div>
                                </blockquote>

                            </div>
                        </div>
                    </section>
                </div>
            </main>

            <footer aria-labelledby="footer-heading" class="bg-white">
                <h2 id="footer-heading" class="sr-only">Footer</h2>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="border-t border-gray-200">
                        <div class="pb-20 pt-16">
                            <div class="md:flex md:justify-center">
                                <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
                                    alt="" class="h-8 w-auto">
                            </div>
                            <div class="mx-auto mt-16 max-w-5xl xl:grid xl:grid-cols-2 xl:gap-8">
                                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                                    <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">Products</h3>
                                            <ul role="list" class="mt-6 space-y-6">
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Bags</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Tees</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Objects</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">Home
                                                        Goods</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Accessories</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                                            <ul role="list" class="mt-6 space-y-6">
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Contact</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Shipping</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Returns</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Warranty</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">Secure
                                                        Payments</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">FAQ</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">Find
                                                        a
                                                        store</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">Company</h3>
                                            <ul role="list" class="mt-6 space-y-6">
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">Who
                                                        we
                                                        are</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Sustainability</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Press</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Careers</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">Terms
                                                        &amp; Conditions</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Privacy</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">Legal</h3>
                                            <ul role="list" class="mt-6 space-y-6">
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">Terms
                                                        of Service</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">Return
                                                        Policy</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Privacy Policy</a>
                                                </li>
                                                <li class="text-sm">
                                                    <a href="#"
                                                        class="text-gray-500 hover:text-gray-600">Shipping Policy</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:grid lg:grid-cols-2 lg:gap-x-6 xl:gap-x-8">
                            <div class="flex items-center rounded-lg bg-gray-100 p-6 sm:p-10">
                                <div class="mx-auto max-w-sm">
                                    <h3 class="font-semibold text-gray-900">Sign up for our newsletter</h3>
                                    <p class="mt-2 text-sm text-gray-500">The latest news, articles, and resources,
                                        sent to your inbox weekly.</p>
                                    <form class="mt-4 sm:mt-6 sm:flex">
                                        <label for="email-address" class="sr-only">Email address</label>
                                        <input id="email-address" type="text" autocomplete="email" required=""
                                            class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white px-4 py-2 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                                        <div class="mt-3 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                                            <button type="submit"
                                                class="flex w-full items-center justify-center rounded-md border border-transparent bg-bluebird hover:bg-opacity-80 px-4 py-2 text-base font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-white">Sign
                                                up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="relative mt-6 flex items-center px-6 py-12 sm:px-10 sm:py-16 lg:mt-0">
                                <div class="absolute inset-0 overflow-hidden rounded-lg">
                                    <img src="https://tailwindui.com/img/ecommerce-images/footer-02-exclusive-sale.jpg"
                                        alt=""
                                        class="h-full w-full object-cover object-center saturate-0 filter">
                                    <div class="absolute inset-0 bg-bluebird"></div>
                                </div>
                                <div class="relative mx-auto max-w-sm text-center">
                                    <h3 class="text-2xl font-bold tracking-tight text-white">Get early access</h3>
                                    <p class="mt-2 text-gray-200">
                                        Did you sign up to the newsletter? If so, use the keyword we sent you to get
                                        access. <a href="#"
                                            class="whitespace-nowrap font-bold text-white hover:text-gray-200">Go
                                            now<span aria-hidden="true"> →</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-10 md:flex md:items-center md:justify-between">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">© 2021 All Rights Reserved</p>
                        </div>

                        <div class="mt-4 flex items-center justify-center md:mt-0">
                            <div class="flex space-x-8">
                                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">Accessibility</a>
                                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">Privacy</a>
                                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">Terms</a>

                            </div>

                            <div class="ml-6 border-l border-gray-200 pl-6">
                                <a href="#" class="flex items-center text-gray-500 hover:text-gray-600">
                                    <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                                        class="h-auto w-5 flex-shrink-0">
                                    <span class="ml-3 text-sm">Change</span>
                                    <span class="sr-only">location and currency</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
</body>

</html>
