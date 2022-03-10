<x-app-layout>

    {{-- <div class="container py-8">
        @foreach ($categories as $category)
        
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700">
                        {{$category->name}}
                    </h1>

                    <a href="{{route('categories.show', $category)}}" class="text-orange-500 hover:text-orange-400 hover:underline ml-2 font-semibold">Ver más</a>

                </div>

                @livewire('category-products', ['category' => $category])
            </section>

        @endforeach
    </div> --}}
    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div>
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/nosotros/slide1.png') }}')">

        </div>
        <div class="bg-black">
            <div class="container flex justify-center py-2 ">
                <p class="separacion text-white font-medium">TOMAR BEBIDAS ALCOHOLICAS EN EXCESO ES DAÑINO</p>
            </div>
        </div>
    </div>


    <div class="container ">
        <div class="text-center my-6 xl:my-12">
            <p class="text-2xl font-bold">OFERTAS DEL MES</p>
        </div>
        <div class="glider-contain">
            <div class="prelacionado">
                @foreach ($products as $product)
                    @if ($product->offer != 0)
                        <div class="mx-4 border-2 overflow-hidden border-gray-300 rounded-xl">
                            <figure class="relative">
                                <div class="absolute z-30 mt-4 ml-4">
                                    @if ($product->offer == 0)
                                    @else
                                        <div class="bg-red-600 text-white px-1 py-1 w-16 rounded-lg z-50">
                                            <p class="text-center text-sm font-semibold">
                                                -
                                                {{ intval((($product->offer - $product->price) / $product->offer) * 100) }}
                                                %
                                            </p>
                                        </div>
                                    @endif
                                </div>
                                @if ($product->images->count())
                                    <img class="h-80 w-full object-cover object-center scrollflow -slide-bottom -opacity"
                                        src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                @else
                                    <img class="h-80 w-full object-cover object-center"
                                        src="https://images.pexels.com/photos/5082560/pexels-photo-5082560.jpeg?cs=srgb&dl=pexels-cottonbro-5082560.jpg&fm=jpg"
                                        alt="">
                                @endif

                            </figure>
                            <a href="{{ route('products.show', $product) }}">

                                <div class="py-2 px-2">
                                    <p class="text-gray-400 font-medium text-xs text-center uppercase">
                                        {{ $product->subcategory->name }}</p>

                                    <h1 class="text-lg  text-center font-semibold scrollflow -slide-bottom -opacity">

                                        {{ Str::limit($product->name, 40, '...') }}

                                    </h1>
                                    <p class="font-bold text-center text-red-600 scrollflow -slide-bottom -opacity">
                                        S/ {{ $product->price }}</p>
                                    @if ($product->offer != 0)
                                        <p class="text-center text-gray-300 line-through">s/ {{ $product->offer }}
                                        </p>
                                    @else
                                    @endif
                                    <div class="flex justify-center py-4">
                                        <button
                                            class="text-white add_prod font-medium text-sm bg_pricipal px-5 py-2 rounded-xl"><i
                                                class="fa fa-shopping-cart mr-2"></i>Ver</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <button aria-label="Previous" class="glider-prev glid-img1"></button>
            <button aria-label="Next" class="glider-next glid-img2"></button>

        </div>

    </div>

    <div class="container my-8 xl:my-14">
        <div class="grid grid-cols-2  md:grid-cols-4 gap-6 lg:gap-10 justify-items-center">
            <div class="text-center-special">
                <div class="">
                    <div class="text-white bg-yellow-400 rounded-full w-16 flex justify-center p-4">
                        <i class="fa-2x fas fa-map-marker-alt"></i>
                    </div>
                </div>
                <div class="mt-5 font-bold">
                    <p>
                        LLEGAMOS A TODO
                        EL PAÍS
                    </p>
                </div>
            </div>
            <div class="text-center-special">
                <div class="text-white bg-yellow-400 rounded-full w-16 flex justify-center p-4">
                    <i class="fa-2x far fa-star"></i>
                </div>
                <div class="mt-5 font-bold">
                    <p>
                        40 AÑOS
                        EN EL MERCADO
                    </p>
                </div>
            </div>
            <div class="text-center-special">
                <div class="text-white bg-yellow-400 rounded-full w-16 flex justify-center p-4">
                    <i class="fa-2x  fas fa-check"></i>
                </div>
                <div class="mt-5 font-bold">
                    <p>
                        ATENCIÓN
                        PERSONALIZADA
                    </p>
                </div>
            </div>
            <div class="text-center-special">
                <div class="text-white bg-yellow-400 rounded-full w-16 flex justify-center p-4">
                    <i class="fa-2x fas fa-truck"></i>
                </div>
                <div class="mt-5 font-bold">
                    <p>
                        DELIVERY GRATIS POR COMPRAS
                        MAYORES A S/199.00
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 relative">
                <div
                    class="absolute bg-black bg-opacity-30 w-full h-full hover:bg-opacity-0 hover:transition-all hover:ease-out ">
                    <h5 class="text-xl p-3 text-white font-bold tracking-widest">Evento 1</h5>
                </div>
                <img src="{{ asset('img/home/apartado1.jpg') }}" class="object-cover object-center h-full" alt="">
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="relative">
                    <div
                        class="absolute bg-black bg-opacity-30 w-full h-full hover:bg-opacity-0 hover:transition-all hover:ease-out ">
                        <h5 class="text-xl p-3 text-white font-bold tracking-widest">Evento 2</h5>
                    </div>
                    <img src="{{ asset('img/home/apartado2.jpg') }}" class="object-cover object-center" alt="">

                </div>
                <div class="relative">
                    <div
                        class="absolute bg-black bg-opacity-30 w-full h-full hover:bg-opacity-0 hover:transition-all hover:ease-out ">
                        <h5 class="text-xl p-3 text-white font-bold tracking-widest">Evento 3</h5>
                    </div>
                    <img src="{{ asset('img/home/apartado3.jpg') }}" class="object-cover object-center" alt="">

                </div>
            </div>
        </div>
    </div>
    <div class="container my-14">
        <div class="grid grid-cols-3 gap-6 lg:gap-8">
            <div>
                <img src="{{ asset('img/home/abajo1.jpg') }}"
                    class="rounded-lg hover:scale-105 hover:transition-all hover:ease-out" alt="">
            </div>
            <div>
                <img src="{{ asset('img/home/abajo2.jpg') }}"
                    class="rounded-lg hover:scale-105 hover:transition-all hover:ease-out" alt="">
            </div>
            <div>
                <img src="{{ asset('img/home/abajo3.jpg') }}"
                    class="rounded-lg hover:scale-105 hover:transition-all hover:ease-out" alt="">
            </div>
        </div>
    </div>



    <div class="container my-8 xl:my-14">
        <div class="grid grid-cols-2  md:grid-cols-4 gap-6 lg:gap-10 justify-items-center">
            <div class="text-center-special">
                <div class="">
                    <div class="text-white bg-yellow-400 rounded-full w-16 flex justify-center p-4">
                        <i class="fa-2x fas fa-headset"></i>
                    </div>
                </div>
                <div class="mt-5 font-bold">
                    <p>
                        COMUNÍCATE
                        CON UN ASESOR
                    </p>
                </div>
            </div>
            <div class="text-center-special">
                <div class="text-white bg-yellow-400 rounded-full w-16 flex justify-center p-4">
                    <i class="fa-2x far fa-clock"></i>
                </div>
                <div class="mt-5 font-bold">
                    <p>
                        CONOCE NUESTROS
                        HORARIOS DE ENVÍOS
                    </p>
                </div>
            </div>
            <div class="text-center-special">
                <div class="text-white bg-yellow-400 rounded-full w-16 flex justify-center p-4">
                    <i class="fa-2x far fa-credit-card"></i>
                </div>
                <div class="mt-5 font-bold">
                    <p>
                        MÉTODOS
                        DE PAGO
                    </p>
                </div>
            </div>
            <div class="text-center-special">
                <div class="text-white bg-yellow-400 rounded-full w-16 flex justify-center p-4">
                    <i class="fa-2x fas fa-rss"></i>
                </div>
                <div class="mt-5 font-bold">
                    <p>
                        BLOG
                        POMALCA
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="my-8">
        <div class="relative">
            <div class="absolute bg-black bg-opacity-60 w-full h-full ">
            </div>
            <img src="{{ asset('img/home/footer.png') }}" class="object-cover object-center w-full h-80" alt="">

        </div>
    </div>


    <div>
        @livewire('show-flayer')
    </div>

    @push('script')
        <script>
            Livewire.on('glider', function(id) {

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2.5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            }
                        },

                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            }
                        },

                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            }
                        },
                    ]
                });

            });
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $('.cardss').slick({
                prevArrow: '.arrow_prev',
                nextArrow: '.arrow_next',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                Margin: '50px',
                autoplaySpeed: 5000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        <script>
            $('.catalogslide').slick({
                prevArrow: '.arrow_prev1',
                nextArrow: '.arrow_next1',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                Margin: '50px',
                autoplaySpeed: 5000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>

        <script>
            // Can also be used with $(document).ready()
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });

            new Glider(document.querySelector('.prelacionado'), {
                slidesToShow: 3,
                slidesToScroll: 1,
                draggable: true,
                autoplay:true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                },
                responsive: [{
                        // screens greater than >= 775px
                        breakpoint: 768,
                        settings: {
                            // Set to `auto` and provide item width to adjust to viewport
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            itemWidth: 150,
                            duration: 1.5
                        }
                    },

                    {
                        // screens greater than >= 1024px
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 1.5,
                            arrows: {
                                prev: '.glider-prev',
                                next: '.glider-next'
                            },

                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 1250,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 1.5,
                            autoplay:true,
                            arrows: {
                                prev: '.glider-prev',
                                next: '.glider-next'
                            },

                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 0.25,
                            arrows: false
                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 320,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 0.25,
                            arrows: false
                        }
                    }

                ]
            });
        </script>
    @endpush

</x-app-layout>
