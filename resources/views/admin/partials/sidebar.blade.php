<nav class="fixed inset-0 h-screen w-56 bg-gray-900 border-r overflow-y-scroll">



    <!-- Menu Item Sart-->
    <div x-data="{ isOpen: false}">
        <a @click="isOpen = !isOpen" class="flex items-center cursor-pointer px-3 py-2 text-white hover:bg-gray-800">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                </svg>
            </span>

            <span class="">Category</span>

            <span x-show="!isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>

            <span x-show="isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>
            </span>
        </a>

        <!-- Children Item Start-->
        <div x-show="isOpen" class="bg-gray-800">
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Add New</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Category List</span>
            </a>
        </div>
        <!-- Children item End -->
    </div>
    <!-- Menu Item End -->


    <!-- Menu Item Sart-->
    <div x-data="{ isOpen: false}">
        <a @click="isOpen = !isOpen" class="flex items-center cursor-pointer px-3 py-2 text-white hover:bg-gray-800">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </span>

            <span class="">Product</span>

            <span x-show="!isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>

            <span x-show="isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>
            </span>
        </a>

        <!-- Children Item Start-->
        <div x-show="isOpen" class="bg-gray-800">
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Add New</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Product List</span>
            </a>
        </div>
        <!-- Children item End -->
    </div>
    <!-- Menu Item End -->


    <!-- Menu Item Sart-->
    <div x-data="{ isOpen: false}">
        <a @click="isOpen = !isOpen" class="flex items-center cursor-pointer px-3 py-2 text-white hover:bg-gray-800">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </span>

            <span class="">Order</span>

            <span x-show="!isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>

            <span x-show="isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>
            </span>
        </a>

        <!-- Children Item Start-->
        <div x-show="isOpen" class="bg-gray-800">
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">New Order</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Order List</span>
            </a>
        </div>
        <!-- Children item End -->
    </div>
    <!-- Menu Item End -->



    <!-- Menu Item Sart-->
    <div x-data="{ isOpen: false}">
        <a @click="isOpen = !isOpen" class="flex items-center cursor-pointer px-3 py-2 text-white hover:bg-gray-800">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                </svg>
            </span>

            <span class="">Store</span>

            <span x-show="!isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>

            <span x-show="isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>
            </span>
        </a>

        <!-- Children Item Start-->
        <div x-show="isOpen" class="bg-gray-800">
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Caurosel</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Image Banner</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Feature Box</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Menu</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Color schema</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">header</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">footer</span>
            </a>
        </div>
        <!-- Children item End -->
    </div>
    <!-- Menu Item End -->


    <!-- Menu Item Sart-->
    <div x-data="{ isOpen: false}">
        <a @click="isOpen = !isOpen" class="flex items-center cursor-pointer px-3 py-2 text-white hover:bg-gray-800">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </span>

            <span class="">Settings</span>

            <span x-show="!isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </span>

            <span x-show="isOpen" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>
            </span>
        </a>

        <!-- Children Item Start-->
        <div x-show="isOpen" class="bg-gray-800">
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Discount</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Coupon</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Shipper</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Payment method</span>
            </a>
            <a  class="flex items-center coursor-pointer px-5 py-1 cursor-pointer text-white hover:bg-gray-700">
                <span class="text-sm">Area</span>
            </a>
        </div>
        <!-- Children item End -->
    </div>
    <!-- Menu Item End -->



</nav>