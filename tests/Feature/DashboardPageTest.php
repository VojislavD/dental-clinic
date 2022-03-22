<?php

namespace Tests\Feature;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_page_shows_correct_data()
    {
        $appointmentFirst = Appointment::factory()->create([
            'scheduled_at' => today()->addHours(9)
        ]);

        $appointmentSecond = Appointment::factory()->create([
            'scheduled_at' => today()->addHours(8)
        ]);

        Appointment::factory()->create([
            'scheduled_at' => today()->subWeek()
        ]);
        
        Appointment::factory()->create([
            'scheduled_at' => today()->subMonth()
        ]);

        $response = $this->actingAs(User::factory()->create())
            ->get(route('dashboard'));

        $response->assertOk()
            ->assertViewIs('admin.dashboard')
            ->assertSeeInOrder([
                '2',
                __('Appointments Today'),
                '1',
                __('Appointments This Week'),
                '1',
                __('Appointments This Month'),
                $appointmentSecond->fullName,
                $appointmentFirst->fullName,
            ]);
    }
}
