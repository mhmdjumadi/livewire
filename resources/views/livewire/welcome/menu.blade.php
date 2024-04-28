<div class="flex h-full space-x-8 ml-8">
    <div class="flex" x-data="{ isIndustri: false }" @keydown.escape="onEscape"
        @close-popover-group.window="onClosePopoverGroup">
        <div class="relative flex">
            <button type="button" x-state:on="Item active" x-state:off="Item inactive"
                class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                :class="{
                    'border-indigo-600 text-indigo-600': open,
                    'border-transparent text-gray-700 hover:text-gray-800':
                        !(open)
                }"
                @click="isIndustri = !isIndustri" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                :aria-expanded="open.toString()">Industri</button>
        </div>


        <div x-show="isIndustri" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-description="'Women' mega menu, show/hide based on flyout menu state."
            class="absolute inset-x-0 top-full text-gray-500 sm:text-sm" x-ref="panel"
            @click.away="isIndustri = false">
            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

            <div class="relative bg-white">
                <div class="mx-auto max-w-7xl px-8">
                    <div class="grid grid-cols-2 items-start gap-x-8 gap-y-10 pb-12 pt-10">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                            <div>
                                <p id="desktop-featured-heading-0" class="font-medium text-gray-900">
                                    Featured</p>
                                <ul role="list" aria-labelledby="desktop-featured-heading-0"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sleep</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Swimwear</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Underwear</a>
                                    </li>

                                </ul>
                            </div>
                            <div>
                                <p id="desktop-categories-heading" class="font-medium text-gray-900">
                                    Categories</p>
                                <ul role="list" aria-labelledby="desktop-categories-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Basic
                                            Tees</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Artwork
                                            Tees</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Bottoms</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Underwear</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                            <div>
                                <p id="desktop-collection-heading" class="font-medium text-gray-900">
                                    Collection</p>
                                <ul role="list" aria-labelledby="desktop-collection-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Core</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">New
                                            Arrivals</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                    </li>

                                </ul>
                            </div>

                            <div>
                                <p id="desktop-brand-heading" class="font-medium text-gray-900">
                                    Brands</p>
                                <ul role="list" aria-labelledby="desktop-brand-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Full
                                            Nelson</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">My
                                            Way</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Significant
                                            Other</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="flex" x-data="{ isKreatif: false }" @keydown.escape="onEscape"
        @close-popover-group.window="onClosePopoverGroup">
        <div class="relative flex">
            <button type="button" x-state:on="Item active" x-state:off="Item inactive"
                class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                :class="{
                    'border-indigo-600 text-indigo-600': open,
                    'border-transparent text-gray-700 hover:text-gray-800':
                        !(open)
                }"
                @click="isKreatif = !isKreatif" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                :aria-expanded="open.toString()">Kreatif</button>
        </div>


        <div x-show="isKreatif" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-description="'Men' mega menu, show/hide based on flyout menu state."
            class="absolute inset-x-0 top-full text-gray-500 sm:text-sm" x-ref="panel"
            @click.away="isKreatif = false">
            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

            <div class="relative bg-white">
                <div class="mx-auto max-w-7xl px-8">
                    <div class="grid grid-cols-2 items-start gap-x-8 gap-y-10 pb-12 pt-10">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                            <div>
                                <p id="desktop-featured-heading-1" class="font-medium text-gray-900">
                                    Featured</p>
                                <ul role="list" aria-labelledby="desktop-featured-heading-1"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Casual</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Outdoor</a>
                                    </li>

                                </ul>
                            </div>
                            <div>
                                <p id="desktop-categories-heading" class="font-medium text-gray-900">
                                    Categories</p>
                                <ul role="list" aria-labelledby="desktop-categories-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Artwork
                                            Tees</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Pants</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Basic
                                            Tees</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                            <div>
                                <p id="desktop-collection-heading" class="font-medium text-gray-900">
                                    Collection</p>
                                <ul role="list" aria-labelledby="desktop-collection-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Core</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">New
                                            Arrivals</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                    </li>

                                </ul>
                            </div>

                            <div>
                                <p id="desktop-brand-heading" class="font-medium text-gray-900">
                                    Brands</p>
                                <ul role="list" aria-labelledby="desktop-brand-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Significant
                                            Other</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">My
                                            Way</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Full
                                            Nelson</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="flex" x-data="{ isJasa: false }" @keydown.escape="onEscape"
        @close-popover-group.window="onClosePopoverGroup">
        <div class="relative flex">
            <button type="button" x-state:on="Item active" x-state:off="Item inactive"
                class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                :class="{
                    'border-indigo-600 text-indigo-600': open,
                    'border-transparent text-gray-700 hover:text-gray-800':
                        !(open)
                }"
                @click="isJasa = !isJasa" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                :aria-expanded="open.toString()">Jasa</button>
        </div>


        <div x-show="isJasa" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-description="'Men' mega menu, show/hide based on flyout menu state."
            class="absolute inset-x-0 top-full text-gray-500 sm:text-sm" x-ref="panel" @click.away="isJasa = false">
            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

            <div class="relative bg-white">
                <div class="mx-auto max-w-7xl px-8">
                    <div class="grid grid-cols-2 items-start gap-x-8 gap-y-10 pb-12 pt-10">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                            <div>
                                <p id="desktop-featured-heading-1" class="font-medium text-gray-900">
                                    Featured</p>
                                <ul role="list" aria-labelledby="desktop-featured-heading-1"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Casual</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Outdoor</a>
                                    </li>

                                </ul>
                            </div>
                            <div>
                                <p id="desktop-categories-heading" class="font-medium text-gray-900">
                                    Categories</p>
                                <ul role="list" aria-labelledby="desktop-categories-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Artwork
                                            Tees</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Pants</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Basic
                                            Tees</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                            <div>
                                <p id="desktop-collection-heading" class="font-medium text-gray-900">
                                    Collection</p>
                                <ul role="list" aria-labelledby="desktop-collection-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Core</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">New
                                            Arrivals</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                    </li>

                                </ul>
                            </div>

                            <div>
                                <p id="desktop-brand-heading" class="font-medium text-gray-900">
                                    Brands</p>
                                <ul role="list" aria-labelledby="desktop-brand-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Significant
                                            Other</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">My
                                            Way</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Full
                                            Nelson</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="flex" x-data="{ isPertanian: false }" @keydown.escape="onEscape"
        @close-popover-group.window="onClosePopoverGroup">
        <div class="relative flex">
            <button type="button" x-state:on="Item active" x-state:off="Item inactive"
                class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                :class="{
                    'border-indigo-600 text-indigo-600': open,
                    'border-transparent text-gray-700 hover:text-gray-800':
                        !(open)
                }"
                @click="isPertanian = !isPertanian" @mousedown="if (open) $event.preventDefault()"
                aria-expanded="false" :aria-expanded="open.toString()">Pertanian</button>
        </div>


        <div x-show="isPertanian" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-description="'Men' mega menu, show/hide based on flyout menu state."
            class="absolute inset-x-0 top-full text-gray-500 sm:text-sm" x-ref="panel"
            @click.away="isPertanian = false">
            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

            <div class="relative bg-white">
                <div class="mx-auto max-w-7xl px-8">
                    <div class="grid grid-cols-2 items-start gap-x-8 gap-y-10 pb-12 pt-10">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                            <div>
                                <p id="desktop-featured-heading-1" class="font-medium text-gray-900">
                                    Featured</p>
                                <ul role="list" aria-labelledby="desktop-featured-heading-1"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Casual</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Outdoor</a>
                                    </li>

                                </ul>
                            </div>
                            <div>
                                <p id="desktop-categories-heading" class="font-medium text-gray-900">
                                    Categories</p>
                                <ul role="list" aria-labelledby="desktop-categories-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Artwork
                                            Tees</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Pants</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Basic
                                            Tees</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                            <div>
                                <p id="desktop-collection-heading" class="font-medium text-gray-900">
                                    Collection</p>
                                <ul role="list" aria-labelledby="desktop-collection-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Core</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">New
                                            Arrivals</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                    </li>

                                </ul>
                            </div>

                            <div>
                                <p id="desktop-brand-heading" class="font-medium text-gray-900">
                                    Brands</p>
                                <ul role="list" aria-labelledby="desktop-brand-heading"
                                    class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Significant
                                            Other</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">My
                                            Way</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Full
                                            Nelson</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
