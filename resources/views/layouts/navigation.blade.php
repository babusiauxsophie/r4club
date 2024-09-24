<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                    <svg width="2.5rem" height="2.5rem" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M0 0h192.756v192.756H0z"/>
                            <path d="M168.604 171.833v-1.882H22.338v1.882h146.266zM17.047 135.045H2.834v2.235H4.63c.463 0 1.18.734 1.18 1.197v5.404h8.724v-6.603h2.513v-2.233zM59.142 164.45v-8.848h-4.714v3.787c0 1.303-.618 2.828-1.743 2.828h-5.13c-.463 0-1.152-.644-1.152-1.105v-9.9c0-.464.354-.824.817-.824h1.455c.463 0 1.17.742 1.17 1.205v1.879h4.345v-8.878h-4.243v1.839c0 .463-.771 1.288-1.234 1.288h-1.492c-.463 0-.817-.526-.817-.991v-8.481c0-.463.689-.967 1.152-.967h4.995c.647 0 1.217.589 1.217 1.237v4.062h4.382v-7.536H34.693v2.235h1.796c.463 0 1.179.734 1.179 1.197v22.703c0 .463-.689 1.037-1.152 1.037h-1.794v2.231l24.42.002zM67.865 146.32l9.736 18.13h8.593v-26.057c0-.463.689-1.113 1.152-1.113h1.795v-2.235h-9.638v2.235h1.804c.463 0 1.153.647 1.153 1.109v15.306l-10.457-18.65H61.155v2.235h1.795c.464 0 1.181.699 1.181 1.162v22.703c0 .465-.69 1.072-1.152 1.072h-1.795v2.231h9.638v-2.231h-1.803c-.464 0-1.153-.604-1.153-1.066l-.001-14.831zM95.896 145.688l-4.791 15.561c-.178.479-.458.971-.921.971h-1.87v2.231h8.975l-.019-2.231h-1.792c-.463 0-.95-.502-.817-.965l1.901-6.933c.044-.181.162-.341.348-.341h3.647v-2.707l-2.627.002c-.187 0-.408-.183-.351-.367l1.476-5.221h-3.159z"/>
                            <path d="M100.558 153.979h3.379c.186 0 .348.16.391.342l1.902 6.933c.135.463-.354.965-.816.965h-1.795l-.018 2.231h14.717v-2.231h-1.869c-.463 0-.744-.491-.922-.971l-7.707-26.203H94.854v2.235h1.467c1.352.005 1.87.984 1.602 1.951l-2.028 6.455h3.159l1.43-4.944 2.902 10.162c.059.186-.203.37-.389.37h-2.441v2.705h.002zM140.42 157.603l.002-19.114c0-.464.712-1.207 1.175-1.207h1.787v-2.235h-8.949v2.235h1.795c.463 0 1.174.76 1.174 1.223l-.002 19.201c-.059 5.269-9.531 5.821-9.59-.215v-19.025c0-.464.711-1.184 1.174-1.184h1.787v-2.235h-14.646v2.235h1.797c.463 0 1.174.733 1.174 1.198v19.213c-.001 9.469 21.322 9.972 21.322-.09zM157.166 138.453c0-.464.722-1.173 1.187-1.173h1.799v-2.235h-14.689v2.235h1.797c.463 0 1.18.699 1.18 1.162v22.703c0 .463-.688 1.072-1.151 1.072h-1.461v2.231h22.771v-8.882h-4.716v3.787c0 1.303-.616 2.862-1.741 2.862h-3.826c-.465 0-1.152-.678-1.152-1.142l.002-22.62z"/>
                            <path d="M177.741 164.45h7.332v-2.231h-1.795c-.463 0-1.174-.653-1.174-1.116V137.78c0-.278.219-.495.498-.495 2.137.082 3.058.776 3.058 3.696v2.724h4.262v-8.66h-24.359v8.66h4.263v-2.724c0-2.92.92-3.614 3.055-3.696.279 0 .5.217.5.495v23.32c0 .465-.711 1.117-1.174 1.117h-1.795v2.231l7.329.002zM15.45 150.192c.359 0 .852.361 1.056.738l.029.027 5.941 13.491H32.66v-2.231h-.715c-.612 0-.92-.77-1.291-1.41l-6.178-10.888c3.771 0 5.662-2.97 5.707-6.925-.045-3.994-1.826-7.951-6.478-7.951h-6.658v2.234h.8c4.097 0 4.157 10.658 0 10.658h-3.313v-4.056H5.81v17.31c0 .463-.688 1.026-1.151 1.026H2.865v2.231h14.629v-2.231h-1.807c-.463 0-1.152-.604-1.152-1.067l.009-10.957h1.002-.096v.001zM96.978 97.192l-8.959 15.521c-.292.5-1.042.074-.85-.444l7.458-17.123-14.855-25.728-20.356.005c.026.268.208.622.248.72l26.128 45.258c.159.238.467.566.869.57h19.369c.393-.004.705-.262.809-.43l26.158-45.339c.084-.133.262-.534.482-1.071h-20.287L96.39 98.206l.588-1.014z"/>
                            <path d="M110.271 69.243h22.998a.657.657 0 0 0 .66-.626c.028-.578-.104-1.219-.388-1.725L107.36 21.598c-.295-.49-.813-.699-1.362-.674H86.787c-.538-.014-1.122.214-1.438.669l-.031.048-26.045 45.253c-.314.561-.505 1.309-.547 1.948a.66.66 0 0 0 .615.702l.043.001h23.167l13.27 22.868a.66.66 0 0 0 1.142-.002l13.263-23.08a.522.522 0 0 0 .045-.088zm-1.228-.502l-12.654 22.02L83.66 68.824l12.731-22.049 12.652 21.966zm-26.561-.517H60.161c.068-.249.147-.454.265-.685l26.011-45.196.145-.081c.055-.024.129-.019.184-.019.094.002 19.305 0 19.346-.004a.126.126 0 0 1 .119.047l26.156 45.254c.066.128.113.242.15.381h-22.443L96.963 45.124a.661.661 0 0 0-1.144-.001L82.482 68.224z"/>
                            <path d="M79.579 68.308h3.536l13.276-22.854 13.045 22.671 3.582.002-14.912-25.825 7.545-17.146c.199-.461-.604-.834-.869-.379L79.579 68.308zM85.306 115.632c.296.52.776.833 1.37.898l.036.004h19.426c.518-.018 1.059-.288 1.344-.73l26.207-45.426c.106-.234.166-1.027.199-1.41l-1.314-.115-.07.788-.029.199-26.098 45.238a.366.366 0 0 1-.27.135H86.791c-.137-.011-.274-.124-.339-.237L60.343 69.75a3.743 3.743 0 0 1-.187-.507.66.66 0 1 0-1.311.16c.018.145.057.316.109.452l.201.48 26.151 45.297z"/>
                        </svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('users.list')" :active="request()->routeIs('users.list')">
                        {{ __('Leden') }}
                    </x-nav-link>
                    <x-nav-link :href="route('events.list')" :active="request()->routeIs('events.list')">
                        {{ __('Evenementen') }}
                    </x-nav-link>
                    <x-nav-link :href="route('posts.list')" :active="request()->routeIs('posts.list')">
                        {{ __('Posts') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('users.detail', ['id' => Auth::id()])">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('users.list')" :active="request()->routeIs('users.list')">
                {{ __('Users') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('events.list')" :active="request()->routeIs('events.list')">
                {{ __('Events') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('posts.list')" :active="request()->routeIs('posts.list')">
                {{ __('Posts') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('users.detail', ['id' => Auth::id()])">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
