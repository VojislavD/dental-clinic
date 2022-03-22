<?php

namespace App\Http\Livewire;

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

    public $state = [];

    public function mount()
    {
        $this->state['date'] = date('Y-m-d');
    }

    public function setTime($time)
    {
        $this->state['time'] = $time;
    }

    public function submit()
    {
        dd('Submit');
    }

    public function render()
    {
        return view('livewire.book-appointment');
    }
}
