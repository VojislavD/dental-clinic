<?php

namespace App\Contracts\Actions;

interface CreatesAppointment
{
    public function __invoke(array $input): void;
}