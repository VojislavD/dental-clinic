<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\AppointmentsList;
use App\Models\Appointment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class AppointmentsListTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function test_component_show_correct_data()
    {
        $appointmantTodayFirst = Appointment::factory()->create([
            'scheduled_at' => today()->addHours(8)
        ]);

        $appointmantTodaySecond = Appointment::factory()->create([
            'scheduled_at' => today()->addHours(9)
        ]);

        $appointmantYesterday = Appointment::factory()->create([
            'scheduled_at' => today()->subDay()->addHours(9)
        ]);

        Livewire::test(AppointmentsList::class)
            ->assertSee(__('Appointments For'))
            ->assertSeeInOrder([
                $appointmantTodayFirst->fullname,
                $appointmantTodaySecond->fullname
            ])
            ->assertDontSee($appointmantYesterday->fullname)
            ->set('day', today()->subDay()->format('Y-m-d'))
            ->assertSee($appointmantYesterday->fullname)
            ->assertDontSee([
                $appointmantTodayFirst->fullname,
                $appointmantTodaySecond->fullname
            ])
            ->set('day', today()->addDay()->format('Y-m-d'))
            ->assertDontSee([
                $appointmantTodayFirst->fullname,
                $appointmantTodaySecond->fullname,
                $appointmantYesterday->fullname
            ]);
    }
}
