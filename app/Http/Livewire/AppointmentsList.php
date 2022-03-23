<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Carbon\Carbon;
use Livewire\Component;

class AppointmentsList extends Component
{
    public $day;

    public function mount()
    {
        $this->day = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.appointments-list', [
            'appointments' => Appointment::whereDay('scheduled_at', Carbon::parse($this->day))->get()
        ]);
    }
}
