{{-- <header class="relative border-b border-gray-100">
    <div class="flex items-center justify-between h-16 px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
        <div class="flex items-center">
            <a class="flex items-center flex-shrink-0"
               href="{{ url('/') }}">
                <span class="sr-only">Home</span>

            </a>

            <nav class="hidden lg:gap-4 lg:flex lg:ml-8">
                @foreach ($this->collections as $collection)
                    <a class="text-sm font-medium transition hover:opacity-75"
                       href="{{ route('collection.view', $collection->defaultUrl->slug) }}">
                        {{ $collection->translateAttribute('name') }}
                    </a>
                @endforeach
            </nav>
        </div>

        <div class="flex items-center justify-between flex-1 ml-4 lg:justify-end">

            <div class="flex items-center -mr-4 sm:-mr-6 lg:mr-0">

                <div x-data="{ mobileMenu: false }">
                    <button x-on:click="mobileMenu = !mobileMenu"
                            class="grid flex-shrink-0 w-16 h-16 border-l border-gray-100 lg:hidden">
                        <span class="sr-only">Toggle Menu</span>

                        <span class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="w-5 h-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </span>
                    </button>

                    <div x-cloak
                         x-transition
                         x-show="mobileMenu"
                         class="absolute right-0 top-auto z-50 w-screen p-4 sm:max-w-xs">
                        <ul x-on:click.away="mobileMenu = false"
                            class="p-6 space-y-4 bg-white border border-gray-100 shadow-xl rounded-xl">
                            @foreach ($this->collections as $collection)
                                <li>
                                    <a class="text-sm font-medium"
                                       href="{{ route('collection.view', $collection->defaultUrl->slug) }}">
                                        {{ $collection->translateAttribute('name') }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}
<!-- header -->
    <header class="py-4 bg-white shadow-sm">
        <div class="container flex items-center justify-between">
            <a href="index.html">
                <x-brand.logo class="w-auto h-6 text-primary" />
            </a>
            <x-header.search />
            <div class="flex items-center space-x-4">
                @livewire('components.cart')
                <a href="#" class="relative text-center text-gray-700 transition hover:text-primary">
                    <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a>
            </div>
        </div>
    </header>
    <!-- ./header -->

    <!-- navbar -->
    <nav class="bg-gray-800">
        <div class="container flex">
            <div class="relative flex items-center px-8 py-4 cursor-pointer bg-primary group">
                <span class="text-white">
                    <i class="fa-solid fa-bars"></i>
                </span>
                <span class="ml-2 text-white capitalize">All Categories</span>

                <!-- dropdown -->
                <div
                    class="absolute left-0 invisible w-full py-3 transition duration-300 bg-white divide-y divide-gray-300 shadow-md opacity-0 top-full divide-dashed group-hover:opacity-100 group-hover:visible">
                    @foreach ($this->collections as $collection)
                        <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}" class="flex items-center px-6 py-3 transition hover:bg-gray-100">
                            {{ $collection->translateAttribute('name') }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="index.html" class="text-gray-200 transition hover:text-white">Home</a>
                    <a href="pages/shop.html" class="text-gray-200 transition hover:text-white">Shop</a>
                    <a href="#" class="text-gray-200 transition hover:text-white">About us</a>
                    <a href="#" class="text-gray-200 transition hover:text-white">Contact us</a>
                </div>
                <a href="pages/login.html" class="text-gray-200 transition hover:text-white">Login</a>
            </div>
        </div>
    </nav>
    <!-- ./navbar -->