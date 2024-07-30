@extends('layouts.home-layout')
@section('body')
    <div class="font-poppins text-gray-800 overflow-x-hidden" id="top">
        <section class="bg-white">
            <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
                <section class="relative bg-slate-800 lg:col-span-5 lg:h-full xl:col-span-6 flex items-center">
                    <img alt="Night" src="./landingpage/images/heroimage.jpeg"
                        class="absolute h-full w-full object-cover opacity-50" />

                    <div class="hidden lg:relative lg:block lg:p-20">
                        <a class="text-white" href="/">
                            <span class="sr-only">Inicio</span>
                            <h2 class="font-bold text-6xl">
                                LABORATORIO
                            </h2>
                            <h2 class="font-semibold text-4xl pb-3 md:pb-0">ODIN</h2>
                        </a>

                        <p class="mt-4 leading-relaxed text-white/90">
                            "Desbloquea tu pontencial: !unete a la revolución!"
                        </p>
                    </div>
                </section>

                <main
                    class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">

                    <div class="max-w-md">
                        <div class="text-5xl font-dark font-bold">404</div>
                        <p class="text-2xl md:text-3xl font-light leading-normal">Lo sentimos no se encontro la pagina</p>
                        <p class="mb-8">puedes encontrar lo que buscas en nuestra pagina de inicio</p>
                        <a href="{{ route('homepage') }}">
                            <button id=""
                                class="px-4 inline py-2 text-sm font-medium leading-5 shadow text-white transition-colors duration-150 border border-transparent rounded-lg focus:outline-none focus:shadow-outline-blue bg-blue-600 active:bg-blue-600 hover:bg-blue-700">Ir al inicio</button>
                        </a>

                    </div>
                </main>
            </div>
        </section>
    </div>
    <!-- Scripts -->
@endsection
