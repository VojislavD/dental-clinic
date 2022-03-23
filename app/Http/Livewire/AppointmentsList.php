<?php

namespace App\Http\Livewire;

use App\Contracts\Actions\DeletesAppointment;
use App\Contracts\Actions\UpdatesAppointment;
use App\Models\Appointment;
use Carbon\Carbon;
use Livewire\Component;

class AppointmentsList extends Component
{
    public $showModal = false;

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

    public $availableTimes = [];
    
    public $day;

    public Appointment $appointmentToUpdate;

    public $state = [];

    public function mount()
    {
        $this->day = date('Y-m-d');
    }
    
    public function editAppointment(Appointment $appointment)
    {
        $this->appointmentToUpdate = $appointment;
        $this->state['first_name'] = $appointment->first_name;
        $this->state['last_name'] = $appointment->last_name;
        $this->state['email'] = $appointment->email;
        $this->state['phone'] = $appointment->phone;
        $this->state['date'] = $appointment->scheduled_at->format('Y-m-d');
        $this->state['time'] = $appointment->scheduled_at->format('H:i A');

        $this->availableTimes = Appointment::query()
            ->whereDay('scheduled_at', Carbon::parse($this->state['date']))
            ->whereNot('id', $appointment->id)
            ->get('scheduled_at')
            ->map(function ($item) {
                return $item->scheduled_at->format('H:i A');
            })->toArray();
    }

    public function updatedStateDate()
    {
        $this->availableTimes = Appointment::query()
            ->whereDay('scheduled_at', Carbon::parse($this->state['date']))
            ->whereNot('id', $this->appointmentToUpdate->id)
            ->get('scheduled_at')
            ->map(function ($item) {
                return $item->scheduled_at->format('H:i A');
            })->toArray();
    }

    public function submit(UpdatesAppointment $updater)
    {
        $updater($this->appointmentToUpdate, $this->state);

        $this->reset('state');

        $this->showModal = false;

        session()->flash('appointmentUpdated', __('Appointment successfully updated.'));
    }

    public function delete(DeletesAppointment $deleter)
    {
        $deleter($this->appointmentToUpdate);

        $this->showModal = false;

        session()->flash('appointmentDeleted', __('Appointment successfully deleted.'));
    }

    public function render()
    {
        $appointments = Appointment::whereDay('scheduled_at', Carbon::parse($this->day))->get();

        return view('livewire.appointments-list', [
            'appointments' => $appointments
        ]);
    }
}
