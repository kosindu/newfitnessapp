<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function create()
    {
        return Inertia::render('Leads/LeadAdd');
    }

    public function store(Request $request)
    {
        $postData = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|date',
            'dob' => 'required',
        ]);

        Lead::create([
            'name' => $postData['name'],
            'email' => $postData['email'],
            'phone' => $postData['phone'],
            'dob' => $postData['dob'],
            'branch_id' => 1,
            'age' => 1,
            'added_by' => Auth::user()->id,
        ]);

        return redirect()->route('dashboard');
    }
}
