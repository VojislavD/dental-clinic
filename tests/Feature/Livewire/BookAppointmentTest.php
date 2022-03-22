<?php

namespace Tests\Feature\Livewire;

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
        Livewire::test('book-appointment')
            ->assertSeeInOrder([
                __('Choose Date:'),
                __('Choose time for an appointment:')
            ])
            ->set('state.date', '2022-03-22')
            ->set('state.time', '09:00 AM')
            ->assertSeeInOrder([
                __('Appointment will be scheduled at:'),
                '2022-03-22 09:00 AM'
            ]);
    }

    /** @test */
    public function test_create_appointment()
    {
        Livewire::test('book-appointment')
            ->set('state.date', '2022-03-22')
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
            'scheduled_at' => '2022-03-22 09:00:00'
        ]);

    }
}
