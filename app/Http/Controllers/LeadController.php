<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function lead()
    {
        return view('admin.Lead');
    }
    public function getData()
    {
        $datasets = Lead::all(['data', 'borderColor', 'fill'])->toArray();

        $data = [
            'data' => $chartData->pluck('value')->toArray(),
                    'borderColor' => '#3CFFC2',
                    'fill' => false,
            // 'datasets' => $datasets,
        ];

        return response()->json($data);
    }
}
