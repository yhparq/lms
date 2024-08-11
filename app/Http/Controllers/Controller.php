<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static $menuSidebarauthor = [
        '/dashboard' => ['dashboard', 'fa-solid fa-chart-line'],
        '/course' => ['tus cursos', 'fa-solid fa-chalkboard'],
        '/course-create' => ['Añadir curso', 'fa-solid fa-person-chalkboard'],
        // '/member' => ['daftar transaksi', 'fa-solid fa-arrow-right-arrow-left'],
        // '/author/profile' => ['lihat profile', 'fa-solid fa-user'],
        '/profile' => ['perfil', 'fa-solid fa-user-pen'],
    ];

    public static $memberMenuSidebar = [
        '/dashboard' => ['dashboard', 'fa-solid fa-chart-line'],
        '/course' => ['tus cursos', 'fa-solid fa-chalkboard'],
        '/transaction' => ['lista de transacciones', 'fa-solid fa-arrow-right-arrow-left'],
        '/profile' => ['perfil', 'fa-solid fa-user-pen'],
    ];

    public static $menuSidebarAdmin = [
        '/dashboard' => ['Dashboard', 'fa-solid fa-chart-line'],
        '/users' => ['Usuario', 'fa-solid fa-chalkboard'],
        '/roles' => ['Roles', 'fa-solid fa-person-chalkboard'],
        '/category-admin' => ['Categorias', 'fa-solid fa-arrow-right-arrow-left'],
        '/course-admin' => ['Cursos', 'fa-solid fa-user'],
        '/admin-course' => ['cursos del usuario', 'fa-solid fa-user'],
        '/profile' => ['Perfil', 'fa-solid fa-user-pen'],
    ];
}
