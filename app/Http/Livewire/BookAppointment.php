<?php

namespace App\Http\Livewire;

use App\Contracts\Actions\CreatesAppointment;
use App\Models\Appointment;
use Carbon\Carbon;
use Livewire\Component;

class BookAppointment extends Component
{
    public $times = [
        '9:00 AM',
        '10:00 AM',
        '11:00 AM',
        '12:00 PM',
        '1:00 PM',
        '2:00 PM',
        '3:00 PM',
        '4:00 PM',
    ];

    public $availableTimes = [];

    public $state = [];

    public function mount()
    {
        $this->state['date'] = date('Y-m-d');

        $this->availableTimes = Appointment::query()
            ->whereDay('scheduled_at', Carbon::parse($this->state['date']))
            ->get('scheduled_at')
            ->map(function ($item) {
                return $item->scheduled_at->format('H:i A');
            })->toArray();
    }

    public function updatedStateDate()
    {
        $this->availableTimes = Appointment::query()
            ->whereDay('scheduled_at', Carbon::parse($this->state['date']))
            ->get('scheduled_at')
            ->map(function ($item) {
                return $item->scheduled_at->format('H:i A');
            })->toArray();
    }

    public function setTime($time)
    {
        $this->state['time'] = $time;
    }

    public function submit(CreatesAppointment $creator)
    {
        $creator($this->state);

        $this->reset('state');

        session()->flash('appointmentCreated', __('Appointment successfully created. Please be there 15 minutes before the scheduled appointment.'));
    }

    public function render()
    {
        return view('livewire.book-appointment');
    }
}
