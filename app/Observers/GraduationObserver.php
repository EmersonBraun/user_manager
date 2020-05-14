<?php

namespace App\Observers;

use App\Models\Graduation;

class GraduationObserver
{
    /**
     * Handle the Graduation "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function retrieved(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function creating(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function created(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function updating(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function updated(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function saving(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function saved(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function deleting(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function deleted(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function restoring(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the Graduation "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function restored(Graduation $graduation)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return void
     */
    public function forceDeleted(Graduation $graduation)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Graduation;
use App\Observers\GraduationObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Graduation::observe(GraduationObserver::class);

... }

