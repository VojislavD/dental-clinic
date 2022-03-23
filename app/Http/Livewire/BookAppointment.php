<?php

namespace App\Http\Livewire;

use App\Contracts\Actions\CreatesAppointment;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class BookAppointment extends Component
{
    public array $times = [
        '09:00 AM',
        '10:00 AM',
        '11:00 AM',
        '12:00 PM',
        '01:00 PM',
        '02:00 PM',
        '03:00 PM',
        '04:00 PM',
    ];

    public array $availableTimes = [];

    public array $state = [];

    public function mount(): void
    {
        $this->state['date'] = date('Y-m-d');

        $this->availableTimes = Appointment::query()
            ->whereDay('scheduled_at', Carbon::parse($this->state['date']))
            ->get('scheduled_at')
            ->map(function ($item) {
                return $item->scheduled_at->format('H:i A');
            })->toArray();
    }

    public function updatedStateDate(): void
    {
        $this->availableTimes = Appointment::query()
            ->whereDay('scheduled_at', Carbon::parse($this->state['date']))
            ->get('scheduled_at')
            ->map(function ($item) {
                return $item->scheduled_at->format('H:i A');
            })->toArray();
    }

    public function setTime(string $time): void
    {
        $this->state['time'] = $time;
    }

    public function submit(CreatesAppointment $creator): void
    {
        $creator($this->state);

        $this->reset('state');

        session()->flash('appointmentCreated', __('Appointment successfully created. Please be there 15 minutes before the scheduled appointment.'));
    }

    public function render(): Renderable
    {
        return view('livewire.book-appointment');
    }
}
