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

    /** @test */
    public function test_validation()
    {
        $appointment = Appointment::factory()->create([
            'scheduled_at' => today()->subDay()->addHours(9)
        ]);
        $appointmentSecond = Appointment::factory()->create([
            'scheduled_at' => today()->subDay()->addHours(8)
        ]);

        Livewire::test(AppointmentsList::class)
            ->call('editAppointment', $appointment)
            ->set('state.date', '')
            ->set('state.first_name', '')
            ->set('state.last_name', '')
            ->set('state.email', '')
            ->set('state.phone', '')
            ->call('submit')
            ->assertHasErrors([
                'date' => 'required',
                'date_and_time' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);

        Livewire::test(AppointmentsList::class)
            ->call('editAppointment', $appointment)
            ->set('state.date', $appointmentSecond->scheduled_at->format('Y-m-d'))
            ->set('state.time', $appointmentSecond->scheduled_at->format('H:i A'))
            ->set('state.first_name', 1)
            ->set('state.last_name', 1)
            ->set('state.email', 'notvalidemail')
            ->set('state.phone', 1)
            ->call('submit')
            ->assertHasErrors([
                'date_and_time' => 'unique',
                'first_name' => 'string',
                'last_name' => 'string',
                'email' => 'email',
                'phone' => 'string',
            ]);
        
        Livewire::test(AppointmentsList::class)
            ->call('editAppointment', $appointment)
            ->set('state.date', $appointment->scheduled_at->format('Y-m-d'))
            ->set('state.time', $appointment->scheduled_at->format('H:i A'))
            ->set('state.first_name', 'More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters.')
            ->set('state.last_name', 'More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. ')
            ->set('state.email', 'validemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255characters@example.com')
            ->set('state.phone', 'More than 15 characters')
            ->call('submit')
            ->assertHasErrors([
                'first_name' => 'max',
                'last_name' => 'max',
                'email' => 'max',
                'phone' => 'max',
            ]);

        Livewire::test(AppointmentsList::class)
            ->call('editAppointment', $appointment)
            ->set('state.date', $appointment->scheduled_at->format('Y-m-d'))
            ->set('state.time', $appointment->scheduled_at->format('H:i A'))
            ->set('state.first_name', 'John')
            ->set('state.last_name', 'Doe')
            ->set('state.email', 'johndoe@example.com')
            ->set('state.phone', '123456789')
            ->call('submit')
            ->assertHasNoErrors();
    }

    /** @test */
    public function test_update_appointment()
    {
        $appointment = Appointment::factory()->create([
            'scheduled_at' => today()->subDay()->addHours(9)
        ]);

        Livewire::test(AppointmentsList::class)
            ->call('editAppointment', $appointment)
            ->set('state.date', today()->addHours(10)->format('Y-m-d'))
            ->set('state.time', today()->addHours(10)->format('H:i A'))
            ->set('state.first_name', 'John')
            ->set('state.last_name', 'Doe')
            ->set('state.email', 'johndoe@example.com')
            ->set('state.phone', '123456789')
            ->call('submit')
            ->assertHasNoErrors();

        $this->assertDatabaseHas('appointments', [
            'id' => $appointment->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'phone' => '123456789',
            'scheduled_at' => today()->addHours(10)->format('Y-m-d H:i:00'),
        ]);
    }

    /** @test */
    public function test_delete_appointment()
    {
        $appointment = Appointment::factory()->create();

        Livewire::test(AppointmentsList::class)
            ->call('editAppointment', $appointment)
            ->call('delete')
            ->assertHasNoErrors();

        $this->assertDatabaseMissing('appointments', [
            'id' => $appointment->id,
        ]);
    }
}
