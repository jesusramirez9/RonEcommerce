<x-app-layout>
    <div class="container my-10 xl:my-20">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8 ">

            <div>
                <div>
                    <div class="flex justify-center">
                        <img src="{{ asset('img/contacto/mayorista.png') }}" class="w-3/4" alt="">
                    </div>
                    <h1 class="text-center my-4 text-2xl text-blue-800  font-bold ">
                        SOMOS UNA DISTRIBUIDORA MAYORISTA
                    </h1>
                    <p class="text-justify">
                        Somos Sumon Licores, una empresa con más de 40 años en el mercado por lo que somos referente en
                        la venta de licores y la mejor opción de compra. Ofrecemos un amplio portafolio de vinos y
                        licores nacionales e importados. Contamos con un gran equipo de trabajo para hacer de tu compra
                        una gran experiencia. Para información y cotización comunícate al siguiente número o envíanos un
                        mensaje.
                    </p>
                    <p class="text-center mt-4 text-2xl text-blue-800 hover:text-blue-400 font-bold cursor-pointer">
                        <i class="fas fa-mobile-alt mr-2"></i> 998 905 385
                    </p>
                </div>
            </div>
            <div class="">
                <p class="my-4 text-2xl font-bold uppercase text-center">Contáctanos:</p>
                <form action="{{ route('contacto.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-5  mt-5">
                        <input name="name"
                            class="w-full bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nombres*" />
                        @error('name')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="Apellidos"
                            class="w-full bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Apellidos*" />
                        @error('Apellidos')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="correo"
                            class="w-full bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="email" placeholder="Correo electrónico*" />
                        @error('correo')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="celular"
                            class="w-full bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                            type="number" placeholder="Teléfono*" />
                        @error('celular')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <textarea name="mensaje" placeholder="Mensaje*"
                            class="w-full h-32 bg-gray-50 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"></textarea>
                        @error('mensaje')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div class="my-2  text-right">
                        <button type="submit"
                            class="font-bold tracking-wide bg-gray-700 hover:bg-gray-600 text-gray-50 rounded-lg px-4 py-2   
                          focus:outline-none focus:shadow-outline">
                            Enviar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

  

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif


</x-app-layout>
