<?php

namespace App\Observers;

use App\Models\Sector;

class SectorObserver
{
    /**
     * Handle the Sector "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function retrieved(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function creating(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function created(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function updating(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function updated(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function saving(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function saved(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function deleting(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function deleted(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function restoring(Sector $sector)
    {
        //
    }

    /**
     * Handle the Sector "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function restored(Sector $sector)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Sector  $sector
     * @return void
     */
    public function forceDeleted(Sector $sector)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Sector;
use App\Observers\SectorObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Sector::observe(SectorObserver::class);

... }

