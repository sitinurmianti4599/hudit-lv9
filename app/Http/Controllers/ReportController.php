<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Report;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use stdClass;

class ReportController extends Controller
{
    public function __invoke(Request $request)
    {
        $service_types = [];
        foreach (ServiceType::all() as $service_type) {
            $item = new stdClass();
            $item->name = $service_type->name;
            $item->count = Customer::query()
                ->where('status', 'done')
                ->where('service_type_id', $service_type->id)
                ->count();
            $service_types[] = $item;
        }
        return view('laporan', [
            "reports" => Report::all(),
            "service_types" => $service_types,
        ]);
    }
}
