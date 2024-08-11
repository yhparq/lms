<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\UserCourse;
use Illuminate\Support\Facades\Redirect;

class AdminCourseController extends Controller
{
    public function index(){
        $AdminCourse = UserCourse::paginate(7);
        return view('admin.usercourse.index', compact('AdminCourse'));
    }

    public function indexAdmin(Category $category)
    {
        $menuSidebarAdmin = parent::$menuSidebarAdmin;
        view()->share('menu', $menuSidebarAdmin);
        $categories = $category->orderBy('name')->get();

        return view('admin.category.index', compact('categories'));
    }
    public function updateStatus(AdminCourse $adminCourse)
    {
        if ($adminCourse->payment_status == "sukses") {
            return Redirect::back()->with('message', 'Payment Already Updated');
        }
        $adminCourse->update([
            'payment_status' => "sukses"
        ]);

        return Redirect::back()->with('message', 'Payment Status Updated');
    }

}
