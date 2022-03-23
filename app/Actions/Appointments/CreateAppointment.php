<?php

namespace App\Actions\Appointments;

use App\Contracts\Actions\CreatesAppointment;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class CreateAppointment implements CreatesAppointment
{
    public function __invoke(array $input): void
    {
        $input['date_and_time'] = $input['date'] && $input['time'] 
            ? Carbon::parse($input['date'].' '.$input['time']) 
            : null;

        Validator::make($input, [
            'date' => ['required', 'after_or_equal:today'],
            'date_and_time' => ['required', 'unique:appointments,scheduled_at'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:15']
        ])->validate();

        Appointment::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'scheduled_at' => $input['date_and_time']
        ]);
    }
}