@extends('layouts.home-layout')
@section('body')
    <section class="md:pt-14 pt-5 px-5">
        <div class="sm:px-10 md:px-14">
            <div class="pt-8 text-center">
                <p class="text-3xl font-bold text-blue-500 mb-1">Busqueda Rapida</p>
                <div class="gap-2">
                    <p class="text-xl mb-2 dark:text-white">Más buscado:
                        <a href="#">
                            <span
                                class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold hover:bg-[#FFF5EC]">programación web</span>
                        </a>
                        <a href="#">
                            <span
                                class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold hover:bg-[#FFF5EC]">programación de juegos</span>
                        </a>
                        <a href="#">
                            <span
                                class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold hover:bg-[#FFF5EC]">analista de datos</span>
                        </a>
                        <a href="#">
                            <span
                                class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold hover:bg-[#FFF5EC]">IoT</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class=" py-8">
                @php
                    $searchQuery = request()->get('search');
                @endphp
                @if (count($courses) === 0)
                    <div class="p-24 text-center">
                        <p class="text-xl font-semibold dark:text-white">
                            Lo siento, los resultados de{{ $searchQuery }} no se encontró. Intenta buscar con otras palabras clave 😊
                        </p>
                    </div>
                @else
                    <p class="py-8 text-xl font-semibold dark:text-white">
                        Hasil pencarian dari {{ $searchQuery }} ditemukan ({{ count($courses) }}).
                    </p>
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($courses as $course)
                            <x-course-card :id="$course->id" :title="$course->title" :category="$course->category->name" :price="$course->price"
                                :count="count($course->lessons)" :photo="$course->photo" />
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
