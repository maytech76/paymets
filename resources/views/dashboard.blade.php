<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="">
                    <p class="mb-4">Monto a Pagar :</p>
                      <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                        <span class="font-medium">100 USD</span>
                      </div>
                </div>
                <div class="">
                    <p class="mb-4">Seleciones su metodo de pago</p>
                    <ul class="space-y-4">

                        <li x-data="{open: false}">{{-- Izypay --}}
                            <button class="w-full flex justify-center items-center py-3 bg-gray-100 hover:bg-white rounded-lg shadow"
                                 x-on:click="open = !open">
                                <img class="h-8" src="https://www.analytics.pe/wp-content/uploads/2019/04/logo-izipay.png" alt="">
                            </button>

                            <div class="pt-6 pb-4" x-show="open" style="display: none">
                                 <p> Formulario de Pago Izipay</p>
                            </div>
                        </li>

                        <li>{{-- Niubiz --}}
                            <button class="w-full flex justify-center items-center py-3 bg-gray-100 hover:bg-white rounded-lg shadow">
                                <img class="h-8" src="https://autoland.com.pe/wp-content/uploads/2023/10/niubiz-autoland-pagoonline.png" alt="">
                            </button>
                        </li>

                        <li x-data="{open: false}">{{-- Paypal --}}
                            <button class="w-full flex justify-center items-center py-3 bg-gray-100 hover:bg-white rounded-lg shadow"  x-on:click="open = !open">
                                <img class="h-8" src="https://w7.pngwing.com/pngs/289/163/png-transparent-paypal-business-logo-computer-icons-paypal-blue-text-trademark.png" alt="">
                            </button>

                            <div class="pt-6 pb-4" x-show="open" style="display: none">
                                <p> Formulario de Pago Paypal</p>
                           </div>

                        </li>

                        <li>{{-- Mercado Pago --}}
                            <button class="w-full flex justify-center items-center py-3 bg-gray-100 hover:bg-white rounded-lg shadow">
                                <img class="h-8" src="https://mestredasmilhas.com/wp-content/uploads/2021/04/mercado-pago-logo.png" alt="">
                            </button>
                        </li>

                        <li x-data="{open: false}">{{-- Web Pay --}}
                            <button class=" w-full flex justify-center items-center py-3 bg-gray-100 hover:bg-white rounded-lg shadow">
                                <img class="h-8" src="https://cuvishome.cl/wp-content/uploads/2023/01/webpay_logo.png" alt="">
                            </button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
