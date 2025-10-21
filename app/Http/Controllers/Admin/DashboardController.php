<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Get counts
        // $teacherCount = (int) Teacher::count();
        // $studentCount = (int) Student::count();

        return Inertia::render('admin/dashboard', [
            'breadcrumbs' => [
                ['title' => 'Dashboard', 'href' => route('admin.dashboard')],
            ],
            // 'teacherCount' => $teacherCount,
            // 'studentCount' => $studentCount,
        ]);
    }
}
