@extends('layouts.layout')

@section('body')
    <x-dashboard-sidebar :menu=$menu></x-dashboard-sidebar>
    <div class="relative md:ml-72 bg-blueGray-50">
        <div
            class="relative bg-gradient-to-bl from-sky-500 dark:from-indigo-600 via-20% to-blue-700 dark:to-indigo-950 rounded-b-xl shadow-lg  mb-10 py-10">
            {{-- <x-dashboard-header></x-dashboard-header> --}}
            <div class="mt-6 text-white px-auto md:pl-5">
                <h1 class="container text-4xl font-bold">Sus cursos</h1>
                <p class="container mt-2 font-thin">
                    Actualiza constantemente tus conocimientos y experiencias más recientes en el campo de la tecnología.
                </p>
            </div>
            <div class="items-center pt-5  md:pl-5">
                <form class="container flex items-center max-w-2xl" action="" method="GET">
                    <label for="simple-search" class="sr-only">Buscar</label>
                    <div class="relative w-full">
                        <input type="text" id="simple-search"
                            class="bg-white placeholder-white bg-opacity-40 border-none text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2 pr-20 p-2.5  "
                            placeholder="cari kursus..." name="search" required>
                    </div>
                    <button type="submit"
                        class="p-3 ml-2 text-sm font-medium text-white bg-white rounded-lg bg-opacity-40 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Buscar</span>
                    </button>
                </form>
                <div class="container flex items-center gap-3 mt-3 overflow-x-auto md:overflow-hidden">
                    <x-dropdown-button :sorts="$sorts" buttonColor="bg-white bg-opacity-40"
                        textColor="text-white">Ordenar</x-dropdown-button>
                    {{-- <x-dropdown-button :sorts="$categories" buttonColor="bg-white"
                        textColor="text-black">kategori</x-dropdown-button> --}}
                    <a href="?status=pass"
                        class="{{ request()->status == 'pass' ? 'bg-blue-400 text-white' : 'bg-white bg-opacity-40 text-white' }} focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                        type="button"> Completado
                    </a>
                    <a href="?status=ongoing"
                        class="{{ request()->status == 'ongoing' ? 'bg-blue-400 text-white' : 'bg-white bg-opacity-40 text-white' }} focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                        type="button"> En progreso
                    </a>
                </div>
            </div>
        </div>
        <div class="px-10 mx-auto">
            @if (request()->search != null && count($courses) == 0)
                <h1 class="mx-auto text-xl font-semibold text-center">El curso que busca no está disponible</h1>
                <a title="kembali ke daftar kursus" class="block mt-4 text-center" href="{{ route('course.index') }}"><i
                        class="fa-solid fa-arrow-left fa-xl"></i></a>
            @endif
            @if (request()->search == null && count($courses) == 0)
                <h1 class="mx-auto text-xl font-semibold text-center">Aún no tienes ningún curso</h1>
                <a class="block mt-2 text-lg text-center text-blue-600" href="{{ route('homepage') }}#categories">Adquirir curso</a>
            @endif
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($courses as $course)
                    <x-course-card :id="$course->id" :title="$course->title" :category="$course->category->name" :price="$course->price" :count="count($course->lessons)"
                        :photo="$course->photo" />
                @endforeach
            </div>

            <div class="max-w-xl mx-auto mt-6">
                @if (request()->search == null)
                    {{ $courses->onEachSide(1)->links() }}
                @endif
            </div>
            <x-dashboard-footer />
        </div>
    </div>

    <x-bottom-nav-bar :menu="$menu"></x-bottom-nav-bar>

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
        /* Make dynamic date appear */
        (function() {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
            }
        })();
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start",
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }
    </script>
@endsection
