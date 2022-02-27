<footer >
  
    <div class="container grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-16">
        <div>
            <div class="mb-6">
                <x-jet-application-mark class="block h-10 md:h-16 w-auto" />
            </div>
            <div class="flex  mb-6">
                <div>
                    <p class="font-bold">SÍGUENOS EN</p>
                </div>
                <div class="mx-4">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div class="grid grid-cols-3 lg:grid-cols-4  gap-3">
                <div>
                    <img src="{{asset('img/iconos/mastercard.jpg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('img/iconos/exprexx.jpg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('img/iconos/visa.jpg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('img/iconos/pagoefectivo.png')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('img/iconos/mercadopago.png')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('img/iconos/paypal.jpg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('img/iconos/scotiabank.png')}}" alt="">
                </div>
                
            </div>
        </div>
        <div>
            <p class="text-base font-bold mb-3">CONTACTO</p>
            <ul class="text-sm ulli ulcontact">
                <li><i class="fas fa-map-marker-alt mr-2"></i>Av. Canada 3770 - San Luis</li>
                <li><i class="fas fa-phone color-icon-footer mr-2"></i> (01) 436 6643</li>
                <li><i class="fas fa-mobile-alt color-icon-footer mr-2"></i> 989 056 593 </li>
                <li><i class="fab fa-whatsapp color-icon-footer mr-2"></i>914 673 518</li>
                <li><i class="far fa-envelope color-icon-footer mr-2"></i>ventas@sumon.com.pe</li>
            </ul>
        </div>
        <div>
            <p class="text-base font-bold mb-3">POLITICAS</p>
            <ul class="text-sm ulli">
                <li><a href="{{route('politicas')}}">Políticas de privacidad</a> </li>
                <li><a href="{{route('terminos')}}"> Términos y condiciones</a></li>
                <li>Preguntas Frecuentes</li>
                <li>Libro de reclamaciones</li>
            </ul>
        </div>
        <div>
            <p class="text-base font-bold mb-3">INFORME</p>
            <ul class="text-sm ulli">
                <li>Factura electrónica</li>
                <li>Términos y condiciones</li>
                <li>Proveedor B to B</li>
                <li>Proveedor B to C</li>
            </ul>
        </div>
        <div>
            <p class="text-base font-bold mb-3">VENTA CORPORATIVA</p>
            <ul class="text-sm ulli">
                <li><i class="fas fa-phone color-icon-footer mr-2"></i> (01) 436 6643</li>
                <li><i class="fas fa-mobile-alt color-icon-footer mr-2"></i> 989 056 593 </li>
                <li><i class="far fa-envelope color-icon-footer mr-2"></i>ventas@sumon.com.pe</li>
                <li><i class="fas fa-map-marker-alt mr-2"></i>Av. Canada 3770 - San Luis</li>

            </ul>
        </div>
    </div>
    <div class="bg-gray-100 py-2 mt-10">
        <div class="max-w-2xl mx-auto text-center">
            <p class="font-semibold">TOMAR BEBIDAS ALCOHOLICAS EN EXCESO ES DAÑINO
                ESTA PROHIBIDA LA VENTA DE ALCOHOL A MENORES DE 18 AÑOS</p>
        </div>
    </div>
    <div class="bg-gray-700  text-white py-2">
        <div class="flex justify-center">
            <p>Copyright © 2021 Letika Consulting</p>
        </div>
    </div>
    
</footer>