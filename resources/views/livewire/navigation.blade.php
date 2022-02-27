<div>
    <div class="bg-blue-900 py-2 md:py-8">
        <div class=" flex items-center container text-white justify-between">
            <div class="">
                <x-jet-application-mark class="block h-10 md:h-16 w-auto" />
            </div>
            <div>
                <div class=" grid grid-cols-1 pb-4 text-xs gap-4 text-center md:flex">
                    <div class="mr-4">
                        <p><i class="far fa-envelope mr-4"></i>ventas@pomalca.com.pe</p>
                    </div>
                    <div class="mr-4  border-r-2 border-l-2 border-x-white">
                        <p class="px-4"><i class="fab fa-whatsapp mr-4"></i>998 905 385</p>
                    </div>
                    <div class="mr-4">
                        <p><i class="fas fa-map-marker-alt text-white mr-4"></i>Direccion Letika</p>
                    </div>
                </div>
                <div class="text-black hidden md:block">
                    @livewire('search')
                </div>
            </div>
            <div>
                <div class="flex">
                    <div class="mx-4 hidden md:block">
                        @livewire('dropdown-cart')
                    </div>
                    <div class="hidden md:block">
                        @auth

                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">

                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>

                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('orders.index') }}">
                                        Mis ordenes
                                    </x-jet-dropdown-link>

                                    @role('admin')
                                        <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                            Administrador
                                        </x-jet-dropdown-link>
                                    @endrole

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        @else
                            <x-jet-dropdown align="right" width="48">

                                <x-slot name="trigger">
                                    <i class="fas fa-user-circle  text-3xl cursor-pointer"></i>
                                </x-slot>

                                <x-slot name="content">
                                    <x-jet-dropdown-link href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </x-jet-dropdown-link>
                                </x-slot>

                            </x-jet-dropdown>

                        @endauth
                    </div>
                </div>

            </div>
        </div>
    </div>
    <header class=" w-full top-0 shadow-xl border-gray-500 border-opacity-20 border-b-2" style="z-index: 900"
        x-data="dropdown()">
        <div class="container flex items-center h-12 justify-center enlace ">
            <a :class="{'bg-opacity-100 text-orange-500' : open}" x-on:click="show()"
                class="flex flex-col items-center justify-center md:hidden order-last md:order-first px-2 md:px-4 bg-white bg-opacity-25  cursor-pointer font-semibold h-2/3">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                {{-- <span class="text-sm hidden md:block">Categorías</span> --}}
            </a>

            <a href="/"
                class="mx-6  font-normal hover:underline  hidden lg:block  {{ request()->is('/') ? 'active  ' : '' }}">
                Inicio
            </a>
            <a href="{{ route('conocenos') }}"
                class="mx-6  font-normal  hover:underline  hidden lg:block  {{ request()->is('conocenos') ? 'active     ' : '' }}">
                Conócenos
            </a>
            <a href="http://127.0.0.1:8000/categories/moda"
                class="mx-6  font-normal hover:underline   hidden md:block  {{ request()->is('categories/*') ? 'active  ' : '' }}">
                Catálogo
            </a>
            <a href="{{ route('servicios') }}"
                class="mx-6  font-normal  hover:underline  hidden md:block  {{ request()->is('servicios') ? 'active  ' : '' }}">
                Servicios
            </a>
            <a href="{{ route('noticia.show') }}"
                class="mx-6  font-normal  hover:underline  hidden md:block  {{ request()->is('noticia') ? 'active ' : '' }}">
                Creaciones
            </a>
            <a href="{{ route('ventamayor') }}"
                class="mx-6  font-normal  hover:underline  hidden md:block  {{ request()->is('ventas-al-por-mayor') ? 'active ' : '' }}">
                Ventas al por mayor
            </a>
            <a href="{{ route('contacto') }}"
                class="mx-6  font-normal  hover:underline  hidden md:block  {{ request()->is('contactanos') ? 'active ' : '' }}">
                Escríbenos
            </a>

            <a href="https://www.facebook.com/Coqueteos.antojitos" class="md:mx-6">
                <i class="fa-brands fa-facebook-square fa-2x"></i></a>
            <a href="https://www.instagram.com/coqueteos_antojitos/" class=""><img class="w-9 h-9"
                    src="{{ asset('img/iconos/insta.png') }}" alt=""></a>

        </div>

        <nav id="navigation-menu" :class="{'block': open, 'hidden': !open}"
            class="bg-trueGray-700 mt-4 z-10 bg-opacity-25 w-full absolute hidden">

            {{-- Menu computadora --}}
            {{-- <div class="container h-full hidden md:block">
                <div
                    x-on:click.away="close()"
                    class="grid grid-cols-4 h-full relative">
                    <ul class="bg-white">
                        @foreach ($categories as $category)
                            <li class="navigation-link text-trueGray-500 hover:bg-orange-500 hover:">
                                <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center">
    
                                    <span class="flex justify-center w-9">
                                        {!!$category->icon!!}
                                    </span>
    
                                    {{$category->name}}
                                </a>
    
    
                                <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                                    <x-navigation-subcategories :category="$category" />
                                </div>
    
                            </li>
                        @endforeach
                    </ul>
    
                    <div class="col-span-3 bg-gray-100">
                        <x-navigation-subcategories :category="$categories->first()" />
                    </div>
                </div>
            </div> --}}

            {{-- menu mobil --}}
            <div class="bg-white h-2/5 overflow-y-auto">

                <div class="container bg-gray-200 py-3 mb-2">
                    @livewire('search')
                </div>

                <ul>
                    @foreach ($categories as $category)
                        {{-- <li class="text-trueGray-500 hover:bg-orange-500 hover:">
                            <a class="py-2 px-4 text-sm flex items-center">
    
                                <span class="flex justify-center w-9">
                                    {!! $category->icon !!}
                                </span>
    
                                {{ $category->name }}
                            </a>
                        </li> --}}
                    @endforeach
                    {{-- <li class="text-trueGray-500 hover:bg-orange-500 hover:">
    
                        <a href="{{ route('conocenos') }}" class="py-2 px-4 text-sm flex items-center">
                            <span class="flex justify-center w-9">
                                {!! $category->icon !!}
                            </span>
                            Bienvenido
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('conocenos') }}"
                            class="py-2 px-4 text-sm flex items-center {{ request()->is('conocenos') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                {!! $category->icon !!}
                            </span>
                            Conócenos
                        </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1:8000/categories/pasteles"
                            class="py-2 px-4 text-sm flex items-center {{ request()->is('categories/*') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                {!! $category->icon !!}
                            </span>
                            Catálogo
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('servicios') }}"
                            class="py-2 px-4 text-sm flex items-center {{ request()->is('servicios') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                {!! $category->icon !!}
                            </span>
                            Servicios
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }}" class="py-2 px-4 text-sm flex items-center">
                            <span class="flex justify-center w-9">
                                {!! $category->icon !!}
                            </span>
                            Escríbenos
                        </a>
                    </li>

                </ul>
                {{-- <p class="text-trueGray-500 px-6 my-2">USUARIOS</p>
    
                @livewire('cart-mobil')
    
                @auth
                    <a href="{{ route('profile.show') }}"
                        class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-orange-500 hover:">
    
                        <span class="flex justify-center w-9">
                            <i class="far fa-address-card"></i>
                        </span>
    
                        Perfil
                    </a>
    
                    <a href="" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit() "
                        class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-orange-500 hover:">
    
                        <span class="flex justify-center w-9">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
    
                        Cerrar sesión
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
    
                @else
                    <a href="{{ route('login') }}"
                        class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-orange-500 hover:">
    
                        <span class="flex justify-center w-9">
                            <i class="fas fa-user-circle"></i>
                        </span>
    
                        Iniciar sesión
                    </a>
    
                    <a href="{{ route('register') }}"
                        class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-orange-500 hover:">
    
                        <span class="flex justify-center w-9">
                            <i class="fas fa-fingerprint"></i>
                        </span>
    
                        registrate
                    </a>
                @endauth --}}
            </div>
        </nav>
    </header>
    {{-- <div class="head_movilx">
        <div class="flex justify-center">
            <a class="___class_+?46___" href="/">
                <img src="{{ asset('images/inicio/seccion1/Logo.png') }}" class="block h-9" alt="">
            </a>
        </div>
        <div class="flex justify-center">
            <ul class="mt-4 link_vrd flex">

                <li class="h-opcs-li list-group-item nav-item-2"> <a href=""
                        class="blog_nzv {{ request()->is('/') ? 'active' : '' }}">Inicio</a></li>
                <li class="h-opcs-li2 list-group-item nav-item-2"> <a href="/categories/moda"
                        class="blog_nzv space_link  {{ request()->is('categories/moda') ? 'active' : '' }}">Catalogo</a>
                </li>
                <li class="h-opcs-li3 list-group-item nav-item-2"><a href=""
                        class=" blog_nzv {{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>

            </ul>
        </div>
    </div> --}}
</div>
