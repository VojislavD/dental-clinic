<?php

namespace App\Actions\Appointments;

use App\Contracts\Actions\DeletesAppointment;
use App\Models\Appointment;

class DeleteAppointment implements DeletesAppointment
{
    public function __invoke(Appointment $appointment): void
    {
        $appointment->delete();
    }
}