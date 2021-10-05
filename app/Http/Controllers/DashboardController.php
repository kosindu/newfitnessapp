<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'fname' => 'kosindu',
            'lname' => 'nuwan'
        ];

        return Inertia::render('Dashboard/Index', $data);
    }

}
