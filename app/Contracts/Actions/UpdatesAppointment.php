<?php

namespace App\Contracts\Actions;

use App\Models\Appointment;

interface UpdatesAppointment
{
    public function __invoke(Appointment $appointment, array $input): void;
}