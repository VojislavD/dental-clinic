<?php

namespace App\Actions\Appointments;

use App\Contracts\Actions\UpdatesAppointment;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class UpdateAppointment implements UpdatesAppointment
{
    public function __invoke(Appointment $appointment, array $input): void
    {
        $input['date_and_time'] = $input['date'] 
            ? Carbon::parse($input['date'].' '.$input['time']) 
            : null;

        Validator::make($input, [
            'date' => ['required'],
            'date_and_time' => ['required', 'unique:appointments,scheduled_at,'.$appointment->id],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:15']
        ])->validate();

        $appointment->update([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'scheduled_at' => $input['date_and_time'],
        ]);
    }
}