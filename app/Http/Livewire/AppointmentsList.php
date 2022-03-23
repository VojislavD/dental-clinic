<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Carbon\Carbon;
use Livewire\Component;

class AppointmentsList extends Component
{
    public $times = [
        '09:00 AM',
        '10:00 AM',
        '11:00 AM',
        '12:00 PM',
        '01:00 PM',
        '02:00 PM',
        '03:00 PM',
        '04:00 PM',
    ];
    
    public $day;

    public $state = [];

    public function mount()
    {
        $this->day = date('Y-m-d');
    }
    
    public function editAppointment(Appointment $appointment)
    {
        $this->state['first_name'] = $appointment->first_name;
        $this->state['last_name'] = $appointment->last_name;
        $this->state['email'] = $appointment->email;
        $this->state['phone'] = $appointment->phone;
        $this->state['date'] = $appointment->scheduled_at->format('Y-m-d');
        $this->state['time'] = $appointment->scheduled_at->format('H:i A');
    }

    public function submit()
    {
        dd('Submit');
    }

    public function render()
    {
        $appointments = Appointment::whereDay('scheduled_at', Carbon::parse($this->day))->get();

        return view('livewire.appointments-list', [
            'appointments' => $appointments
        ]);
    }
}
