<?php

namespace App\Providers;

use App\Actions\Appointments\CreateAppointment;
use App\Actions\Appointments\DeleteAppointment;
use App\Actions\Appointments\UpdateAppointment;
use App\Contracts\Actions\CreatesAppointment;
use App\Contracts\Actions\DeletesAppointment;
use App\Contracts\Actions\UpdatesAppointment;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        CreatesAppointment::class => CreateAppointment::class,
        UpdatesAppointment::class => UpdateAppointment::class,
        DeletesAppointment::class => DeleteAppointment::class,
    ];
}
