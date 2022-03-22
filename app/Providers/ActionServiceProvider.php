<?php

namespace App\Providers;

use App\Actions\Appointments\CreateAppointment;
use App\Contracts\Actions\CreatesAppointment;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        CreatesAppointment::class => CreateAppointment::class
    ];
}