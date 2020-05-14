<?php

namespace App\Observers;

use App\Models\Ramal;

class RamalObserver
{
    /**
     * Handle the Ramal "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function retrieved(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function creating(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function created(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function updating(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function updated(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function saving(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function saved(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function deleting(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function deleted(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function restoring(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the Ramal "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function restored(Ramal $ramal)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Ramal  $ramal
     * @return void
     */
    public function forceDeleted(Ramal $ramal)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Ramal;
use App\Observers\RamalObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Ramal::observe(RamalObserver::class);

... }

