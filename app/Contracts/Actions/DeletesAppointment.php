<?php

namespace App\Contracts\Actions;

use App\Models\Appointment;

interface DeletesAppointment
{
    public function __invoke(Appointment $appointment): void;
}