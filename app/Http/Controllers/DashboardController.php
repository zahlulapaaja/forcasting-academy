<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Ganti dengan data dari database
        $stats = [
            ['label' => 'Active Projects', 'value' => '69'],
            ['label' => 'Professionals',   'value' => '357'],
            ['label' => 'Earnings (April)', 'value' => '$69,700', 'badge' => '2.2%'],
            ['label' => 'Avg. Rating',     'value' => '7.8', 'badge' => '/10', 'badge_type' => 'primary'],
        ];

        $projects = [
            ['name' => 'Mivy App',   'owner' => 'Jane Cooper',   'budget' => 32400,  'status' => 'In Process'],
            ['name' => 'Avionica',   'owner' => 'Esther Howard', 'budget' => 256910, 'status' => 'On Hold'],
            ['name' => 'Tower Hill', 'owner' => 'Cody Fisher',   'budget' => 74000,  'status' => 'Completed'],
        ];

        return view('dashboard.index', compact('stats', 'projects'));
    }
}
