<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/c473da0646.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>
        LABORATORIO ODIN
    </title>
</head>

<body class="antialiased text-blueGray-700">

    <noscript>You need to enable JavaScript to run this app.</noscript>
    <!-- Start Navbar -->
    <nav class="sticky top-0 z-50 p-4 bg-white shadow">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <!-- nav -->
                <div class="flex items-center justify-center text-slate-800">
                    <div class="relative inline-flex min-w-max">
                        <a href="/">
                            <img src="{{ asset('landingpage/images/logo_dl.png') }}" class="w-full h-12"
                                alt="" />
                        </a>
                    </div>

                </div>



                <!--  masuk, daftar -->
                <div class="flex pr-0 my-auto md:pr-5">
                    @if (Auth::user())
                        <!-- dropdown avatar -->
                        <div class="relative">

                            <div x-data="{ open: false }" class="flex inline-flex items-center w-full">
                                <!-- close -->
                                <div @click="open = !open" class="relative border-b-4 border-transparent ">
                                    <div class="flex items-center justify-center space-x-3 cursor-pointer">
                                        <div
                                            class="w-10 h-10 overflow-hidden border-2 rounded-full border-slate-800 hover:opacity-90">
                                            <img src="{{ asset('landingpage/images/course1.png') }}" alt=""
                                                class="object-cover w-full h-full">
                                        </div>
                                        <div class="mx-auto font-semibold text-slate-800">
                                            <div class="hidden cursor-pointer md:block">
                                                {{ Auth::user()->name }}
                                            </div>

                                        </div>
                                    </div>

                                    <!-- open -->
                                    <div x-show="open"
                                        class="absolute hidden py-2 mt-3 bg-white border shadow-md w-50 dark:border-transparent md:block"
                                        x-transition:enter="transition ease-out origin-top-left duration-200"
                                        x-transition:enter-start="opacity-0 transform scale-90"
                                        x-transition:enter-end="opacity-100 transform scale-100"
                                        x-transition:leave="transition origin-top-left ease-in duration-100"
                                        x-transition:leave-start="opacity-100 transform scale-100"
                                        x-transition:leave-end="opacity-0 transform scale-90">
                                        <!-- dropdown -->
                                        <ul class="list-none">

                                            <li>
                                                <a href="{{ route('dashboard') }}"
                                                    class="flex block gap-4 px-8 py-4 bg-white hover:bg-slate-50">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                        </path>
                                                    </svg>
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex block gap-4 px-8 py-4 bg-white hover:bg-slate-50">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                    </svg>
                                                    Configuración
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="mx-4 border-slate-200">
                                                <form action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                    <button
                                                        class="block bg-white hover:bg-slate-50 py-4 px-8 flex gap-4 hover:border-red-600 text-red-600 w-full type="submit">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                            </path>
                                                        </svg>
                                                        Salir
                                                    </button>
                                                </form>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- open mobile -->
                                <div x-show="open"
                                    class="absolute right-0 block mt-5 text-left bg-white shadow top-10 overflow-y md:hidden"
                                    x-transition:enter="transition ease-out origin-top-left duration-200"
                                    x-transition:enter-start="opacity-0 transform scale-90"
                                    x-transition:enter-end="opacity-100 transform scale-100"
                                    x-transition:leave="transition origin-top-left ease-in duration-100"
                                    x-transition:leave-start="opacity-100 transform scale-100"
                                    x-transition:leave-end="opacity-0 transform scale-90">
                                    <ul class="list-none">
                                        <li>
                                            <a href="{{ route('dashboard') }}"
                                                class="flex block gap-4 px-8 py-4 bg-white hover:bg-slate-50">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                    </path>
                                                </svg>
                                                Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""
                                                class="flex block gap-4 px-8 py-4 bg-white hover:bg-slate-50">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                                Configuración
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="mx-4 border-slate-200">
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button
                                                    class="block bg-white hover:bg-slate-50 py-4 px-8 flex gap-4 hover:border-red-600 text-red-600 w-full type="submit">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                        </path>
                                                    </svg>
                                                Salir
                                                </button>
                                            </form>
                                        </li>

                                    </ul>

                                </div>


                            </div>

                            <!-- button masuk -->
                        @else
                            <div class="relative hidden md:block">
                                <a href="{{ route('login') }}"
                                    class="inline-flex items-center w-full px-6 py-2 ml-2 text-base font-semibold align-middle bg-white border rounded-full select-none text-slate-800 border-slate-800 sm:mb-0 sm:w-auto hover:bg-slate-800 hover:text-white focus-within:bg-slate-800 focus-within:border-slate-800">
                                    Iniciar sesión
                                </a>
                            </div>


                            <!-- button daftar -->
                            <div class="relative hidden md:block">
                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center w-full px-6 py-2 ml-2 text-base font-semibold text-white align-middle border rounded-full select-none bg-slate-800 sm:mb-0 sm:w-auto hover:opacity-95">
                                    Registrarse
                                </a>
                            </div>
                    @endif

                </div>


            </div>
        </div>

    </nav>
    <!-- End Navbar -->
    <div id="root">
        {{-- Sidebar --}}
        <div
            class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-80">
            <div
                class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap">
                <button
                    class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
                    type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <i class="fas fa-bars"></i>
                </button>
                <p class="text-sm font-bold md:text-xl md:mt-24">{{ $course->title }}</p>

                <p class="hidden text-xs font-semibold text-gray-400 md:block">{{ $completed }} /
                    {{ $totalLessons }} Progress</p>
                <p class="hidden text-xs font-semibold text-gray-400 md:block">{{ $progressPercentage }}% Complete</p>
                <ul class="flex flex-wrap items-center list-none md:hidden">
                </ul>
                <div class="absolute top-0 left-0 right-0 z-40 items-center flex-1 hidden h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none"
                    id="example-collapse-sidebar">
                    <div class="block pb-4 mb-4 border-b border-solid md:min-w-full md:hidden border-blueGray-200">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <p class="font-semibold ">{{ $course->title }} </p>

                            </div>
                            <div class="flex justify-end w-6/12">
                                <button type="button"
                                    class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
                                    onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <ul class="flex flex-col list-none md:flex-col md:min-w-full">
                        @foreach ($lessons as $lesson)
                            <div class="flex flex-row">
                                <li class="items-center">
                                    <a href="{{ route('lesson.show', ['id' => $course->id, 'chapter' => $lesson->chapter]) }}"
                                        class="w-10/12 text-md   py-3  block duration-100
                                           {{ request()->routeIs('lesson.show') && request('id') == $course->id && request('chapter') == $lesson->chapter ? 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2 font-bold' : 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2' }}">
                                        Chapter {{ $lesson->chapter }} - {{ $lesson->title }}

                                    </a>

                                </li>
                                @role('member')
                                    @if ($lesson->pivot->status == true)
                                        <div class="flex items-center w-2/12 text-green-500"><i
                                                class="far fa-check-circle"></i>
                                        </div>
                                        {{-- @else
                                        <p class="w-1/4 text-red-500 uppercase">Belum Selesai</p> --}}
                                    @endif
                                    <hr class="mb-1">
                                @endrole
                            </div>
                        @endforeach
                    </ul>
                    <ul>
                        <li>


                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- EndSidebar --}}
        <div class="relative md:ml-80 md:px-12">

            @foreach ($lesson_detail as $item)
                <div class="w-full px-4 mx-auto mb-8 md:px-10">
                    <p class="p-4 text-xl font-semibold bg-white">{{ $item->chapter }} .
                        {{ $item->title }}</p>
                    <div class="flex flex-col items-center justify-center p-8 md:flex-row md:space-x-8">
                        <div class="relative w-full h-0" style="padding-bottom: 56.25%;">
                            <iframe class="absolute inset-0 object-cover w-full h-full"
                                src="https://youtube.com/embed/{{ $item->media_link }}" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="mt-2 leading-relaxed">{!! $item->text_content !!}</div>
                    </div>
                </div>

                <!-- Next button -->
                <div class="flex justify-end w-full px-4 mx-auto mb-8 md:px-10">
                    @if ($nextChapter)
                        <form action="{{ route('lesson.next', ['id' => $course->id, 'chapter' => $nextChapter]) }}"
                            method="post">
                            @csrf
                            <input hidden type="text" name="id_lesson" value="{{ $item->id }}">
                            <button type="submit"
                                class="px-10 py-2 font-bold text-white rounded bg-slate-800 hover:bg-blue-900">Next
                                Chapter</button>
                        </form>
                    @endif
                    @if ($lastChapter)
                            Ya está terminado
                    @endif
                </div>
            @endforeach
            {{-- <x-author_footer class="" /> --}}

            <hr>
            <div class="container mt-5">
                <div class="mb-10 ">
                    <h1 class="text-xl font-bold">Foro de discusión</h1>
                    <p class="text-gray-400">Únase a otros para discutir el material; las preguntas que haga serán respondidas por el mentor de inmediato</p>
                </div>
                {{-- @dd($comments) --}}
                @if (count($comments) == 0)
                    <h1 class="my-10 text-xl font-semibold text-center">Aún no hay discusiones sobre este material</h1>
                @else
                    @foreach ($comments as $comment)
                        {{-- <x-comment-section :name="$comment->user->name", :photo="$comment->user->photo", :comment="$comment->comment" :userId="$comment->user->id" /> --}}
                        <x-comment-section :id="$comment->id" :userId="$comment->user_id" :name="$comment->user->name" :photo="$comment->user->photo"
                            :comment="$comment->comment" :replyCount="$comment->lessonCommentReply"></x-comment-section>
                    @endforeach
                    <div class="mt-10">
                        {{ $comments->links() }}
                    </div>
                @endif

                <div id="comment-form" class="mt-5">

                    <form action="{{ route('comment.store') }}" method="post" class="flex items-end">
                        @csrf

                        @if (request()->get('replyTo'))
                            <input type="hidden" name="lesson_comment_id" value="{{ request()->get('replyTo') }}">



                            <label for="simple-search" class="sr-only">Buscar</label>
                            <div class="relative w-full -mb-3">
                                <div
                                    class="flex items-center justify-between px-2 py-1 mr-2 text-sm font-medium text-gray-800 bg-gray-100 rounded max-w-max dark:bg-gray-700 dark:text-gray-300">
                                    Responder comentarios {{ '@' . request()->get('name') }}
                                    <a href="{{ route('lesson.show', ['id' => $course->id, 'chapter' => $lesson_detail['0']->chapter]) . '#comment-form' }}"
                                        class="inline-flex items-center p-1 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-300">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </div>
                                <input type="text" id="simple-search" name="reply"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="tuliskan balasan anda..." required>
                            </div>

                            <button type="submit"
                                class="p-2.5 ml-2 -mb-3 text-sm font-medium text-white bg-slate-700 rounded-lg border border-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                                <i class="fa-regular fa-paper-plane" style="color: #ffffff;"></i>
                                <span class="sr-only">Buscar</span>
                            </button>
                        @else
                            <input type="hidden" name="lesson_id" value="{{ $id_lesson->id }}">

                            <label for="simple-search" class="sr-only">Buscar</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="fa-regular fa-message"></i>
                                </div>
                                <input type="text" id="simple-search" name="comment"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="tuliskan komentar anda..." required>
                            </div>

                            <button type="submit"
                                class="p-2.5 ml-2 text-sm font-medium text-white bg-slate-700 rounded-lg border border-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                                <i class="fa-regular fa-paper-plane" style="color: #ffffff;"></i>
                                <span class="sr-only">Buscar</span>
                            </button>
                        @endif

                    </form>

                </div>
            </div>
            <hr class="mt-5">

            <!-- Start Footer Section -->
            <footer class="bg-white">
                <div class="container py-16 mx-auto space-y-8 lg:space-y-16">
                    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 ">
                        <div>
                            <div class="h-8">
                                <img src="{{ asset('landingpage/images/odinwhite.png') }}" class="h-10 w-25"
                                    alt="" />
                            </div>
                            <p class="max-w-xs pt-3 mt-4 text-sm text-slate-500">
{{--                                <b>LABORATORIO ODIN</b>--}}
                                <br>
                                DIRECCIÓN: AVENIDA FLORAL 1153 – PUNO
                                DIRECCIÓN: AVENIDA EL SOL 329 – BARRIO BELLAVISTA – PUNO
                            </p>

                            <ul class="flex gap-6 mt-8">

                                <li>
                                    <a href="https://www.instagram.com/dnccsemarang/?hl=id" rel="noreferrer"
                                        target="_blank" class="text-gray-700 transition hover:opacity-75">
                                        <span class="sr-only">Instagram</span>

                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.youtube.com/channel/UCbGj3OU4Qq8KOgaY9zuyZsA"
                                        rel="noreferrer" target="_blank"
                                        class="text-gray-700 transition hover:opacity-75">
                                        <span class="sr-only">YouTube</span>

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                            viewBox="0 0 576 512">
                                            <path
                                                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                                        </svg>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://github.com/dnccsemarang" rel="noreferrer" target="_blank"
                                        class="text-gray-700 transition hover:opacity-75">
                                        <span class="sr-only">GitHub</span>

                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="grid grid-cols-2 gap-8 lg:col-span-2 md:grid-cols-3">
                            <!-- tentang kami -->
                            <div>
                                <p class="font-medium text-gray-900">Acerca de nosotros</p>

                                <ul class="mt-6 space-y-4 text-sm">
                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Comienza a aprender
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Ver todos los cursos
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Contactenos
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://dnccudinus.org/"
                                            class="text-gray-700 transition hover:opacity-75">
                                            PaginaWeb FINESI
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://dinus.ac.id/"
                                            class="text-gray-700 transition hover:opacity-75">
                                            Universidad Nacional del Altiplano
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- kategori -->
                            <div>
                                <p class="font-medium text-gray-900">Categorias</p>

                                <ul class="mt-6 space-y-4 text-sm">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('category.show', [$category->id]) }}"
                                                class="text-gray-700 transition hover:opacity-75">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- developer -->
                            <div>
                                <p class="font-medium text-gray-900">Equipo de Desarolladores</p>

                                <ul class="mt-6 space-y-4 text-sm">
                                    <li>
                                        <a href="https://github.com/yhparq"
                                            class="flex items-center text-sm text-gray-700 transition hover:opacity-75">
                                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Yhon Carlos Pari Q.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/MiAAAAW"
                                            class="flex items-center text-sm text-gray-700 transition hover:opacity-75">
                                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Hugo Ticona S.
                                        </a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="https://github.com/taliyameyswara"--}}
{{--                                            class="flex items-center text-sm text-gray-700 transition hover:opacity-75">--}}
{{--                                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24"--}}
{{--                                                aria-hidden="true">--}}
{{--                                                <path fill-rule="evenodd"--}}
{{--                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"--}}
{{--                                                    clip-rule="evenodd" />--}}
{{--                                            </svg>--}}
{{--                                            Taliya Meyswara--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://github.com/isnanramalia"--}}
{{--                                            class="flex items-center text-sm text-gray-700 transition hover:opacity-75">--}}
{{--                                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24"--}}
{{--                                                aria-hidden="true">--}}
{{--                                                <path fill-rule="evenodd"--}}
{{--                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"--}}
{{--                                                    clip-rule="evenodd" />--}}
{{--                                            </svg>--}}
{{--                                            Isna Nur Amalia--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p class="text-xs text-center text-gray-500">
                        &copy; 2023. Laboratorio Odin. Todos los derechos reservados
                    </p>
                </div>
            </footer>
            <!-- End Footer Section -->
        </div>



    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script>
        function enableFullscreen() {
            var iframe = document.querySelector('iframe');
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) { // Firefox
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari, Opera
                iframe.webkitRequestFullscreen();
            }
        }
    </script>


    <script>
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
                placement: "bottom-start"
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }
    </script>
</body>


</html>
