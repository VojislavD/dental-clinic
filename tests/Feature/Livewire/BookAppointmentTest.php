<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\BookAppointment;
use App\Models\Appointment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class BookAppointmentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_component_shows_correct_info()
    {
        Livewire::test(BookAppointment::class)
            ->assertSeeInOrder([
                __('Choose Date:'),
                __('Choose time for an appointment:')
            ])
            ->set('state.date', today()->format('Y-m-d'))
            ->set('state.time', '09:00 AM')
            ->assertSeeInOrder([
                __('Appointment will be scheduled at:'),
                today()->format('Y-m-d').' 09:00 AM'
            ]);
    }

    /** @test */
    public function test_validation()
    {
        Livewire::test(BookAppointment::class)
            ->set('state.date', '')
            ->set('state.time', '')
            ->set('state.first_name', '')
            ->set('state.last_name', '')
            ->set('state.email', '')
            ->set('state.phone', '')
            ->call('submit')
            ->assertHasErrors([
                'date' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);

        Livewire::test(BookAppointment::class)
            ->set('state.date', today()->subDay()->format('Y-m-d'))
            ->set('state.time', '09:00 AM')
            ->set('state.first_name', 1)
            ->set('state.last_name', 1)
            ->set('state.email', 'notvalidemail')
            ->set('state.phone', 1)
            ->call('submit')
            ->assertHasErrors([
                'date' => 'after_or_equal',
                'first_name' => 'string',
                'last_name' => 'string',
                'email' => 'email',
                'phone' => 'string',
            ]);
        
        $appointment = Appointment::factory()->create([
            'scheduled_at' => '2022-03-22 10:00:00'
        ]);

        Livewire::test(BookAppointment::class)
            ->set('state.date', $appointment->scheduled_at->format('Y-m-d'))
            ->set('state.time', $appointment->scheduled_at->format('H:i A'))
            ->set('state.first_name', 'More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters.')
            ->set('state.last_name', 'More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters. More than 255 characters.')
            ->set('state.email', 'validemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255charactersvalidemailbutmorethan255characters@example.com')
            ->set('state.phone', 'More than 15 characters')
            ->call('submit')
            ->assertHasErrors([
                'date_and_time' => 'unique',
                'first_name' => 'max',
                'last_name' => 'max',
                'email' => 'max',
                'phone' => 'max',
            ]);

        Livewire::test(BookAppointment::class)
            ->set('state.date', today()->format('Y-m-d'))
            ->set('state.time', '09:00 AM')
            ->set('state.first_name', 'John')
            ->set('state.last_name', 'Doe')
            ->set('state.email', 'johndoe@example.com')
            ->set('state.phone', '123456789')
            ->call('submit')
            ->assertHasNoErrors();
    }

    /** @test */
    public function test_create_appointment()
    {
        Livewire::test(BookAppointment::class)
            ->set('state.date', today()->format('Y-m-d'))
            ->set('state.time', '09:00 AM')
            ->set('state.first_name', 'John')
            ->set('state.last_name', 'Doe')
            ->set('state.email', 'johndoe@example.com')
            ->set('state.phone', '123456789')
            ->call('submit')
            ->assertHasNoErrors();

        $this->assertDatabaseHas('appointments', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'phone' => '123456789',
            'scheduled_at' => today()->format('Y-m-d').' 09:00:00'
        ]);

    }
}
