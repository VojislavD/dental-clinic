<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(): Renderable
    {
        $today = Appointment::whereDay('scheduled_at', today())->count();
        $week = Appointment::whereBetween('scheduled_at', [today()->startOfWeek(), today()->endOfWeek()])->count();
        $month = Appointment::whereBetween('scheduled_at', [today()->startOfMonth(), today()->endOfMonth()])->count();
        $appointmentsToday = Appointment::whereDay('scheduled_at', today())
            ->orderBy('scheduled_at')
            ->get();

        return view('admin.dashboard', [
            'today' => $today,
            'week' => $week,
            'month' => $month,
            'appointmentsToday' => $appointmentsToday
        ]);
    }
}
