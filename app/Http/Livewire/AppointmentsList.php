<?php

namespace App\Http\Livewire;

use App\Contracts\Actions\DeletesAppointment;
use App\Contracts\Actions\UpdatesAppointment;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class AppointmentsList extends Component
{
    public bool $showModal = false;

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
    
    public string $day;

    public Appointment $appointmentToUpdate;

    public array $state = [];

    public function mount(): void
    {
        $this->day = date('Y-m-d');
    }
    
    public function editAppointment(Appointment $appointment): void
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

    public function updatedStateDate(): void
    {
        $this->availableTimes = Appointment::query()
            ->whereDay('scheduled_at', Carbon::parse($this->state['date']))
            ->whereNot('id', $this->appointmentToUpdate->id)
            ->get('scheduled_at')
            ->map(function ($item) {
                return $item->scheduled_at->format('H:i A');
            })->toArray();
    }

    public function submit(UpdatesAppointment $updater): void
    {
        $updater($this->appointmentToUpdate, $this->state);

        $this->reset('state');

        $this->showModal = false;

        session()->flash('appointmentUpdated', __('Appointment successfully updated.'));
    }

    public function delete(DeletesAppointment $deleter): void
    {
        $deleter($this->appointmentToUpdate);

        $this->showModal = false;

        session()->flash('appointmentDeleted', __('Appointment successfully deleted.'));
    }

    public function render(): Renderable
    {
        $appointments = Appointment::whereDay('scheduled_at', Carbon::parse($this->day))->get();

        return view('livewire.appointments-list', [
            'appointments' => $appointments
        ]);
    }
}
