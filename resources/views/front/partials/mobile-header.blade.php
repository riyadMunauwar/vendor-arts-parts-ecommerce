<header x-data="{isMenuOpen: false, isSearchOpen: false}" class="bg-white py-2">
    <div class="mx-3 flex items-center justify-between">
        <!-- Logo -->
        <div>
            <a href="">
                <img class="h-7 block" src="https://www.bdshop.com/pub/media/logo/stores/1/BDSHOP-LOGO-2022.jpg" alt="">
            </a>
        </div>

        <div class="flex gap-3 items-center">
            <span @click="isSearchOpen = !isSearchOpen" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>
            <span @click="isMenuOpen = !isMenuOpen" x-show="!isMenuOpen" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </span>
            <span @click="isMenuOpen = !isMenuOpen" x-show="isMenuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
        </div>
    </div>

    <div x-show="isSearchOpen" x-transition class="mt-3 px-5 py-3 flex">
        <form class="flex items-center flex-grow">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-4 h-4 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full pl-10 p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
            </div>
        </form>

        <span @click="isSearchOpen = !isSearchOpen" class="w-10 cursor-pointer flex items-center justify-center" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </span>
    </div>

    <nav x-show="isMenuOpen" x-transition class="fixed inset-0 w-4/5 h-full bg-white p-3">
        <div class="flex justify-between">
            <a href="">
                <img class="h-6 block" src="https://www.bdshop.com/pub/media/logo/stores/1/BDSHOP-LOGO-2022.jpg" alt="">
            </a>

            <span @click="isMenuOpen = !isMenuOpen" x-show="isMenuOpen" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
        </div>
    </nav>
</header>