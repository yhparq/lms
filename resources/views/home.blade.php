@extends('layouts.home-layout')
@section('body')
    <!-- Start Header / Hero Section -->
    <header class="text-center justify-center bg-no-repeat bg-cover"
        style="
 background-image: url('landingpage/images/bg1.gif');
 background-attachment: fixed;
 background-position: center;
">
        <div class="w-full bg-zinc-50 py-20 md:py-36 bg-opacity-70 dark:bg-zinc-800 dark:bg-opacity-70">
            <h2 class="text-6xl font-black mb-1 pb-1 md:pb-0 dark:text-white">
                LABORATORIO ODIN
            </h2>
            <h2 class="font-semibold text-4xl pb-3 md:pb-0 dark:text-white dark:font-bold">Plataforma de Aprendizaje</h2>
            <p class="text-zinc-400 my-3 px-0 md:px-40 md:mt-4 mt-1">
                "Desbloquea tu potencial: ¡Únete a la Revolución del Aprendizaje!"
            </p>
            <!-- button mulai belajar -->
            <a href="#categories"
                class="relative inline-flex items-center justify-center p-4 px-7 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-zinc-400 rounded-full group md:mt-5 mt-1 dark:border-slate-100">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full text-zinc-200 duration-300 -translate-x-full bg-zinc-700 dark:bg-zinc-800 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-zinc-600 transition-all duration-300 transform group-hover:translate-x-full ease dark:text-white">Comenzar
                    </span>
                <span class="relative invisible dark:text-white">Comienza a aprender</span>
            </a>
        </div>
        <!--  -->
        <section
            class="w-full py-10 lg:px-10 bg-zinc-50 bg-opacity-90 dark:bg-zinc-900 dark:bg-opacity-90 backdrop-blur-lg">
            <div class="container mx-auto">
                <div class="sm:flex gap-10 items-center md:justify-center text-white">
                    <!-- item start -->
                    <div class="flex gap-4 items-center md:basis-1/5 md:my-0 my-5">
                        <div class="icon bg-gradient-to-br from-green-300 via-10% to-emerald-600 p-3 rounded-xl dark:bg-zinc-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            </svg>
                        </div>
                        <div class="text">
                            <h2 class="font-medium text-xl pb-3 md:pb-0 text-black dark:text-white">Facil de Comprender</h2>
                        </div>
                    </div>
                    <!-- item end -->
                    <!-- item start -->
                    <div class="flex gap-3 items-center md:basis-1/5 md:my-0 my-5">
                        <div class="icon icon bg-gradient-to-br from-orange-300 via-10% to-amber-600 p-3 rounded-xl dark:bg-zinc-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                            </svg>
                        </div>
                        <div class="text">
                            <h2 class="font-medium text-xl pb-3 md:pb-0 text-black dark:text-white">
                                Cursos Actualizados
                            </h2>
                        </div>
                    </div>
                    <!-- item end -->
                    <!-- item start -->
                    <div class="flex gap-3 items-center md:basis-1/5 md:my-0 my-5">
                        <div class="icon icon bg-gradient-to-br from-sky-300 via-10% to-blue-600 p-3 rounded-xl dark:bg-zinc-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                            </svg>
                        </div>
                        <div class="text">
                            <h2 class="font-medium text-xl pb-3 md:pb-0 text-black dark:text-white">Plaraforma Amigable</h2>
                        </div>
                    </div>
                    <!-- item end -->
                </div>
            </div>
        </section>
        <!--  -->
    </header>
    <!-- End Header / Hero Section -->



    <!-- Start Categories By Divisi Section -->
    <section id="categories">
        <div class="container mx-auto">
            <h2 class="font-bold text-3xl my-12 text-center dark:text-white">
                Enseñamos
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-2 items-center text-center mx-auto">
                @foreach ($categories as $number => $category)
                    <!-- Start Single Category Item -->
                    <a href="{{ route('category.show', $category->id) }}"
                        class="
                        @if ($number == 0 || $number == 3)
                            {{ 'bg-gradient-to-br from-sky-300 via-10% to-blue-600' }}
                        @elseif ($number == 1 || $number == 4)
                            {{ 'bg-gradient-to-br from-orange-300 via-10% to-amber-600 ' }}
                        @else
                            {{ 'bg-gradient-to-br from-green-300 via-10% to-emerald-600 ' }} @endif
                     transition basis-[45%] md:basis-[10.93%]  cursor-pointer rounded-lg mr-3 p-5 hover:opacity-75 group hover:-translate-y-2 h-full dark:bg-zinc-200">
                        <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-100">
                            <img src="{{ $category->photo }}" alt="" class="w-16 h-16" />
                        </div>
                        <h4 class="mt-4 mb-2 font-medium text-white">{{ $category->name }}</h4>
                        <p class="text-zinc-300 text-xs">{{ count($category->course) }} kursus</p>
                    </a>
                    <!-- End Single Category Item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Categories By Divisi Section -->

    <!-- Start New Courses Section -->
    <section id="courses">
        <div class="container mx-auto">
            <h2 class="font-bold text-3xl text-center my-12 dark:text-white">Cursos Recientes</h2>
            <div class="swiper swiper-container-2 slide-container py-3 px-10">
                <div class="swiper-wrapper">
                    @foreach ($latestCourse as $course)
                        <div class="swiper-slide">
                            <x-course-card :id="$course->id" :title="$course->title" :category="$course->category->name" :price="$course->price"
                                :count="count($course->lessons)" :photo="$course->photo" />
                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-next rounded-full bg-slate-100 nav-btn"></div>
                <div class="swiper-button-prev rounded-full bg-slate-100 nav-btn"></div>


            </div>
        </div>
    </section>
    <!-- End New Courses Section -->

    <!-- Start Popular Courses Section -->
    <section id="courses">
        <div class="container mx-auto">
            <h2 class="font-bold text-3xl text-center my-12 dark:text-white">Cursos Populares</h2>
            <div class="swiper swiper-container-2 slide-container py-3 px-10">
                <div class="swiper-wrapper ">
                    @foreach ($popularCourse as $course)
                        <div class="swiper-slide dark:bg-zinc-800">
                            <x-course-card :id="$course->id" :title="$course->title" :category="$course->category_name" :price="$course->price"
                                :count="count($course->lessons)" :photo="$course->photo" />
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next rounded-full bg-slate-100 nav-btn"></div>
                <div class="swiper-button-prev rounded-full bg-slate-100 nav-btn"></div>
            </div>
        </div>
    </section>
    <!-- End Popular Courses Section -->





{{--    start eventos section--}}
    <!-- resources/views/home.blade.php -->
    <section id="gallery" class="py-12">
        <div class="container mx-auto">
            <h2 class="font-bold text-3xl text-center my-9 dark:text-white">EVENTOS ODIN</h2>
            <h2 class="font-bold text-1xl text-center my-3 dark:text-white">¡no te pierdas el próximo!</h2>

            <div class="swiper swiper-container-2 slide-container py-3 px-10">
                <div class="swiper-wrapper">
                    @foreach ($gallery as $image)
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('assets/gallery/' . $image) }}" alt="{{ $image }}" class="w-full h-auto object-cover rounded-lg shadow-lg">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next rounded-full bg-slate-100 nav-btn"></div>
                <div class="swiper-button-prev rounded-full bg-slate-100 nav-btn"></div>
            </div>

        </div>
    </section>
{{--    end eventos section --}}














    <!-- Start FAQ Section -->
    <section id="faq">
        <div class="container mx-auto">
            <div class="flex justify-center items-start">
                <div class="w-full sm:w-10/12 md:w-1/2">
                    <h2 class="text-center font-semibold py-12 text-3xl dark:text-white">
                        Preguntas Frecuentes
                    </h2>
                    <ul class="flex flex-col">
                        <li class="bg-white my-2 shadow-md dark:bg-[#303150] rounded-lg"
                            x-data="accordion(1)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer dark:text-white">
                                <span>¿Hay algún costo para acceder a los cursos en esta plataforma?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 dark:text-blue-500 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all">
                                <p class="p-3 text-zinc-900 dark:text-white">
Dependiendo del tipo de curso que elijas, algunos cursos pueden requerir una tarifa de inscripción. Sin embargo, también ofrecemos varios cursos gratuitos para brindar un acceso educativo más inclusivo a todos los participantes.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-md dark:bg-[#303150] rounded-lg"
                            x-data="accordion(2)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer dark:text-white">
                                <span>¿Cómo puedo registrarme en el Laboratorio Odin?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 dark:text-blue-500 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab" :style="handleToggle()">
                                <p class="p-3 text-zinc-900 dark:text-white">
                                    Para registrarte, haz clic en el botón "Registrate" que se encuentra en la página principal. Completa el formulario de registro con la información requerida y sigue las instrucciones proporcionadas. Una vez que te hayas registrado exitosamente, podrás acceder a nuestros diversos cursos.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-md dark:bg-[#303150] rounded-lg"
                            x-data="accordion(3)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer dark:text-white">
                                <span>
                                    ¿Recibiré un certificado después de completar el curso?
                                </span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 dark:text-blue-500 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab" :style="handleToggle()">
                                <p class="p-3 text-zinc-900 dark:text-white">
                                    Sí, después de que hayas completado con éxito el curso, recibirás un certificado de éxito que podrás descargar directamente desde tu cuenta. Este certificado incluirá los detalles del curso y tus logros como prueba de tu participación.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Section -->

    <!-- Start Testimoni Section -->
    <section class="bg-slate-100 mt-20 dark:bg-[#303150] rounded-t-xl">
        <div class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:me-0 lg:pe-0 lg:ps-8 ">
            <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16 ">
                <div class="max-w-xl text-center mx-auto">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl dark:text-white">
                        Reseñas
                        <br class="hidden sm:block lg:hidden" />
                        de nuestros estudiantes
                    </h2>

                    <p class="mt-4 text-zinc-500 dark:text-white">
                        Aquí tienes los testimonios de usuarios que han completado algunos cursos.
                    </p>

                    <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                        <button
                            class="prev-button rounded-full border border-slate-600 p-3 text-slate-500 hover:bg-slate-600 hover:text-white">
                            <span class="sr-only">Previous Slide</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 w-5 rtl:rotate-180">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>

                        <button
                            class="next-button rounded-full border border-slate-600 p-3 text-slate-500 hover:bg-slate-600 hover:text-white">
                            <span class="sr-only">Next Slide</span>
                            <svg class="h-5 w-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="-mx-6 lg:col-span-2 lg:mx-0 rounded-xl overflow-hidden">
                    <div class="swiper-container !overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="flex flex-col justify-between bg-white dark:bg-[#1b1b36] p-12 h-96">
                                    <div>
                                        @for($i = 0; $i < 5; $i++)
                                        <div class="inline-flex gap-0.5 text-green-500">
                                            <!-- star -->
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                        @endfor

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-slate-800 sm:text-3xl dark:text-white ">
                                                Marco Raul Mamani Rodriguez
                                            </p>
                                            <p class="mt-4 leading-relaxed text-zinc-500">
                                                "Solo confiar en las clases no es suficiente. Con el Laboratorio odin, dejé el mundo de los videojuegos y comencé a aprender sobre desarrollo de apps, lo cual resultó ser divertido. Lo más importante es que Odin enseña conocimientos orientados al trabajo. Ahora, esto ha sido de gran ayuda en mi carrera."
                                            </p>
                                        </div>
                                    </div>

                                </blockquote>
                            </div>

                            <div class="swiper-slide">
                                <blockquote class="flex flex-col justify-between bg-white p-12 h-96 dark:bg-[#1b1b36]">
                                    <div>
                                        @for($i = 0; $i < 4; $i++)
                                        <div class="inline-flex gap-0.5 text-green-500">
                                            <!-- star -->
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                        @endfor

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-slate-800 sm:text-3xl dark:text-white ">
                                                Yoel Cristian Catacora Checalla
                                            </p>

                                            <p class="mt-4 leading-relaxed text-zinc-500">
                                                "He dedicado mi tiempo específicamente a aprender a programar. En en Laboratorio Odin, el aprendizaje es paso a paso, y su biblioteca está actualizada. Si hay errores, no me confundo. Aquí también aprendí a no programar al azar. Incluso mi CV ha mejorado. Ahora tengo más confianza en mí mismo."
                                            </p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>

                            <div class="swiper-slide">
                                <blockquote class="flex flex-col justify-between bg-white p-12 h-96 dark:bg-[#1b1b36]">
                                    <div>
                                        @for($i = 0; $i < 5; $i++)
                                            <div class="inline-flex gap-0.5 text-green-500">
                                                <!-- star -->
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        @endfor

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-slate-800 sm:text-3xl dark:text-white ">
                                                Daniel Cristian Ccopa Acero
                                            </p>

                                            <p class="mt-4 leading-relaxed text-zinc-500">
                                                "La formación es completa y práctica, proporcionando las herramientas y técnicas necesarias para manejar grandes volúmenes de datos de manera efectiva. Los instructores están muy capacitados y ofrecen soporte continuo, lo que facilita el aprendizaje. Además, el enfoque orientado al mercado laboral asegura que adquieras habilidades directamente aplicables a tu carrera."
                                            </p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-4 lg:hidden">
                <button aria-label="Previous slide"
                    class="prev-button rounded-full border border-slate-600 p-4 text-slate-500 hover:bg-slate-600 hover:text-white dark:border-slate-100 dark:text-white dark:hover:bg-slate-100 dark:hover:text-black">
                    <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>

                <button aria-label="Next slide"
                    class="next-button rounded-full border border-slate-600 p-4 text-slate-500 hover:bg-slate-600 hover:text-white dark:border-slate-100 dark:text-white dark:hover:bg-slate-100 dark:hover:text-black">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <!-- End Testimoni Section -->

    <!-- Start Mentor Section -->
    <section id="mentor" class="bg-cover bg-no-repeat"
        style="
 background-image: url('landingpage/images/heroimage.jpeg');
 background-position: center;">
        <div class="py-20 md:py-36 bg-black/50 md:px-40 px-10 backdrop-blur-md">
            <h2 class="font-bold md:text-4xl text-3xl text-center text-white">UNETE COMO MENTOR AL GRUPO DEL LABORATORIO ODIN</h2>

            <p class="text-center text-white pt-5 max-w-4xl mx-auto">Únete como mentor al grupo del Laboratorio Odin y comparte tu experiencia y conocimientos con nuestra comunidad. Como mentor, tendrás la oportunidad de guiar y apoyar a otros en su aprendizaje, contribuyendo al crecimiento y desarrollo de habilidades dentro de nuestro ambiente colaborativo. Tu participación no solo enriquecerá la experiencia de aprendizaje de nuestros miembros, sino que también te permitirá expandir tu red profesional y personal en un entorno dinámico y en constante evolución como el nuestro.
            </p>

            <div class="text-center mt-8">
                <a href="https://wa.me/6281247430546"
                    class="w-full px-6 py-3 rounded-lg ml-2 text-base font-medium align-middle bg-blue-600 text-white select-none sm:mb-0 sm:w-auto hover:bg-blue-800 focus-within:bg-blue-800 focus-within:border-blue-800">
                    Unete ya!
                </a>
            </div>

        </div>
        <!-- <div class="h-96"></div> -->

    </section>
    <!-- End Mentor Section -->
@endsection()
