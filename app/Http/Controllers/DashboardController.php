<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('dashboard', [
            'customer' => Customer::query()->count(),
            'in_progress' => Customer::query()->where('status', 'progress')->count(),
            'in_done' => Customer::query()->where('status', 'done')->count(),
        ]);
    }
}
